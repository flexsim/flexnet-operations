<?php

namespace Flexsim\FlexnetOperations\Type;

class CustomAttributeDescriptorDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorType
     */
    protected $attribute;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorType|array $attribute
     */
    public function __construct($attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorType|array $attribute
     */
    public static function create($attribute = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorType
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CustomAttributeDescriptorType $attribute
     * @return $this
     */
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;
        return $this;
    }
}
