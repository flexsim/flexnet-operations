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
     */
    public function __construct(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, \DateTimeInterface $startDate, \DateTimeInterface $endDate, ?string $shipToEmail = null, ?string $shipToAddress = null)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
    }

    public static function create(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, \DateTimeInterface $startDate, \DateTimeInterface $endDate, ?string $shipToEmail = null, ?string $shipToAddress = null)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillmentIdentifier(): \Flexnet\LicenseService\Type\FulfillmentIdentifierType
    {
        return $this->fulfillmentIdentifier;
    }

    public function withFulfillmentIdentifier(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier): \Flexnet\LicenseService\Type\StopGapFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $new;
    }

    public function getStartDate(): \DateTimeInterface
    {
        return $this->startDate;
    }

    public function withStartDate(\DateTimeInterface $startDate): \Flexnet\LicenseService\Type\StopGapFulfillmentDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    public function getEndDate(): \DateTimeInterface
    {
        return $this->endDate;
    }

    public function withEndDate(\DateTimeInterface $endDate): \Flexnet\LicenseService\Type\StopGapFulfillmentDataType
    {
        $new = clone $this;
        $new->endDate = $endDate;

        return $new;
    }

    public function getShipToEmail(): ?string
    {
        return $this->shipToEmail;
    }

    public function withShipToEmail(?string $shipToEmail): \Flexnet\LicenseService\Type\StopGapFulfillmentDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    public function getShipToAddress(): ?string
    {
        return $this->shipToAddress;
    }

    public function withShipToAddress(?string $shipToAddress): \Flexnet\LicenseService\Type\StopGapFulfillmentDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }
}
