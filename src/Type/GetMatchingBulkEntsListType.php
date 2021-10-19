<?php

namespace Flexsim\FlexnetOperations\Type;

class GetMatchingBulkEntsListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\GetMatchingBulkEntInfoType|array 
     */
    protected $bulkEntInfo;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\GetMatchingBulkEntInfoType|array $bulkEntInfo
     */
    public function __construct($bulkEntInfo)
    {
        $this->bulkEntInfo = $bulkEntInfo;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\GetMatchingBulkEntInfoType|array $bulkEntInfo
     */
    public static function create($bulkEntInfo)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\GetMatchingBulkEntInfoType|array 
     */
    public function getBulkEntInfo()
    {
        return $this->bulkEntInfo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\GetMatchingBulkEntInfoType|array $bulkEntInfo
     * @return $this
     */
    public function setBulkEntInfo($bulkEntInfo)
    {
        $this->bulkEntInfo = $bulkEntInfo;
        return $this;
    }
}
