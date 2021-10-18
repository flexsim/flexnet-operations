<?php

namespace Flexsim\FlexnetOperations\Type;

class FeatureOverrideParamsType extends FlexnetType
{

    /**
     * @var string
     */
    protected $vendorString;

    /**
     * @var string
     */
    protected $notice;

    /**
     * @var string
     */
    protected $serialNumber;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DupGroupDataType
     */
    protected $dupGroup;

    /**
     * Constructor
     *
     * @var string $vendorString
     * @var string $notice
     * @var string $serialNumber
     * @var \Flexsim\FlexnetOperations\Type\DupGroupDataType $dupGroup
     */
    public function __construct(string $vendorString = null, string $notice = null, string $serialNumber = null, \Flexsim\FlexnetOperations\Type\DupGroupDataType $dupGroup = null)
    {
        $this->vendorString = $vendorString;
        $this->notice = $notice;
        $this->serialNumber = $serialNumber;
        $this->dupGroup = $dupGroup;
    }

    /**
     * create a new instance of this class
     *
     * @var string $vendorString
     * @var string $notice
     * @var string $serialNumber
     * @var \Flexsim\FlexnetOperations\Type\DupGroupDataType $dupGroup
     */
    public static function create(string $vendorString = null, string $notice = null, string $serialNumber = null, \Flexsim\FlexnetOperations\Type\DupGroupDataType $dupGroup = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getVendorString()
    {
        return $this->vendorString;
    }

    /**
     * @param string $vendorString
     * @return $this
     */
    public function setVendorString($vendorString)
    {
        $this->vendorString = $vendorString;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotice()
    {
        return $this->notice;
    }

    /**
     * @param string $notice
     * @return $this
     */
    public function setNotice($notice)
    {
        $this->notice = $notice;
        return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * @param string $serialNumber
     * @return $this
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DupGroupDataType
     */
    public function getDupGroup()
    {
        return $this->dupGroup;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DupGroupDataType $dupGroup
     * @return $this
     */
    public function setDupGroup($dupGroup)
    {
        $this->dupGroup = $dupGroup;
        return $this;
    }
}
