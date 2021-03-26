<?php

namespace Flexsim\FlexnetOperations\Type;

class CreateProductCategoryDataType
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * Constructor
     *
     * @var string $name
     * @var string $description
     */
    public function __construct(string $name, string $description = null)
    {
        $this->name = $name;
        $this->description = $description;
    }

    /**
     * create a new instance of this class
     *
     * @var string $name
     * @var string $description
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
     * @param string $name
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
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

