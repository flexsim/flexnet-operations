<?php

namespace Flexsim\FlexnetOperations\Type;

class DictionaryEntriesCollection
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DictionaryEntry
     */
    private $Entry;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DictionaryEntry $Entry
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DictionaryEntry $Entry)
    {
        $this->Entry = $Entry;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\DictionaryEntry $Entry
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DictionaryEntry $Entry)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DictionaryEntry
     */
    public function getEntry()
    {
        return $this->Entry;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DictionaryEntry $Entry
     * @return $this
     */
    public function setEntry($Entry)
    {
        $this->Entry = $Entry;
        return $this;
    }


}

