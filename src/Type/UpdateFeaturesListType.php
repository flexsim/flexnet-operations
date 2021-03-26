<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateFeaturesListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureIdentifierWithCountDataType
     */
    private $feature;

    /**
     * @var string
     */
    private $opType;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureIdentifierWithCountDataType|array $feature
     * @var string $opType
     */
    public function __construct($feature = null, string $opType)
    {
        $this->feature = $feature;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FeatureIdentifierWithCountDataType|array $feature
     * @var string $opType
     */
    public static function create($feature = null, string $opType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureIdentifierWithCountDataType
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeatureIdentifierWithCountDataType $feature
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
