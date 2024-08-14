<?php

namespace Flexnet\ProductPackagingService\Type;

class GroupMaskDataType
{
    /**
     * @var string|array<\Flexnet\ProductPackagingService\Type\GroupMaskType>|null
     */
    private $option;

    /**
     * Constructor
     *
     * @param  string|array<\Flexnet\ProductPackagingService\Type\GroupMaskType>|null  $option
     */
    public function __construct(string|array|null $option = null)
    {
        $this->option = $option;
    }

    /**
     * @param  string|array<\Flexnet\ProductPackagingService\Type\GroupMaskType>|null  $option
     */
    public static function create(string|array|null $option = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string|array<\Flexnet\ProductPackagingService\Type\GroupMaskType>|null
     */
    public function getOption(): string|array|null
    {
        return $this->option;
    }

    /**
     * @param  string|array<\Flexnet\ProductPackagingService\Type\GroupMaskType>|null  $option
     */
    public function withOption(string|array|null $option): \Flexnet\ProductPackagingService\Type\GroupMaskDataType
    {
        $new = clone $this;
        $new->option = $option;

        return $new;
    }
}
