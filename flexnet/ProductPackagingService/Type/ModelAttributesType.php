<?php

namespace Flexnet\ProductPackagingService\Type;

class ModelAttributesType
{
    /**
     * @var bool
     */
    private $needServerId;

    /**
     * @var bool
     */
    private $needNodeLockId;

    /**
     * @var bool
     */
    private $needCount;

    /**
     * @var bool
     */
    private $needOverdraftCount;

    /**
     * Constructor
     */
    public function __construct(bool $needServerId, bool $needNodeLockId, bool $needCount, bool $needOverdraftCount)
    {
        $this->needServerId = $needServerId;
        $this->needNodeLockId = $needNodeLockId;
        $this->needCount = $needCount;
        $this->needOverdraftCount = $needOverdraftCount;
    }

    public static function create(bool $needServerId, bool $needNodeLockId, bool $needCount, bool $needOverdraftCount)
    {
        return new static(...\func_get_args());
    }

    public function getNeedServerId(): bool
    {
        return $this->needServerId;
    }

    public function withNeedServerId(bool $needServerId): \Flexnet\ProductPackagingService\Type\ModelAttributesType
    {
        $new = clone $this;
        $new->needServerId = $needServerId;

        return $new;
    }

    public function getNeedNodeLockId(): bool
    {
        return $this->needNodeLockId;
    }

    public function withNeedNodeLockId(bool $needNodeLockId): \Flexnet\ProductPackagingService\Type\ModelAttributesType
    {
        $new = clone $this;
        $new->needNodeLockId = $needNodeLockId;

        return $new;
    }

    public function getNeedCount(): bool
    {
        return $this->needCount;
    }

    public function withNeedCount(bool $needCount): \Flexnet\ProductPackagingService\Type\ModelAttributesType
    {
        $new = clone $this;
        $new->needCount = $needCount;

        return $new;
    }

    public function getNeedOverdraftCount(): bool
    {
        return $this->needOverdraftCount;
    }

    public function withNeedOverdraftCount(bool $needOverdraftCount): \Flexnet\ProductPackagingService\Type\ModelAttributesType
    {
        $new = clone $this;
        $new->needOverdraftCount = $needOverdraftCount;

        return $new;
    }
}
