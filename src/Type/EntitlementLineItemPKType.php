<?php

namespace Flexsim\FlexnetOperations\Type;

class EntitlementLineItemPKType
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
    public function __construct(string $activationId)
    {
        $this->activationId = $activationId;
    }

    /**
     * create a new instance of this class
     *
     * @var string $activationId
     */
    public static function create(string $activationId)
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

