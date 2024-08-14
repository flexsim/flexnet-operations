<?php

namespace Flexnet\ProductPackagingService\Type;

class IdentifierQueryParametersType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    private $name;

    /**
     * Constructor
     */
    public function __construct(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $name = null)
    {
        $this->name = $name;
    }

    public static function create(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $name = null)
    {
        return new static(...\func_get_args());
    }

    public function getName(): ?\Flexnet\ProductPackagingService\Type\SimpleQueryType
    {
        return $this->name;
    }

    public function withName(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $name): \Flexnet\ProductPackagingService\Type\IdentifierQueryParametersType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }
}
