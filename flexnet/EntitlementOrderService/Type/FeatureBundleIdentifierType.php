<?php

namespace Flexnet\EntitlementOrderService\Type;

class FeatureBundleIdentifierType
{
    /**
     * @var string|null
     */
    private $uniqueId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\FeatureBundlePKType|null
     */
    private $primaryKeys;

    /**
     * Constructor
     *
     * @param  string|null  $uniqueId
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureBundlePKType|null  $primaryKeys
     */
    public function __construct(string|null $uniqueId = null, FeatureBundlePKType|null $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    /**
     * @param  string|null  $uniqueId
     * @param  \Flexnet\EntitlementOrderService\Type\FeatureBundlePKType|null  $primaryKeys
     */
    public static function create(string|null $uniqueId = null, FeatureBundlePKType|null $primaryKeys = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string|null
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string|null $uniqueId): FeatureBundleIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    public function getPrimaryKeys(): FeatureBundlePKType|null
    {
        return $this->primaryKeys;
    }

    public function withPrimaryKeys(FeatureBundlePKType|null $primaryKeys): FeatureBundleIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
