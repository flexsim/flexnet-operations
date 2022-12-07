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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $bulkEntitlement
     * @param  \Flexnet\EntitlementOrderService\Type\WebRegKeyDataType  $webRegKeys
     */
    public function __construct(EntitlementIdentifierType $bulkEntitlement, WebRegKeyDataType $webRegKeys)
    {
        $this->bulkEntitlement = $bulkEntitlement;
        $this->webRegKeys = $webRegKeys;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $bulkEntitlement
     * @param  \Flexnet\EntitlementOrderService\Type\WebRegKeyDataType  $webRegKeys
     */
    public static function create(EntitlementIdentifierType $bulkEntitlement, WebRegKeyDataType $webRegKeys)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    public function getBulkEntitlement(): EntitlementIdentifierType
    {
        return $this->bulkEntitlement;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType  $bulkEntitlement
     * @return AddWebRegKeyDataType
     */
    public function withBulkEntitlement(EntitlementIdentifierType $bulkEntitlement): AddWebRegKeyDataType
    {
        $new = clone $this;
        $new->bulkEntitlement = $bulkEntitlement;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\WebRegKeyDataType
     */
    public function getWebRegKeys(): WebRegKeyDataType
    {
        return $this->webRegKeys;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\WebRegKeyDataType  $webRegKeys
     * @return AddWebRegKeyDataType
     */
    public function withWebRegKeys(WebRegKeyDataType $webRegKeys): AddWebRegKeyDataType
    {
        $new = clone $this;
        $new->webRegKeys = $webRegKeys;

        return $new;
    }
}
