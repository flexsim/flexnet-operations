<?php

namespace Flexsim\FlexnetOperations\Type;

class DictionaryType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DictionaryEntry
     */
    private $entry;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DictionaryEntry $entry
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DictionaryEntry $entry)
    {
        $this->entry = $entry;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\DictionaryEntry $entry
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DictionaryEntry $entry)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DictionaryEntry
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DictionaryEntry $entry
     * @return $this
     */
    public function setEntry($entry)
    {
        $this->entry = $entry;
        return $this;
    }


}

