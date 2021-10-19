<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedBulkEntitlementDataType extends FlexnetType
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
     * @var string
     */
    protected $bulkEntitlementId;

    /**
     * Constructor
     *
     * @param string $recordRefNo
     * @param string $uniqueId
     * @param string $bulkEntitlementId
     */
    public function __construct(string $recordRefNo, string $uniqueId, string $bulkEntitlementId)
    {
        $this->recordRefNo = $recordRefNo;
        $this->uniqueId = $uniqueId;
        $this->bulkEntitlementId = $bulkEntitlementId;
    }

    /**
     * create a new instance of this class
     *
     * @param string $recordRefNo
     * @param string $uniqueId
     * @param string $bulkEntitlementId
     */
    public static function create(string $recordRefNo, string $uniqueId, string $bulkEntitlementId)
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

    /**
     * @return string
     */
    public function getBulkEntitlementId()
    {
        return $this->bulkEntitlementId;
    }

    /**
     * @param string $bulkEntitlementId
     * @return $this
     */
    public function setBulkEntitlementId($bulkEntitlementId)
    {
        $this->bulkEntitlementId = $bulkEntitlementId;
        return $this;
    }
}
