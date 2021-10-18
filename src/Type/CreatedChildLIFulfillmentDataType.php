<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedChildLIFulfillmentDataType extends FlexnetType
{

    /**
     * @var int
     */
    protected $recordRefNo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatedChildLIFulfillmentInfoType
     */
    protected $fulfillmentInfo;

    /**
     * Constructor
     *
     * @var int $recordRefNo
     * @var \Flexsim\FlexnetOperations\Type\CreatedChildLIFulfillmentInfoType $fulfillmentInfo
     */
    public function __construct(int $recordRefNo, \Flexsim\FlexnetOperations\Type\CreatedChildLIFulfillmentInfoType $fulfillmentInfo)
    {
        $this->recordRefNo = $recordRefNo;
        $this->fulfillmentInfo = $fulfillmentInfo;
    }

    /**
     * create a new instance of this class
     *
     * @var int $recordRefNo
     * @var \Flexsim\FlexnetOperations\Type\CreatedChildLIFulfillmentInfoType $fulfillmentInfo
     */
    public static function create(int $recordRefNo, \Flexsim\FlexnetOperations\Type\CreatedChildLIFulfillmentInfoType $fulfillmentInfo)
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
     * @return \Flexsim\FlexnetOperations\Type\CreatedChildLIFulfillmentInfoType
     */
    public function getFulfillmentInfo()
    {
        return $this->fulfillmentInfo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreatedChildLIFulfillmentInfoType $fulfillmentInfo
     * @return $this
     */
    public function setFulfillmentInfo($fulfillmentInfo)
    {
        $this->fulfillmentInfo = $fulfillmentInfo;
        return $this;
    }
}
