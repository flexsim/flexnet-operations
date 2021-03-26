<?php

namespace Flexsim\FlexnetOperations\Type;

class CustomHostIDType
{

    /**
     * @var string
     */
    private $hostId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    private $hostAttributes;

    /**
     * @var \Flexsim\FlexnetOperations\Type\HostTypePKType
     */
    private $hostType;

    /**
     * Constructor
     *
     * @var string $hostId
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $hostAttributes
     * @var \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType
     */
    public function __construct(string $hostId = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $hostAttributes = null, \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType = null)
    {
        $this->hostId = $hostId;
        $this->hostAttributes = $hostAttributes;
        $this->hostType = $hostType;
    }

    /**
     * create a new instance of this class
     *
     * @var string $hostId
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $hostAttributes
     * @var \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType
     */
    public static function create(string $hostId = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $hostAttributes = null, \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getHostId()
    {
        return $this->hostId;
    }

    /**
     * @param string $hostId
     * @return $this
     */
    public function setHostId($hostId)
    {
        $this->hostId = $hostId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    public function getHostAttributes()
    {
        return $this->hostAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $hostAttributes
     * @return $this
     */
    public function setHostAttributes($hostAttributes)
    {
        $this->hostAttributes = $hostAttributes;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\HostTypePKType
     */
    public function getHostType()
    {
        return $this->hostType;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\HostTypePKType $hostType
     * @return $this
     */
    public function setHostType($hostType)
    {
        $this->hostType = $hostType;
        return $this;
    }


}

