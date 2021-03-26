<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateFeatureBundlesListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType
     */
    private $featureBundle;

    /**
     * @var string
     */
    private $opType;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType $featureBundle
     * @var string $opType
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType $featureBundle, string $opType)
    {
        $this->featureBundle = $featureBundle;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType $featureBundle
     * @var string $opType
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType $featureBundle, string $opType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType
     */
    public function getFeatureBundle()
    {
        return $this->featureBundle;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType $featureBundle
     * @return $this
     */
    public function setFeatureBundle($featureBundle)
    {
        $this->featureBundle = $featureBundle;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpType()
    {
        return $this->opType;
    }

    /**
     * @param string $opType
     * @return $this
     */
    public function setOpType($opType)
    {
        $this->opType = $opType;
        return $this;
    }


}

