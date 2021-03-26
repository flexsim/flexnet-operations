<?php

namespace Flexsim\FlexnetOperations\Type;

class FeatureBundleStateChangeDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType
     */
    private $featureBundleIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\StateChangeDataType
     */
    private $stateChangeRecord;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType $featureBundleIdentifier
     * @var \Flexsim\FlexnetOperations\Type\StateChangeDataType|array $stateChangeRecord
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType $featureBundleIdentifier, $stateChangeRecord = null)
    {
        $this->featureBundleIdentifier = $featureBundleIdentifier;
        $this->stateChangeRecord = $stateChangeRecord;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType $featureBundleIdentifier
     * @var \Flexsim\FlexnetOperations\Type\StateChangeDataType|array $stateChangeRecord
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType $featureBundleIdentifier, $stateChangeRecord = null)
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
     * @return \Flexsim\FlexnetOperations\Type\StateChangeDataType
     */
    public function getStateChangeRecord()
    {
        return $this->stateChangeRecord;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\StateChangeDataType $stateChangeRecord
     * @return $this
     */
    public function setStateChangeRecord($stateChangeRecord)
    {
        $this->stateChangeRecord = $stateChangeRecord;
        return $this;
    }


}

