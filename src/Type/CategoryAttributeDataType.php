<?php

namespace Flexsim\FlexnetOperations\Type;

class CategoryAttributeDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $attributeName;

    /**
     * @var bool
     */
    protected $isRequired;

    /**
     * @var string
     */
    protected $dataType;

    /**
     * @var string
     */
    protected $maxLength;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ValueType
     */
    protected $validValues;

    /**
     * Constructor
     *
     * @var string $attributeName
     * @var bool $isRequired
     * @var string $dataType
     * @var string $maxLength
     * @var \Flexsim\FlexnetOperations\Type\ValueType $validValues
     */
    public function __construct(string $attributeName, bool $isRequired, string $dataType, string $maxLength = null, \Flexsim\FlexnetOperations\Type\ValueType $validValues = null)
    {
        $this->attributeName = $attributeName;
        $this->isRequired = $isRequired;
        $this->dataType = $dataType;
        $this->maxLength = $maxLength;
        $this->validValues = $validValues;
    }

    /**
     * create a new instance of this class
     *
     * @var string $attributeName
     * @var bool $isRequired
     * @var string $dataType
     * @var string $maxLength
     * @var \Flexsim\FlexnetOperations\Type\ValueType $validValues
     */
    public static function create(string $attributeName, bool $isRequired, string $dataType, string $maxLength = null, \Flexsim\FlexnetOperations\Type\ValueType $validValues = null)
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
     * @return bool
     */
    public function getIsRequired()
    {
        return $this->isRequired;
    }

    /**
     * @param bool $isRequired
     * @return $this
     */
    public function setIsRequired($isRequired)
    {
        $this->isRequired = $isRequired;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * @param string $dataType
     * @return $this
     */
    public function setDataType($dataType)
    {
        $this->dataType = $dataType;
        return $this;
    }

    /**
     * @return string
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * @param string $maxLength
     * @return $this
     */
    public function setMaxLength($maxLength)
    {
        $this->maxLength = $maxLength;
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
