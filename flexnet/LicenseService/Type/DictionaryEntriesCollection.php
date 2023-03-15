<?php

namespace Flexnet\LicenseService\Type;

class DictionaryEntriesCollection
{
    /**
     * @var \Flexnet\LicenseService\Type\DictionaryEntry|array<\Flexnet\LicenseService\Type\DictionaryEntry>
     */
    private $Entry;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\DictionaryEntry|array<\Flexnet\LicenseService\Type\DictionaryEntry>  $Entry
     */
    public function __construct(DictionaryEntry|array $Entry)
    {
        $this->Entry = $Entry;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\DictionaryEntry|array<\Flexnet\LicenseService\Type\DictionaryEntry>  $Entry
     */
    public static function create(DictionaryEntry|array $Entry)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\DictionaryEntry|array<\Flexnet\LicenseService\Type\DictionaryEntry>
     */
    public function getEntry(): DictionaryEntry|array
    {
        return $this->Entry;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\DictionaryEntry|array<\Flexnet\LicenseService\Type\DictionaryEntry>  $Entry
     */
    public function withEntry(DictionaryEntry|array $Entry): DictionaryEntriesCollection
    {
        $new = clone $this;
        $new->Entry = $Entry;

        return $new;
    }
}
