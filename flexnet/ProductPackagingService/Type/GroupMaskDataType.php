<?php

namespace Flexnet\ProductPackagingService\Type;

class GroupMaskDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\GroupMaskType|array<\Flexnet\ProductPackagingService\Type\GroupMaskType>|null
     */
    private $option;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\GroupMaskType|array<\Flexnet\ProductPackagingService\Type\GroupMaskType>|null  $option
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\GroupMaskType|array|null $option = null)
    {
        $this->option = $option;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\GroupMaskType|array<\Flexnet\ProductPackagingService\Type\GroupMaskType>|null  $option
     */
    public static function create(\Flexnet\ProductPackagingService\Type\GroupMaskType|array|null $option = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\GroupMaskType|array<\Flexnet\ProductPackagingService\Type\GroupMaskType>|null
     */
    public function getOption(): \Flexnet\ProductPackagingService\Type\GroupMaskType|array|null
    {
        return $this->option;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\GroupMaskType|array<\Flexnet\ProductPackagingService\Type\GroupMaskType>|null  $option
     */
    public function withOption(\Flexnet\ProductPackagingService\Type\GroupMaskType|array|null $option): \Flexnet\ProductPackagingService\Type\GroupMaskDataType
    {
        $new = clone $this;
        $new->option = $option;

        return $new;
    }
}
