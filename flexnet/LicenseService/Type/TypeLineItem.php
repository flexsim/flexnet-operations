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
     *
     * @param  string  $activationId
     * @param  string|null  $Reason
     * @param  string|null  $Count
     * @param  \Flexnet\LicenseService\Type\Dictionary|null  $VendorDictionary
     */
    public function __construct(string $activationId, string|null $Reason = null, string|null $Count = null, Dictionary|null $VendorDictionary = null)
    {
        $this->activationId = $activationId;
        $this->Reason = $Reason;
        $this->Count = $Count;
        $this->VendorDictionary = $VendorDictionary;
    }

    /**
     * @param  string  $activationId
     * @param  string|null  $Reason
     * @param  string|null  $Count
     * @param  \Flexnet\LicenseService\Type\Dictionary|null  $VendorDictionary
     */
    public static function create(string $activationId, string|null $Reason = null, string|null $Count = null, Dictionary|null $VendorDictionary = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getActivationId(): string
    {
        return $this->activationId;
    }

    /**
     * @param  string  $activationId
     * @return TypeLineItem
     */
    public function withActivationId(string $activationId): TypeLineItem
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getReason(): string|null
    {
        return $this->Reason;
    }

    /**
     * @param  string|null  $Reason
     * @return TypeLineItem
     */
    public function withReason(string|null $Reason): TypeLineItem
    {
        $new = clone $this;
        $new->Reason = $Reason;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getCount(): string|null
    {
        return $this->Count;
    }

    /**
     * @param  string|null  $Count
     * @return TypeLineItem
     */
    public function withCount(string|null $Count): TypeLineItem
    {
        $new = clone $this;
        $new->Count = $Count;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\Dictionary|null
     */
    public function getVendorDictionary(): Dictionary|null
    {
        return $this->VendorDictionary;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\Dictionary|null  $VendorDictionary
     * @return TypeLineItem
     */
    public function withVendorDictionary(Dictionary|null $VendorDictionary): TypeLineItem
    {
        $new = clone $this;
        $new->VendorDictionary = $VendorDictionary;

        return $new;
    }
}
