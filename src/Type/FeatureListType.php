<?php

namespace Flexsim\FlexnetOperations\Type;

class FeatureListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureIdentifierType|array 
     */
    protected $featureIdentifier;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureIdentifierType|array $featureIdentifier
     */
    public function __construct($featureIdentifier)
    {
        $this->featureIdentifier = $featureIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureIdentifierType|array $featureIdentifier
     */
    public static function create($featureIdentifier)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureIdentifierType|array 
     */
    public function getFeatureIdentifier()
    {
        return $this->featureIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeatureIdentifierType|array $featureIdentifier
     * @return $this
     */
    public function setFeatureIdentifier($featureIdentifier)
    {
        $this->featureIdentifier = $featureIdentifier;
        return $this;
    }
}
