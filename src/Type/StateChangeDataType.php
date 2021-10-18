<?php

namespace Flexsim\FlexnetOperations\Type;

class StateChangeDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $eventName;

    /**
     * @var \DateTimeInterface
     */
    protected $eventDate;

    /**
     * @var string
     */
    protected $userId;

    /**
     * @var string
     */
    protected $description;

    /**
     * Constructor
     *
     * @var string $eventName
     * @var \DateTimeInterface $eventDate
     * @var string $userId
     * @var string $description
     */
    public function __construct(string $eventName, \DateTimeInterface $eventDate, string $userId, string $description = null)
    {
        $this->eventName = $eventName;
        $this->eventDate = $eventDate;
        $this->userId = $userId;
        $this->description = $description;
    }

    /**
     * create a new instance of this class
     *
     * @var string $eventName
     * @var \DateTimeInterface $eventDate
     * @var string $userId
     * @var string $description
     */
    public static function create(string $eventName, \DateTimeInterface $eventDate, string $userId, string $description = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * @param string $eventName
     * @return $this
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * @param \DateTimeInterface $eventDate
     * @return $this
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
}
