<?php

namespace Flexsim\FlexnetOperations\Type;

class VerifiedFulfillmentDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $recordRefNo;

    /**
     * Constructor
     *
     * @var string $recordRefNo
     */
    public function __construct(string $recordRefNo)
    {
        $this->recordRefNo = $recordRefNo;
    }

    /**
     * create a new instance of this class
     *
     * @var string $recordRefNo
     */
    public static function create(string $recordRefNo)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getRecordRefNo()
    {
        return $this->recordRefNo;
    }

    /**
     * @param string $recordRefNo
     * @return $this
     */
    public function setRecordRefNo($recordRefNo)
    {
        $this->recordRefNo = $recordRefNo;
        return $this;
    }
}
