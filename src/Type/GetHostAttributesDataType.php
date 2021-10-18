<?php

namespace Flexsim\FlexnetOperations\Type;

class GetHostAttributesDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType
     */
    protected $hostAttributes;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType $hostAttributes
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType $hostAttributes = null)
    {
        $this->hostAttributes = $hostAttributes;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType $hostAttributes
     */
    public static function create(\Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType $hostAttributes = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType
     */
    public function getHostAttributes()
    {
        return $this->hostAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType $hostAttributes
     * @return $this
     */
    public function setHostAttributes($hostAttributes)
    {
        $this->hostAttributes = $hostAttributes;
        return $this;
    }
}
