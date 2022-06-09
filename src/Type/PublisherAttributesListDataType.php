<?php

namespace Flexsim\FlexnetOperations\Type;

class PublisherAttributesListDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleAttributeDataType
     */
    protected $attribute;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\SimpleAttributeDataType $attribute
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SimpleAttributeDataType $attribute)
    {
        $this->attribute = $attribute;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\SimpleAttributeDataType $attribute
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SimpleAttributeDataType $attribute)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleAttributeDataType
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleAttributeDataType $attribute
     * @return $this
     */
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }
}
