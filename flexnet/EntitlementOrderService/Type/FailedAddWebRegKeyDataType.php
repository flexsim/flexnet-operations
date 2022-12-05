<?php

namespace Flexnet\EntitlementOrderService\Type;

class FailedAddWebRegKeyDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|null
     */
    private $webRegKeyData;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|null  $webRegKeyData
     * @param  string|null  $reason
     */
    public function __construct(AddWebRegKeyDataType|null $webRegKeyData = null, string|null $reason = null)
    {
        $this->webRegKeyData = $webRegKeyData;
        $this->reason = $reason;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\AddWebRegKeyDataType|null  $webRegKeyData
     * @param  string|null  $reason
     */
    public static function create(AddWebRegKeyDataType|null $webRegKeyData = null, string|null $reason = null)
    {
        return new static(...\func_get_args());
    }

    public function getWebRegKeyData(): AddWebRegKeyDataType|null
    {
        return $this->webRegKeyData;
    }

    public function withWebRegKeyData(AddWebRegKeyDataType|null $webRegKeyData): FailedAddWebRegKeyDataType
    {
        $new = clone $this;
        $new->webRegKeyData = $webRegKeyData;

        return $new;
    }

    public function getReason(): string|null
    {
        return $this->reason;
    }

    public function withReason(string|null $reason): FailedAddWebRegKeyDataType
    {
        $new = clone $this;
        $new->reason = $reason;

        return $new;
    }
}
