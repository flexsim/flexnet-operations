<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetFulfillmentsQueryRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType
     */
    private $queryParams;

    /**
     * @var int
     */
    private $pageNumber;

    /**
     * @var int
     */
    private $batchSize;

    /**
     * @var bool
     */
    private $includeLicenseText;

    /**
     * @var bool
     */
    private $includeConsolidatedHostLicense;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType $queryParams
     * @var int $pageNumber
     * @var int $batchSize
     * @var bool $includeLicenseText
     * @var bool $includeConsolidatedHostLicense
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType $queryParams = null, int $pageNumber, int $batchSize, bool $includeLicenseText = null, bool $includeConsolidatedHostLicense = null)
    {
        $queryParams = $queryParams ?? [];
        $this->queryParams = $queryParams;
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
        $this->includeLicenseText = $includeLicenseText;
        $this->includeConsolidatedHostLicense = $includeConsolidatedHostLicense;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType $queryParams
     * @var int $pageNumber
     * @var int $batchSize
     * @var bool $includeLicenseText
     * @var bool $includeConsolidatedHostLicense
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType $queryParams = null, int $pageNumber, int $batchSize, bool $includeLicenseText = null, bool $includeConsolidatedHostLicense = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType $queryParams
     * @return $this
     */
    public function setQueryParams($queryParams)
    {
        $this->queryParams = $queryParams;
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
     * @return bool
     */
    public function getIncludeLicenseText()
    {
        return $this->includeLicenseText;
    }

    /**
     * @param bool $includeLicenseText
     * @return $this
     */
    public function setIncludeLicenseText($includeLicenseText)
    {
        $this->includeLicenseText = $includeLicenseText;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeConsolidatedHostLicense()
    {
        return $this->includeConsolidatedHostLicense;
    }

    /**
     * @param bool $includeConsolidatedHostLicense
     * @return $this
     */
    public function setIncludeConsolidatedHostLicense($includeConsolidatedHostLicense)
    {
        $this->includeConsolidatedHostLicense = $includeConsolidatedHostLicense;
        return $this;
    }
}
