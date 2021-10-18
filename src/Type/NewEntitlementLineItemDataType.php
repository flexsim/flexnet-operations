<?php

namespace Flexsim\FlexnetOperations\Type;

class NewEntitlementLineItemDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $uniqueId;

    /**
     * @var string
     */
    protected $activationId;

    /**
     * Constructor
     *
     * @var string $uniqueId
     * @var string $activationId
     */
    public function __construct(string $uniqueId, string $activationId)
    {
        $this->uniqueId = $uniqueId;
        $this->activationId = $activationId;
    }

    /**
     * create a new instance of this class
     *
     * @var string $uniqueId
     * @var string $activationId
     */
    public static function create(string $uniqueId, string $activationId)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * @param string $uniqueId
     * @return $this
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;
        return $this;
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
