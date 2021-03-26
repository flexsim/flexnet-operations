<?php

namespace Flexsim\FlexnetOperations\Type;

class DupGroupDataType
{

    /**
     * @var string
     */
    private $dupGroupOption;

    /**
     * @var \Flexsim\FlexnetOperations\Type\GroupMaskDataType
     */
    private $groupMask;

    /**
     * Constructor
     *
     * @var string $dupGroupOption
     * @var \Flexsim\FlexnetOperations\Type\GroupMaskDataType $groupMask
     */
    public function __construct(string $dupGroupOption, \Flexsim\FlexnetOperations\Type\GroupMaskDataType $groupMask = null)
    {
        $this->dupGroupOption = $dupGroupOption;
        $this->groupMask = $groupMask;
    }

    /**
     * create a new instance of this class
     *
     * @var string $dupGroupOption
     * @var \Flexsim\FlexnetOperations\Type\GroupMaskDataType $groupMask
     */
    public static function create(string $dupGroupOption, \Flexsim\FlexnetOperations\Type\GroupMaskDataType $groupMask = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getDupGroupOption()
    {
        return $this->dupGroupOption;
    }

    /**
     * @param string $dupGroupOption
     * @return $this
     */
    public function setDupGroupOption($dupGroupOption)
    {
        $this->dupGroupOption = $dupGroupOption;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\GroupMaskDataType
     */
    public function getGroupMask()
    {
        return $this->groupMask;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\GroupMaskDataType $groupMask
     * @return $this
     */
    public function setGroupMask($groupMask)
    {
        $this->groupMask = $groupMask;
        return $this;
    }


}

