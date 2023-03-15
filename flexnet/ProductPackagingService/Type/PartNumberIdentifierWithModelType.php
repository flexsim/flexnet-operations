<?php

namespace Flexnet\ProductPackagingService\Type;

class PartNumberIdentifierWithModelType
{
    /**
     * @var string|null
     */
    private $uniqueId;

    /**
     * @var \Flexnet\ProductPackagingService\Type\PartNumberPKType|null
     */
    private $primaryKeys;

    /**
     * @var \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|null
     */
    private $licenseModel;

    /**
     * Constructor
     *
     * @param  string|null  $uniqueId
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberPKType|null  $primaryKeys
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|null  $licenseModel
     */
    public function __construct(string|null $uniqueId = null, PartNumberPKType|null $primaryKeys = null, LicenseModelIdentifierType|null $licenseModel = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
        $this->licenseModel = $licenseModel;
    }

    /**
     * @param  string|null  $uniqueId
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberPKType|null  $primaryKeys
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|null  $licenseModel
     */
    public static function create(string|null $uniqueId = null, PartNumberPKType|null $primaryKeys = null, LicenseModelIdentifierType|null $licenseModel = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string|null
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string|null $uniqueId): PartNumberIdentifierWithModelType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\PartNumberPKType|null
     */
    public function getPrimaryKeys(): PartNumberPKType|null
    {
        return $this->primaryKeys;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\PartNumberPKType|null  $primaryKeys
     */
    public function withPrimaryKeys(PartNumberPKType|null $primaryKeys): PartNumberIdentifierWithModelType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|null
     */
    public function getLicenseModel(): LicenseModelIdentifierType|null
    {
        return $this->licenseModel;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType|null  $licenseModel
     */
    public function withLicenseModel(LicenseModelIdentifierType|null $licenseModel): PartNumberIdentifierWithModelType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }
}
