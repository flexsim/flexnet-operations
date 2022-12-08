<?php

namespace Flexnet\LicenseService\Type;

class AccountIdentifierType
{
    /**
     * @var string|null
     */
    private $uniqueId;

    /**
     * @var \Flexnet\LicenseService\Type\AccountPKType|null
     */
    private $primaryKeys;

    /**
     * Constructor
     *
     * @param string|null $uniqueId
     * @param \Flexnet\LicenseService\Type\AccountPKType|null $primaryKeys
     */
    public function __construct(string|null $uniqueId = null, \Flexnet\LicenseService\Type\AccountPKType|null $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    /**
     * @param string|null $uniqueId
     * @param \Flexnet\LicenseService\Type\AccountPKType|null $primaryKeys
     */
    public static function create(string|null $uniqueId = null, \Flexnet\LicenseService\Type\AccountPKType|null $primaryKeys = null)
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
     * @return AccountIdentifierType
     */
    public function withUniqueId(string|null $uniqueId) : \Flexnet\LicenseService\Type\AccountIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\AccountPKType|null
     */
    public function getPrimaryKeys() : \Flexnet\LicenseService\Type\AccountPKType|null
    {
        return $this->primaryKeys;
    }

    /**
     * @param \Flexnet\LicenseService\Type\AccountPKType|null $primaryKeys
     * @return AccountIdentifierType
     */
    public function withPrimaryKeys(\Flexnet\LicenseService\Type\AccountPKType|null $primaryKeys) : \Flexnet\LicenseService\Type\AccountIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}

