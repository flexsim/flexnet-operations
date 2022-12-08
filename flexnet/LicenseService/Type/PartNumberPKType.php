<?php

namespace Flexnet\LicenseService\Type;

class PartNumberPKType
{
    /**
     * @var string
     */
    private $partId;

    /**
     * Constructor
     *
     * @param string $partId
     */
    public function __construct(string $partId)
    {
        $this->partId = $partId;
    }

    /**
     * @param string $partId
     */
    public static function create(string $partId)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getPartId() : string
    {
        return $this->partId;
    }

    /**
     * @param string $partId
     * @return PartNumberPKType
     */
    public function withPartId(string $partId) : \Flexnet\LicenseService\Type\PartNumberPKType
    {
        $new = clone $this;
        $new->partId = $partId;

        return $new;
    }
}

