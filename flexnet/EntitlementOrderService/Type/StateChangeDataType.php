<?php

namespace Flexnet\EntitlementOrderService\Type;

class StateChangeDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\StateChangeEventType
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
    public function __construct(\Flexnet\EntitlementOrderService\Type\StateChangeEventType $eventName, \DateTimeInterface $eventDate, string $userId, ?string $description = null)
    {
        $this->eventName = $eventName;
        $this->eventDate = $eventDate;
        $this->userId = $userId;
        $this->description = $description;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\StateChangeEventType $eventName, \DateTimeInterface $eventDate, string $userId, ?string $description = null)
    {
        return new static(...\func_get_args());
    }

    public function getEventName(): \Flexnet\EntitlementOrderService\Type\StateChangeEventType
    {
        return $this->eventName;
    }

    public function withEventName(\Flexnet\EntitlementOrderService\Type\StateChangeEventType $eventName): \Flexnet\EntitlementOrderService\Type\StateChangeDataType
    {
        $new = clone $this;
        $new->eventName = $eventName;

        return $new;
    }

    public function getEventDate(): \DateTimeInterface
    {
        return $this->eventDate;
    }

    public function withEventDate(\DateTimeInterface $eventDate): \Flexnet\EntitlementOrderService\Type\StateChangeDataType
    {
        $new = clone $this;
        $new->eventDate = $eventDate;

        return $new;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function withUserId(string $userId): \Flexnet\EntitlementOrderService\Type\StateChangeDataType
    {
        $new = clone $this;
        $new->userId = $userId;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): \Flexnet\EntitlementOrderService\Type\StateChangeDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }
}
