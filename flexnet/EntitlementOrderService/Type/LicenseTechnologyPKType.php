<?php

namespace Flexnet\EntitlementOrderService\Type;

class LicenseTechnologyPKType
{
    /**
     * @var string
     */
    private $name;

    /**
     * Constructor
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public static function create(string $name)
    {
        return new static(...\func_get_args());
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function withName(string $name): LicenseTechnologyPKType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }
}
