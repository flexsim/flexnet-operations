<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedOrgDataType
{

    /**
     * @var string
     */
    private $recordRefNo;

    /**
     * @var string
     */
    private $uniqueId;

    /**
     * Constructor
     *
     * @var string $recordRefNo
     * @var string $uniqueId
     */
    public function __construct(string $recordRefNo, string $uniqueId)
    {
        $this->recordRefNo = $recordRefNo;
        $this->uniqueId = $uniqueId;
    }

    /**
     * create a new instance of this class
     *
     * @var string $recordRefNo
     * @var string $uniqueId
     */
    public static function create(string $recordRefNo, string $uniqueId)
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

    /**
     * @return string
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * @param string $uniqueId
     * @return $this
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;
        return $this;
    }


}

