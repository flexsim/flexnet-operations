<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetFulfillmentHistoryRequestType implements RequestInterface
{

    /**
     * @var string
     */
    private $activationId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $fulfillmentId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $userId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType
     */
    private $count;

    /**
     * @var bool
     */
    private $policyOverridden;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    private $actionDateTime;

    /**
     * @var string
     */
    private $lifeCycleAction;

    /**
     * @var string
     */
    private $fulfillmentSource;

    /**
     * @var int
     */
    private $pageNumber;

    /**
     * @var int
     */
    private $batchSize;

    /**
     * Constructor
     *
     * @var string $activationId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $fulfillmentId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $userId
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType $count
     * @var bool $policyOverridden
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType $actionDateTime
     * @var string $lifeCycleAction
     * @var string $fulfillmentSource
     * @var int $pageNumber
     * @var int $batchSize
     */
    public function __construct(string $activationId, \Flexsim\FlexnetOperations\Type\SimpleQueryType $fulfillmentId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $userId = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $count = null, bool $policyOverridden = null, \Flexsim\FlexnetOperations\Type\DateTimeQueryType $actionDateTime = null, string $lifeCycleAction = null, string $fulfillmentSource = null, int $pageNumber = null, int $batchSize = null)
    {
        $this->activationId = $activationId;
        $this->fulfillmentId = $fulfillmentId;
        $this->userId = $userId;
        $this->count = $count;
        $this->policyOverridden = $policyOverridden;
        $this->actionDateTime = $actionDateTime;
        $this->lifeCycleAction = $lifeCycleAction;
        $this->fulfillmentSource = $fulfillmentSource;
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
    }

    /**
     * create a new instance of this class
     *
     * @var string $activationId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $fulfillmentId
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $userId
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType $count
     * @var bool $policyOverridden
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType $actionDateTime
     * @var string $lifeCycleAction
     * @var string $fulfillmentSource
     * @var int $pageNumber
     * @var int $batchSize
     */
    public static function create(string $activationId, \Flexsim\FlexnetOperations\Type\SimpleQueryType $fulfillmentId = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $userId = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $count = null, bool $policyOverridden = null, \Flexsim\FlexnetOperations\Type\DateTimeQueryType $actionDateTime = null, string $lifeCycleAction = null, string $fulfillmentSource = null, int $pageNumber = null, int $batchSize = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getActivationId()
    {
        return $this->activationId;
    }

    /**
     * @param string $activationId
     * @return $this
     */
    public function setActivationId($activationId)
    {
        $this->activationId = $activationId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getFulfillmentId()
    {
        return $this->fulfillmentId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $fulfillmentId
     * @return $this
     */
    public function setFulfillmentId($fulfillmentId)
    {
        $this->fulfillmentId = $fulfillmentId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\NumberQueryType
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\NumberQueryType $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPolicyOverridden()
    {
        return $this->policyOverridden;
    }

    /**
     * @param bool $policyOverridden
     * @return $this
     */
    public function setPolicyOverridden($policyOverridden)
    {
        $this->policyOverridden = $policyOverridden;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    public function getActionDateTime()
    {
        return $this->actionDateTime;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateTimeQueryType $actionDateTime
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
    public function getLifeCycleAction()
    {
        return $this->lifeCycleAction;
    }

    /**
     * @param string $lifeCycleAction
     * @return $this
     */
    public function setLifeCycleAction($lifeCycleAction)
    {
        $this->lifeCycleAction = $lifeCycleAction;
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

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * @param int $pageNumber
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getBatchSize()
    {
        return $this->batchSize;
    }

    /**
     * @param int $batchSize
     * @return $this
     */
    public function setBatchSize($batchSize)
    {
        $this->batchSize = $batchSize;
        return $this;
    }


}

