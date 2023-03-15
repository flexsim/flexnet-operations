<?php

namespace Flexnet\LicenseService\Type;

class FulfillmentPKType
{
    /**
     * @var string
     */
    private $fulfillmentId;

    /**
     * Constructor
     */
    public function __construct(string $fulfillmentId)
    {
        $this->fulfillmentId = $fulfillmentId;
    }

    public static function create(string $fulfillmentId)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillmentId(): string
    {
        return $this->fulfillmentId;
    }

    public function withFulfillmentId(string $fulfillmentId): FulfillmentPKType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }
}
