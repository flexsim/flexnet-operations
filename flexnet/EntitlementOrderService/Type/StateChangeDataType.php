<?php

namespace Flexnet\EntitlementOrderService\Type;

class StateChangeDataType
{
    /**
     * @var string
     */
    private $eventName;

    /**
     * @var \DateTimeInterface
     */
    private $eventDate;

    /**
     * @var string
     */
    private $userId;

    /**
     * @var string|null
     */
    private $description;

    /**
     * Constructor
     *
     * @param  string  $eventName
     * @param  \DateTimeInterface  $eventDate
     * @param  string  $userId
     * @param  string|null  $description
     */
    public function __construct(string $eventName, \DateTimeInterface $eventDate, string $userId, string|null $description = null)
    {
        $this->eventName = $eventName;
        $this->eventDate = $eventDate;
        $this->userId = $userId;
        $this->description = $description;
    }

    /**
     * @param  string  $eventName
     * @param  \DateTimeInterface  $eventDate
     * @param  string  $userId
     * @param  string|null  $description
     */
    public static function create(string $eventName, \DateTimeInterface $eventDate, string $userId, string|null $description = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getEventName(): string
    {
        return $this->eventName;
    }

    /**
     * @param  string  $eventName
     * @return StateChangeDataType
     */
    public function withEventName(string $eventName): StateChangeDataType
    {
        $new = clone $this;
        $new->eventName = $eventName;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEventDate(): \DateTimeInterface
    {
        return $this->eventDate;
    }

    /**
     * @param  \DateTimeInterface  $eventDate
     * @return StateChangeDataType
     */
    public function withEventDate(\DateTimeInterface $eventDate): StateChangeDataType
    {
        $new = clone $this;
        $new->eventDate = $eventDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @param  string  $userId
     * @return StateChangeDataType
     */
    public function withUserId(string $userId): StateChangeDataType
    {
        $new = clone $this;
        $new->userId = $userId;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getDescription(): string|null
    {
        return $this->description;
    }

    /**
     * @param  string|null  $description
     * @return StateChangeDataType
     */
    public function withDescription(string|null $description): StateChangeDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }
}
