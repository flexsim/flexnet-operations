<?php

namespace Flexnet\EntitlementOrderService\Type;

class AddWebRegKeyDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    private $bulkEntitlement;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\WebRegKeyDataType
     */
    private $webRegKeys;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $bulkEntitlement, \Flexnet\EntitlementOrderService\Type\WebRegKeyDataType $webRegKeys)
    {
        $this->bulkEntitlement = $bulkEntitlement;
        $this->webRegKeys = $webRegKeys;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $bulkEntitlement, \Flexnet\EntitlementOrderService\Type\WebRegKeyDataType $webRegKeys)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntitlement(): \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
    {
        return $this->bulkEntitlement;
    }

    public function withBulkEntitlement(\Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType $bulkEntitlement): \Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType
    {
        $new = clone $this;
        $new->bulkEntitlement = $bulkEntitlement;

        return $new;
    }

    public function getWebRegKeys(): \Flexnet\EntitlementOrderService\Type\WebRegKeyDataType
    {
        return $this->webRegKeys;
    }

    public function withWebRegKeys(\Flexnet\EntitlementOrderService\Type\WebRegKeyDataType $webRegKeys): \Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType
    {
        $new = clone $this;
        $new->webRegKeys = $webRegKeys;

        return $new;
    }
}
