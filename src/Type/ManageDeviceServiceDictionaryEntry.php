<?php

namespace Flexsim\FlexnetOperations\Type;

class ManageDeviceServiceDictionaryEntry extends FlexnetType
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $stringValue;

    /**
     * @var int
     */
    protected $numberValue;

    /**
     * Constructor
     *
     * @param  string  $name
     * @param  string  $stringValue
     * @param  int  $numberValue
     */
    public function __construct(string $name, string $stringValue = null, int $numberValue = null)
    {
        $this->name = $name;
        $this->stringValue = $stringValue;
        $this->numberValue = $numberValue;
    }

    /**
     * create a new instance of this class
     *
     * @param  string  $name
     * @param  string  $stringValue
     * @param  int  $numberValue
     */
    public static function create(string $name, string $stringValue = null, int $numberValue = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param  string  $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

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
     * @param  string  $stringValue
     * @return $this
     */
    public function setStringValue($stringValue)
    {
        $this->stringValue = $stringValue;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumberValue()
    {
        return $this->numberValue;
    }

    /**
     * @param  int  $numberValue
     * @return $this
     */
    public function setNumberValue($numberValue)
    {
        $this->numberValue = $numberValue;

        return $this;
    }
}
