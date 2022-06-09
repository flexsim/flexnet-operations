<?php

namespace Flexsim\FlexnetOperations\Type;

class LinkFailAddonDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\LinkFailAddonDataType|array
     */
    protected $failAddon;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\LinkFailAddonDataType|array $failAddon
     */
    public function __construct($failAddon = null)
    {
        $this->failAddon = $failAddon;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\LinkFailAddonDataType|array $failAddon
     */
    public static function create($failAddon = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LinkFailAddonDataType|array
     */
    public function getFailAddon()
    {
        return $this->failAddon;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LinkFailAddonDataType|array $failAddon
     * @return $this
     */
    public function setFailAddon($failAddon)
    {
        $this->failAddon = $failAddon;

        return $this;
    }
}
