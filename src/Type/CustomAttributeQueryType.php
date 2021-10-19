<?php

namespace Flexsim\FlexnetOperations\Type;

class CustomAttributeQueryType extends FlexnetType
{

    /**
     * @var string
     */
    protected $attributeName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $stringValue;

    /**
     * @var \Flexsim\FlexnetOperations\Type\NumberQueryType
     */
    protected $numberValue;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    protected $dateValue;

    /**
     * @var bool
     */
    protected $booleanValue;

    /**
     * Constructor
     *
     * @param string $attributeName
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $stringValue
     * @param \Flexsim\FlexnetOperations\Type\NumberQueryType $numberValue
     * @param \Flexsim\FlexnetOperations\Type\DateQueryType $dateValue
     * @param bool $booleanValue
     */
    public function __construct(string $attributeName, \Flexsim\FlexnetOperations\Type\SimpleQueryType $stringValue = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $numberValue = null, \Flexsim\FlexnetOperations\Type\DateQueryType $dateValue = null, bool $booleanValue = null)
    {
        $this->attributeName = $attributeName;
        $this->stringValue = $stringValue;
        $this->numberValue = $numberValue;
        $this->dateValue = $dateValue;
        $this->booleanValue = $booleanValue;
    }

    /**
     * create a new instance of this class
     *
     * @param string $attributeName
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $stringValue
     * @param \Flexsim\FlexnetOperations\Type\NumberQueryType $numberValue
     * @param \Flexsim\FlexnetOperations\Type\DateQueryType $dateValue
     * @param bool $booleanValue
     */
    public static function create(string $attributeName, \Flexsim\FlexnetOperations\Type\SimpleQueryType $stringValue = null, \Flexsim\FlexnetOperations\Type\NumberQueryType $numberValue = null, \Flexsim\FlexnetOperations\Type\DateQueryType $dateValue = null, bool $booleanValue = null)
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

    /**
     * @return \Flexsim\FlexnetOperations\Type\NumberQueryType
     */
    public function getNumberValue()
    {
        return $this->numberValue;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\NumberQueryType $numberValue
     * @return $this
     */
    public function setNumberValue($numberValue)
    {
        $this->numberValue = $numberValue;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    public function getDateValue()
    {
        return $this->dateValue;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateQueryType $dateValue
     * @return $this
     */
    public function setDateValue($dateValue)
    {
        $this->dateValue = $dateValue;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBooleanValue()
    {
        return $this->booleanValue;
    }

    /**
     * @param bool $booleanValue
     * @return $this
     */
    public function setBooleanValue($booleanValue)
    {
        $this->booleanValue = $booleanValue;
        return $this;
    }
}
