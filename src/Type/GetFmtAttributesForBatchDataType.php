<?php

namespace Flexsim\FlexnetOperations\Type;

class GetFmtAttributesForBatchDataType extends FlexnetType
{
    /**
     * @var bool
     */
    protected $needStartDate;

    /**
     * @var bool
     */
    protected $needVersionDate;

    /**
     * @var bool
     */
    protected $needVersionStartDate;

    /**
     * @var bool
     */
    protected $needServerId;

    /**
     * @var bool
     */
    protected $needNodeLockId;

    /**
     * @var bool
     */
    protected $needCustomHost;

    /**
     * @var bool
     */
    protected $needCount;

    /**
     * @var bool
     */
    protected $needSoldTo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\OverDraftDataListType
     */
    protected $overDraftData;

    /**
     * @var string
     */
    protected $modelType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType
     */
    protected $modelAttributes;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType
     */
    protected $hostAttributes;

    /**
     * @var bool
     */
    protected $needTimeZone;

    /**
     * Constructor
     *
     * @param bool $needStartDate
     * @param bool $needVersionDate
     * @param bool $needVersionStartDate
     * @param bool $needServerId
     * @param bool $needNodeLockId
     * @param bool $needCustomHost
     * @param bool $needCount
     * @param bool $needSoldTo
     * @param \Flexsim\FlexnetOperations\Type\OverDraftDataListType $overDraftData
     * @param string $modelType
     * @param \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType $modelAttributes
     * @param \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType $hostAttributes
     * @param bool $needTimeZone
     */
    public function __construct(bool $needStartDate, bool $needVersionDate, bool $needVersionStartDate, bool $needServerId, bool $needNodeLockId, bool $needCustomHost, bool $needCount, bool $needSoldTo, \Flexsim\FlexnetOperations\Type\OverDraftDataListType $overDraftData, string $modelType, \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType $modelAttributes = null, \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType $hostAttributes = null, bool $needTimeZone = null)
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
     * create a new instance of this class
     *
     * @param bool $needStartDate
     * @param bool $needVersionDate
     * @param bool $needVersionStartDate
     * @param bool $needServerId
     * @param bool $needNodeLockId
     * @param bool $needCustomHost
     * @param bool $needCount
     * @param bool $needSoldTo
     * @param \Flexsim\FlexnetOperations\Type\OverDraftDataListType $overDraftData
     * @param string $modelType
     * @param \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType $modelAttributes
     * @param \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType $hostAttributes
     * @param bool $needTimeZone
     */
    public static function create(bool $needStartDate, bool $needVersionDate, bool $needVersionStartDate, bool $needServerId, bool $needNodeLockId, bool $needCustomHost, bool $needCount, bool $needSoldTo, \Flexsim\FlexnetOperations\Type\OverDraftDataListType $overDraftData, string $modelType, \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType $modelAttributes = null, \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType $hostAttributes = null, bool $needTimeZone = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return bool
     */
    public function getNeedStartDate()
    {
        return $this->needStartDate;
    }

    /**
     * @param bool $needStartDate
     * @return $this
     */
    public function setNeedStartDate($needStartDate)
    {
        $this->needStartDate = $needStartDate;

        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedVersionDate()
    {
        return $this->needVersionDate;
    }

    /**
     * @param bool $needVersionDate
     * @return $this
     */
    public function setNeedVersionDate($needVersionDate)
    {
        $this->needVersionDate = $needVersionDate;

        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedVersionStartDate()
    {
        return $this->needVersionStartDate;
    }

    /**
     * @param bool $needVersionStartDate
     * @return $this
     */
    public function setNeedVersionStartDate($needVersionStartDate)
    {
        $this->needVersionStartDate = $needVersionStartDate;

        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedServerId()
    {
        return $this->needServerId;
    }

    /**
     * @param bool $needServerId
     * @return $this
     */
    public function setNeedServerId($needServerId)
    {
        $this->needServerId = $needServerId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedNodeLockId()
    {
        return $this->needNodeLockId;
    }

    /**
     * @param bool $needNodeLockId
     * @return $this
     */
    public function setNeedNodeLockId($needNodeLockId)
    {
        $this->needNodeLockId = $needNodeLockId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedCustomHost()
    {
        return $this->needCustomHost;
    }

    /**
     * @param bool $needCustomHost
     * @return $this
     */
    public function setNeedCustomHost($needCustomHost)
    {
        $this->needCustomHost = $needCustomHost;

        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedCount()
    {
        return $this->needCount;
    }

    /**
     * @param bool $needCount
     * @return $this
     */
    public function setNeedCount($needCount)
    {
        $this->needCount = $needCount;

        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedSoldTo()
    {
        return $this->needSoldTo;
    }

    /**
     * @param bool $needSoldTo
     * @return $this
     */
    public function setNeedSoldTo($needSoldTo)
    {
        $this->needSoldTo = $needSoldTo;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OverDraftDataListType
     */
    public function getOverDraftData()
    {
        return $this->overDraftData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OverDraftDataListType $overDraftData
     * @return $this
     */
    public function setOverDraftData($overDraftData)
    {
        $this->overDraftData = $overDraftData;

        return $this;
    }

    /**
     * @return string
     */
    public function getModelType()
    {
        return $this->modelType;
    }

    /**
     * @param string $modelType
     * @return $this
     */
    public function setModelType($modelType)
    {
        $this->modelType = $modelType;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType
     */
    public function getModelAttributes()
    {
        return $this->modelAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType $modelAttributes
     * @return $this
     */
    public function setModelAttributes($modelAttributes)
    {
        $this->modelAttributes = $modelAttributes;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType
     */
    public function getHostAttributes()
    {
        return $this->hostAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType $hostAttributes
     * @return $this
     */
    public function setHostAttributes($hostAttributes)
    {
        $this->hostAttributes = $hostAttributes;

        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedTimeZone()
    {
        return $this->needTimeZone;
    }

    /**
     * @param bool $needTimeZone
     * @return $this
     */
    public function setNeedTimeZone($needTimeZone)
    {
        $this->needTimeZone = $needTimeZone;

        return $this;
    }
}
