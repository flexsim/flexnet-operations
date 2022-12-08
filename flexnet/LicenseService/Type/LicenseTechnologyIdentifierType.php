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
     *
     * @param string|null $uniqueId
     * @param \Flexnet\LicenseService\Type\LicenseTechnologyPKType|null $primaryKeys
     */
    public function __construct(string|null $uniqueId = null, \Flexnet\LicenseService\Type\LicenseTechnologyPKType|null $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    /**
     * @param string|null $uniqueId
     * @param \Flexnet\LicenseService\Type\LicenseTechnologyPKType|null $primaryKeys
     */
    public static function create(string|null $uniqueId = null, \Flexnet\LicenseService\Type\LicenseTechnologyPKType|null $primaryKeys = null)
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
     * @return LicenseTechnologyIdentifierType
     */
    public function withUniqueId(string|null $uniqueId) : \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\LicenseTechnologyPKType|null
     */
    public function getPrimaryKeys() : \Flexnet\LicenseService\Type\LicenseTechnologyPKType|null
    {
        return $this->primaryKeys;
    }

    /**
     * @param \Flexnet\LicenseService\Type\LicenseTechnologyPKType|null $primaryKeys
     * @return LicenseTechnologyIdentifierType
     */
    public function withPrimaryKeys(\Flexnet\LicenseService\Type\LicenseTechnologyPKType|null $primaryKeys) : \Flexnet\LicenseService\Type\LicenseTechnologyIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}

