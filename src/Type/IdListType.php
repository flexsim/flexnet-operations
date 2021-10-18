<?php

namespace Flexsim\FlexnetOperations\Type;

class IdListType extends FlexnetType
{

    /**
     * @var string|array 
     */
    protected $id;

    /**
     * Constructor
     *
     * @var string|array $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    /**
     * create a new instance of this class
     *
     * @var string|array $id
     */
    public static function create(string $id)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string|array 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string|array $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}
