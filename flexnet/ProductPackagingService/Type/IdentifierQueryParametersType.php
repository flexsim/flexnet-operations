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
     *
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $name
     */
    public function __construct(SimpleQueryType|null $name = null)
    {
        $this->name = $name;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $name
     */
    public static function create(SimpleQueryType|null $name = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    public function getName(): SimpleQueryType|null
    {
        return $this->name;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $name
     */
    public function withName(SimpleQueryType|null $name): IdentifierQueryParametersType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }
}
