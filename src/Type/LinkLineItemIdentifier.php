<?php

namespace Flexsim\FlexnetOperations\Type;

class LinkLineItemIdentifier
{

    /**
     * @var string
     */
    private $activationId;

    /**
     * @var int
     */
    private $count;

    /**
     * Constructor
     *
     * @var string $activationId
     * @var int $count
     */
    public function __construct(string $activationId = null, int $count = null)
    {
        $this->activationId = $activationId;
        $this->count = $count;
    }

    /**
     * create a new instance of this class
     *
     * @var string $activationId
     * @var int $count
     */
    public static function create(string $activationId = null, int $count = null)
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
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }


}

