<?php

namespace Flexsim\FlexnetOperations\Type;

class AttributeMetaDescriptorType extends FlexnetType
{
    /**
     * @var string
     */
    protected $attributeName;

    /**
     * @var string
     */
    protected $attributeDataType;

    /**
     * @var string
     */
    protected $namespace;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ValueType
     */
    protected $validValues;

    /**
     * Constructor
     *
     * @param string $attributeName
     * @param string $attributeDataType
     * @param string $namespace
     * @param \Flexsim\FlexnetOperations\Type\ValueType $validValues
     */
    public function __construct(string $attributeName, string $attributeDataType, string $namespace, \Flexsim\FlexnetOperations\Type\ValueType $validValues = null)
    {
        $this->attributeName = $attributeName;
        $this->attributeDataType = $attributeDataType;
        $this->namespace = $namespace;
        $this->validValues = $validValues;
    }

    /**
     * create a new instance of this class
     *
     * @param string $attributeName
     * @param string $attributeDataType
     * @param string $namespace
     * @param \Flexsim\FlexnetOperations\Type\ValueType $validValues
     */
    public static function create(string $attributeName, string $attributeDataType, string $namespace, \Flexsim\FlexnetOperations\Type\ValueType $validValues = null)
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
    public function getAttributeDataType()
    {
        return $this->attributeDataType;
    }

    /**
     * @param string $attributeDataType
     * @return $this
     */
    public function setAttributeDataType($attributeDataType)
    {
        $this->attributeDataType = $attributeDataType;

        return $this;
    }

    /**
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * @param string $namespace
     * @return $this
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ValueType
     */
    public function getValidValues()
    {
        return $this->validValues;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ValueType $validValues
     * @return $this
     */
    public function setValidValues($validValues)
    {
        $this->validValues = $validValues;

        return $this;
    }
}
