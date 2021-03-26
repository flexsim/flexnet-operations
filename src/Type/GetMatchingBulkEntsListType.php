<?php

namespace Flexsim\FlexnetOperations\Type;

class GetMatchingBulkEntsListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\GetMatchingBulkEntInfoType
     */
    private $bulkEntInfo;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\GetMatchingBulkEntInfoType $bulkEntInfo
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\GetMatchingBulkEntInfoType $bulkEntInfo)
    {
        $this->bulkEntInfo = $bulkEntInfo;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\GetMatchingBulkEntInfoType $bulkEntInfo
     */
    public static function create(\Flexsim\FlexnetOperations\Type\GetMatchingBulkEntInfoType $bulkEntInfo)
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


}

