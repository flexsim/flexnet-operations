<?php

namespace Flexnet\EntitlementOrderService\Type;

class PartNumberPKType
{
    /**
     * @var string
     */
    private $partId;

    /**
     * Constructor
     */
    public function __construct(string $partId)
    {
        $this->partId = $partId;
    }

    public static function create(string $partId)
    {
        return new static(...\func_get_args());
    }

    public function getPartId(): string
    {
        return $this->partId;
    }

    public function withPartId(string $partId): PartNumberPKType
    {
        $new = clone $this;
        $new->partId = $partId;

        return $new;
    }
}
