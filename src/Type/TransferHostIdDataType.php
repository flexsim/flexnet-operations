<?php

namespace Flexsim\FlexnetOperations\Type;

class TransferHostIdDataType extends FlexnetType
{
    /**
     * @var string
     */
    protected $soldTo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ServerIDsType
     */
    protected $serverIds;

    /**
     * @var string
     */
    protected $nodeId;

    /**
     * @var string
     */
    protected $customHostId;

    /**
     * @var string
     */
    protected $customHostType;

    /**
     * @var string
     */
    protected $customLicenseTechnology;

    /**
     * Constructor
     *
     * @param string $soldTo
     * @param \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds
     * @param string $nodeId
     * @param string $customHostId
     * @param string $customHostType
     * @param string $customLicenseTechnology
     */
    public function __construct(string $soldTo, \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds = null, string $nodeId = null, string $customHostId = null, string $customHostType = null, string $customLicenseTechnology = null)
    {
        $this->soldTo = $soldTo;
        $this->serverIds = $serverIds;
        $this->nodeId = $nodeId;
        $this->customHostId = $customHostId;
        $this->customHostType = $customHostType;
        $this->customLicenseTechnology = $customLicenseTechnology;
    }

    /**
     * create a new instance of this class
     *
     * @param string $soldTo
     * @param \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds
     * @param string $nodeId
     * @param string $customHostId
     * @param string $customHostType
     * @param string $customLicenseTechnology
     */
    public static function create(string $soldTo, \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds = null, string $nodeId = null, string $customHostId = null, string $customHostType = null, string $customLicenseTechnology = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getSoldTo()
    {
        return $this->soldTo;
    }

    /**
     * @param string $soldTo
     * @return $this
     */
    public function setSoldTo($soldTo)
    {
        $this->soldTo = $soldTo;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ServerIDsType
     */
    public function getServerIds()
    {
        return $this->serverIds;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds
     * @return $this
     */
    public function setServerIds($serverIds)
    {
        $this->serverIds = $serverIds;

        return $this;
    }

    /**
     * @return string
     */
    public function getNodeId()
    {
        return $this->nodeId;
    }

    /**
     * @param string $nodeId
     * @return $this
     */
    public function setNodeId($nodeId)
    {
        $this->nodeId = $nodeId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomHostId()
    {
        return $this->customHostId;
    }

    /**
     * @param string $customHostId
     * @return $this
     */
    public function setCustomHostId($customHostId)
    {
        $this->customHostId = $customHostId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomHostType()
    {
        return $this->customHostType;
    }

    /**
     * @param string $customHostType
     * @return $this
     */
    public function setCustomHostType($customHostType)
    {
        $this->customHostType = $customHostType;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomLicenseTechnology()
    {
        return $this->customLicenseTechnology;
    }

    /**
     * @param string $customLicenseTechnology
     * @return $this
     */
    public function setCustomLicenseTechnology($customLicenseTechnology)
    {
        $this->customLicenseTechnology = $customLicenseTechnology;

        return $this;
    }
}
