<?php

namespace Flexsim\FlexnetOperations\Type;

class FeatureDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $featureName;

    /**
     * @var string
     */
    protected $versionFormat;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureOverrideParamsType
     */
    protected $featureOverrideParams;

    /**
     * Constructor
     *
     * @param string $featureName
     * @param string $versionFormat
     * @param string $version
     * @param string $description
     * @param \Flexsim\FlexnetOperations\Type\FeatureOverrideParamsType $featureOverrideParams
     */
    public function __construct(string $featureName, string $versionFormat, string $version = null, string $description = null, \Flexsim\FlexnetOperations\Type\FeatureOverrideParamsType $featureOverrideParams = null)
    {
        $this->featureName = $featureName;
        $this->versionFormat = $versionFormat;
        $this->version = $version;
        $this->description = $description;
        $this->featureOverrideParams = $featureOverrideParams;
    }

    /**
     * create a new instance of this class
     *
     * @param string $featureName
     * @param string $versionFormat
     * @param string $version
     * @param string $description
     * @param \Flexsim\FlexnetOperations\Type\FeatureOverrideParamsType $featureOverrideParams
     */
    public static function create(string $featureName, string $versionFormat, string $version = null, string $description = null, \Flexsim\FlexnetOperations\Type\FeatureOverrideParamsType $featureOverrideParams = null)
    {
        return new self(...func_get_args());
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
