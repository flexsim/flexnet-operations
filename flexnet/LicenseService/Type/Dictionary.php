<?php

namespace Flexnet\LicenseService\Type;

class Dictionary
{
    /**
     * @var \Flexnet\LicenseService\Type\DictionaryEntriesCollection|null
     */
    private $Entries;

    /**
     * Constructor
     */
    public function __construct(DictionaryEntriesCollection $Entries = null)
    {
        $this->Entries = $Entries;
    }

    public static function create(DictionaryEntriesCollection $Entries = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntries(): ?DictionaryEntriesCollection
    {
        return $this->Entries;
    }

    public function withEntries(?DictionaryEntriesCollection $Entries): Dictionary
    {
        $new = clone $this;
        $new->Entries = $Entries;

        return $new;
    }
}
