<?php

namespace Flexsim\FlexnetOperations\Type;

class AttributeDescriptorDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorType
     */
    private $attribute;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorType|array $attribute
     */
    public function __construct($attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorType|array $attribute
     */
    public static function create($attribute = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AttributeDescriptorType
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorType $attribute
     * @return $this
     */
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;
        return $this;
    }


}

