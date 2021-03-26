<?php

namespace Flexsim\FlexnetOperations\Type;

class EntCustomAttributeQueryType
{

    /**
     * @var string
     */
    private $attributeName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $stringValue;

    /**
     * Constructor
     *
     * @var string $attributeName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $stringValue
     */
    public function __construct(string $attributeName, \Flexsim\FlexnetOperations\Type\SimpleQueryType $stringValue = null)
    {
        $this->attributeName = $attributeName;
        $this->stringValue = $stringValue;
    }

    /**
     * create a new instance of this class
     *
     * @var string $attributeName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $stringValue
     */
    public static function create(string $attributeName, \Flexsim\FlexnetOperations\Type\SimpleQueryType $stringValue = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @param string $attributeName
     * @return $this
     */
    public function setAttributeName($attributeName)
    {
        $this->attributeName = $attributeName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getStringValue()
    {
        return $this->stringValue;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $stringValue
     * @return $this
     */
    public function setStringValue($stringValue)
    {
        $this->stringValue = $stringValue;
        return $this;
    }


}

