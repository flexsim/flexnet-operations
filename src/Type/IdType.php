<?php

namespace Flexsim\FlexnetOperations\Type;

class IdType extends FlexnetType
{

    /**
     * @var string
     */
    protected $id;

    /**
     * @var bool
     */
    protected $autoGenerate;

    /**
     * Constructor
     *
     * @var string $id
     * @var bool $autoGenerate
     */
    public function __construct(string $id = null, bool $autoGenerate = null)
    {
        $this->id = $id;
        $this->autoGenerate = $autoGenerate;
    }

    /**
     * create a new instance of this class
     *
     * @var string $id
     * @var bool $autoGenerate
     */
    public static function create(string $id = null, bool $autoGenerate = null)
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
     * @return bool
     */
    public function getAutoGenerate()
    {
        return $this->autoGenerate;
    }

    /**
     * @param bool $autoGenerate
     * @return $this
     */
    public function setAutoGenerate($autoGenerate)
    {
        $this->autoGenerate = $autoGenerate;
        return $this;
    }
}
