<?php

namespace Flexsim\FlexnetOperations\Type;

class FulfillmentHistoryRecordType extends FlexnetType
{

    /**
     * @var string
     */
    protected $fulfillmentId;

    /**
     * @var string
     */
    protected $action;

    /**
     * @var \DateTimeInterface
     */
    protected $actionDate;

    /**
     * @var \DateTimeInterface
     */
    protected $actionDateTime;

    /**
     * @var string
     */
    protected $actionPerformedBy;

    /**
     * @var bool
     */
    protected $isPolicyOverridden;

    /**
     * @var int
     */
    protected $count;

    /**
     * @var string
     */
    protected $fulfillmentSource;

    /**
     * Constructor
     *
     * @var string $fulfillmentId
     * @var string $action
     * @var \DateTimeInterface $actionDate
     * @var \DateTimeInterface $actionDateTime
     * @var string $actionPerformedBy
     * @var bool $isPolicyOverridden
     * @var int $count
     * @var string $fulfillmentSource
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
     * create a new instance of this class
     *
     * @var string $fulfillmentId
     * @var string $action
     * @var \DateTimeInterface $actionDate
     * @var \DateTimeInterface $actionDateTime
     * @var string $actionPerformedBy
     * @var bool $isPolicyOverridden
     * @var int $count
     * @var string $fulfillmentSource
     */
    public static function create(string $fulfillmentId, string $action, \DateTimeInterface $actionDate, \DateTimeInterface $actionDateTime, string $actionPerformedBy, bool $isPolicyOverridden, int $count, string $fulfillmentSource)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getFulfillmentId()
    {
        return $this->fulfillmentId;
    }

    /**
     * @param string $fulfillmentId
     * @return $this
     */
    public function setFulfillmentId($fulfillmentId)
    {
        $this->fulfillmentId = $fulfillmentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     * @return $this
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getActionDate()
    {
        return $this->actionDate;
    }

    /**
     * @param \DateTimeInterface $actionDate
     * @return $this
     */
    public function setActionDate($actionDate)
    {
        $this->actionDate = $actionDate;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getActionDateTime()
    {
        return $this->actionDateTime;
    }

    /**
     * @param \DateTimeInterface $actionDateTime
     * @return $this
     */
    public function setActionDateTime($actionDateTime)
    {
        $this->actionDateTime = $actionDateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getActionPerformedBy()
    {
        return $this->actionPerformedBy;
    }

    /**
     * @param string $actionPerformedBy
     * @return $this
     */
    public function setActionPerformedBy($actionPerformedBy)
    {
        $this->actionPerformedBy = $actionPerformedBy;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPolicyOverridden()
    {
        return $this->isPolicyOverridden;
    }

    /**
     * @param bool $isPolicyOverridden
     * @return $this
     */
    public function setIsPolicyOverridden($isPolicyOverridden)
    {
        $this->isPolicyOverridden = $isPolicyOverridden;
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

    /**
     * @return string
     */
    public function getFulfillmentSource()
    {
        return $this->fulfillmentSource;
    }

    /**
     * @param string $fulfillmentSource
     * @return $this
     */
    public function setFulfillmentSource($fulfillmentSource)
    {
        $this->fulfillmentSource = $fulfillmentSource;
        return $this;
    }
}
