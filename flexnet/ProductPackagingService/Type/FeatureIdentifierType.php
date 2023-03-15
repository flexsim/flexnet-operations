<?php

namespace Flexnet\ProductPackagingService\Type;

class FeatureIdentifierType
{
    /**
     * @var string|null
     */
    private $uniqueId;

    /**
     * @var \Flexnet\ProductPackagingService\Type\FeaturePKType|null
     */
    private $primaryKeys;

    /**
     * Constructor
     *
     * @param  string|null  $uniqueId
     * @param  \Flexnet\ProductPackagingService\Type\FeaturePKType|null  $primaryKeys
     */
    public function __construct(string|null $uniqueId = null, FeaturePKType|null $primaryKeys = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
    }

    /**
     * @param  string|null  $uniqueId
     * @param  \Flexnet\ProductPackagingService\Type\FeaturePKType|null  $primaryKeys
     */
    public static function create(string|null $uniqueId = null, FeaturePKType|null $primaryKeys = null)
    {
        return new static(...\func_get_args());
    }

    public function getUniqueId(): string|null
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string|null $uniqueId): FeatureIdentifierType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\FeaturePKType|null
     */
    public function getPrimaryKeys(): FeaturePKType|null
    {
        return $this->primaryKeys;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\FeaturePKType|null  $primaryKeys
     */
    public function withPrimaryKeys(FeaturePKType|null $primaryKeys): FeatureIdentifierType
    {
        $new = clone $this;
        $new->primaryKeys = $primaryKeys;

        return $new;
    }
}
