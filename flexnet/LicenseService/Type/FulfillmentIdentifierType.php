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
     */
    public function __construct(string $uniqueId = null, FulfillmentPKType $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    public static function create(string $uniqueId = null, FulfillmentPKType $primaryKeys = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): ?string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(?string $uniqueId): FulfillmentIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getPrimaryKeys(): ?FulfillmentPKType
    {
        return $this->primaryKeys;
    }

    public function withPrimaryKeys(?FulfillmentPKType $primaryKeys): FulfillmentIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
