<?php

namespace Flexnet\EntitlementOrderService\Type;

class VersionDateAttributesType
{
    /**
     * @var string
     */
    private $versionOption;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\DurationType|null
     */
    private $duration;

    /**
     * Constructor
     */
    public function __construct(string $versionOption, DurationType $duration = null)
    {
        $this->versionOption = $versionOption;
        $this->duration = $duration;
    }

    public static function create(string $versionOption, DurationType $duration = null)
    {
        return new static(...\func_get_args());
    }

    public function getVersionOption(): string
    {
        return $this->versionOption;
    }

    public function withVersionOption(string $versionOption): VersionDateAttributesType
    {
        $new = clone $this;
        $new->versionOption = $versionOption;

        return $new;
    }

    public function getDuration(): ?DurationType
    {
        return $this->duration;
    }

    public function withDuration(?DurationType $duration): VersionDateAttributesType
    {
        $new = clone $this;
        $new->duration = $duration;

        return $new;
    }
}
