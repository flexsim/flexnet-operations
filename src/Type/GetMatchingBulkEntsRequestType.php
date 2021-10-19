<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetMatchingBulkEntsRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\GetMatchingBulkEntsListType
     */
    protected $bulkEntList;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\GetMatchingBulkEntsListType $bulkEntList
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\GetMatchingBulkEntsListType $bulkEntList)
    {
        $this->bulkEntList = $bulkEntList;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\GetMatchingBulkEntsListType $bulkEntList
     */
    public static function create(\Flexsim\FlexnetOperations\Type\GetMatchingBulkEntsListType $bulkEntList)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\GetMatchingBulkEntsListType
     */
    public function getBulkEntList()
    {
        return $this->bulkEntList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\GetMatchingBulkEntsListType $bulkEntList
     * @return $this
     */
    public function setBulkEntList($bulkEntList)
    {
        $this->bulkEntList = $bulkEntList;
        return $this;
    }
}
