<?php

namespace Flexnet\EntitlementOrderService\Type;

class WebRegKeyDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType>
     */
    private $webRegKeyData;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType>  $webRegKeyData
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|array $webRegKeyData)
    {
        $this->webRegKeyData = $webRegKeyData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType>  $webRegKeyData
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|array $webRegKeyData)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType>
     */
    public function getWebRegKeyData(): \Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|array
    {
        return $this->webRegKeyData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType>  $webRegKeyData
     */
    public function withWebRegKeyData(\Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|array $webRegKeyData): \Flexnet\EntitlementOrderService\Type\WebRegKeyDataListType
    {
        $new = clone $this;
        $new->webRegKeyData = $webRegKeyData;

        return $new;
    }
}
