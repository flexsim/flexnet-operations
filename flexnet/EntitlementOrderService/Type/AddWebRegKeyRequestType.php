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
     * @param  bool|null  $processSync
     */
    public function __construct(AddWebRegKeyDataType|array $webRegKeyData, bool|null $processSync = null)
    {
        $this->webRegKeyData = $webRegKeyData;
        $this->processSync = $processSync;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType>  $webRegKeyData
     * @param  bool|null  $processSync
     */
    public static function create(AddWebRegKeyDataType|array $webRegKeyData, bool|null $processSync = null)
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
     */
    public function withWebRegKeyData(AddWebRegKeyDataType|array $webRegKeyData): AddWebRegKeyRequestType
    {
        $new = clone $this;
        $new->webRegKeyData = $webRegKeyData;

        return $new;
    }

    public function getProcessSync(): bool|null
    {
        return $this->processSync;
    }

    public function withProcessSync(bool|null $processSync): AddWebRegKeyRequestType
    {
        $new = clone $this;
        $new->processSync = $processSync;

        return $new;
    }
}
