<?php

namespace Flexsim\FlexnetOperations\Type;

class FeatureBundleStateDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType
     */
    private $featureBundleIdentifier;

    /**
     * @var string
     */
    private $stateToSet;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType $featureBundleIdentifier
     * @var string $stateToSet
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType $featureBundleIdentifier, string $stateToSet)
    {
        $this->featureBundleIdentifier = $featureBundleIdentifier;
        $this->stateToSet = $stateToSet;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType $featureBundleIdentifier
     * @var string $stateToSet
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType $featureBundleIdentifier, string $stateToSet)
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
    public function getStateToSet()
    {
        return $this->stateToSet;
    }

    /**
     * @param string $stateToSet
     * @return $this
     */
    public function setStateToSet($stateToSet)
    {
        $this->stateToSet = $stateToSet;
        return $this;
    }


}

