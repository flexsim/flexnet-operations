<?php

namespace Flexnet\LicenseService\Type;

class LicenseTechnologyIdentifierType
{
    /**
     * @var string|null
     */
    private $uniqueId;

    /**
     * @var \Flexnet\LicenseService\Type\LicenseTechnologyPKType|null
     */
    private $primaryKeys;

    /**
     * Constructor
     */
    public function __construct(?string $uniqueId = null, ?\Flexnet\LicenseService\Type\LicenseTechnologyPKType $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    public static function create(?string $uniqueId = null, ?\Flexnet\LicenseService\Type\LicenseTechnologyPKType $primaryKeys = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): ?string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(?string $uniqueId): \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getPrimaryKeys(): ?\Flexnet\LicenseService\Type\LicenseTechnologyPKType
    {
        return $this->primaryKeys;
    }

    public function withPrimaryKeys(?\Flexnet\LicenseService\Type\LicenseTechnologyPKType $primaryKeys): \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
