<?php

namespace Flexnet\LicenseService\Type;

class GetFmtAttributesForBatchDataType
{
    /**
     * @var bool
     */
    private $needStartDate;

    /**
     * @var bool
     */
    private $needVersionDate;

    /**
     * @var bool
     */
    private $needVersionStartDate;

    /**
     * @var bool
     */
    private $needServerId;

    /**
     * @var bool
     */
    private $needNodeLockId;

    /**
     * @var bool
     */
    private $needCustomHost;

    /**
     * @var bool
     */
    private $needCount;

    /**
     * @var bool
     */
    private $needSoldTo;

    /**
     * @var \Flexnet\LicenseService\Type\OverDraftDataListType
     */
    private $overDraftData;

    /**
     * @var string
     */
    private $modelType;

    /**
     * @var \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null
     */
    private $modelAttributes;

    /**
     * @var \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null
     */
    private $hostAttributes;

    /**
     * @var bool|null
     */
    private $needTimeZone;

    /**
     * Constructor
     */
    public function __construct(bool $needStartDate, bool $needVersionDate, bool $needVersionStartDate, bool $needServerId, bool $needNodeLockId, bool $needCustomHost, bool $needCount, bool $needSoldTo, \Flexnet\LicenseService\Type\OverDraftDataListType $overDraftData, string $modelType, ?\Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType $modelAttributes = null, ?\Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType $hostAttributes = null, ?bool $needTimeZone = null)
    {
        $this->needStartDate = $needStartDate;
        $this->needVersionDate = $needVersionDate;
        $this->needVersionStartDate = $needVersionStartDate;
        $this->needServerId = $needServerId;
        $this->needNodeLockId = $needNodeLockId;
        $this->needCustomHost = $needCustomHost;
        $this->needCount = $needCount;
        $this->needSoldTo = $needSoldTo;
        $this->overDraftData = $overDraftData;
        $this->modelType = $modelType;
        $this->modelAttributes = $modelAttributes;
        $this->hostAttributes = $hostAttributes;
        $this->needTimeZone = $needTimeZone;
    }

    public static function create(bool $needStartDate, bool $needVersionDate, bool $needVersionStartDate, bool $needServerId, bool $needNodeLockId, bool $needCustomHost, bool $needCount, bool $needSoldTo, \Flexnet\LicenseService\Type\OverDraftDataListType $overDraftData, string $modelType, ?\Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType $modelAttributes = null, ?\Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType $hostAttributes = null, ?bool $needTimeZone = null)
    {
        return new static(...\func_get_args());
    }

    public function getNeedStartDate(): bool
    {
        return $this->needStartDate;
    }

    public function withNeedStartDate(bool $needStartDate): \Flexnet\LicenseService\Type\GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needStartDate = $needStartDate;

        return $new;
    }

    public function getNeedVersionDate(): bool
    {
        return $this->needVersionDate;
    }

    public function withNeedVersionDate(bool $needVersionDate): \Flexnet\LicenseService\Type\GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needVersionDate = $needVersionDate;

        return $new;
    }

    public function getNeedVersionStartDate(): bool
    {
        return $this->needVersionStartDate;
    }

    public function withNeedVersionStartDate(bool $needVersionStartDate): \Flexnet\LicenseService\Type\GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needVersionStartDate = $needVersionStartDate;

        return $new;
    }

    public function getNeedServerId(): bool
    {
        return $this->needServerId;
    }

    public function withNeedServerId(bool $needServerId): \Flexnet\LicenseService\Type\GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needServerId = $needServerId;

        return $new;
    }

    public function getNeedNodeLockId(): bool
    {
        return $this->needNodeLockId;
    }

    public function withNeedNodeLockId(bool $needNodeLockId): \Flexnet\LicenseService\Type\GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needNodeLockId = $needNodeLockId;

        return $new;
    }

    public function getNeedCustomHost(): bool
    {
        return $this->needCustomHost;
    }

    public function withNeedCustomHost(bool $needCustomHost): \Flexnet\LicenseService\Type\GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needCustomHost = $needCustomHost;

        return $new;
    }

    public function getNeedCount(): bool
    {
        return $this->needCount;
    }

    public function withNeedCount(bool $needCount): \Flexnet\LicenseService\Type\GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needCount = $needCount;

        return $new;
    }

    public function getNeedSoldTo(): bool
    {
        return $this->needSoldTo;
    }

    public function withNeedSoldTo(bool $needSoldTo): \Flexnet\LicenseService\Type\GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needSoldTo = $needSoldTo;

        return $new;
    }

    public function getOverDraftData(): \Flexnet\LicenseService\Type\OverDraftDataListType
    {
        return $this->overDraftData;
    }

    public function withOverDraftData(\Flexnet\LicenseService\Type\OverDraftDataListType $overDraftData): \Flexnet\LicenseService\Type\GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->overDraftData = $overDraftData;

        return $new;
    }

    public function getModelType(): string
    {
        return $this->modelType;
    }

    public function withModelType(string $modelType): \Flexnet\LicenseService\Type\GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->modelType = $modelType;

        return $new;
    }

    public function getModelAttributes(): ?\Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType
    {
        return $this->modelAttributes;
    }

    public function withModelAttributes(?\Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType $modelAttributes): \Flexnet\LicenseService\Type\GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->modelAttributes = $modelAttributes;

        return $new;
    }

    public function getHostAttributes(): ?\Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType
    {
        return $this->hostAttributes;
    }

    public function withHostAttributes(?\Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType $hostAttributes): \Flexnet\LicenseService\Type\GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->hostAttributes = $hostAttributes;

        return $new;
    }

    public function getNeedTimeZone(): ?bool
    {
        return $this->needTimeZone;
    }

    public function withNeedTimeZone(?bool $needTimeZone): \Flexnet\LicenseService\Type\GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needTimeZone = $needTimeZone;

        return $new;
    }
}
