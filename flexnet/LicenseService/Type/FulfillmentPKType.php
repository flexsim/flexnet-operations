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
     *
     * @param  string  $fulfillmentId
     */
    public function __construct(string $fulfillmentId)
    {
        $this->fulfillmentId = $fulfillmentId;
    }

    /**
     * @param  string  $fulfillmentId
     */
    public static function create(string $fulfillmentId)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getFulfillmentId(): string
    {
        return $this->fulfillmentId;
    }

    /**
     * @param  string  $fulfillmentId
     * @return FulfillmentPKType
     */
    public function withFulfillmentId(string $fulfillmentId): FulfillmentPKType
    {
        $new = clone $this;
        $new->fulfillmentId = $fulfillmentId;

        return $new;
    }
}
