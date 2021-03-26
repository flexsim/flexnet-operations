<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetProductCategoriesRequestType implements RequestInterface
{

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
    private $returnContainedObjects;

    /**
     * Constructor
     *
     * @var int $pageNumber
     * @var int $batchSize
     * @var bool $returnContainedObjects
     */
    public function __construct(int $pageNumber = null, int $batchSize, bool $returnContainedObjects)
    {
        $this->pageNumber = $pageNumber;
        $this->batchSize = $batchSize;
        $this->returnContainedObjects = $returnContainedObjects;
    }

    /**
     * create a new instance of this class
     *
     * @var int $pageNumber
     * @var int $batchSize
     * @var bool $returnContainedObjects
     */
    public static function create(int $pageNumber = null, int $batchSize, bool $returnContainedObjects)
    {
        return new self(...func_get_args());
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
    public function getReturnContainedObjects()
    {
        return $this->returnContainedObjects;
    }

    /**
     * @param bool $returnContainedObjects
     * @return $this
     */
    public function setReturnContainedObjects($returnContainedObjects)
    {
        $this->returnContainedObjects = $returnContainedObjects;
        return $this;
    }


}

