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
    public function __construct(string $activationId, string $Reason = null, string $Count = null, Dictionary $VendorDictionary = null)
    {
        $this->activationId = $activationId;
        $this->Reason = $Reason;
        $this->Count = $Count;
        $this->VendorDictionary = $VendorDictionary;
    }

    public static function create(string $activationId, string $Reason = null, string $Count = null, Dictionary $VendorDictionary = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): string
    {
        return $this->activationId;
    }

    public function withActivationId(string $activationId): TypeLineItem
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getReason(): ?string
    {
        return $this->Reason;
    }

    public function withReason(?string $Reason): TypeLineItem
    {
        $new = clone $this;
        $new->Reason = $Reason;

        return $new;
    }

    public function getCount(): ?string
    {
        return $this->Count;
    }

    public function withCount(?string $Count): TypeLineItem
    {
        $new = clone $this;
        $new->Count = $Count;

        return $new;
    }

    public function getVendorDictionary(): ?Dictionary
    {
        return $this->VendorDictionary;
    }

    public function withVendorDictionary(?Dictionary $VendorDictionary): TypeLineItem
    {
        $new = clone $this;
        $new->VendorDictionary = $VendorDictionary;

        return $new;
    }
}
