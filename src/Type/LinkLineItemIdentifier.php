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
     * @var \DateTimeInterface
     */
    private $expirationDateOverride;

    /**
     * Constructor
     *
     * @var string $activationId
     * @var int $count
     * @var \DateTimeInterface $expirationDateOverride
     */
    public function __construct(string $activationId = null, int $count = null, \DateTimeInterface $expirationDateOverride = null)
    {
        $this->activationId = $activationId;
        $this->count = $count;
        $this->expirationDateOverride = $expirationDateOverride;
    }

    /**
     * create a new instance of this class
     *
     * @var string $activationId
     * @var int $count
     * @var \DateTimeInterface $expirationDateOverride
     */
    public static function create(string $activationId = null, int $count = null, \DateTimeInterface $expirationDateOverride = null)
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

    /**
     * @return \DateTimeInterface
     */
    public function getExpirationDateOverride()
    {
        return $this->expirationDateOverride;
    }

    /**
     * @param \DateTimeInterface $expirationDateOverride
     * @return $this
     */
    public function setExpirationDateOverride($expirationDateOverride)
    {
        $this->expirationDateOverride = $expirationDateOverride;
        return $this;
    }


}

