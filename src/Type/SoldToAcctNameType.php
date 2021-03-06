<?php

namespace Flexsim\FlexnetOperations\Type;

class SoldToAcctNameType extends FlexnetType
{
    /**
     * @var string
     */
    protected $displayName;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * Constructor
     *
     * @param string $displayName
     * @param string $id
     * @param string $name
     */
    public function __construct(string $displayName, string $id, string $name)
    {
        $this->displayName = $displayName;
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * create a new instance of this class
     *
     * @param string $displayName
     * @param string $id
     * @param string $name
     */
    public static function create(string $displayName, string $id, string $name)
    {
        return new self(...func_get_args());
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
}
