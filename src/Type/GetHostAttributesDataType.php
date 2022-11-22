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
     * @param  \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType  $hostAttributes
     */
    public function __construct(AttributeMetaDescriptorDataType $hostAttributes = null)
    {
        $this->hostAttributes = $hostAttributes;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType  $hostAttributes
     */
    public static function create(AttributeMetaDescriptorDataType $hostAttributes = null)
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
     * @param  \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType  $hostAttributes
     * @return $this
     */
    public function setHostAttributes($hostAttributes)
    {
        $this->hostAttributes = $hostAttributes;

        return $this;
    }
}
