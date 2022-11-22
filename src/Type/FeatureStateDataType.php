<?php

namespace Flexsim\FlexnetOperations\Type;

class FeatureStateDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureIdentifierType
     */
    protected $featureIdentifier;

    /**
     * @var string
     */
    protected $stateToSet;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\FeatureIdentifierType  $featureIdentifier
     * @param  string  $stateToSet
     */
    public function __construct(FeatureIdentifierType $featureIdentifier, string $stateToSet)
    {
        $this->featureIdentifier = $featureIdentifier;
        $this->stateToSet = $stateToSet;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\FeatureIdentifierType  $featureIdentifier
     * @param  string  $stateToSet
     */
    public static function create(FeatureIdentifierType $featureIdentifier, string $stateToSet)
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
     * @param  \Flexsim\FlexnetOperations\Type\FeatureIdentifierType  $featureIdentifier
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
    public function getStateToSet()
    {
        return $this->stateToSet;
    }

    /**
     * @param  string  $stateToSet
     * @return $this
     */
    public function setStateToSet($stateToSet)
    {
        $this->stateToSet = $stateToSet;

        return $this;
    }
}
