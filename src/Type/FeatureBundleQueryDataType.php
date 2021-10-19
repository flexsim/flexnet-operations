<?php

namespace Flexsim\FlexnetOperations\Type;

class FeatureBundleQueryDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $uniqueId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeaturesListType
     */
    protected $features;

    /**
     * Constructor
     *
     * @param string $uniqueId
     * @param string $name
     * @param string $state
     * @param string $description
     * @param \Flexsim\FlexnetOperations\Type\FeaturesListType $features
     */
    public function __construct(
        string $uniqueId,
        string $name,
        string $state,
        string $description = null,
        \Flexsim\FlexnetOperations\Type\FeaturesListType $features = null
    ) {
        $this->uniqueId = $uniqueId;
        $this->name = $name;
        $this->state = $state;
        $this->description = $description;
        $this->features = $features;
    }

    /**
     * create a new instance of this class
     *
     * @param string $uniqueId
     * @param string $name
     * @param string $state
     * @param string $description
     * @param \Flexsim\FlexnetOperations\Type\FeaturesListType $features
     */
    public static function create(
        string $uniqueId,
        string $name,
        string $state,
        string $description = null,
        \Flexsim\FlexnetOperations\Type\FeaturesListType $features = null
    ) {
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
