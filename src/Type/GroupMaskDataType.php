<?php

namespace Flexsim\FlexnetOperations\Type;

class GroupMaskDataType
{

    /**
     * @var string
     */
    private $option;

    /**
     * Constructor
     *
     * @var string|array $option
     */
    public function __construct($option = null)
    {
        $this->option = $option;
    }

    /**
     * create a new instance of this class
     *
     * @var string|array $option
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
     * @param string $option
     * @return $this
     */
    public function setOption($option)
    {
        $this->option = $option;
        return $this;
    }


}
