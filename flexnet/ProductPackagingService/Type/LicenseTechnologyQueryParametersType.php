<?php

namespace Flexnet\ProductPackagingService\Type;

class LicenseTechnologyQueryParametersType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    private $name;

    /**
     * Constructor
     */
    public function __construct(SimpleQueryType $name = null)
    {
        $this->name = $name;
    }

    public static function create(SimpleQueryType $name = null)
    {
        return new static(...\func_get_args());
    }

    public function getName(): ?SimpleQueryType
    {
        return $this->name;
    }

    public function withName(?SimpleQueryType $name): LicenseTechnologyQueryParametersType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }
}
