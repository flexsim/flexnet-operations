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
     * @param string $description
     * @param \Flexsim\FlexnetOperations\Type\FeaturesListType $features
     */
    public function __construct(string $name, string $description = null, \Flexsim\FlexnetOperations\Type\FeaturesListType $features)
    {
        $this->name = $name;
        $this->description = $description;
        $this->features = $features;
    }

    /**
     * create a new instance of this class
     *
     * @param string $name
     * @param string $description
     * @param \Flexsim\FlexnetOperations\Type\FeaturesListType $features
     */
    public static function create(string $name, string $description = null, \Flexsim\FlexnetOperations\Type\FeaturesListType $features)
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
