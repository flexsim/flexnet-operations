<?php

namespace Flexnet\LicenseService\Type;

class TypeLineItem
{
    /**
     * @var string
     */
    private $activationId;

    /**
     * @var string|null
     */
    private $Reason;

    /**
     * @var string|null
     */
    private $Count;

    /**
     * @var \Flexnet\LicenseService\Type\Dictionary|null
     */
    private $VendorDictionary;

    /**
     * Constructor
     */
    public function __construct(string $activationId, ?string $Reason = null, ?string $Count = null, ?\Flexnet\LicenseService\Type\Dictionary $VendorDictionary = null)
    {
        $this->activationId = $activationId;
        $this->Reason = $Reason;
        $this->Count = $Count;
        $this->VendorDictionary = $VendorDictionary;
    }

    public static function create(string $activationId, ?string $Reason = null, ?string $Count = null, ?\Flexnet\LicenseService\Type\Dictionary $VendorDictionary = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): string
    {
        return $this->activationId;
    }

    public function withActivationId(string $activationId): \Flexnet\LicenseService\Type\TypeLineItem
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->Reason;
    }

    public function withReason(?string $Reason): \Flexnet\LicenseService\Type\TypeLineItem
    {
        $new = clone $this;
        $new->Reason = $Reason;

        return $new;
    }

    public function getCount(): ?string
    {
        return $this->Count;
    }

    public function withCount(?string $Count): \Flexnet\LicenseService\Type\TypeLineItem
    {
        $new = clone $this;
        $new->Count = $Count;

        return $new;
    }

    public function getVendorDictionary(): ?\Flexnet\LicenseService\Type\Dictionary
    {
        return $this->VendorDictionary;
    }

    public function withVendorDictionary(?\Flexnet\LicenseService\Type\Dictionary $VendorDictionary): \Flexnet\LicenseService\Type\TypeLineItem
    {
        $new = clone $this;
        $new->VendorDictionary = $VendorDictionary;

        return $new;
    }
}
