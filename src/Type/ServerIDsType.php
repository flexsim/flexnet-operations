<?php

namespace Flexsim\FlexnetOperations\Type;

class ServerIDsType extends FlexnetType
{

    /**
     * @var string
     */
    protected $server1;

    /**
     * @var string
     */
    protected $server2;

    /**
     * @var string
     */
    protected $server3;

    /**
     * Constructor
     *
     * @var string $server1
     * @var string $server2
     * @var string $server3
     */
    public function __construct(string $server1, string $server2 = null, string $server3 = null)
    {
        $this->server1 = $server1;
        $this->server2 = $server2;
        $this->server3 = $server3;
    }

    /**
     * create a new instance of this class
     *
     * @var string $server1
     * @var string $server2
     * @var string $server3
     */
    public static function create(string $server1, string $server2 = null, string $server3 = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getServer1()
    {
        return $this->server1;
    }

    /**
     * @param string $server1
     * @return $this
     */
    public function setServer1($server1)
    {
        $this->server1 = $server1;
        return $this;
    }

    /**
     * @return string
     */
    public function getServer2()
    {
        return $this->server2;
    }

    /**
     * @param string $server2
     * @return $this
     */
    public function setServer2($server2)
    {
        $this->server2 = $server2;
        return $this;
    }

    /**
     * @return string
     */
    public function getServer3()
    {
        return $this->server3;
    }

    /**
     * @param string $server3
     * @return $this
     */
    public function setServer3($server3)
    {
        $this->server3 = $server3;
        return $this;
    }
}
