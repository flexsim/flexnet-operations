<?php

namespace Flexsim\FlexnetOperations\Type;

class GroupMaskDataType extends FlexnetType
{
    /**
     * @var string
     */
    protected $option;

    /**
     * Constructor
     *
     * @param  string|array  $option
     */
    public function __construct($option = null)
    {
        $this->option = $option;
    }

    /**
     * create a new instance of this class
     *
     * @param  string|array  $option
     */
    public static function create($option = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param  string  $option
     * @return $this
     */
    public function setOption($option)
    {
        $this->option = $option;

        return $this;
    }
}
