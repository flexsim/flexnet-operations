<?php

namespace Flexnet\EntitlementOrderService\Type;

class CancelLicensePolicyDataType
{
    /**
     * @var bool
     */
    private $isCancelLicense;

    /**
     * Constructor
     */
    public function __construct(bool $isCancelLicense)
    {
        $this->isCancelLicense = $isCancelLicense;
    }

    public static function create(bool $isCancelLicense)
    {
        return new static(...\func_get_args());
    }

    public function getIsCancelLicense(): bool
    {
        return $this->isCancelLicense;
    }

    public function withIsCancelLicense(bool $isCancelLicense): \Flexnet\EntitlementOrderService\Type\CancelLicensePolicyDataType
    {
        $new = clone $this;
        $new->isCancelLicense = $isCancelLicense;

        return $new;
    }
}
