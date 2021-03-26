<?php

namespace Flexsim\FlexnetOperations\Type;

class PackagePropertiesDataType
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
     * @var string
     */
    private $versionFormat;

    /**
     * Constructor
     *
     * @var string $name
     * @var string $version
     * @var string $versionFormat
     */
    public function __construct(string $name, string $version = null, string $versionFormat)
    {
        $this->name = $name;
        $this->version = $version;
        $this->versionFormat = $versionFormat;
    }

    /**
     * create a new instance of this class
     *
     * @var string $name
     * @var string $version
     * @var string $versionFormat
     */
    public static function create(string $name, string $version = null, string $versionFormat)
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
     * @return string
     */
    public function getVersionFormat()
    {
        return $this->versionFormat;
    }

    /**
     * @param string $versionFormat
     * @return $this
     */
    public function setVersionFormat($versionFormat)
    {
        $this->versionFormat = $versionFormat;
        return $this;
    }


}

