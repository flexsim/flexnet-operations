<?php

namespace Flexsim\FlexnetOperations\Type;

class FeatureStateChangeDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureIdentifierType
     */
    private $featureIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\StateChangeDataType
     */
    private $stateChangeRecord;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureIdentifierType $featureIdentifier
     * @var \Flexsim\FlexnetOperations\Type\StateChangeDataType|array $stateChangeRecord
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FeatureIdentifierType $featureIdentifier, $stateChangeRecord = null)
    {
        $this->featureIdentifier = $featureIdentifier;
        $this->stateChangeRecord = $stateChangeRecord;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureIdentifierType $featureIdentifier
     * @var \Flexsim\FlexnetOperations\Type\StateChangeDataType|array $stateChangeRecord
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FeatureIdentifierType $featureIdentifier, $stateChangeRecord = null)
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

