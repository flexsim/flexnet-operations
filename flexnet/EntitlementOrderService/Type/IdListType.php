<?php

namespace Flexnet\EntitlementOrderService\Type;

class IdListType
{
    /**
     * @var string|array<string>
     */
    private $id;

    /**
     * Constructor
     *
     * @param  string|array<string>  $id
     */
    public function __construct(string|array $id)
    {
        $this->id = $id;
    }

    /**
     * @param  string|array<string>  $id
     */
    public static function create(string|array $id)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string|array<string>
     */
    public function getId(): string|array
    {
        return $this->id;
    }

    /**
     * @param  string|array<string>  $id
     */
    public function withId(string|array $id): \Flexnet\EntitlementOrderService\Type\IdListType
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }
}
