<?php

namespace Flexnet\LicenseService\Type;

class ProductIdentifierType
{
    /**
     * @var string|null
     */
    private $uniqueId;

    /**
     * @var \Flexnet\LicenseService\Type\ProductPKType|null
     */
    private $primaryKeys;

    /**
     * Constructor
     *
     * @param string|null $uniqueId
     * @param \Flexnet\LicenseService\Type\ProductPKType|null $primaryKeys
     */
    public function __construct(string|null $uniqueId = null, \Flexnet\LicenseService\Type\ProductPKType|null $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    /**
     * @param string|null $uniqueId
     * @param \Flexnet\LicenseService\Type\ProductPKType|null $primaryKeys
     */
    public static function create(string|null $uniqueId = null, \Flexnet\LicenseService\Type\ProductPKType|null $primaryKeys = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string|null
     */
    public function getUniqueId() : string|null
    {
        return $this->uniqueId;
    }

    /**
     * @param string|null $uniqueId
     * @return ProductIdentifierType
     */
    public function withUniqueId(string|null $uniqueId) : \Flexnet\LicenseService\Type\ProductIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\ProductPKType|null
     */
    public function getPrimaryKeys() : \Flexnet\LicenseService\Type\ProductPKType|null
    {
        return $this->primaryKeys;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ProductPKType|null $primaryKeys
     * @return ProductIdentifierType
     */
    public function withPrimaryKeys(\Flexnet\LicenseService\Type\ProductPKType|null $primaryKeys) : \Flexnet\LicenseService\Type\ProductIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}

