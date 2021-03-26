<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedDeleteFeatureBundleDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType
     */
    private $featureBundleIdentifier;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType $featureBundleIdentifier
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType $featureBundleIdentifier, string $reason = null)
    {
        $this->featureBundleIdentifier = $featureBundleIdentifier;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType $featureBundleIdentifier
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierType $featureBundleIdentifier, string $reason = null)
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

