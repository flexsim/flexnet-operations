<?php

namespace Flexnet\EntitlementOrderService\Type;

class LicenseModelIdentifierType
{
    /**
     * @var string|null
     */
    private $uniqueId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\LicenseModelPKType|null
     */
    private $primaryKeys;

    /**
     * Constructor
     */
    public function __construct(?string $uniqueId = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelPKType $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    public static function create(?string $uniqueId = null, ?\Flexnet\EntitlementOrderService\Type\LicenseModelPKType $primaryKeys = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): ?string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(?string $uniqueId): \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getPrimaryKeys(): ?\Flexnet\EntitlementOrderService\Type\LicenseModelPKType
    {
        return $this->primaryKeys;
    }

    public function withPrimaryKeys(?\Flexnet\EntitlementOrderService\Type\LicenseModelPKType $primaryKeys): \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
