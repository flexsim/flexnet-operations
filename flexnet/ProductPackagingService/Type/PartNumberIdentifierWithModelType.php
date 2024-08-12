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
     */
    public function __construct(?string $uniqueId = null, ?\Flexnet\ProductPackagingService\Type\PartNumberPKType $primaryKeys = null, ?\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType $licenseModel = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
        $this->licenseModel = $licenseModel;
    }

    public static function create(?string $uniqueId = null, ?\Flexnet\ProductPackagingService\Type\PartNumberPKType $primaryKeys = null, ?\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType $licenseModel = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): ?string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(?string $uniqueId): \Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getPrimaryKeys(): ?\Flexnet\ProductPackagingService\Type\PartNumberPKType
    {
        return $this->primaryKeys;
    }

    public function withPrimaryKeys(?\Flexnet\ProductPackagingService\Type\PartNumberPKType $primaryKeys): \Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }

    public function getLicenseModel(): ?\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType
    {
        return $this->licenseModel;
    }

    public function withLicenseModel(?\Flexnet\ProductPackagingService\Type\LicenseModelIdentifierType $licenseModel): \Flexnet\ProductPackagingService\Type\PartNumberIdentifierWithModelType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }
}
