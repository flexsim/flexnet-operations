<?php

namespace Flexsim\FlexnetOperations\Type;

class ServerIdsType extends FlexnetType
{
    /**
     * @var string
     */
    protected $serverId;

    /**
     * Constructor
     *
     * @param  string  $serverId
     */
    public function __construct(string $serverId)
    {
        $this->serverId = $serverId;
    }

    /**
     * create a new instance of this class
     *
     * @param  string  $serverId
     */
    public static function create(string $serverId)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getServerId()
    {
        return $this->serverId;
    }

    /**
     * @param  string  $serverId
     * @return $this
     */
    public function setServerId($serverId)
    {
        $this->serverId = $serverId;

        return $this;
    }
}
