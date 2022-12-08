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
     * @param  bool  $needStartDate
     * @param  bool  $needVersionDate
     * @param  bool  $needVersionStartDate
     * @param  bool  $needServerId
     * @param  bool  $needNodeLockId
     * @param  bool  $needCustomHost
     * @param  bool  $needCount
     * @param  bool  $needSoldTo
     * @param  \Flexnet\LicenseService\Type\OverDraftDataListType  $overDraftData
     * @param  string  $modelType
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
     * @param  bool  $needStartDate
     * @param  bool  $needVersionDate
     * @param  bool  $needVersionStartDate
     * @param  bool  $needServerId
     * @param  bool  $needNodeLockId
     * @param  bool  $needCustomHost
     * @param  bool  $needCount
     * @param  bool  $needSoldTo
     * @param  \Flexnet\LicenseService\Type\OverDraftDataListType  $overDraftData
     * @param  string  $modelType
     * @param  \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null  $modelAttributes
     * @param  \Flexnet\LicenseService\Type\AttributeMetaDescriptorDataType|null  $hostAttributes
     * @param  bool|null  $needTimeZone
     */
    public static function create(bool $needStartDate, bool $needVersionDate, bool $needVersionStartDate, bool $needServerId, bool $needNodeLockId, bool $needCustomHost, bool $needCount, bool $needSoldTo, OverDraftDataListType $overDraftData, string $modelType, AttributeMetaDescriptorDataType|null $modelAttributes = null, AttributeMetaDescriptorDataType|null $hostAttributes = null, bool|null $needTimeZone = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return bool
     */
    public function getNeedStartDate(): bool
    {
        return $this->needStartDate;
    }

    /**
     * @param  bool  $needStartDate
     * @return GetFmtAttributesForBatchDataType
     */
    public function withNeedStartDate(bool $needStartDate): GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needStartDate = $needStartDate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNeedVersionDate(): bool
    {
        return $this->needVersionDate;
    }

    /**
     * @param  bool  $needVersionDate
     * @return GetFmtAttributesForBatchDataType
     */
    public function withNeedVersionDate(bool $needVersionDate): GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needVersionDate = $needVersionDate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNeedVersionStartDate(): bool
    {
        return $this->needVersionStartDate;
    }

    /**
     * @param  bool  $needVersionStartDate
     * @return GetFmtAttributesForBatchDataType
     */
    public function withNeedVersionStartDate(bool $needVersionStartDate): GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needVersionStartDate = $needVersionStartDate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNeedServerId(): bool
    {
        return $this->needServerId;
    }

    /**
     * @param  bool  $needServerId
     * @return GetFmtAttributesForBatchDataType
     */
    public function withNeedServerId(bool $needServerId): GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needServerId = $needServerId;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNeedNodeLockId(): bool
    {
        return $this->needNodeLockId;
    }

    /**
     * @param  bool  $needNodeLockId
     * @return GetFmtAttributesForBatchDataType
     */
    public function withNeedNodeLockId(bool $needNodeLockId): GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needNodeLockId = $needNodeLockId;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNeedCustomHost(): bool
    {
        return $this->needCustomHost;
    }

    /**
     * @param  bool  $needCustomHost
     * @return GetFmtAttributesForBatchDataType
     */
    public function withNeedCustomHost(bool $needCustomHost): GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needCustomHost = $needCustomHost;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNeedCount(): bool
    {
        return $this->needCount;
    }

    /**
     * @param  bool  $needCount
     * @return GetFmtAttributesForBatchDataType
     */
    public function withNeedCount(bool $needCount): GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needCount = $needCount;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNeedSoldTo(): bool
    {
        return $this->needSoldTo;
    }

    /**
     * @param  bool  $needSoldTo
     * @return GetFmtAttributesForBatchDataType
     */
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
     * @return GetFmtAttributesForBatchDataType
     */
    public function withOverDraftData(OverDraftDataListType $overDraftData): GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->overDraftData = $overDraftData;

        return $new;
    }

    /**
     * @return string
     */
    public function getModelType(): string
    {
        return $this->modelType;
    }

    /**
     * @param  string  $modelType
     * @return GetFmtAttributesForBatchDataType
     */
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
     * @return GetFmtAttributesForBatchDataType
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
     * @return GetFmtAttributesForBatchDataType
     */
    public function withHostAttributes(AttributeMetaDescriptorDataType|null $hostAttributes): GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->hostAttributes = $hostAttributes;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getNeedTimeZone(): bool|null
    {
        return $this->needTimeZone;
    }

    /**
     * @param  bool|null  $needTimeZone
     * @return GetFmtAttributesForBatchDataType
     */
    public function withNeedTimeZone(bool|null $needTimeZone): GetFmtAttributesForBatchDataType
    {
        $new = clone $this;
        $new->needTimeZone = $needTimeZone;

        return $new;
    }
}
