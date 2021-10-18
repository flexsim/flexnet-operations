<?php

namespace Flexsim\FlexnetOperations\Type;

class GenerateCapabilityResponseDictionary extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\GenerateCapabilityResponseDictionaryEntry
     */
    protected $entry;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\GenerateCapabilityResponseDictionaryEntry $entry
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\GenerateCapabilityResponseDictionaryEntry $entry)
    {
        $this->entry = $entry;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\GenerateCapabilityResponseDictionaryEntry $entry
     */
    public static function create(\Flexsim\FlexnetOperations\Type\GenerateCapabilityResponseDictionaryEntry $entry)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\GenerateCapabilityResponseDictionaryEntry
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\GenerateCapabilityResponseDictionaryEntry $entry
     * @return $this
     */
    public function setEntry($entry)
    {
        $this->entry = $entry;
        return $this;
    }
}
