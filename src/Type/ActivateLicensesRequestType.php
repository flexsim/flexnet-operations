<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ActivateLicensesRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\TypeLineItem
     */
    protected $lineItem;

    /**
     * @var string
     */
    protected $shipToEmail;

    /**
     * @var string
     */
    protected $shipToAddress;

    /**
     * @var string
     */
    protected $soldTo;

    /**
     * @var string
     */
    protected $owner;

    /**
     * @var string
     */
    protected $hostInfo;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\TypeLineItem $lineItem
     * @param string $shipToEmail
     * @param string $shipToAddress
     * @param string $soldTo
     * @param string $owner
     * @param string $hostInfo
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\TypeLineItem $lineItem, string $shipToEmail = null, string $shipToAddress = null, string $soldTo = null, string $owner = null, string $hostInfo)
    {
        $this->lineItem = $lineItem;
        $this->shipToEmail = $shipToEmail;
        $this->shipToAddress = $shipToAddress;
        $this->soldTo = $soldTo;
        $this->owner = $owner;
        $this->hostInfo = $hostInfo;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\TypeLineItem $lineItem
     * @param string $shipToEmail
     * @param string $shipToAddress
     * @param string $soldTo
     * @param string $owner
     * @param string $hostInfo
     */
    public static function create(\Flexsim\FlexnetOperations\Type\TypeLineItem $lineItem, string $shipToEmail = null, string $shipToAddress = null, string $soldTo = null, string $owner = null, string $hostInfo)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\TypeLineItem
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\TypeLineItem $lineItem
     * @return $this
     */
    public function setLineItem($lineItem)
    {
        $this->lineItem = $lineItem;
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
     * @return string
     */
    public function getSoldTo()
    {
        return $this->soldTo;
    }

    /**
     * @param string $soldTo
     * @return $this
     */
    public function setSoldTo($soldTo)
    {
        $this->soldTo = $soldTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param string $owner
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * @return string
     */
    public function getHostInfo()
    {
        return $this->hostInfo;
    }

    /**
     * @param string $hostInfo
     * @return $this
     */
    public function setHostInfo($hostInfo)
    {
        $this->hostInfo = $hostInfo;
        return $this;
    }
}
