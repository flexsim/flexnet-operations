<?php

namespace Flexsim\FlexnetOperations\Type;

class DictionaryType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ManageDeviceServiceDictionaryEntry
     */
    private $entry;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ManageDeviceServiceDictionaryEntry $entry
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ManageDeviceServiceDictionaryEntry $entry)
    {
        $this->entry = $entry;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ManageDeviceServiceDictionaryEntry $entry
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ManageDeviceServiceDictionaryEntry $entry)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ManageDeviceServiceDictionaryEntry
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ManageDeviceServiceDictionaryEntry $entry
     * @return $this
     */
    public function setEntry($entry)
    {
        $this->entry = $entry;
        return $this;
    }
}
