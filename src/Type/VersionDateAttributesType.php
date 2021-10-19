<?php

namespace Flexsim\FlexnetOperations\Type;

class VersionDateAttributesType extends FlexnetType
{

    /**
     * @var string
     */
    protected $versionOption;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DurationType
     */
    protected $duration;

    /**
     * Constructor
     *
     * @param string $versionOption
     * @param \Flexsim\FlexnetOperations\Type\DurationType $duration
     */
    public function __construct(string $versionOption, \Flexsim\FlexnetOperations\Type\DurationType $duration = null)
    {
        $this->versionOption = $versionOption;
        $this->duration = $duration;
    }

    /**
     * create a new instance of this class
     *
     * @param string $versionOption
     * @param \Flexsim\FlexnetOperations\Type\DurationType $duration
     */
    public static function create(string $versionOption, \Flexsim\FlexnetOperations\Type\DurationType $duration = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getVersionOption()
    {
        return $this->versionOption;
    }

    /**
     * @param string $versionOption
     * @return $this
     */
    public function setVersionOption($versionOption)
    {
        $this->versionOption = $versionOption;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DurationType $duration
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }
}
