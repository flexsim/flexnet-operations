<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetBulkEntitlementPropertiesRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\SearchBulkEntitlementDataType
     */
    protected $bulkEntitlementSearchCriteria;

    /**
     * @var \Flexsim\FlexnetOperations\Type\BulkEntitlementResponseConfigRequestType
     */
    protected $bulkEntitlementResponseConfig;

    /**
     * @var int
     */
    protected $batchSize;

    /**
     * @var int
     */
    protected $pageNumber;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria
     * @param \Flexsim\FlexnetOperations\Type\BulkEntitlementResponseConfigRequestType $bulkEntitlementResponseConfig
     * @param int $batchSize
     * @param int $pageNumber
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria, \Flexsim\FlexnetOperations\Type\BulkEntitlementResponseConfigRequestType $bulkEntitlementResponseConfig, int $batchSize, int $pageNumber = null)
    {
        $this->bulkEntitlementSearchCriteria = $bulkEntitlementSearchCriteria;
        $this->bulkEntitlementResponseConfig = $bulkEntitlementResponseConfig;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria
     * @param \Flexsim\FlexnetOperations\Type\BulkEntitlementResponseConfigRequestType $bulkEntitlementResponseConfig
     * @param int $batchSize
     * @param int $pageNumber
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria, \Flexsim\FlexnetOperations\Type\BulkEntitlementResponseConfigRequestType $bulkEntitlementResponseConfig, int $batchSize, int $pageNumber = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SearchBulkEntitlementDataType
     */
    public function getBulkEntitlementSearchCriteria()
    {
        return $this->bulkEntitlementSearchCriteria;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria
     * @return $this
     */
    public function setBulkEntitlementSearchCriteria($bulkEntitlementSearchCriteria)
    {
        $this->bulkEntitlementSearchCriteria = $bulkEntitlementSearchCriteria;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\BulkEntitlementResponseConfigRequestType
     */
    public function getBulkEntitlementResponseConfig()
    {
        return $this->bulkEntitlementResponseConfig;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\BulkEntitlementResponseConfigRequestType $bulkEntitlementResponseConfig
     * @return $this
     */
    public function setBulkEntitlementResponseConfig($bulkEntitlementResponseConfig)
    {
        $this->bulkEntitlementResponseConfig = $bulkEntitlementResponseConfig;

        return $this;
    }

    /**
     * @return int
     */
    public function getBatchSize()
    {
        return $this->batchSize;
    }

    /**
     * @param int $batchSize
     * @return $this
     */
    public function setBatchSize($batchSize)
    {
        $this->batchSize = $batchSize;

        return $this;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    /**
     * @param int $pageNumber
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;

        return $this;
    }
}
