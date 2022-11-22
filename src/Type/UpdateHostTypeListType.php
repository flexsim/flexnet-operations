<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateHostTypeListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\HostTypePKType|array
     */
    protected $hostType;

    /**
     * @var string
     */
    protected $opType;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\HostTypePKType|array  $hostType
     * @param  string  $opType
     */
    public function __construct($hostType, string $opType)
    {
        $this->hostType = $hostType;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\HostTypePKType|array  $hostType
     * @param  string  $opType
     */
    public static function create($hostType, string $opType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\HostTypePKType|array
     */
    public function getHostType()
    {
        return $this->hostType;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\HostTypePKType|array  $hostType
     * @return $this
     */
    public function setHostType($hostType)
    {
        $this->hostType = $hostType;

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
     * @param  string  $opType
     * @return $this
     */
    public function setOpType($opType)
    {
        $this->opType = $opType;

        return $this;
    }
}
