<?php

namespace Flexsim\FlexnetOperations\Type;

class FeatureBundleQueryDataType
{

    /**
     * @var string
     */
    private $uniqueId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $state;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeaturesListType
     */
    private $features;

    /**
     * Constructor
     *
     * @var string $uniqueId
     * @var string $name
     * @var string $description
     * @var string $state
     * @var \Flexsim\FlexnetOperations\Type\FeaturesListType $features
     */
    public function __construct(string $uniqueId, string $name, string $description = null, string $state, \Flexsim\FlexnetOperations\Type\FeaturesListType $features = null)
    {
        $this->uniqueId = $uniqueId;
        $this->name = $name;
        $this->description = $description;
        $this->state = $state;
        $this->features = $features;
    }

    /**
     * create a new instance of this class
     *
     * @var string $uniqueId
     * @var string $name
     * @var string $description
     * @var string $state
     * @var \Flexsim\FlexnetOperations\Type\FeaturesListType $features
     */
    public static function create(string $uniqueId, string $name, string $description = null, string $state, \Flexsim\FlexnetOperations\Type\FeaturesListType $features = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * @param string $uniqueId
     * @return $this
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeaturesListType
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeaturesListType $features
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->features = $features;
        return $this;
    }


}

