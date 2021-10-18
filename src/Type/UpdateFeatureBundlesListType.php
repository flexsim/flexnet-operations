<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateFeatureBundlesListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType|array
     */
    protected $featureBundle;

    /**
     * @var string
     */
    protected $opType;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType|array $featureBundle
     * @var string $opType
     */
    public function __construct($featureBundle, string $opType)
    {
        $this->featureBundle = $featureBundle;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType|array $featureBundle
     * @var string $opType
     */
    public static function create($featureBundle, string $opType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType|array
     */
    public function getFeatureBundle()
    {
        return $this->featureBundle;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeatureBundleIdentifierWithCountDataType|array $featureBundle
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
