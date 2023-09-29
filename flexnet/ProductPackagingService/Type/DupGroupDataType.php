<?php

namespace Flexnet\ProductPackagingService\Type;

class DupGroupDataType
{
    /**
     * @var string
     */
    private $dupGroupOption;

    /**
     * @var \Flexnet\ProductPackagingService\Type\GroupMaskDataType|null
     */
    private $groupMask;

    /**
     * Constructor
     */
    public function __construct(string $dupGroupOption, GroupMaskDataType $groupMask = null)
    {
        $this->dupGroupOption = $dupGroupOption;
        $this->groupMask = $groupMask;
    }

    public static function create(string $dupGroupOption, GroupMaskDataType $groupMask = null)
    {
        return new static(...\func_get_args());
    }

    public function getDupGroupOption(): string
    {
        return $this->dupGroupOption;
    }

    public function withDupGroupOption(string $dupGroupOption): DupGroupDataType
    {
        $new = clone $this;
        $new->dupGroupOption = $dupGroupOption;

        return $new;
    }

    public function getGroupMask(): ?GroupMaskDataType
    {
        return $this->groupMask;
    }

    public function withGroupMask(?GroupMaskDataType $groupMask): DupGroupDataType
    {
        $new = clone $this;
        $new->groupMask = $groupMask;

        return $new;
    }
}
