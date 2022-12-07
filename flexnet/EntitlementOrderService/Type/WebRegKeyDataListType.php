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
    public function __construct(AddWebRegKeyDataType|array $webRegKeyData)
    {
        $this->webRegKeyData = $webRegKeyData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType>  $webRegKeyData
     */
    public static function create(AddWebRegKeyDataType|array $webRegKeyData)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType>
     */
    public function getWebRegKeyData(): AddWebRegKeyDataType|array
    {
        return $this->webRegKeyData;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType>  $webRegKeyData
     * @return WebRegKeyDataListType
     */
    public function withWebRegKeyData(AddWebRegKeyDataType|array $webRegKeyData): WebRegKeyDataListType
    {
        $new = clone $this;
        $new->webRegKeyData = $webRegKeyData;

        return $new;
    }
}
