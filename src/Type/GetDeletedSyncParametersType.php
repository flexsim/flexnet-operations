<?php

namespace Flexsim\FlexnetOperations\Type;

class GetDeletedSyncParametersType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    protected $startTime;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    protected $endTime;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ExternalIdQueryType
     */
    protected $serverUniqueId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $serverId;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\DateTimeQueryType $startTime
     * @param \Flexsim\FlexnetOperations\Type\DateTimeQueryType $endTime
     * @param \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $serverUniqueId
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $serverId
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
     * @param \Flexsim\FlexnetOperations\Type\DateTimeQueryType $startTime
     * @param \Flexsim\FlexnetOperations\Type\DateTimeQueryType $endTime
     * @param \Flexsim\FlexnetOperations\Type\ExternalIdQueryType $serverUniqueId
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $serverId
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
