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
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $endDate
     * @param string|null $shipToEmail
     * @param string|null $shipToAddress
     */
    public function __construct(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, \DateTimeInterface $startDate, \DateTimeInterface $endDate, string|null $shipToEmail = null, string|null $shipToAddress = null)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $endDate
     * @param string|null $shipToEmail
     * @param string|null $shipToAddress
     */
    public static function create(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, \DateTimeInterface $startDate, \DateTimeInterface $endDate, string|null $shipToEmail = null, string|null $shipToAddress = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdentifierType
     */
    public function getFulfillmentIdentifier() : \Flexnet\LicenseService\Type\FulfillmentIdentifierType
    {
        return $this->fulfillmentIdentifier;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @return StopGapFulfillmentDataType
     */
    public function withFulfillmentIdentifier(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier) : \Flexnet\LicenseService\Type\StopGapFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate() : \DateTimeInterface
    {
        return $this->startDate;
    }

    /**
     * @param \DateTimeInterface $startDate
     * @return StopGapFulfillmentDataType
     */
    public function withStartDate(\DateTimeInterface $startDate) : \Flexnet\LicenseService\Type\StopGapFulfillmentDataType
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndDate() : \DateTimeInterface
    {
        return $this->endDate;
    }

    /**
     * @param \DateTimeInterface $endDate
     * @return StopGapFulfillmentDataType
     */
    public function withEndDate(\DateTimeInterface $endDate) : \Flexnet\LicenseService\Type\StopGapFulfillmentDataType
    {
        $new = clone $this;
        $new->endDate = $endDate;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getShipToEmail() : string|null
    {
        return $this->shipToEmail;
    }

    /**
     * @param string|null $shipToEmail
     * @return StopGapFulfillmentDataType
     */
    public function withShipToEmail(string|null $shipToEmail) : \Flexnet\LicenseService\Type\StopGapFulfillmentDataType
    {
        $new = clone $this;
        $new->shipToEmail = $shipToEmail;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getShipToAddress() : string|null
    {
        return $this->shipToAddress;
    }

    /**
     * @param string|null $shipToAddress
     * @return StopGapFulfillmentDataType
     */
    public function withShipToAddress(string|null $shipToAddress) : \Flexnet\LicenseService\Type\StopGapFulfillmentDataType
    {
        $new = clone $this;
        $new->shipToAddress = $shipToAddress;

        return $new;
    }
}

