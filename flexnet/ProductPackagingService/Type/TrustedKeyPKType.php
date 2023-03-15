<?php

namespace Flexnet\ProductPackagingService\Type;

class TrustedKeyPKType
{
    /**
     * @var string
     */
    private $keyName;

    /**
     * Constructor
     */
    public function __construct(string $keyName)
    {
        $this->keyName = $keyName;
    }

    public static function create(string $keyName)
    {
        return new static(...\func_get_args());
    }

    public function getKeyName(): string
    {
        return $this->keyName;
    }

    public function withKeyName(string $keyName): TrustedKeyPKType
    {
        $new = clone $this;
        $new->keyName = $keyName;

        return $new;
    }
}
