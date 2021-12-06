<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetFulfillmentsQueryRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType
     */
    protected $queryParams;

    /**
     * @var int
     */
    protected $pageNumber;

    /**
     * @var int
     */
    protected $batchSize;

    /**
     * @var bool
     */
    protected $includeLicenseText;

    /**
     * @var bool
     */
    protected $includeConsolidatedHostLicense;

    /**
     * Constructor
     *
     * @param int $pageNumber
     * @param int $batchSize
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType $queryParams
     * @param bool $includeLicenseText
     * @param bool $includeConsolidatedHostLicense
     */
    public function __construct(
        int $pageNumber,
        int $batchSize,
        \Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType $queryParams = null,
        bool $includeLicenseText = null,
        bool $includeConsolidatedHostLicense = null
    ) {
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
        $this->queryParams = $queryParams ?? [];
        $this->includeLicenseText = $includeLicenseText;
        $this->includeConsolidatedHostLicense = $includeConsolidatedHostLicense;
    }

    /**
     * create a new instance of this class
     *
     * @param int $pageNumber
     * @param int $batchSize
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType $queryParams
     * @param bool $includeLicenseText
     * @param bool $includeConsolidatedHostLicense
     */
    public static function create(
        int $pageNumber,
        int $batchSize,
        \Flexsim\FlexnetOperations\Type\FulfillmentsQueryParametersType $queryParams = null,
        bool $includeLicenseText = null,
        bool $includeConsolidatedHostLicense = null
    ) {
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
