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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\DurationType|null  $duration
     */
    public function __construct(string $versionOption, DurationType|null $duration = null)
    {
        $this->versionOption = $versionOption;
        $this->duration = $duration;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DurationType|null  $duration
     */
    public static function create(string $versionOption, DurationType|null $duration = null)
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

    /**
     * @return \Flexnet\EntitlementOrderService\Type\DurationType|null
     */
    public function getDuration(): DurationType|null
    {
        return $this->duration;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DurationType|null  $duration
     */
    public function withDuration(DurationType|null $duration): VersionDateAttributesType
    {
        $new = clone $this;
        $new->duration = $duration;

        return $new;
    }
}
