<?php

namespace Flexsim\FlexnetOperations\Type;

class EmergencyFulfillmentDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    protected $fulfillmentIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    protected $licenseModelAttributes;

    /**
     * @var string
     */
    protected $FNPTimeZoneValue;

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
     * @var \Flexsim\FlexnetOperations\Type\ServerIDsType
     */
    protected $serverIds;

    /**
     * @var \Flexsim\FlexnetOperations\Type\NodeIDsType
     */
    protected $nodeIds;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CustomHostIDType
     */
    protected $customHost;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $endDate
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes
     * @param string $FNPTimeZoneValue
     * @param string $shipToEmail
     * @param string $shipToAddress
     * @param \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds
     * @param \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds
     * @param \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost
     */
    public function __construct(
        \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier,
        \DateTimeInterface $startDate,
        \DateTimeInterface $endDate,
        \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes = null,
        string $FNPTimeZoneValue = null,
        string $shipToEmail = null,
        string $shipToAddress = null,
        \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds = null,
        \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds = null,
        \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost = null
    ) {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->licenseModelAttributes = $licenseModelAttributes;
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->serverIds = $serverIds;
        $this->nodeIds = $nodeIds;
        $this->customHost = $customHost;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $endDate
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes
     * @param string $FNPTimeZoneValue
     * @param string $shipToEmail
     * @param string $shipToAddress
     * @param \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds
     * @param \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds
     * @param \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost
     */
    public static function create(
        \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier,
        \DateTimeInterface $startDate,
        \DateTimeInterface $endDate,
        \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes = null,
        string $FNPTimeZoneValue = null,
        string $shipToEmail = null,
        string $shipToAddress = null,
        \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds = null,
        \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds = null,
        \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost = null
    ) {
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
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @return $this
     */
    public function setFulfillmentIdentifier($fulfillmentIdentifier)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    public function getLicenseModelAttributes()
    {
        return $this->licenseModelAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $licenseModelAttributes
     * @return $this
     */
    public function setLicenseModelAttributes($licenseModelAttributes)
    {
        $this->licenseModelAttributes = $licenseModelAttributes;

        return $this;
    }

    /**
     * @return string
     */
    public function getFNPTimeZoneValue()
    {
        return $this->FNPTimeZoneValue;
    }

    /**
     * @param string $FNPTimeZoneValue
     * @return $this
     */
    public function setFNPTimeZoneValue($FNPTimeZoneValue)
    {
        $this->FNPTimeZoneValue = $FNPTimeZoneValue;

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
     * @param \DateTimeInterface $startDate
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
     * @param \DateTimeInterface $endDate
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
     * @param string $shipToEmail
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
     * @param string $shipToAddress
     * @return $this
     */
    public function setShipToAddress($shipToAddress)
    {
        $this->shipToAddress = $shipToAddress;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ServerIDsType
     */
    public function getServerIds()
    {
        return $this->serverIds;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds
     * @return $this
     */
    public function setServerIds($serverIds)
    {
        $this->serverIds = $serverIds;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\NodeIDsType
     */
    public function getNodeIds()
    {
        return $this->nodeIds;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds
     * @return $this
     */
    public function setNodeIds($nodeIds)
    {
        $this->nodeIds = $nodeIds;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CustomHostIDType
     */
    public function getCustomHost()
    {
        return $this->customHost;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost
     * @return $this
     */
    public function setCustomHost($customHost)
    {
        $this->customHost = $customHost;

        return $this;
    }
}
