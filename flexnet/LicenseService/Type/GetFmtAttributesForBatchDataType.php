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
     *
     * @param  \Flexnet\LicenseService\Type\OverDraftDataListType  $overDraftData
     * @param  \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null  $modelAttributes
     * @param  \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null  $hostAttributes
     * @param  bool|null  $needTimeZone
     */
    public function __construct(bool $needStartDate, bool $needVersionDate, bool $needVersionStartDate, bool $needServerId, bool $needNodeLockId, bool $needCustomHost, bool $needCount, bool $needSoldTo, OverDraftDataListType $overDraftData, string $modelType, AttributeMetaDescriptorDataType|null $modelAttributes = null, AttributeMetaDescriptorDataType|null $hostAttributes = null, bool|null $needTimeZone = null)
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

    /**
     * @param  \Flexnet\LicenseService\Type\OverDraftDataListType  $overDraftData
     * @param  \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null  $modelAttributes
     * @param  \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null  $hostAttributes
     * @param  bool|null  $needTimeZone
     */
    public static function create(bool $needStartDate, bool $needVersionDate, bool $needVersionStartDate, bool $needServerId, bool $needNodeLockId, bool $needCustomHost, bool $needCount, bool $needSoldTo, OverDraftDataListType $overDraftData, string $modelType, AttributeMetaDescriptorDataType|null $modelAttributes = null, AttributeMetaDescriptorDataType|null $hostAttributes = null, bool|null $needTimeZone = null)
    {
        return new static(...\func_get_args());
    }

    public function getNeedStartDate(): bool
    {
        return $this->needStartDate;
    }

    public function withNeedStartDate(bool $needStartDate): GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needStartDate = $needStartDate;

        return $new;
    }

    public function getNeedVersionDate(): bool
    {
        return $this->needVersionDate;
    }

    public function withNeedVersionDate(bool $needVersionDate): GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needVersionDate = $needVersionDate;

        return $new;
    }

    public function getNeedVersionStartDate(): bool
    {
        return $this->needVersionStartDate;
    }

    public function withNeedVersionStartDate(bool $needVersionStartDate): GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needVersionStartDate = $needVersionStartDate;

        return $new;
    }

    public function getNeedServerId(): bool
    {
        return $this->needServerId;
    }

    public function withNeedServerId(bool $needServerId): GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needServerId = $needServerId;

        return $new;
    }

    public function getNeedNodeLockId(): bool
    {
        return $this->needNodeLockId;
    }

    public function withNeedNodeLockId(bool $needNodeLockId): GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needNodeLockId = $needNodeLockId;

        return $new;
    }

    public function getNeedCustomHost(): bool
    {
        return $this->needCustomHost;
    }

    public function withNeedCustomHost(bool $needCustomHost): GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needCustomHost = $needCustomHost;

        return $new;
    }

    public function getNeedCount(): bool
    {
        return $this->needCount;
    }

    public function withNeedCount(bool $needCount): GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needCount = $needCount;

        return $new;
    }

    public function getNeedSoldTo(): bool
    {
        return $this->needSoldTo;
    }

    public function withNeedSoldTo(bool $needSoldTo): GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needSoldTo = $needSoldTo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\OverDraftDataListType
     */
    public function getOverDraftData(): OverDraftDataListType
    {
        return $this->overDraftData;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\OverDraftDataListType  $overDraftData
     */
    public function withOverDraftData(OverDraftDataListType $overDraftData): GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->overDraftData = $overDraftData;

        return $new;
    }

    public function getModelType(): string
    {
        return $this->modelType;
    }

    public function withModelType(string $modelType): GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->modelType = $modelType;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null
     */
    public function getModelAttributes(): AttributeMetaDescriptorDataType|null
    {
        return $this->modelAttributes;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null  $modelAttributes
     */
    public function withModelAttributes(AttributeMetaDescriptorDataType|null $modelAttributes): GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->modelAttributes = $modelAttributes;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null
     */
    public function getHostAttributes(): AttributeMetaDescriptorDataType|null
    {
        return $this->hostAttributes;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null  $hostAttributes
     */
    public function withHostAttributes(AttributeMetaDescriptorDataType|null $hostAttributes): GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->hostAttributes = $hostAttributes;

        return $new;
    }

    public function getNeedTimeZone(): bool|null
    {
        return $this->needTimeZone;
    }

    public function withNeedTimeZone(bool|null $needTimeZone): GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needTimeZone = $needTimeZone;

        return $new;
    }
}
