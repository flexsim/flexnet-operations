<?php

namespace Flexsim\FlexnetOperations\Type;

class FeatureBundleQueryParametersType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $name;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    protected $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\StateQueryType
     */
    protected $state;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    protected $creationDate;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    protected $lastModifiedDate;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $name
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @param \Flexsim\FlexnetOperations\Type\StateQueryType $state
     * @param \Flexsim\FlexnetOperations\Type\DateQueryType $creationDate
     * @param \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SimpleQueryType $name = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null, \Flexsim\FlexnetOperations\Type\StateQueryType $state = null, \Flexsim\FlexnetOperations\Type\DateQueryType $creationDate = null, \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->state = $state;
        $this->creationDate = $creationDate;
        $this->lastModifiedDate = $lastModifiedDate;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $name
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @param \Flexsim\FlexnetOperations\Type\StateQueryType $state
     * @param \Flexsim\FlexnetOperations\Type\DateQueryType $creationDate
     * @param \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SimpleQueryType $name = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $description = null, \Flexsim\FlexnetOperations\Type\StateQueryType $state = null, \Flexsim\FlexnetOperations\Type\DateQueryType $creationDate = null, \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\StateQueryType
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\StateQueryType $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateQueryType $creationDate
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateQueryType $lastModifiedDate
     * @return $this
     */
    public function setLastModifiedDate($lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;

        return $this;
    }
}
