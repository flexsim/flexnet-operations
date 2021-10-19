<?php

namespace Flexsim\FlexnetOperations\Type;

class LicenseTechnologyQueryParametersType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $name;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $name
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SimpleQueryType $name = null)
    {
        $this->name = $name;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $name
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SimpleQueryType $name = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
