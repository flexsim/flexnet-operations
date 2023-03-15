<?php

namespace Flexnet\LicenseService\Type;

class LicenseModelIdentifierType
{
    /**
     * @var string|null
     */
    private $uniqueId;

    /**
     * @var \Flexnet\LicenseService\Type\LicenseModelPKType|null
     */
    private $primaryKeys;

    /**
     * Constructor
     *
     * @param  string|null  $uniqueId
     * @param  \Flexnet\LicenseService\Type\LicenseModelPKType|null  $primaryKeys
     */
    public function __construct(string|null $uniqueId = null, LicenseModelPKType|null $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    /**
     * @param  string|null  $uniqueId
     * @param  \Flexnet\LicenseService\Type\LicenseModelPKType|null  $primaryKeys
     */
    public static function create(string|null $uniqueId = null, LicenseModelPKType|null $primaryKeys = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string|null
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string|null $uniqueId): LicenseModelIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\LicenseModelPKType|null
     */
    public function getPrimaryKeys(): LicenseModelPKType|null
    {
        return $this->primaryKeys;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\LicenseModelPKType|null  $primaryKeys
     */
    public function withPrimaryKeys(LicenseModelPKType|null $primaryKeys): LicenseModelIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
