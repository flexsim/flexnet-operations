<?php

namespace Flexsim\FlexnetOperations\Type;

class DeletedSyncDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    private $serverIdentifier;

    /**
     * @var \DateTimeInterface
     */
    private $startTime;

    /**
     * @var \DateTimeInterface
     */
    private $endTime;

    /**
     * @var int
     */
    private $count;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $serverIdentifier
     * @var \DateTimeInterface $startTime
     * @var \DateTimeInterface $endTime
     * @var int $count
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DeviceIdentifier $serverIdentifier, \DateTimeInterface $startTime, \DateTimeInterface $endTime, int $count)
    {
        $this->serverIdentifier = $serverIdentifier;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->count = $count;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\DeviceIdentifier $serverIdentifier
     * @var \DateTimeInterface $startTime
     * @var \DateTimeInterface $endTime
     * @var int $count
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DeviceIdentifier $serverIdentifier, \DateTimeInterface $startTime, \DateTimeInterface $endTime, int $count)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeviceIdentifier
     */
    public function getServerIdentifier()
    {
        return $this->serverIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeviceIdentifier $serverIdentifier
     * @return $this
     */
    public function setServerIdentifier($serverIdentifier)
    {
        $this->serverIdentifier = $serverIdentifier;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param \DateTimeInterface $startTime
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param \DateTimeInterface $endTime
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }


}

