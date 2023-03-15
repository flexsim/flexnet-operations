<?php

namespace Flexnet\LicenseService\Type;

class StopGapFulfillmentDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentIdentifierType
     */
    private $fulfillmentIdentifier;

    /**
     * @var \DateTimeInterface
     */
    private $startDate;

    /**
     * @var \DateTimeInterface
     */
    private $endDate;

    /**
     * @var string|null
     */
    private $shipToEmail;

    /**
     * @var string|null
     */
    private $shipToAddress;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     */
    public function __construct(FulfillmentIdentifierType $fulfillmentIdentifier, \DateTimeInterface $startDate, \DateTimeInterface $endDate, string|null $shipToEmail = null, string|null $shipToAddress = null)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     * @param  string|null  $shipToEmail
     * @param  string|null  $shipToAddress
     */
    public static function create(FulfillmentIdentifierType $fulfillmentIdentifier, \DateTimeInterface $startDate, \DateTimeInterface $endDate, string|null $shipToEmail = null, string|null $shipToAddress = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdentifierType
     */
    public function getFulfillmentIdentifier(): FulfillmentIdentifierType
    {
        return $this->fulfillmentIdentifier;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     */
    public function withFulfillmentIdentifier(FulfillmentIdentifierType $fulfillmentIdentifier): StopGapFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $new;
    }

    public function getStartDate(): \DateTimeInterface
    {
        return $this->startDate;
    }

    public function withStartDate(\DateTimeInterface $startDate): StopGapFulfillmentDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getEndDate(): \DateTimeInterface
    {
        return $this->endDate;
    }

    public function withEndDate(\DateTimeInterface $endDate): StopGapFulfillmentDataType
    {
        $new = clone $this;
        $new->endDate = $endDate;

        return $new;
    }

    public function getShipToEmail(): string|null
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(string|null $shipToEmail): StopGapFulfillmentDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): string|null
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(string|null $shipToAddress): StopGapFulfillmentDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }
}
