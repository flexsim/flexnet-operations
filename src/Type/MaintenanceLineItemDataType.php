<?php

namespace Flexsim\FlexnetOperations\Type;

class MaintenanceLineItemDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $state;

    /**
     * Constructor
     *
     * @var string $state
     */
    public function __construct(string $state = null)
    {
        $this->state = $state;
    }

    /**
     * create a new instance of this class
     *
     * @var string $state
     */
    public static function create(string $state = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }
}
