<?php

namespace Flexsim\FlexnetOperations\Type;

class DeviceId extends FlexnetType 
{

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $idType;

    /**
     * @var string
     */
    protected $publisherName;

    /**
     * @var string
     */
    protected $deviceClass;

    /**
     * Constructor
     *
     * @param string $id
     * @param string $idType
     * @param string $publisherName
     * @param string $deviceClass
     */
    public function __construct(string $id, string $idType, string $publisherName, string $deviceClass)
    {
        $this->id = $id;
        $this->idType = $idType;
        $this->publisherName = $publisherName;
        $this->deviceclass = extends FlexnetType $deviceClass; extends FlexnetType 
    }

    /**
     * create a new instance of this class
     *
     * @param string $id
     * @param string $idType
     * @param string $publisherName
     * @param string $deviceClass
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
        $this->deviceclass = extends FlexnetType $deviceClass; extends FlexnetType 
        return $this;
    }


}

