<?php

namespace Flexnet\LicenseService\Type;

class AccountPKType
{
    /**
     * @var string
     */
    private $name;

    /**
     * Constructor
     *
     * @param  string  $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param  string  $name
     */
    public static function create(string $name)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param  string  $name
     * @return AccountPKType
     */
    public function withName(string $name): AccountPKType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }
}