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
     */
    public function __construct(string $activationId, SimpleQueryType $fulfillmentId = null, SimpleQueryType $userId = null, NumberQueryType $count = null, bool $policyOverridden = null, DateTimeQueryType $actionDateTime = null, string $lifeCycleAction = null, string $fulfillmentSource = null, int $pageNumber = null, int $batchSize = null)
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

    public static function create(string $activationId, SimpleQueryType $fulfillmentId = null, SimpleQueryType $userId = null, NumberQueryType $count = null, bool $policyOverridden = null, DateTimeQueryType $actionDateTime = null, string $lifeCycleAction = null, string $fulfillmentSource = null, int $pageNumber = null, int $batchSize = null)
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

    public function getFulfillmentId(): ?SimpleQueryType
    {
        return $this->fulfillmentId;
    }

    public function withFulfillmentId(?SimpleQueryType $fulfillmentId): GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    public function getUserId(): ?SimpleQueryType
    {
        return $this->userId;
    }

    public function withUserId(?SimpleQueryType $userId): GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->userId = $userId;

        return $new;
    }

    public function getCount(): ?NumberQueryType
    {
        return $this->count;
    }

    public function withCount(?NumberQueryType $count): GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->count = $count;

        return $new;
    }

    public function getPolicyOverridden(): ?bool
    {
        return $this->policyOverridden;
    }

    public function withPolicyOverridden(?bool $policyOverridden): GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->policyOverridden = $policyOverridden;

        return $new;
    }

    public function getActionDateTime(): ?DateTimeQueryType
    {
        return $this->actionDateTime;
    }

    public function withActionDateTime(?DateTimeQueryType $actionDateTime): GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->actionDateTime = $actionDateTime;

        return $new;
    }

    public function getLifeCycleAction(): ?string
    {
        return $this->lifeCycleAction;
    }

    public function withLifeCycleAction(?string $lifeCycleAction): GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->lifeCycleAction = $lifeCycleAction;

        return $new;
    }

    public function getFulfillmentSource(): ?string
    {
        return $this->fulfillmentSource;
    }

    public function withFulfillmentSource(?string $fulfillmentSource): GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->fulfillmentSource = $fulfillmentSource;

        return $new;
    }

    public function getPageNumber(): ?int
    {
        return $this->pageNumber;
    }

    public function withPageNumber(?int $pageNumber): GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }

    public function getBatchSize(): ?int
    {
        return $this->batchSize;
    }

    public function withBatchSize(?int $batchSize): GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }
}
