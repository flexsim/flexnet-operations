<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SearchActivatableItemRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SearchActivatableItemDataType
     */
    protected $activatableItemSearchCriteria;

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
     * @var \Flexsim\FlexnetOperations\Type\SearchActivatableItemDataType $activatableItemSearchCriteria
     * @var int $batchSize
     * @var int $pageNumber
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SearchActivatableItemDataType $activatableItemSearchCriteria, int $batchSize, int $pageNumber = null)
    {
        $this->activatableItemSearchCriteria = $activatableItemSearchCriteria;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SearchActivatableItemDataType $activatableItemSearchCriteria
     * @var int $batchSize
     * @var int $pageNumber
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SearchActivatableItemDataType $activatableItemSearchCriteria, int $batchSize, int $pageNumber = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SearchActivatableItemDataType
     */
    public function getActivatableItemSearchCriteria()
    {
        return $this->activatableItemSearchCriteria;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SearchActivatableItemDataType $activatableItemSearchCriteria
     * @return $this
     */
    public function setActivatableItemSearchCriteria($activatableItemSearchCriteria)
    {
        $this->activatableItemSearchCriteria = $activatableItemSearchCriteria;
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
