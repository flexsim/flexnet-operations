<?php

namespace Flexsim\FlexnetOperations\Type;

class FeatureQueryParametersType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $featureName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $version;

    /**
     * @var \Flexsim\FlexnetOperations\Type\VersionFormatQueryType
     */
    private $versionFormat;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\StateQueryType
     */
    private $state;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    private $creationDate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    private $lastModifiedDate;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $version
     * @var \Flexsim\FlexnetOperations\Type\VersionFormatQueryType $versionFormat
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @var \Flexsim\FlexnetOperations\Type\StateQueryType $state
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $creationDate
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SimpleQueryType $featureName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $version = null, \Flexsim\FlexnetOperations\Type\VersionFormatQueryType $versionFormat = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null, \Flexsim\FlexnetOperations\Type\StateQueryType $state = null, \Flexsim\FlexnetOperations\Type\DateQueryType $creationDate = null, \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate = null)
    {
        $this->featureName = $featureName;
        $this->version = $version;
        $this->versionFormat = $versionFormat;
        $this->description = $description;
        $this->state = $state;
        $this->creationDate = $creationDate;
        $this->lastModifiedDate = $lastModifiedDate;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $version
     * @var \Flexsim\FlexnetOperations\Type\VersionFormatQueryType $versionFormat
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @var \Flexsim\FlexnetOperations\Type\StateQueryType $state
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $creationDate
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SimpleQueryType $featureName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $version = null, \Flexsim\FlexnetOperations\Type\VersionFormatQueryType $versionFormat = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null, \Flexsim\FlexnetOperations\Type\StateQueryType $state = null, \Flexsim\FlexnetOperations\Type\DateQueryType $creationDate = null, \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getFeatureName()
    {
        return $this->featureName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $featureName
     * @return $this
     */
    public function setFeatureName($featureName)
    {
        $this->featureName = $featureName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\VersionFormatQueryType
     */
    public function getVersionFormat()
    {
        return $this->versionFormat;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\VersionFormatQueryType $versionFormat
     * @return $this
     */
    public function setVersionFormat($versionFormat)
    {
        $this->versionFormat = $versionFormat;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\StateQueryType
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\StateQueryType $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateQueryType $creationDate
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate
     * @return $this
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }


}

