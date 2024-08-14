<?php

namespace Flexnet\LicenseService\Type;

class FulfillmentHistoryRecordType
{
    /**
     * @var string
     */
    private $fulfillmentId;

    /**
     * @var string
     */
    private $action;

    /**
     * @var \DateTimeInterface
     */
    private $actionDate;

    /**
     * @var \DateTimeInterface
     */
    private $actionDateTime;

    /**
     * @var string
     */
    private $actionPerformedBy;

    /**
     * @var bool
     */
    private $isPolicyOverridden;

    /**
     * @var int
     */
    private $count;

    /**
     * @var string
     */
    private $fulfillmentSource;

    /**
     * Constructor
     */
    public function __construct(string $fulfillmentId, string $action, \DateTimeInterface $actionDate, \DateTimeInterface $actionDateTime, string $actionPerformedBy, bool $isPolicyOverridden, int $count, string $fulfillmentSource)
    {
        $this->fulfillmentId = $fulfillmentId;
        $this->action = $action;
        $this->actionDate = $actionDate;
        $this->actionDateTime = $actionDateTime;
        $this->actionPerformedBy = $actionPerformedBy;
        $this->isPolicyOverridden = $isPolicyOverridden;
        $this->count = $count;
        $this->fulfillmentSource = $fulfillmentSource;
    }

    public static function create(string $fulfillmentId, string $action, \DateTimeInterface $actionDate, \DateTimeInterface $actionDateTime, string $actionPerformedBy, bool $isPolicyOverridden, int $count, string $fulfillmentSource)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillmentId(): string
    {
        return $this->fulfillmentId;
    }

    public function withFulfillmentId(string $fulfillmentId): \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function withAction(string $action): \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType
    {
        $new = clone $this;
        $new->action = $action;

        return $new;
    }

    public function getActionDate(): \DateTimeInterface
    {
        return $this->actionDate;
    }

    public function withActionDate(\DateTimeInterface $actionDate): \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType
    {
        $new = clone $this;
        $new->actionDate = $actionDate;

        return $new;
    }

    public function getActionDateTime(): \DateTimeInterface
    {
        return $this->actionDateTime;
    }

    public function withActionDateTime(\DateTimeInterface $actionDateTime): \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType
    {
        $new = clone $this;
        $new->actionDateTime = $actionDateTime;

        return $new;
    }

    public function getActionPerformedBy(): string
    {
        return $this->actionPerformedBy;
    }

    public function withActionPerformedBy(string $actionPerformedBy): \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType
    {
        $new = clone $this;
        $new->actionPerformedBy = $actionPerformedBy;

        return $new;
    }

    public function getIsPolicyOverridden(): bool
    {
        return $this->isPolicyOverridden;
    }

    public function withIsPolicyOverridden(bool $isPolicyOverridden): \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType
    {
        $new = clone $this;
        $new->isPolicyOverridden = $isPolicyOverridden;

        return $new;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function withCount(int $count): \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType
    {
        $new = clone $this;
        $new->count = $count;

        return $new;
    }

    public function getFulfillmentSource(): string
    {
        return $this->fulfillmentSource;
    }

    public function withFulfillmentSource(string $fulfillmentSource): \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType
    {
        $new = clone $this;
        $new->fulfillmentSource = $fulfillmentSource;

        return $new;
    }
}
