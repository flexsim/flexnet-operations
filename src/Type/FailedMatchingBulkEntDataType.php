<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedMatchingBulkEntDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\GetMatchingBulkEntInfoType
     */
    protected $bulkEntInfo;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\GetMatchingBulkEntInfoType $bulkEntInfo
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\GetMatchingBulkEntInfoType $bulkEntInfo, string $reason)
    {
        $this->bulkEntInfo = $bulkEntInfo;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\GetMatchingBulkEntInfoType $bulkEntInfo
     * @param string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\GetMatchingBulkEntInfoType $bulkEntInfo, string $reason)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\GetMatchingBulkEntInfoType
     */
    public function getBulkEntInfo()
    {
        return $this->bulkEntInfo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\GetMatchingBulkEntInfoType $bulkEntInfo
     * @return $this
     */
    public function setBulkEntInfo($bulkEntInfo)
    {
        $this->bulkEntInfo = $bulkEntInfo;

        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }
}
