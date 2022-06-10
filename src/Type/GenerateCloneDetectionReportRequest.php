<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GenerateCloneDetectionReportRequest extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\EnterpriseIds
     */
    protected $enterpriseIds;

    /**
     * @var \DateTimeInterface
     */
    protected $startDate;

    /**
     * @var \DateTimeInterface
     */
    protected $endDate;

    /**
     * @var int
     */
    protected $pageNumber;

    /**
     * @var int
     */
    protected $batchSize;

    /**
     * Constructor
     *
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $endDate
     * @param \Flexsim\FlexnetOperations\Type\EnterpriseIds $enterpriseIds
     * @param int $pageNumber
     * @param int $batchSize
     */
    public function __construct(
        \DateTimeInterface $startDate,
        \DateTimeInterface $endDate,
        \Flexsim\FlexnetOperations\Type\EnterpriseIds $enterpriseIds = null,
        int $pageNumber = null,
        int $batchSize = null
    ) {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->enterpriseIds = $enterpriseIds;
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
    }

    /**
     * create a new instance of this class
     *
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $endDate
     * @param \Flexsim\FlexnetOperations\Type\EnterpriseIds $enterpriseIds
     * @param int $pageNumber
     * @param int $batchSize
     */
    public static function create(
        \DateTimeInterface $startDate,
        \DateTimeInterface $endDate,
        \Flexsim\FlexnetOperations\Type\EnterpriseIds $enterpriseIds = null,
        int $pageNumber = null,
        int $batchSize = null
    ) {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EnterpriseIds
     */
    public function getEnterpriseIds()
    {
        return $this->enterpriseIds;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EnterpriseIds $enterpriseIds
     * @return $this
     */
    public function setEnterpriseIds($enterpriseIds)
    {
        $this->enterpriseIds = $enterpriseIds;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTimeInterface $startDate
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTimeInterface $endDate
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

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
}
