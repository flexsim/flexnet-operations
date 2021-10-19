<?php

namespace Flexsim\FlexnetOperations\Type;

class ActivationIdOverDraftMapType extends FlexnetType
{

    /**
     * @var string
     */
    protected $activationId;

    /**
     * @var bool
     */
    protected $overDraftAllowed;

    /**
     * Constructor
     *
     * @param string $activationId
     * @param bool $overDraftAllowed
     */
    public function __construct(string $activationId, bool $overDraftAllowed)
    {
        $this->activationId = $activationId;
        $this->overDraftAllowed = $overDraftAllowed;
    }

    /**
     * create a new instance of this class
     *
     * @param string $activationId
     * @param bool $overDraftAllowed
     */
    public static function create(string $activationId, bool $overDraftAllowed)
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

    /**
     * @return bool
     */
    public function getOverDraftAllowed()
    {
        return $this->overDraftAllowed;
    }

    /**
     * @param bool $overDraftAllowed
     * @return $this
     */
    public function setOverDraftAllowed($overDraftAllowed)
    {
        $this->overDraftAllowed = $overDraftAllowed;
        return $this;
    }
}
