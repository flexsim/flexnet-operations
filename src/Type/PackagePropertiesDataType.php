<?php

namespace Flexsim\FlexnetOperations\Type;

class PackagePropertiesDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var string
     */
    protected $versionFormat;

    /**
     * Constructor
     *
     * @param string $name
     * @param string $versionFormat
     * @param string $version
     */
    public function __construct(string $name, string $versionFormat, string $version = null)
    {
        $this->name = $name;
        $this->versionFormat = $versionFormat;
        $this->version = $version;
    }

    /**
     * create a new instance of this class
     *
     * @param string $name
     * @param string $versionFormat
     * @param string $version
     */
    public static function create(string $name, string $versionFormat, string $version = null)
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
