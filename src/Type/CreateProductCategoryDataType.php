<?php

namespace Flexsim\FlexnetOperations\Type;

class CreateProductCategoryDataType extends FlexnetType
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * Constructor
     *
     * @param  string  $name
     * @param  string  $description
     */
    public function __construct(string $name, string $description = null)
    {
        $this->name = $name;
        $this->description = $description;
    }

    /**
     * create a new instance of this class
     *
     * @param  string  $name
     * @param  string  $description
     */
    public static function create(string $name, string $description = null)
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param  string  $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
