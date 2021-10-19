<?php

namespace Flexsim\FlexnetOperations\Type;

class ValueType extends FlexnetType
{

    /**
     * @var string
     */
    protected $value;

    /**
     * Constructor
     *
     * @param string|array $value
     */
    public function __construct($value = null)
    {
        $this->value = $value;
    }

    /**
     * create a new instance of this class
     *
     * @param string|array $value
     */
    public static function create($value = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}
