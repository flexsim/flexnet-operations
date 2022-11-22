<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetBulkEntitlementCountRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\SearchBulkEntitlementDataType
     */
    protected $bulkEntitlementSearchCriteria;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\SearchBulkEntitlementDataType  $bulkEntitlementSearchCriteria
     */
    public function __construct(SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria)
    {
        $this->bulkEntitlementSearchCriteria = $bulkEntitlementSearchCriteria;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\SearchBulkEntitlementDataType  $bulkEntitlementSearchCriteria
     */
    public static function create(SearchBulkEntitlementDataType $bulkEntitlementSearchCriteria)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SearchBulkEntitlementDataType
     */
    public function getBulkEntitlementSearchCriteria()
    {
        return $this->bulkEntitlementSearchCriteria;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\SearchBulkEntitlementDataType  $bulkEntitlementSearchCriteria
     * @return $this
     */
    public function setBulkEntitlementSearchCriteria($bulkEntitlementSearchCriteria)
    {
        $this->bulkEntitlementSearchCriteria = $bulkEntitlementSearchCriteria;

        return $this;
    }
}
