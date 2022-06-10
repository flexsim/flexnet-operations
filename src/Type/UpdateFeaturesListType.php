<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateFeaturesListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureIdentifierWithCountDataType|array
     */
    protected $feature;

    /**
     * @var string
     */
    protected $opType;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\FeatureIdentifierWithCountDataType|array $feature
     * @param string $opType
     */
    public function __construct($feature, string $opType)
    {
        $this->feature = $feature;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\FeatureIdentifierWithCountDataType|array $feature
     * @param string $opType
     */
    public static function create($feature, string $opType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureIdentifierWithCountDataType|array
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeatureIdentifierWithCountDataType|array $feature
     * @return $this
     */
    public function setFeature($feature)
    {
        $this->feature = $feature;

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
