<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetFulfillmentHistoryRequestType implements RequestInterface
{
    /**
     * @var string
     */
    private $activationId;

    /**
     * @var \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    private $fulfillmentId;

    /**
     * @var \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    private $userId;

    /**
     * @var \Flexnet\LicenseService\Type\NumberQueryType|null
     */
    private $count;

    /**
     * @var bool|null
     */
    private $policyOverridden;

    /**
     * @var \Flexnet\LicenseService\Type\DateTimeQueryType|null
     */
    private $actionDateTime;

    /**
     * @var string|null
     */
    private $lifeCycleAction;

    /**
     * @var string|null
     */
    private $fulfillmentSource;

    /**
     * @var int|null
     */
    private $pageNumber;

    /**
     * @var int|null
     */
    private $batchSize;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $fulfillmentId
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $userId
     * @param  \Flexnet\LicenseService\Type\NumberQueryType|null  $count
     * @param  bool|null  $policyOverridden
     * @param  \Flexnet\LicenseService\Type\DateTimeQueryType|null  $actionDateTime
     * @param  string|null  $lifeCycleAction
     * @param  string|null  $fulfillmentSource
     * @param  int|null  $pageNumber
     * @param  int|null  $batchSize
     */
    public function __construct(string $activationId, SimpleQueryType|null $fulfillmentId = null, SimpleQueryType|null $userId = null, NumberQueryType|null $count = null, bool|null $policyOverridden = null, DateTimeQueryType|null $actionDateTime = null, string|null $lifeCycleAction = null, string|null $fulfillmentSource = null, int|null $pageNumber = null, int|null $batchSize = null)
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
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $fulfillmentId
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $userId
     * @param  \Flexnet\LicenseService\Type\NumberQueryType|null  $count
     * @param  bool|null  $policyOverridden
     * @param  \Flexnet\LicenseService\Type\DateTimeQueryType|null  $actionDateTime
     * @param  string|null  $lifeCycleAction
     * @param  string|null  $fulfillmentSource
     * @param  int|null  $pageNumber
     * @param  int|null  $batchSize
     */
    public static function create(string $activationId, SimpleQueryType|null $fulfillmentId = null, SimpleQueryType|null $userId = null, NumberQueryType|null $count = null, bool|null $policyOverridden = null, DateTimeQueryType|null $actionDateTime = null, string|null $lifeCycleAction = null, string|null $fulfillmentSource = null, int|null $pageNumber = null, int|null $batchSize = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): string
    {
        return $this->activationId;
    }

    public function withActivationId(string $activationId): GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    public function getFulfillmentId(): SimpleQueryType|null
    {
        return $this->fulfillmentId;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $fulfillmentId
     */
    public function withFulfillmentId(SimpleQueryType|null $fulfillmentId): GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\SimpleQueryType|null
     */
    public function getUserId(): SimpleQueryType|null
    {
        return $this->userId;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\SimpleQueryType|null  $userId
     */
    public function withUserId(SimpleQueryType|null $userId): GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->userId = $userId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\NumberQueryType|null
     */
    public function getCount(): NumberQueryType|null
    {
        return $this->count;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\NumberQueryType|null  $count
     */
    public function withCount(NumberQueryType|null $count): GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->count = $count;

        return $new;
    }

    public function getPolicyOverridden(): bool|null
    {
        return $this->policyOverridden;
    }

    public function withPolicyOverridden(bool|null $policyOverridden): GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->policyOverridden = $policyOverridden;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\DateTimeQueryType|null
     */
    public function getActionDateTime(): DateTimeQueryType|null
    {
        return $this->actionDateTime;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\DateTimeQueryType|null  $actionDateTime
     */
    public function withActionDateTime(DateTimeQueryType|null $actionDateTime): GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->actionDateTime = $actionDateTime;

        return $new;
    }

    public function getLifeCycleAction(): string|null
    {
        return $this->lifeCycleAction;
    }

    public function withLifeCycleAction(string|null $lifeCycleAction): GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->lifeCycleAction = $lifeCycleAction;

        return $new;
    }

    public function getFulfillmentSource(): string|null
    {
        return $this->fulfillmentSource;
    }

    public function withFulfillmentSource(string|null $fulfillmentSource): GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->fulfillmentSource = $fulfillmentSource;

        return $new;
    }

    public function getPageNumber(): int|null
    {
        return $this->pageNumber;
    }

    public function withPageNumber(int|null $pageNumber): GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }

    public function getBatchSize(): int|null
    {
        return $this->batchSize;
    }

    public function withBatchSize(int|null $batchSize): GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }
}
