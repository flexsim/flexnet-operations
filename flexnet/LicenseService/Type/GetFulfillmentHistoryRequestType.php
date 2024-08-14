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
    public function __construct(string $activationId, ?\Flexnet\LicenseService\Type\SimpleQueryType $fulfillmentId = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $userId = null, ?\Flexnet\LicenseService\Type\NumberQueryType $count = null, ?bool $policyOverridden = null, ?\Flexnet\LicenseService\Type\DateTimeQueryType $actionDateTime = null, ?string $lifeCycleAction = null, ?string $fulfillmentSource = null, ?int $pageNumber = null, ?int $batchSize = null)
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

    public static function create(string $activationId, ?\Flexnet\LicenseService\Type\SimpleQueryType $fulfillmentId = null, ?\Flexnet\LicenseService\Type\SimpleQueryType $userId = null, ?\Flexnet\LicenseService\Type\NumberQueryType $count = null, ?bool $policyOverridden = null, ?\Flexnet\LicenseService\Type\DateTimeQueryType $actionDateTime = null, ?string $lifeCycleAction = null, ?string $fulfillmentSource = null, ?int $pageNumber = null, ?int $batchSize = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): string
    {
        return $this->activationId;
    }

    public function withActivationId(string $activationId): \Flexnet\LicenseService\Type\GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getFulfillmentId(): ?\Flexnet\LicenseService\Type\SimpleQueryType
    {
        return $this->fulfillmentId;
    }

    public function withFulfillmentId(?\Flexnet\LicenseService\Type\SimpleQueryType $fulfillmentId): \Flexnet\LicenseService\Type\GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }

    public function getUserId(): ?\Flexnet\LicenseService\Type\SimpleQueryType
    {
        return $this->userId;
    }

    public function withUserId(?\Flexnet\LicenseService\Type\SimpleQueryType $userId): \Flexnet\LicenseService\Type\GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->userId = $userId;

        return $new;
    }

    public function getCount(): ?\Flexnet\LicenseService\Type\NumberQueryType
    {
        return $this->count;
    }

    public function withCount(?\Flexnet\LicenseService\Type\NumberQueryType $count): \Flexnet\LicenseService\Type\GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->count = $count;

        return $new;
    }

    public function getPolicyOverridden(): ?bool
    {
        return $this->policyOverridden;
    }

    public function withPolicyOverridden(?bool $policyOverridden): \Flexnet\LicenseService\Type\GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->policyOverridden = $policyOverridden;

        return $new;
    }

    public function getActionDateTime(): ?\Flexnet\LicenseService\Type\DateTimeQueryType
    {
        return $this->actionDateTime;
    }

    public function withActionDateTime(?\Flexnet\LicenseService\Type\DateTimeQueryType $actionDateTime): \Flexnet\LicenseService\Type\GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->actionDateTime = $actionDateTime;

        return $new;
    }

    public function getLifeCycleAction(): ?string
    {
        return $this->lifeCycleAction;
    }

    public function withLifeCycleAction(?string $lifeCycleAction): \Flexnet\LicenseService\Type\GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->lifeCycleAction = $lifeCycleAction;

        return $new;
    }

    public function getFulfillmentSource(): ?string
    {
        return $this->fulfillmentSource;
    }

    public function withFulfillmentSource(?string $fulfillmentSource): \Flexnet\LicenseService\Type\GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->fulfillmentSource = $fulfillmentSource;

        return $new;
    }

    public function getPageNumber(): ?int
    {
        return $this->pageNumber;
    }

    public function withPageNumber(?int $pageNumber): \Flexnet\LicenseService\Type\GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }

    public function getBatchSize(): ?int
    {
        return $this->batchSize;
    }

    public function withBatchSize(?int $batchSize): \Flexnet\LicenseService\Type\GetFulfillmentHistoryRequestType
    {
        $new = clone $this;
        $new->batchSize = $batchSize;

        return $new;
    }
}
