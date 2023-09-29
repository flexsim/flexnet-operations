<?php

namespace Flexnet\ProductPackagingService\Type;

class LicenseModelIdentifierType
{
    /**
     * @var string|null
     */
    private $uniqueId;

    /**
     * @var \Flexnet\ProductPackagingService\Type\LicenseModelPKType|null
     */
    private $primaryKeys;

    /**
     * Constructor
     */
    public function __construct(string $uniqueId = null, LicenseModelPKType $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    public static function create(string $uniqueId = null, LicenseModelPKType $primaryKeys = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): ?string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(?string $uniqueId): LicenseModelIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getPrimaryKeys(): ?LicenseModelPKType
    {
        return $this->primaryKeys;
    }

    public function withPrimaryKeys(?LicenseModelPKType $primaryKeys): LicenseModelIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
