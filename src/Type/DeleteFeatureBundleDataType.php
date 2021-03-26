<?php

namespace Flexsim\FlexnetOperations\Type;

class DeleteFeatureBundleDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType
     */
    private $featureBundleIdentifier;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType $featureBundleIdentifier
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType $featureBundleIdentifier)
    {
        $this->featureBundleIdentifier = $featureBundleIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType $featureBundleIdentifier
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType $featureBundleIdentifier)
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


}

