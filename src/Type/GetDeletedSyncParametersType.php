<?php

namespace Flexsim\FlexnetOperations\Type;

class GetDeletedSyncParametersType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    private $startTime;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    private $endTime;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType
     */
    private $serverUniqueId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $serverId;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType $startTime
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType $endTime
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $serverUniqueId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $serverId
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DateTimeQueryType $startTime = null, \Flexsim\FlexnetOperations\Type\DateTimeQueryType $endTime = null, \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $serverUniqueId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $serverId = null)
    {
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->serverUniqueId = $serverUniqueId;
        $this->serverId = $serverId;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType $startTime
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType $endTime
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $serverUniqueId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $serverId
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DateTimeQueryType $startTime = null, \Flexsim\FlexnetOperations\Type\DateTimeQueryType $endTime = null, \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $serverUniqueId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $serverId = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateTimeQueryType $startTime
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateTimeQueryType $endTime
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ExternalIdQueryType
     */
    public function getServerUniqueId()
    {
        return $this->serverUniqueId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $serverUniqueId
     * @return $this
     */
    public function setServerUniqueId($serverUniqueId)
    {
        $this->serverUniqueId = $serverUniqueId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getServerId()
    {
        return $this->serverId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $serverId
     * @return $this
     */
    public function setServerId($serverId)
    {
        $this->serverId = $serverId;
        return $this;
    }


}

