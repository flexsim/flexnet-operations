<?php

namespace Flexsim\FlexnetOperations\Type;

class DeviceId
{

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $idType;

    /**
     * @var string
     */
    private $publisherName;

    /**
     * @var string
     */
    private $deviceClass;

    /**
     * Constructor
     *
     * @var string $id
     * @var string $idType
     * @var string $publisherName
     * @var string $deviceClass
     */
    public function __construct(string $id, string $idType, string $publisherName, string $deviceClass)
    {
        $this->id = $id;
        $this->idType = $idType;
        $this->publisherName = $publisherName;
        $this->deviceClass = $deviceClass;
    }

    /**
     * create a new instance of this class
     *
     * @var string $id
     * @var string $idType
     * @var string $publisherName
     * @var string $deviceClass
     */
    public static function create(string $id, string $idType, string $publisherName, string $deviceClass)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * @param string $idType
     * @return $this
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPublisherName()
    {
        return $this->publisherName;
    }

    /**
     * @param string $publisherName
     * @return $this
     */
    public function setPublisherName($publisherName)
    {
        $this->publisherName = $publisherName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceClass()
    {
        return $this->deviceClass;
    }

    /**
     * @param string $deviceClass
     * @return $this
     */
    public function setDeviceClass($deviceClass)
    {
        $this->deviceClass = $deviceClass;
        return $this;
    }


}

