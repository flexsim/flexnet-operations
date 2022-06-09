<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedDeleteFeatureDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureIdentifierType
     */
    protected $featureIdentifier;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FeatureIdentifierType $featureIdentifier
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FeatureIdentifierType $featureIdentifier, string $reason = null)
    {
        $this->featureIdentifier = $featureIdentifier;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FeatureIdentifierType $featureIdentifier
     * @param string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FeatureIdentifierType $featureIdentifier, string $reason = null)
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
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }
}
