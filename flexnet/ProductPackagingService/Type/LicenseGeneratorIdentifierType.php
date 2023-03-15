<?php

namespace Flexnet\ProductPackagingService\Type;

class LicenseGeneratorIdentifierType
{
    /**
     * @var string|null
     */
    private $uniqueId;

    /**
     * @var \Flexnet\ProductPackagingService\Type\LicenseGeneratorPKType|null
     */
    private $primaryKeys;

    /**
     * Constructor
     *
     * @param  string|null  $uniqueId
     * @param  \Flexnet\ProductPackagingService\Type\LicenseGeneratorPKType|null  $primaryKeys
     */
    public function __construct(string|null $uniqueId = null, LicenseGeneratorPKType|null $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    /**
     * @param  string|null  $uniqueId
     * @param  \Flexnet\ProductPackagingService\Type\LicenseGeneratorPKType|null  $primaryKeys
     */
    public static function create(string|null $uniqueId = null, LicenseGeneratorPKType|null $primaryKeys = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string|null
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string|null $uniqueId): LicenseGeneratorIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\LicenseGeneratorPKType|null
     */
    public function getPrimaryKeys(): LicenseGeneratorPKType|null
    {
        return $this->primaryKeys;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseGeneratorPKType|null  $primaryKeys
     */
    public function withPrimaryKeys(LicenseGeneratorPKType|null $primaryKeys): LicenseGeneratorIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
