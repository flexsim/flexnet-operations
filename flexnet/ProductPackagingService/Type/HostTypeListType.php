<?php

namespace Flexnet\ProductPackagingService\Type;

class HostTypeListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\HostTypePKType|array<\Flexnet\ProductPackagingService\Type\HostTypePKType>
     */
    private $hostType;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\HostTypePKType|array<\Flexnet\ProductPackagingService\Type\HostTypePKType>  $hostType
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\HostTypePKType|array $hostType)
    {
        $this->hostType = $hostType;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\HostTypePKType|array<\Flexnet\ProductPackagingService\Type\HostTypePKType>  $hostType
     */
    public static function create(\Flexnet\ProductPackagingService\Type\HostTypePKType|array $hostType)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\HostTypePKType|array<\Flexnet\ProductPackagingService\Type\HostTypePKType>
     */
    public function getHostType(): \Flexnet\ProductPackagingService\Type\HostTypePKType|array
    {
        return $this->hostType;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\HostTypePKType|array<\Flexnet\ProductPackagingService\Type\HostTypePKType>  $hostType
     */
    public function withHostType(\Flexnet\ProductPackagingService\Type\HostTypePKType|array $hostType): \Flexnet\ProductPackagingService\Type\HostTypeListType
    {
        $new = clone $this;
        $new->hostType = $hostType;

        return $new;
    }
}
