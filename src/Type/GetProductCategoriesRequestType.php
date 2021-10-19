<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetProductCategoriesRequestType extends FlexnetType implements RequestInterface
{

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
    protected $returnContainedObjects;

    /**
     * Constructor
     *
     * @param bool $returnContainedObjects
     * @param int $batchSize
     * @param int $pageNumber
     */
    public function __construct(
        bool $returnContainedObjects,
        int $batchSize,
        int $pageNumber = null,
    ) {
        $this->returnContainedObjects = $returnContainedObjects;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    /**
     * create a new instance of this class
     *
     * @param bool $returnContainedObjects
     * @param int $batchSize
     * @param int $pageNumber
     */
    public static function create(
        bool $returnContainedObjects,
        int $batchSize,
        int $pageNumber = null,
    ) {
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
