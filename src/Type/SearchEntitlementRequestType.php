<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SearchEntitlementRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SearchEntitlementDataType
     */
    private $entitlementSearchCriteria;

    /**
     * @var int
     */
    private $batchSize;

    /**
     * @var int
     */
    private $pageNumber;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SearchEntitlementDataType $entitlementSearchCriteria
     * @var int $batchSize
     * @var int $pageNumber
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SearchEntitlementDataType $entitlementSearchCriteria, int $batchSize, int $pageNumber = null)
    {
        $this->entitlementSearchCriteria = $entitlementSearchCriteria;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SearchEntitlementDataType $entitlementSearchCriteria
     * @var int $batchSize
     * @var int $pageNumber
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SearchEntitlementDataType $entitlementSearchCriteria, int $batchSize, int $pageNumber = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SearchEntitlementDataType
     */
    public function getEntitlementSearchCriteria()
    {
        return $this->entitlementSearchCriteria;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SearchEntitlementDataType $entitlementSearchCriteria
     * @return $this
     */
    public function setEntitlementSearchCriteria($entitlementSearchCriteria)
    {
        $this->entitlementSearchCriteria = $entitlementSearchCriteria;
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
