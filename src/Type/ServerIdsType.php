<?php

namespace Flexsim\FlexnetOperations\Type;

class ServerIdsType
{

    /**
     * @var string
     */
    private $serverId;

    /**
     * Constructor
     *
     * @var string $serverId
     */
    public function __construct(string $serverId)
    {
        $this->serverId = $serverId;
    }

    /**
     * create a new instance of this class
     *
     * @var string $serverId
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
     * @param string $serverId
     * @return $this
     */
    public function setServerId($serverId)
    {
        $this->serverId = $serverId;
        return $this;
    }


}

