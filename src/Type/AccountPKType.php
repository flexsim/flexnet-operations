<?php

namespace Flexsim\FlexnetOperations\Type;

class AccountPKType extends FlexnetType
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
     * Constructor
     *
     * @var string $id this method is backwards compatible so you may also pass $name
     */
    public function __construct(string $id)
    {
        $this->id = $id;
        $this->name = $id;
    }

    /**
     * create a new instance of this class
     *
     * @var string $id this method is backwards compatible so you may also pass $name
     */
    public static function create(string $id)
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
}
