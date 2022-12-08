<?php

namespace Flexnet\LicenseService\Type;

class ServerIDsType
{
    /**
     * @var string
     */
    private $server1;

    /**
     * @var string|null
     */
    private $server2;

    /**
     * @var string|null
     */
    private $server3;

    /**
     * Constructor
     *
     * @param  string  $server1
     * @param  string|null  $server2
     * @param  string|null  $server3
     */
    public function __construct(string $server1, string|null $server2 = null, string|null $server3 = null)
    {
        $this->server1 = $server1;
        $this->server2 = $server2;
        $this->server3 = $server3;
    }

    /**
     * @param  string  $server1
     * @param  string|null  $server2
     * @param  string|null  $server3
     */
    public static function create(string $server1, string|null $server2 = null, string|null $server3 = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getServer1(): string
    {
        return $this->server1;
    }

    /**
     * @param  string  $server1
     * @return ServerIDsType
     */
    public function withServer1(string $server1): ServerIDsType
    {
        $new = clone $this;
        $new->server1 = $server1;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getServer2(): string|null
    {
        return $this->server2;
    }

    /**
     * @param  string|null  $server2
     * @return ServerIDsType
     */
    public function withServer2(string|null $server2): ServerIDsType
    {
        $new = clone $this;
        $new->server2 = $server2;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getServer3(): string|null
    {
        return $this->server3;
    }

    /**
     * @param  string|null  $server3
     * @return ServerIDsType
     */
    public function withServer3(string|null $server3): ServerIDsType
    {
        $new = clone $this;
        $new->server3 = $server3;

        return $new;
    }
}
