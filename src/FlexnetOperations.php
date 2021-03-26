<?php

namespace Flexsim\FlexnetOperations;

use Flexsim\FlexnetOperations\Clients\ServiceClient;

class FlexnetOperations
{
    public $url;

    public $username;

    public $password;

    public $options;

    protected $serviceClients = [];

    public function __construct(string $url, string $username, string $password, array $options = [])
    {
        $this->url = $url;
        $this->username = $username;
        $this->password = $password;
        $this->options = $options;
    }

    public function serviceClient($service)
    {
        if ($service instanceof ServiceClient) {
            $this->serviceClient[$service::class] = $service;
            return $this;
        }

        if (!array_key_exists($service, $this->soapClients)) {
            $this->createServiceClient($service);
        }

        return $this->soapClients[$service];
    }

    protected function createServiceClient($service)
    {
        $serviceClass = '\Flexsim\FlexnetOperations\\' . $service;
        $this->serviceClients[$service] = new $serviceClass($this->url, $this->username, $this->password, $this->getServiceClientOptions($service));
    }

    protected function getServiceClientOptions($service)
    {
        return array_merge($this->options['serviceOptions'], $this->options[$service]['serviceOptions']) ?? [];
    }
}
