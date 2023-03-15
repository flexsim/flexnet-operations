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
     *
     * @param  \Flexnet\LicenseService\Type\DictionaryEntriesCollection|null  $Entries
     */
    public function __construct(DictionaryEntriesCollection|null $Entries = null)
    {
        $this->Entries = $Entries;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\DictionaryEntriesCollection|null  $Entries
     */
    public static function create(DictionaryEntriesCollection|null $Entries = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\DictionaryEntriesCollection|null
     */
    public function getEntries(): DictionaryEntriesCollection|null
    {
        return $this->Entries;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\DictionaryEntriesCollection|null  $Entries
     */
    public function withEntries(DictionaryEntriesCollection|null $Entries): Dictionary
    {
        $new = clone $this;
        $new->Entries = $Entries;

        return $new;
    }
}
