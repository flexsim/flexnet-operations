<?php

namespace Flexsim\FlexnetOperations\Type;

class LinkFailAddonDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\LinkFailAddonDataType
     */
    private $failAddon;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\LinkFailAddonDataType|array $failAddon
     */
    public function __construct($failAddon = null)
    {
        $this->failAddon = $failAddon;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\LinkFailAddonDataType|array $failAddon
     */
    public static function create($failAddon = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LinkFailAddonDataType
     */
    public function getFailAddon()
    {
        return $this->failAddon;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LinkFailAddonDataType $failAddon
     * @return $this
     */
    public function setFailAddon($failAddon)
    {
        $this->failAddon = $failAddon;
        return $this;
    }


}

