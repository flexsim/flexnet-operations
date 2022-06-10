<?php

namespace Flexsim\FlexnetOperations\Type;

class Dictionary extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\DictionaryEntriesCollection
     */
    protected $Entries;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\DictionaryEntriesCollection $Entries
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DictionaryEntriesCollection $Entries = null)
    {
        $this->Entries = $Entries;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\DictionaryEntriesCollection $Entries
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DictionaryEntriesCollection $Entries = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DictionaryEntriesCollection
     */
    public function getEntries()
    {
        return $this->Entries;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DictionaryEntriesCollection $Entries
     * @return $this
     */
    public function setEntries($Entries)
    {
        $this->Entries = $Entries;

        return $this;
    }
}
