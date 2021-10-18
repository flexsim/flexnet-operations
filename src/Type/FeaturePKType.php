<?php

namespace Flexsim\FlexnetOperations\Type;

class FeaturePKType extends FlexnetType
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $version;

    /**
     * Constructor
     *
     * @var string $name
     * @var string $version
     */
    public function __construct(string $name, string $version = null)
    {
        $this->name = $name;
        $this->version = $version;
    }

    /**
     * create a new instance of this class
     *
     * @var string $name
     * @var string $version
     */
    public static function create(string $name, string $version = null)
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
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }
}
