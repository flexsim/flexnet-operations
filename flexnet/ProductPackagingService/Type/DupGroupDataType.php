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
    public function __construct(string $dupGroupOption, ?\Flexnet\ProductPackagingService\Type\GroupMaskDataType $groupMask = null)
    {
        $this->dupGroupOption = $dupGroupOption;
        $this->groupMask = $groupMask;
    }

    public static function create(string $dupGroupOption, ?\Flexnet\ProductPackagingService\Type\GroupMaskDataType $groupMask = null)
    {
        return new static(...\func_get_args());
    }

    public function getDupGroupOption(): string
    {
        return $this->dupGroupOption;
    }

    public function withDupGroupOption(string $dupGroupOption): \Flexnet\ProductPackagingService\Type\DupGroupDataType
    {
        $new = clone $this;
        $new->dupGroupOption = $dupGroupOption;

        return $new;
    }

    public function getGroupMask(): ?\Flexnet\ProductPackagingService\Type\GroupMaskDataType
    {
        return $this->groupMask;
    }

    public function withGroupMask(?\Flexnet\ProductPackagingService\Type\GroupMaskDataType $groupMask): \Flexnet\ProductPackagingService\Type\DupGroupDataType
    {
        $new = clone $this;
        $new->groupMask = $groupMask;

        return $new;
    }
}
