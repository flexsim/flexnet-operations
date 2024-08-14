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
    public function __construct(?\Flexnet\LicenseService\Type\DictionaryEntriesCollection $Entries = null)
    {
        $this->Entries = $Entries;
    }

    public static function create(?\Flexnet\LicenseService\Type\DictionaryEntriesCollection $Entries = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntries(): ?\Flexnet\LicenseService\Type\DictionaryEntriesCollection
    {
        return $this->Entries;
    }

    public function withEntries(?\Flexnet\LicenseService\Type\DictionaryEntriesCollection $Entries): \Flexnet\LicenseService\Type\Dictionary
    {
        $new = clone $this;
        $new->Entries = $Entries;

        return $new;
    }
}
