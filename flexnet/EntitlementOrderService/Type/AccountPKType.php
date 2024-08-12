<?php

namespace Flexnet\EntitlementOrderService\Type;

class AccountPKType
{
    /**
     * @var string
     */
    private $id;

    /**
     * Constructor
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public static function create(string $id)
    {
        return new static(...\func_get_args());
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function withId(string $id): \Flexnet\EntitlementOrderService\Type\AccountPKType
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }
}
