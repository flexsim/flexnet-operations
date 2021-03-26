<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateFeatureBundleDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType
     */
    private $featureBundleIdentifier;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateFeaturesListType
     */
    private $features;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType $featureBundleIdentifier
     * @var string $name
     * @var string $description
     * @var \Flexsim\FlexnetOperations\Type\UpdateFeaturesListType $features
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType $featureBundleIdentifier, string $name = null, string $description = null, \Flexsim\FlexnetOperations\Type\UpdateFeaturesListType $features = null)
    {
        $this->featureBundleIdentifier = $featureBundleIdentifier;
        $this->name = $name;
        $this->description = $description;
        $this->features = $features;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType $featureBundleIdentifier
     * @var string $name
     * @var string $description
     * @var \Flexsim\FlexnetOperations\Type\UpdateFeaturesListType $features
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType $featureBundleIdentifier, string $name = null, string $description = null, \Flexsim\FlexnetOperations\Type\UpdateFeaturesListType $features = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType
     */
    public function getFeatureBundleIdentifier()
    {
        return $this->featureBundleIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType $featureBundleIdentifier
     * @return $this
     */
    public function setFeatureBundleIdentifier($featureBundleIdentifier)
    {
        $this->featureBundleIdentifier = $featureBundleIdentifier;
        return $this;
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
     * @return \Flexsim\FlexnetOperations\Type\UpdateFeaturesListType
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateFeaturesListType $features
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->features = $features;
        return $this;
    }


}

