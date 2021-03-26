<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateFeatureDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureIdentifierType
     */
    private $featureIdentifier;

    /**
     * @var string
     */
    private $featureName;

    /**
     * @var string
     */
    private $versionFormat;

    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureOverrideParamsType
     */
    private $featureOverrideParams;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureIdentifierType $featureIdentifier
     * @var string $featureName
     * @var string $versionFormat
     * @var string $version
     * @var string $description
     * @var \Flexsim\FlexnetOperations\Type\FeatureOverrideParamsType $featureOverrideParams
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FeatureIdentifierType $featureIdentifier, string $featureName = null, string $versionFormat = null, string $version = null, string $description = null, \Flexsim\FlexnetOperations\Type\FeatureOverrideParamsType $featureOverrideParams = null)
    {
        $this->featureIdentifier = $featureIdentifier;
        $this->featureName = $featureName;
        $this->versionFormat = $versionFormat;
        $this->version = $version;
        $this->description = $description;
        $this->featureOverrideParams = $featureOverrideParams;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureIdentifierType $featureIdentifier
     * @var string $featureName
     * @var string $versionFormat
     * @var string $version
     * @var string $description
     * @var \Flexsim\FlexnetOperations\Type\FeatureOverrideParamsType $featureOverrideParams
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FeatureIdentifierType $featureIdentifier, string $featureName = null, string $versionFormat = null, string $version = null, string $description = null, \Flexsim\FlexnetOperations\Type\FeatureOverrideParamsType $featureOverrideParams = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureIdentifierType
     */
    public function getFeatureIdentifier()
    {
        return $this->featureIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeatureIdentifierType $featureIdentifier
     * @return $this
     */
    public function setFeatureIdentifier($featureIdentifier)
    {
        $this->featureIdentifier = $featureIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeatureName()
    {
        return $this->featureName;
    }

    /**
     * @param string $featureName
     * @return $this
     */
    public function setFeatureName($featureName)
    {
        $this->featureName = $featureName;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureOverrideParamsType
     */
    public function getFeatureOverrideParams()
    {
        return $this->featureOverrideParams;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeatureOverrideParamsType $featureOverrideParams
     * @return $this
     */
    public function setFeatureOverrideParams($featureOverrideParams)
    {
        $this->featureOverrideParams = $featureOverrideParams;
        return $this;
    }


}

