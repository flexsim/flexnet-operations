<?php

namespace Flexsim\FlexnetOperations\Type;

class RolePKType extends FlexnetType
{

    /**
     * @var string
     */
    protected $name;

    /**
     * Constructor
     *
     * @var string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * create a new instance of this class
     *
     * @var string $name
     */
    public static function create(string $name)
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
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
