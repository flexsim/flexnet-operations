<?php

namespace Flexsim\FlexnetOperations\Type;

class BulkEntitlementDataType extends FlexnetType
{
    /**
     * @var string
     */
    protected $state;

    /**
     * @var string
     */
    protected $createdUserId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType
     */
    protected $licenseTechnology;

    /**
     * Constructor
     *
     * @param string $state
     * @param string $createdUserId
     * @param \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology
     */
    public function __construct(string $state = null, string $createdUserId = null, \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology = null)
    {
        $this->state = $state;
        $this->createdUserId = $createdUserId;
        $this->licenseTechnology = $licenseTechnology;
    }

    /**
     * create a new instance of this class
     *
     * @param string $state
     * @param string $createdUserId
     * @param \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology
     */
    public static function create(string $state = null, string $createdUserId = null, \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology = null)
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

    /**
     * @return string
     */
    public function getCreatedUserId()
    {
        return $this->createdUserId;
    }

    /**
     * @param string $createdUserId
     * @return $this
     */
    public function setCreatedUserId($createdUserId)
    {
        $this->createdUserId = $createdUserId;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType
     */
    public function getLicenseTechnology()
    {
        return $this->licenseTechnology;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology
     * @return $this
     */
    public function setLicenseTechnology($licenseTechnology)
    {
        $this->licenseTechnology = $licenseTechnology;

        return $this;
    }
}
