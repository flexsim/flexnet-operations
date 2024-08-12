<?php

namespace Flexnet\ProductPackagingService\Type;

class VersionFormatQueryType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\VersionFormatType
     */
    private $value;

    /**
     * @var \Flexnet\ProductPackagingService\Type\SimpleSearchType
     */
    private $searchType;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\VersionFormatType $value, \Flexnet\ProductPackagingService\Type\SimpleSearchType $searchType)
    {
        $this->value = $value;
        $this->searchType = $searchType;
    }

    public static function create(\Flexnet\ProductPackagingService\Type\VersionFormatType $value, \Flexnet\ProductPackagingService\Type\SimpleSearchType $searchType)
    {
        return new static(...\func_get_args());
    }

    public function getValue(): \Flexnet\ProductPackagingService\Type\VersionFormatType
    {
        return $this->value;
    }

    public function withValue(\Flexnet\ProductPackagingService\Type\VersionFormatType $value): \Flexnet\ProductPackagingService\Type\VersionFormatQueryType
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    public function getSearchType(): \Flexnet\ProductPackagingService\Type\SimpleSearchType
    {
        return $this->searchType;
    }

    public function withSearchType(\Flexnet\ProductPackagingService\Type\SimpleSearchType $searchType): \Flexnet\ProductPackagingService\Type\VersionFormatQueryType
    {
        $new = clone $this;
        $new->searchType = $searchType;

        return $new;
    }
}
