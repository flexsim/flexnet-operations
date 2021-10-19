<?php

namespace Flexsim\FlexnetOperations\Type;

class SimpleAttributeDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $attributeName;

    /**
     * @var string
     */
    protected $attributeValue;

    /**
     * Constructor
     *
     * @param string $attributeName
     * @param string $attributeValue
     */
    public function __construct(string $attributeName, string $attributeValue)
    {
        $this->attributeName = $attributeName;
        $this->attributeValue = $attributeValue;
    }

    /**
     * create a new instance of this class
     *
     * @param string $attributeName
     * @param string $attributeValue
     */
    public static function create(string $attributeName, string $attributeValue)
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
     * @return string
     */
    public function getAttributeValue()
    {
        return $this->attributeValue;
    }

    /**
     * @param string $attributeValue
     * @return $this
     */
    public function setAttributeValue($attributeValue)
    {
        $this->attributeValue = $attributeValue;
        return $this;
    }
}
