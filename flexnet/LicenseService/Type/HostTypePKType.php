<?php

namespace Flexnet\LicenseService\Type;

class HostTypePKType
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
     * @return HostTypePKType
     */
    public function withName(string $name): HostTypePKType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }
}
