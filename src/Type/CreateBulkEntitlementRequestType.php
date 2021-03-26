<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateBulkEntitlementRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateBulkEntitlementDataType
     */
    private $bulkEntitlement;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateBulkEntitlementDataType $bulkEntitlement
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreateBulkEntitlementDataType $bulkEntitlement)
    {
        $this->bulkEntitlement = $bulkEntitlement;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateBulkEntitlementDataType $bulkEntitlement
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CreateBulkEntitlementDataType $bulkEntitlement)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateBulkEntitlementDataType
     */
    public function getBulkEntitlement()
    {
        return $this->bulkEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateBulkEntitlementDataType $bulkEntitlement
     * @return $this
     */
    public function setBulkEntitlement($bulkEntitlement)
    {
        $this->bulkEntitlement = $bulkEntitlement;
        return $this;
    }


}
