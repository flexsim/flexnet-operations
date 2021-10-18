<?php

namespace Flexsim\FlexnetOperations\Type;

class ForceDeleteUserIdentifierType extends FlexnetType
{

    /**
     * @var bool
     */
    protected $forceDelete;

    /**
     * Constructor
     *
     * @var bool $forceDelete
     */
    public function __construct(bool $forceDelete = null)
    {
        $this->forceDelete = $forceDelete;
    }

    /**
     * create a new instance of this class
     *
     * @var bool $forceDelete
     */
    public static function create(bool $forceDelete = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return bool
     */
    public function getForceDelete()
    {
        return $this->forceDelete;
    }

    /**
     * @param bool $forceDelete
     * @return $this
     */
    public function setForceDelete($forceDelete)
    {
        $this->forceDelete = $forceDelete;
        return $this;
    }
}
