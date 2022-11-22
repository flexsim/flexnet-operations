<?php

namespace Flexsim\FlexnetOperations\Type;

class StopGapFulfillmentDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    protected $fulfillmentIdentifier;

    /**
     * @var \DateTimeInterface
     */
    protected $startDate;

    /**
     * @var \DateTimeInterface
     */
    protected $endDate;

    /**
     * @var string
     */
    protected $shipToEmail;

    /**
     * @var string
     */
    protected $shipToAddress;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     * @param  \DateTimeInterface  $startDate
     * @param  \DateTimeInterface  $endDate
     * @param  string  $shipToEmail
     * @param  string  $shipToAddress
     */
    public function __construct(FulfillmentIdentifierType $fulfillmentIdentifier, \DateTimeInterface $startDate, \DateTimeInterface $endDate, string $shipToEmail = null, string $shipToAddress = null)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     * @param  \DateTimeInterface  $startDate
     * @param  \DateTimeInterface  $endDate
     * @param  string  $shipToEmail
     * @param  string  $shipToAddress
     */
    public static function create(FulfillmentIdentifierType $fulfillmentIdentifier, \DateTimeInterface $startDate, \DateTimeInterface $endDate, string $shipToEmail = null, string $shipToAddress = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    public function getFulfillmentIdentifier()
    {
        return $this->fulfillmentIdentifier;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     * @return $this
     */
    public function setFulfillmentIdentifier($fulfillmentIdentifier)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param  \DateTimeInterface  $startDate
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param  \DateTimeInterface  $endDate
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipToEmail()
    {
        return $this->shipToEmail;
    }

    /**
     * @param  string  $shipToEmail
     * @return $this
     */
    public function setShipToEmail($shipToEmail)
    {
        $this->shipToEmail = $shipToEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipToAddress()
    {
        return $this->shipToAddress;
    }

    /**
     * @param  string  $shipToAddress
     * @return $this
     */
    public function setShipToAddress($shipToAddress)
    {
        $this->shipToAddress = $shipToAddress;

        return $this;
    }
}
