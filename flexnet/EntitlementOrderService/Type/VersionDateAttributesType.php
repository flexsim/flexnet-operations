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
    public function __construct(string $versionOption, ?\Flexnet\EntitlementOrderService\Type\DurationType $duration = null)
    {
        $this->versionOption = $versionOption;
        $this->duration = $duration;
    }

    public static function create(string $versionOption, ?\Flexnet\EntitlementOrderService\Type\DurationType $duration = null)
    {
        return new static(...\func_get_args());
    }

    public function getVersionOption(): string
    {
        return $this->versionOption;
    }

    public function withVersionOption(string $versionOption): \Flexnet\EntitlementOrderService\Type\VersionDateAttributesType
    {
        $new = clone $this;
        $new->versionOption = $versionOption;

        return $new;
    }

    public function getDuration(): ?\Flexnet\EntitlementOrderService\Type\DurationType
    {
        return $this->duration;
    }

    public function withDuration(?\Flexnet\EntitlementOrderService\Type\DurationType $duration): \Flexnet\EntitlementOrderService\Type\VersionDateAttributesType
    {
        $new = clone $this;
        $new->duration = $duration;

        return $new;
    }
}
