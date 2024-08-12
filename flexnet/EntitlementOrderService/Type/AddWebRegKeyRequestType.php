<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AddWebRegKeyRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType>
     */
    private $webRegKeyData;

    /**
     * @var bool|null
     */
    private $processSync;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType>  $webRegKeyData
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|array $webRegKeyData, ?bool $processSync = null)
    {
        $this->webRegKeyData = $webRegKeyData;
        $this->processSync = $processSync;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType>  $webRegKeyData
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|array $webRegKeyData, ?bool $processSync = null)
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
    public function withWebRegKeyData(\Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|array $webRegKeyData): \Flexnet\EntitlementOrderService\Type\AddWebRegKeyRequestType
    {
        $new = clone $this;
        $new->webRegKeyData = $webRegKeyData;

        return $new;
    }

    public function getProcessSync(): ?bool
    {
        return $this->processSync;
    }

    public function withProcessSync(?bool $processSync): \Flexnet\EntitlementOrderService\Type\AddWebRegKeyRequestType
    {
        $new = clone $this;
        $new->processSync = $processSync;

        return $new;
    }
}
