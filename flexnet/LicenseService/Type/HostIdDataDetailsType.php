<?php

namespace Flexnet\LicenseService\Type;

class HostIdDataDetailsType
{
    /**
     * @var \Flexnet\LicenseService\Type\ServerIDsType|null
     */
    private $serverHost;

    /**
     * @var string|null
     */
    private $nodeLockHost;

    /**
     * @var \Flexnet\LicenseService\Type\NodeIDsType|null
     */
    private $countedNodeLockHostIds;

    /**
     * @var \Flexnet\LicenseService\Type\CustomHostIDType|null
     */
    private $customHost;

    /**
     * @var int|null
     */
    private $countFromParent;

    /**
     * @var int|null
     */
    private $countFromOwn;

    /**
     * @var string|null
     */
    private $parentActivationId;

    /**
     * Constructor
     */
    public function __construct(ServerIDsType $serverHost = null, string $nodeLockHost = null, NodeIDsType $countedNodeLockHostIds = null, CustomHostIDType $customHost = null, int $countFromParent = null, int $countFromOwn = null, string $parentActivationId = null)
    {
        $this->serverHost = $serverHost;
        $this->nodeLockHost = $nodeLockHost;
        $this->countedNodeLockHostIds = $countedNodeLockHostIds;
        $this->customHost = $customHost;
        $this->countFromParent = $countFromParent;
        $this->countFromOwn = $countFromOwn;
        $this->parentActivationId = $parentActivationId;
    }

    public static function create(ServerIDsType $serverHost = null, string $nodeLockHost = null, NodeIDsType $countedNodeLockHostIds = null, CustomHostIDType $customHost = null, int $countFromParent = null, int $countFromOwn = null, string $parentActivationId = null)
    {
        return new static(...\func_get_args());
    }

    public function getServerHost(): ?ServerIDsType
    {
        return $this->serverHost;
    }

    public function withServerHost(?ServerIDsType $serverHost): HostIdDataDetailsType
    {
        $new = clone $this;
        $new->serverHost = $serverHost;

        return $new;
    }

    public function getNodeLockHost(): ?string
    {
        return $this->nodeLockHost;
    }

    public function withNodeLockHost(?string $nodeLockHost): HostIdDataDetailsType
    {
        $new = clone $this;
        $new->nodeLockHost = $nodeLockHost;

        return $new;
    }

    public function getCountedNodeLockHostIds(): ?NodeIDsType
    {
        return $this->countedNodeLockHostIds;
    }

    public function withCountedNodeLockHostIds(?NodeIDsType $countedNodeLockHostIds): HostIdDataDetailsType
    {
        $new = clone $this;
        $new->countedNodeLockHostIds = $countedNodeLockHostIds;

        return $new;
    }

    public function getCustomHost(): ?CustomHostIDType
    {
        return $this->customHost;
    }

    public function withCustomHost(?CustomHostIDType $customHost): HostIdDataDetailsType
    {
        $new = clone $this;
        $new->customHost = $customHost;

        return $new;
    }

    public function getCountFromParent(): ?int
    {
        return $this->countFromParent;
    }

    public function withCountFromParent(?int $countFromParent): HostIdDataDetailsType
    {
        $new = clone $this;
        $new->countFromParent = $countFromParent;

        return $new;
    }

    public function getCountFromOwn(): ?int
    {
        return $this->countFromOwn;
    }

    public function withCountFromOwn(?int $countFromOwn): HostIdDataDetailsType
    {
        $new = clone $this;
        $new->countFromOwn = $countFromOwn;

        return $new;
    }

    public function getParentActivationId(): ?string
    {
        return $this->parentActivationId;
    }

    public function withParentActivationId(?string $parentActivationId): HostIdDataDetailsType
    {
        $new = clone $this;
        $new->parentActivationId = $parentActivationId;

        return $new;
    }
}
