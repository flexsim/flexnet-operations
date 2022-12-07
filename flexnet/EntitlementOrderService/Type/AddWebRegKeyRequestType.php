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
     * @param  \Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|array<\Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType>  $webRegKeyData
     * @param  bool|null  $processSync
     */
    public static function create(AddWebRegKeyDataType|array $webRegKeyData, bool|null $processSync = null)
    {
        return new static(...\func_get_args());
    }

    public function __construct(AddWebRegKeyDataType $webRegKeyData, bool $processSync)
    {
        $this->webRegKeyData = $webRegKeyData;
        $this->processSync = $processSync;
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
     * @return AddWebRegKeyRequestType
     */
    public function withWebRegKeyData(AddWebRegKeyDataType|array $webRegKeyData): AddWebRegKeyRequestType
    {
        $new = clone $this;
        $new->webRegKeyData = $webRegKeyData;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getProcessSync(): bool|null
    {
        return $this->processSync;
    }

    /**
     * @param  bool|null  $processSync
     * @return AddWebRegKeyRequestType
     */
    public function withProcessSync(bool|null $processSync): AddWebRegKeyRequestType
    {
        $new = clone $this;
        $new->processSync = $processSync;

        return $new;
    }
}
