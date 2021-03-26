<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GenerateCloneDetectionReportRequest implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EnterpriseIds
     */
    private $enterpriseIds;

    /**
     * @var \DateTimeInterface
     */
    private $startDate;

    /**
     * @var \DateTimeInterface
     */
    private $endDate;

    /**
     * @var int
     */
    private $pageNumber;

    /**
     * @var int
     */
    private $batchSize;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\EnterpriseIds $enterpriseIds
     * @var \DateTimeInterface $startDate
     * @var \DateTimeInterface $endDate
     * @var int $pageNumber
     * @var int $batchSize
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EnterpriseIds $enterpriseIds = null, \DateTimeInterface $startDate, \DateTimeInterface $endDate, int $pageNumber = null, int $batchSize = null)
    {
        $this->enterpriseIds = $enterpriseIds;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EnterpriseIds $enterpriseIds
     * @var \DateTimeInterface $startDate
     * @var \DateTimeInterface $endDate
     * @var int $pageNumber
     * @var int $batchSize
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EnterpriseIds $enterpriseIds = null, \DateTimeInterface $startDate, \DateTimeInterface $endDate, int $pageNumber = null, int $batchSize = null)
    {
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
