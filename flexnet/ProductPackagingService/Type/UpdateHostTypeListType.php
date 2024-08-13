<?php

namespace Flexnet\ProductPackagingService\Type;

class UpdateHostTypeListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\HostTypePKType|array<\Flexnet\ProductPackagingService\Type\HostTypePKType>|null
     */
    private $hostType;

    /**
     * @var string
     */
    private $opType;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\HostTypePKType|array<\Flexnet\ProductPackagingService\Type\HostTypePKType>|null  $hostType
     */
    public function __construct(string $opType, \Flexnet\ProductPackagingService\Type\HostTypePKType|array|null $hostType = null)
    {
        $this->opType = $opType;
        $this->hostType = $hostType;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\HostTypePKType|array<\Flexnet\ProductPackagingService\Type\HostTypePKType>|null  $hostType
     */
    public static function create(string $opType, \Flexnet\ProductPackagingService\Type\HostTypePKType|array|null $hostType = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\HostTypePKType|array<\Flexnet\ProductPackagingService\Type\HostTypePKType>|null
     */
    public function getHostType(): \Flexnet\ProductPackagingService\Type\HostTypePKType|array|null
    {
        return $this->hostType;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\HostTypePKType|array<\Flexnet\ProductPackagingService\Type\HostTypePKType>|null  $hostType
     */
    public function withHostType(\Flexnet\ProductPackagingService\Type\HostTypePKType|array|null $hostType): \Flexnet\ProductPackagingService\Type\UpdateHostTypeListType
    {
        $new = clone $this;
        $new->hostType = $hostType;

        return $new;
    }

    public function getOpType(): string
    {
        return $this->opType;
    }

    public function withOpType(string $opType): \Flexnet\ProductPackagingService\Type\UpdateHostTypeListType
    {
        $new = clone $this;
        $new->opType = $opType;

        return $new;
    }
}
