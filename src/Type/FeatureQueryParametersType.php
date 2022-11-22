<?php

namespace Flexsim\FlexnetOperations\Type;

class FeatureQueryParametersType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $featureName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $version;

    /**
     * @var \Flexsim\FlexnetOperations\Type\VersionFormatQueryType
     */
    protected $versionFormat;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\StateQueryType
     */
    protected $state;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    protected $creationDate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    protected $lastModifiedDate;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $featureName
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $version
     * @param  \Flexsim\FlexnetOperations\Type\VersionFormatQueryType  $versionFormat
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $description
     * @param  \Flexsim\FlexnetOperations\Type\StateQueryType  $state
     * @param  \Flexsim\FlexnetOperations\Type\DateQueryType  $creationDate
     * @param  \Flexsim\FlexnetOperations\Type\DateQueryType  $lastModifiedDate
     */
    public function __construct(SimpleQueryType $featureName = null, SimpleQueryType $version = null, VersionFormatQueryType $versionFormat = null, SimpleQueryType $description = null, StateQueryType $state = null, DateQueryType $creationDate = null, DateQueryType $lastModifiedDate = null)
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
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $featureName
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $version
     * @param  \Flexsim\FlexnetOperations\Type\VersionFormatQueryType  $versionFormat
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $description
     * @param  \Flexsim\FlexnetOperations\Type\StateQueryType  $state
     * @param  \Flexsim\FlexnetOperations\Type\DateQueryType  $creationDate
     * @param  \Flexsim\FlexnetOperations\Type\DateQueryType  $lastModifiedDate
     */
    public static function create(SimpleQueryType $featureName = null, SimpleQueryType $version = null, VersionFormatQueryType $versionFormat = null, SimpleQueryType $description = null, StateQueryType $state = null, DateQueryType $creationDate = null, DateQueryType $lastModifiedDate = null)
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
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $featureName
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
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $version
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
     * @param  \Flexsim\FlexnetOperations\Type\VersionFormatQueryType  $versionFormat
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
     * @param  \Flexsim\FlexnetOperations\Type\SimpleQueryType  $description
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
     * @param  \Flexsim\FlexnetOperations\Type\StateQueryType  $state
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
     * @param  \Flexsim\FlexnetOperations\Type\DateQueryType  $creationDate
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
     * @param  \Flexsim\FlexnetOperations\Type\DateQueryType  $lastModifiedDate
     * @return $this
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }
}
