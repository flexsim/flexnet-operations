<?php

namespace Flexsim\FlexnetOperations\Type;

class ActivationDataType extends FlexnetType
{
    /**
     * @var string
     */
    protected $activationData;

    /**
     * Constructor
     *
     * @param  string  $activationData
     */
    public function __construct(string $activationData)
    {
        $this->activationData = $activationData;
    }

    /**
     * create a new instance of this class
     *
     * @param  string  $activationData
     */
    public static function create(string $activationData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getActivationData()
    {
        return $this->activationData;
    }

    /**
     * @param  string  $activationData
     * @return $this
     */
    public function setActivationData($activationData)
    {
        $this->activationData = $activationData;

        return $this;
    }
}
