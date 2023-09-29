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
    public function __construct(EntitlementIdentifierType $bulkEntitlement, WebRegKeyDataType $webRegKeys)
    {
        $this->bulkEntitlement = $bulkEntitlement;
        $this->webRegKeys = $webRegKeys;
    }

    public static function create(EntitlementIdentifierType $bulkEntitlement, WebRegKeyDataType $webRegKeys)
    {
        return new static(...\func_get_args());
    }

    public function getBulkEntitlement(): EntitlementIdentifierType
    {
        return $this->bulkEntitlement;
    }

    public function withBulkEntitlement(EntitlementIdentifierType $bulkEntitlement): AddWebRegKeyDataType
    {
        $new = clone $this;
        $new->bulkEntitlement = $bulkEntitlement;

        return $new;
    }

    public function getWebRegKeys(): WebRegKeyDataType
    {
        return $this->webRegKeys;
    }

    public function withWebRegKeys(WebRegKeyDataType $webRegKeys): AddWebRegKeyDataType
    {
        $new = clone $this;
        $new->webRegKeys = $webRegKeys;

        return $new;
    }
}
