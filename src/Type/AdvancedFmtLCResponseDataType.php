<?php

namespace Flexsim\FlexnetOperations\Type;

class AdvancedFmtLCResponseDataType
{

    /**
     * @var int
     */
    private $recordRefNo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCInfoType
     */
    private $upgradedFulfillmentInfo;

    /**
     * Constructor
     *
     * @var int $recordRefNo
     * @var \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCInfoType $upgradedFulfillmentInfo
     */
    public function __construct(int $recordRefNo, \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCInfoType $upgradedFulfillmentInfo)
    {
        $this->recordRefNo = $recordRefNo;
        $this->upgradedFulfillmentInfo = $upgradedFulfillmentInfo;
    }

    /**
     * create a new instance of this class
     *
     * @var int $recordRefNo
     * @var \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCInfoType $upgradedFulfillmentInfo
     */
    public static function create(int $recordRefNo, \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCInfoType $upgradedFulfillmentInfo)
    {
        return new self(...func_get_args());
    }

    /**
     * @return int
     */
    public function getRecordRefNo()
    {
        return $this->recordRefNo;
    }

    /**
     * @param int $recordRefNo
     * @return $this
     */
    public function setRecordRefNo($recordRefNo)
    {
        $this->recordRefNo = $recordRefNo;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCInfoType
     */
    public function getUpgradedFulfillmentInfo()
    {
        return $this->upgradedFulfillmentInfo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCInfoType $upgradedFulfillmentInfo
     * @return $this
     */
    public function setUpgradedFulfillmentInfo($upgradedFulfillmentInfo)
    {
        $this->upgradedFulfillmentInfo = $upgradedFulfillmentInfo;
        return $this;
    }


}

