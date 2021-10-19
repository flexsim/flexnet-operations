<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedMaintenaceDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $recordRefNo;

    /**
     * @var string
     */
    protected $uniqueId;

    /**
     * Constructor
     *
     * @param string $recordRefNo
     * @param string $uniqueId
     */
    public function __construct(string $recordRefNo, string $uniqueId)
    {
        $this->recordRefNo = $recordRefNo;
        $this->uniqueId = $uniqueId;
    }

    /**
     * create a new instance of this class
     *
     * @param string $recordRefNo
     * @param string $uniqueId
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
