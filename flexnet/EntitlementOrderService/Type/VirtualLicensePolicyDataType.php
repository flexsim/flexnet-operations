<?php

namespace Flexnet\EntitlementOrderService\Type;

class VirtualLicensePolicyDataType
{
    /**
     * @var bool
     */
    private $isVirtualLicense;

    /**
     * Constructor
     *
     * @param  bool  $isVirtualLicense
     */
    public function __construct(bool $isVirtualLicense)
    {
        $this->isVirtualLicense = $isVirtualLicense;
    }

    /**
     * @param  bool  $isVirtualLicense
     */
    public static function create(bool $isVirtualLicense)
    {
        return new static(...\func_get_args());
    }

    public function getIsVirtualLicense(): bool
    {
        return $this->isVirtualLicense;
    }

    public function withIsVirtualLicense(bool $isVirtualLicense): VirtualLicensePolicyDataType
    {
        $new = clone $this;
        $new->isVirtualLicense = $isVirtualLicense;

        return $new;
    }
}
