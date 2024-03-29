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
     */
    public function __construct(string $eventName, \DateTimeInterface $eventDate, string $userId, string $description = null)
    {
        $this->eventName = $eventName;
        $this->eventDate = $eventDate;
        $this->userId = $userId;
        $this->description = $description;
    }

    public static function create(string $eventName, \DateTimeInterface $eventDate, string $userId, string $description = null)
    {
        return new static(...\func_get_args());
    }

    public function getEventName(): string
    {
        return $this->eventName;
    }

    public function withEventName(string $eventName): StateChangeDataType
    {
        $new = clone $this;
        $new->eventName = $eventName;

        return $new;
    }

    public function getEventDate(): \DateTimeInterface
    {
        return $this->eventDate;
    }

    public function withEventDate(\DateTimeInterface $eventDate): StateChangeDataType
    {
        $new = clone $this;
        $new->eventDate = $eventDate;

        return $new;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function withUserId(string $userId): StateChangeDataType
    {
        $new = clone $this;
        $new->userId = $userId;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): StateChangeDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }
}
