<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetWebRegKeysQueryRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    protected $bulkEntitlementIdentifier;

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
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType  $bulkEntitlementIdentifier
     * @param  int  $batchSize
     * @param  int  $pageNumber
     */
    public function __construct(EntitlementIdentifierType $bulkEntitlementIdentifier, int $batchSize, int $pageNumber)
    {
        $this->bulkEntitlementIdentifier = $bulkEntitlementIdentifier;
        $this->batchSize = $batchSize;
        $this->pageNumber = $pageNumber;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType  $bulkEntitlementIdentifier
     * @param  int  $batchSize
     * @param  int  $pageNumber
     */
    public static function create(EntitlementIdentifierType $bulkEntitlementIdentifier, int $batchSize, int $pageNumber)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    public function getBulkEntitlementIdentifier()
    {
        return $this->bulkEntitlementIdentifier;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType  $bulkEntitlementIdentifier
     * @return $this
     */
    public function setBulkEntitlementIdentifier($bulkEntitlementIdentifier)
    {
        $this->bulkEntitlementIdentifier = $bulkEntitlementIdentifier;

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
     * @param  int  $batchSize
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
     * @param  int  $pageNumber
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->pageNumber = $pageNumber;

        return $this;
    }
}
