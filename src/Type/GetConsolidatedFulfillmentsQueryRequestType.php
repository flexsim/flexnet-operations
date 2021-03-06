<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetConsolidatedFulfillmentsQueryRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\ConsolidatedFulfillmentsQPType
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
     * Constructor
     *
     * @param int $pageNumber
     * @param int $batchSize
     * @param \Flexsim\FlexnetOperations\Type\ConsolidatedFulfillmentsQPType $queryParams
     * @param bool $includeLicenseText
     */
    public function __construct(
        int $pageNumber,
        int $batchSize,
        \Flexsim\FlexnetOperations\Type\ConsolidatedFulfillmentsQPType $queryParams = [],
        bool $includeLicenseText = null
    ) {
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
        $this->queryParams = $queryParams;
        $this->includeLicenseText = $includeLicenseText;
    }

    /**
     * create a new instance of this class
     *
     * @param int $pageNumber
     * @param int $batchSize
     * @param \Flexsim\FlexnetOperations\Type\ConsolidatedFulfillmentsQPType $queryParams
     * @param bool $includeLicenseText
     */
    public static function create(
        int $pageNumber,
        int $batchSize,
        \Flexsim\FlexnetOperations\Type\ConsolidatedFulfillmentsQPType $queryParams = [],
        bool $includeLicenseText = null
    ) {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ConsolidatedFulfillmentsQPType
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ConsolidatedFulfillmentsQPType $queryParams
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
}
