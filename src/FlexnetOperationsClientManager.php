<?php

namespace Flexsim\FlexnetOperations;

use Illuminate\Support\Arr;
use InvalidArgumentException;

abstract class FlexnetOperationsClientManager
{
    /**
     * The application instance.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected $app;

    /**
     * The active client instances.
     *
     * @var array
     */
    protected $clients = [];

    /**
     * The connection that is currently in use
     * 
     * @var string
     */
    protected $activeConnection;

    /**
     * The service version that is currently in use
     * 
     * @var string
     */
    protected $activeVersion;

    /**
     * Create a new database manager instance.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @return void
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

    /**
     * Return the service client 
     * 
     * @return mixed
     */
    public function client()
    {
        $connection = $this->activeConnection();

        $version = $this->activeVersion();

        if (!Arr::has($this->clients, $clientDot = implode('.', [$connection, $version]))) {
            $this->createClient($connection, $version);
        }

        // if a client is returned reset the active connection and version
        $this->activeConnection = $this->activeVersion = null;

        return Arr::get($this->clients, $clientDot);
    }

    /**
     * retrieve the connection for the current call to client()
     * 
     * @return string
     */
    protected function activeConnection()
    {
        return $this->activeConnection ?? $this->getDefaultConnection();
    }

    /**
     * retrieve the version for the current call to client()
     * 
     * @return string
     */
    protected function activeVersion()
    {
        return $this->activeVersion ?? $this->getDefaultVersion($this->activeConnection());
    }

    /**
     * create a new service client for the specified connection and version
     * 
     * @param string $connection the name of the connection to use
     * @param string $version the version of the service to use
     */
    protected function createClient($connection, $version)
    {
        $config = $this->configuration($connection);

        $wsdl = $this->createWsdlPath($config);

        $factoryClass = $this->getFactoryClass($version);

        $client = $factoryClass::factory($wsdl, $config['user'], $config['password']);

        $this->clients[$connection][$version] = $client;
    }

    /**
     * Get the configuration for a connection.
     *
     * @param  string  $name
     * @return array
     *
     * @throws \InvalidArgumentException
     */
    protected function configuration($connection)
    {
        $connection = $connection ?: $this->getDefaultConnection();

        // To get the flexnet connection configuration, we will just pull each of the
        // connection configurations and get the configurations for the given name.
        // If the configuration doesn't exist, we'll throw an exception and bail.
        $connections = $this->app['config']['flexnet-operations.connections'];

        if (is_null($config = Arr::get($connections, $connection))) {
            throw new InvalidArgumentException("Flexnet Operations connection [{$connection}] not configured.");
        }

        $config['services'] = array_merge($this->app['config']['flexnet-operations.services'], $config['services'] ?? []);

        $this->validateConfig($config, $connection);

        return $config;
    }

    /** 
     * Validate the configuration for the connection
     * 
     * @param array $config
     * 
     * @throws \InvalidArgumentException
     */
    protected function validateConfig($config, $connection)
    {
        if (is_null($config['user'])) {
            throw new InvalidArgumentException("Flexnet Operations connection [{$connection}] cannot have a null user");
        }

        if (is_null($config['password'])) {
            throw new InvalidArgumentException("Flexnet Operations connection [{$connection}] cannot have a null password");
        }
    }

    /**
     * return the wsdl path generated from the config
     * 
     * @param array $config the configuration for a specific connection
     * 
     * @return string
     */
    protected function createWsdlPath($config)
    {
        return ($config['scheme'] ? $config['scheme'] . '://' : '') . $config['domain'] . $config['uri'] .
            (($activeVersion = $this->activeVersion()) == 'base'
                ? ''
                : '/' . $activeVersion)
            . '/' . $this->getServiceName() . '?wsdl';
    }

    /**
     * return the path to the service client factory for a specific version of a service
     * 
     * @param string $version the version of the service to use
     * 
     * @return string
     */
    protected function getFactoryClass($version)
    {
        $class = $this->getServiceNamespace() .
            ($version == 'base'
                ? ''
                : '\\' . $version)
            . '\\' . $this->getServiceName() . 'ClientFactory';
        return $class;
    }

    /**
     * Set the upcoming flexnet operation instance
     *
     * @param  string|null  $name
     * @return \Flexsim\FlexnetOperations\FlexnetOperationsManager
     */
    public function connection($name = null)
    {
        $this->activeConnection = $name;

        return $this;
    }

    /**
     * Set the upcoming flexnet operation service version
     *
     * @param  string|null  $version
     * @return \Flexsim\FlexnetOperations\FlexnetOperationsManager
     */
    public function version($version = null)
    {
        $this->activeVersion = $version;

        return $this;
    }

    /**
     * Get the default connection name.
     *
     * @return string
     */
    public function getDefaultConnection()
    {
        return $this->app['config']['flexnet-operations.default'];
    }

    /**
     * Set the default connection name.
     *
     * @param  string  $name
     * @return void
     */
    public function setDefaultConnection($name)
    {
        $this->app['config']['flexnet-operations.default'] = $name;
    }

    /**
     * Get the default version of this service
     *
     * @return string
     */
    public function getDefaultVersion($connection = null)
    {
        $connection = $connection ?? $this->getDefaultConnection();

        return Arr::get($this->configuration($connection), "services.{$this->getServiceName()}");
    }

    /**
     * Set the default version of this service
     *
     * @param  string  $name
     * @return void
     */
    public function setDefaultVersion($version, $connection = null)
    {
        $connection = $connection ?? $this->getDefaultConnection();

        $this->app['config']["flexnet-operations.{$connection}.services.{$this->getServiceName()}"] = $version;
    }

    /**
     * get the service client name
     *
     * @return string 
     */
    protected function getServiceName()
    {
        $serviceNamespaceArray = explode('\\', $this->getServiceNamespace());
        return end($serviceNamespaceArray);
    }

    /**
     * get the service client namespace
     *
     * @return string 
     */
    abstract protected function getServiceNamespace();

    /**
     * Return all of the created clients.
     *
     * @return array
     */
    public function getClients()
    {
        return $this->clients;
    }

    /**
     * Dynamically pass methods to the service client.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        return $this->serviceClient()->$method(...$parameters);
    }
}
