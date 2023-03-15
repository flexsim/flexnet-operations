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
     *
     * @param  \Flexnet\ProductPackagingService\Type\GroupMaskDataType|null  $groupMask
     */
    public function __construct(string $dupGroupOption, GroupMaskDataType|null $groupMask = null)
    {
        $this->dupGroupOption = $dupGroupOption;
        $this->groupMask = $groupMask;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\GroupMaskDataType|null  $groupMask
     */
    public static function create(string $dupGroupOption, GroupMaskDataType|null $groupMask = null)
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

    /**
     * @return \Flexnet\ProductPackagingService\Type\GroupMaskDataType|null
     */
    public function getGroupMask(): GroupMaskDataType|null
    {
        return $this->groupMask;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\GroupMaskDataType|null  $groupMask
     */
    public function withGroupMask(GroupMaskDataType|null $groupMask): DupGroupDataType
    {
        $new = clone $this;
        $new->groupMask = $groupMask;

        return $new;
    }
}
