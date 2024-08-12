<?php

namespace Flexnet\EntitlementOrderService\Type;

class VersionDateAttributesType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\VersionDateOptionType
     */
    private $versionOption;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\DurationType|null
     */
    private $duration;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\VersionDateOptionType $versionOption, ?\Flexnet\EntitlementOrderService\Type\DurationType $duration = null)
    {
        $this->versionOption = $versionOption;
        $this->duration = $duration;
    }

    public static function create(\Flexnet\EntitlementOrderService\Type\VersionDateOptionType $versionOption, ?\Flexnet\EntitlementOrderService\Type\DurationType $duration = null)
    {
        return new static(...\func_get_args());
    }

    public function getVersionOption(): \Flexnet\EntitlementOrderService\Type\VersionDateOptionType
    {
        return $this->versionOption;
    }

    public function withVersionOption(\Flexnet\EntitlementOrderService\Type\VersionDateOptionType $versionOption): \Flexnet\EntitlementOrderService\Type\VersionDateAttributesType
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
