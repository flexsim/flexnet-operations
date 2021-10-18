<?php

namespace Flexsim\FlexnetOperations\Type;

class SoldToType extends FlexnetType
{

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $displayName;

    /**
     * Constructor
     *
     * @var string $displayName
     * @var string $id
     * @var string $name
     */
    public function __construct(string $id, string $name, string $displayName = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->displayName = $displayName;
    }

    /**
     * create a new instance of this class
     *
     * @var string $displayName
     * @var string $id
     * @var string $name
     */
    public static function create(string $id, string $name, string $displayName = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
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
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }
}
