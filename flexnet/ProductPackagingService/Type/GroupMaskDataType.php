<?php

namespace Flexnet\ProductPackagingService\Type;

class GroupMaskDataType
{
    /**
     * @var string|array<string>|null
     */
    private $option;

    /**
     * Constructor
     *
     * @param  string|array<string>|null  $option
     */
    public function __construct(string|array|null $option = null)
    {
        $this->option = $option;
    }

    /**
     * @param  string|array<string>|null  $option
     */
    public static function create(string|array|null $option = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string|array<string>|null
     */
    public function getOption(): string|array|null
    {
        return $this->option;
    }

    /**
     * @param  string|array<string>|null  $option
     */
    public function withOption(string|array|null $option): GroupMaskDataType
    {
        $new = clone $this;
        $new->option = $option;

        return $new;
    }
}
