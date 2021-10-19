<?php

namespace Flexsim\FlexnetOperations\Type;

class CreateFeatureBundleDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeaturesListType
     */
    protected $features;

    /**
     * Constructor
     *
     * @param string $name
     * @param \Flexsim\FlexnetOperations\Type\FeaturesListType $features
     * @param string $description
     */
    public function __construct(string $name, \Flexsim\FlexnetOperations\Type\FeaturesListType $features, string $description = null)
    {
        $this->name = $name;
        $this->features = $features;
        $this->description = $description;
    }

    /**
     * create a new instance of this class
     *
     * @param string $name
     * @param \Flexsim\FlexnetOperations\Type\FeaturesListType $features
     * @param string $description
     */
    public static function create(string $name, \Flexsim\FlexnetOperations\Type\FeaturesListType $features, string $description = null)
    {
        return new self(...func_get_args());
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
