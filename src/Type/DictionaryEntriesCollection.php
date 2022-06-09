<?php

namespace Flexsim\FlexnetOperations\Type;

class DictionaryEntriesCollection extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseServiceDictionaryEntry
     */
    protected $Entry;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\LicenseServiceDictionaryEntry $Entry
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\LicenseServiceDictionaryEntry $Entry)
    {
        $this->Entry = $Entry;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\LicenseServiceDictionaryEntry $Entry
     */
    public static function create(\Flexsim\FlexnetOperations\Type\LicenseServiceDictionaryEntry $Entry)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseServiceDictionaryEntry
     */
    public function getEntry()
    {
        return $this->Entry;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseServiceDictionaryEntry $Entry
     * @return $this
     */
    public function setEntry($Entry)
    {
        $this->Entry = $Entry;

        return $this;
    }
}
