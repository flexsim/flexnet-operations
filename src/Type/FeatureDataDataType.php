<?php

namespace Flexsim\FlexnetOperations\Type;

class FeatureDataDataType
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $version;

    /**
     * @var int
     */
    private $count;

    /**
     * @var int
     */
    private $overage;

    /**
     * @var \DateTimeInterface
     */
    private $expiration;

    /**
     * @var string
     */
    private $lineItemUniqueId;

    /**
     * @var string
     */
    private $lineItemActivationId;

    /**
     * Constructor
     *
     * @var string $name
     * @var string $version
     * @var int $count
     * @var int $overage
     * @var \DateTimeInterface $expiration
     * @var string $lineItemUniqueId
     * @var string $lineItemActivationId
     */
    public function __construct(string $name = null, string $version = null, int $count = null, int $overage = null, \DateTimeInterface $expiration = null, string $lineItemUniqueId = null, string $lineItemActivationId = null)
    {
        $this->name = $name;
        $this->version = $version;
        $this->count = $count;
        $this->overage = $overage;
        $this->expiration = $expiration;
        $this->lineItemUniqueId = $lineItemUniqueId;
        $this->lineItemActivationId = $lineItemActivationId;
    }

    /**
     * create a new instance of this class
     *
     * @var string $name
     * @var string $version
     * @var int $count
     * @var int $overage
     * @var \DateTimeInterface $expiration
     * @var string $lineItemUniqueId
     * @var string $lineItemActivationId
     */
    public static function create(string $name = null, string $version = null, int $count = null, int $overage = null, \DateTimeInterface $expiration = null, string $lineItemUniqueId = null, string $lineItemActivationId = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
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
     * @return int
     */
    public function getOverage()
    {
        return $this->overage;
    }

    /**
     * @param int $overage
     * @return $this
     */
    public function setOverage($overage)
    {
        $this->overage = $overage;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * @param \DateTimeInterface $expiration
     * @return $this
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;
        return $this;
    }

    /**
     * @return string
     */
    public function getLineItemUniqueId()
    {
        return $this->lineItemUniqueId;
    }

    /**
     * @param string $lineItemUniqueId
     * @return $this
     */
    public function setLineItemUniqueId($lineItemUniqueId)
    {
        $this->lineItemUniqueId = $lineItemUniqueId;
        return $this;
    }

    /**
     * @return string
     */
    public function getLineItemActivationId()
    {
        return $this->lineItemActivationId;
    }

    /**
     * @param string $lineItemActivationId
     * @return $this
     */
    public function setLineItemActivationId($lineItemActivationId)
    {
        $this->lineItemActivationId = $lineItemActivationId;
        return $this;
    }


}

