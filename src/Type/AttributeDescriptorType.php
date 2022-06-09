<?php

namespace Flexsim\FlexnetOperations\Type;

class AttributeDescriptorType extends FlexnetType
{
    /**
     * @var string
     */
    protected $attributeName;

    /**
     * @var string
     */
    protected $stringValue;

    /**
     * @var \DateTimeInterface
     */
    protected $dateValue;

    /**
     * @var bool
     */
    protected $booleanValue;

    /**
     * @var int
     */
    protected $integerValue;

    /**
     * @var string
     */
    protected $arrayValue;

    /**
     * Constructor
     *
     * @param string $attributeName
     * @param string $stringValue
     * @param \DateTimeInterface $dateValue
     * @param bool $booleanValue
     * @param int $integerValue
     * @param string|array $arrayValue
     */
    public function __construct(string $attributeName, string $stringValue = null, \DateTimeInterface $dateValue = null, bool $booleanValue = null, int $integerValue = null, $arrayValue = null)
    {
        $this->attributeName = $attributeName;
        $this->stringValue = $stringValue;
        $this->dateValue = $dateValue;
        $this->booleanValue = $booleanValue;
        $this->integerValue = $integerValue;
        $this->arrayValue = $arrayValue;
    }

    /**
     * create a new instance of this class
     *
     * @param string $attributeName
     * @param string $stringValue
     * @param \DateTimeInterface $dateValue
     * @param bool $booleanValue
     * @param int $integerValue
     * @param string|array $arrayValue
     */
    public static function create(string $attributeName, string $stringValue = null, \DateTimeInterface $dateValue = null, bool $booleanValue = null, int $integerValue = null, $arrayValue = null)
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
    public function getStringValue()
    {
        return $this->stringValue;
    }

    /**
     * @param string $stringValue
     * @return $this
     */
    public function setStringValue($stringValue)
    {
        $this->stringValue = $stringValue;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateValue()
    {
        return $this->dateValue;
    }

    /**
     * @param \DateTimeInterface $dateValue
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

    /**
     * @return int
     */
    public function getIntegerValue()
    {
        return $this->integerValue;
    }

    /**
     * @param int $integerValue
     * @return $this
     */
    public function setIntegerValue($integerValue)
    {
        $this->integerValue = $integerValue;

        return $this;
    }

    /**
     * @return string
     */
    public function getArrayValue()
    {
        return $this->arrayValue;
    }

    /**
     * @param string $arrayValue
     * @return $this
     */
    public function setArrayValue($arrayValue)
    {
        $this->arrayValue = $arrayValue;

        return $this;
    }
}
