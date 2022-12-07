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
     *
     * @param  bool  $isCancelLicense
     */
    public function __construct(bool $isCancelLicense)
    {
        $this->isCancelLicense = $isCancelLicense;
    }

    /**
     * @param  bool  $isCancelLicense
     */
    public static function create(bool $isCancelLicense)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return bool
     */
    public function getIsCancelLicense(): bool
    {
        return $this->isCancelLicense;
    }

    /**
     * @param  bool  $isCancelLicense
     * @return CancelLicensePolicyDataType
     */
    public function withIsCancelLicense(bool $isCancelLicense): CancelLicensePolicyDataType
    {
        $new = clone $this;
        $new->isCancelLicense = $isCancelLicense;

        return $new;
    }
}
