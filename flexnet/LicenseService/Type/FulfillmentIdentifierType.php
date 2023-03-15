<?php

namespace Flexnet\LicenseService\Type;

class FulfillmentIdentifierType
{
    /**
     * @var string|null
     */
    private $uniqueId;

    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentPKType|null
     */
    private $primaryKeys;

    /**
     * Constructor
     *
     * @param  string|null  $uniqueId
     * @param  \Flexnet\LicenseService\Type\FulfillmentPKType|null  $primaryKeys
     */
    public function __construct(string|null $uniqueId = null, FulfillmentPKType|null $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    /**
     * @param  string|null  $uniqueId
     * @param  \Flexnet\LicenseService\Type\FulfillmentPKType|null  $primaryKeys
     */
    public static function create(string|null $uniqueId = null, FulfillmentPKType|null $primaryKeys = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string|null
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string|null $uniqueId): FulfillmentIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentPKType|null
     */
    public function getPrimaryKeys(): FulfillmentPKType|null
    {
        return $this->primaryKeys;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentPKType|null  $primaryKeys
     */
    public function withPrimaryKeys(FulfillmentPKType|null $primaryKeys): FulfillmentIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
