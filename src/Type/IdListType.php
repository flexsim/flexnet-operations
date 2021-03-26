<?php

namespace Flexsim\FlexnetOperations\Type;

class IdListType
{

    /**
     * @var string
     */
    private $id;

    /**
     * Constructor
     *
     * @var string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    /**
     * create a new instance of this class
     *
     * @var string $id
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


}
