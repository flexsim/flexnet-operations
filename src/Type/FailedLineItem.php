<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedLineItem
{

    /**
     * @var string
     */
    private $activationId;

    /**
     * Constructor
     *
     * @var string $activationId
     */
    public function __construct(string $activationId = null)
    {
        $this->activationId = $activationId;
    }

    /**
     * create a new instance of this class
     *
     * @var string $activationId
     */
    public static function create(string $activationId = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getActivationId()
    {
        return $this->activationId;
    }

    /**
     * @param string $activationId
     * @return $this
     */
    public function setActivationId($activationId)
    {
        $this->activationId = $activationId;
        return $this;
    }


}

