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
     *
     * @param string $fulfillmentId
     * @param string $action
     * @param \DateTimeInterface $actionDate
     * @param \DateTimeInterface $actionDateTime
     * @param string $actionPerformedBy
     * @param bool $isPolicyOverridden
     * @param int $count
     * @param string $fulfillmentSource
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

    /**
     * @param string $fulfillmentId
     * @param string $action
     * @param \DateTimeInterface $actionDate
     * @param \DateTimeInterface $actionDateTime
     * @param string $actionPerformedBy
     * @param bool $isPolicyOverridden
     * @param int $count
     * @param string $fulfillmentSource
     */
    public static function create(string $fulfillmentId, string $action, \DateTimeInterface $actionDate, \DateTimeInterface $actionDateTime, string $actionPerformedBy, bool $isPolicyOverridden, int $count, string $fulfillmentSource)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getFulfillmentId() : string
    {
        return $this->fulfillmentId;
    }

    /**
     * @param string $fulfillmentId
     * @return FulfillmentHistoryRecordType
     */
    public function withFulfillmentId(string $fulfillmentId) : \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    /**
     * @return string
     */
    public function getAction() : string
    {
        return $this->action;
    }

    /**
     * @param string $action
     * @return FulfillmentHistoryRecordType
     */
    public function withAction(string $action) : \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType
    {
        $new = clone $this;
        $new->action = $action;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getActionDate() : \DateTimeInterface
    {
        return $this->actionDate;
    }

    /**
     * @param \DateTimeInterface $actionDate
     * @return FulfillmentHistoryRecordType
     */
    public function withActionDate(\DateTimeInterface $actionDate) : \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType
    {
        $new = clone $this;
        $new->actionDate = $actionDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getActionDateTime() : \DateTimeInterface
    {
        return $this->actionDateTime;
    }

    /**
     * @param \DateTimeInterface $actionDateTime
     * @return FulfillmentHistoryRecordType
     */
    public function withActionDateTime(\DateTimeInterface $actionDateTime) : \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType
    {
        $new = clone $this;
        $new->actionDateTime = $actionDateTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getActionPerformedBy() : string
    {
        return $this->actionPerformedBy;
    }

    /**
     * @param string $actionPerformedBy
     * @return FulfillmentHistoryRecordType
     */
    public function withActionPerformedBy(string $actionPerformedBy) : \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType
    {
        $new = clone $this;
        $new->actionPerformedBy = $actionPerformedBy;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsPolicyOverridden() : bool
    {
        return $this->isPolicyOverridden;
    }

    /**
     * @param bool $isPolicyOverridden
     * @return FulfillmentHistoryRecordType
     */
    public function withIsPolicyOverridden(bool $isPolicyOverridden) : \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType
    {
        $new = clone $this;
        $new->isPolicyOverridden = $isPolicyOverridden;

        return $new;
    }

    /**
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return FulfillmentHistoryRecordType
     */
    public function withCount(int $count) : \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType
    {
        $new = clone $this;
        $new->count = $count;

        return $new;
    }

    /**
     * @return string
     */
    public function getFulfillmentSource() : string
    {
        return $this->fulfillmentSource;
    }

    /**
     * @param string $fulfillmentSource
     * @return FulfillmentHistoryRecordType
     */
    public function withFulfillmentSource(string $fulfillmentSource) : \Flexnet\LicenseService\Type\FulfillmentHistoryRecordType
    {
        $new = clone $this;
        $new->fulfillmentSource = $fulfillmentSource;

        return $new;
    }
}

