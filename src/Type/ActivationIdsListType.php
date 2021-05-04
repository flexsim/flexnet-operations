<?php

namespace Flexsim\FlexnetOperations\Type;

class ActivationIdsListType
{

    /**
     * @var string|array
     */
    private $activationId;

    /**
     * Constructor
     *
     * @var string|array $activationId
     */
    public function __construct($activationId)
    {
        $this->activationId = $activationId;
    }

    /**
     * create a new instance of this class
     *
     * @var string|array $activationId
     */
    public static function create($activationId)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string|array
     */
    public function getActivationId()
    {
        return $this->activationId;
    }

    /**
     * @param string|array $activationId
     * @return $this
     */
    public function setActivationId($activationId)
    {
        $this->activationId = $activationId;
        return $this;
    }
}
