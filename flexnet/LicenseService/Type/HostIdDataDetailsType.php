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
     *
     * @param  \Flexnet\LicenseService\Type\ServerIDsType|null  $serverHost
     * @param  string|null  $nodeLockHost
     * @param  \Flexnet\LicenseService\Type\NodeIDsType|null  $countedNodeLockHostIds
     * @param  \Flexnet\LicenseService\Type\CustomHostIDType|null  $customHost
     * @param  int|null  $countFromParent
     * @param  int|null  $countFromOwn
     * @param  string|null  $parentActivationId
     */
    public function __construct(ServerIDsType|null $serverHost = null, string|null $nodeLockHost = null, NodeIDsType|null $countedNodeLockHostIds = null, CustomHostIDType|null $customHost = null, int|null $countFromParent = null, int|null $countFromOwn = null, string|null $parentActivationId = null)
    {
        $this->serverHost = $serverHost;
        $this->nodeLockHost = $nodeLockHost;
        $this->countedNodeLockHostIds = $countedNodeLockHostIds;
        $this->customHost = $customHost;
        $this->countFromParent = $countFromParent;
        $this->countFromOwn = $countFromOwn;
        $this->parentActivationId = $parentActivationId;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ServerIDsType|null  $serverHost
     * @param  string|null  $nodeLockHost
     * @param  \Flexnet\LicenseService\Type\NodeIDsType|null  $countedNodeLockHostIds
     * @param  \Flexnet\LicenseService\Type\CustomHostIDType|null  $customHost
     * @param  int|null  $countFromParent
     * @param  int|null  $countFromOwn
     * @param  string|null  $parentActivationId
     */
    public static function create(ServerIDsType|null $serverHost = null, string|null $nodeLockHost = null, NodeIDsType|null $countedNodeLockHostIds = null, CustomHostIDType|null $customHost = null, int|null $countFromParent = null, int|null $countFromOwn = null, string|null $parentActivationId = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\ServerIDsType|null
     */
    public function getServerHost(): ServerIDsType|null
    {
        return $this->serverHost;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ServerIDsType|null  $serverHost
     * @return HostIdDataDetailsType
     */
    public function withServerHost(ServerIDsType|null $serverHost): HostIdDataDetailsType
    {
        $new = clone $this;
        $new->serverHost = $serverHost;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getNodeLockHost(): string|null
    {
        return $this->nodeLockHost;
    }

    /**
     * @param  string|null  $nodeLockHost
     * @return HostIdDataDetailsType
     */
    public function withNodeLockHost(string|null $nodeLockHost): HostIdDataDetailsType
    {
        $new = clone $this;
        $new->nodeLockHost = $nodeLockHost;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\NodeIDsType|null
     */
    public function getCountedNodeLockHostIds(): NodeIDsType|null
    {
        return $this->countedNodeLockHostIds;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\NodeIDsType|null  $countedNodeLockHostIds
     * @return HostIdDataDetailsType
     */
    public function withCountedNodeLockHostIds(NodeIDsType|null $countedNodeLockHostIds): HostIdDataDetailsType
    {
        $new = clone $this;
        $new->countedNodeLockHostIds = $countedNodeLockHostIds;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CustomHostIDType|null
     */
    public function getCustomHost(): CustomHostIDType|null
    {
        return $this->customHost;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CustomHostIDType|null  $customHost
     * @return HostIdDataDetailsType
     */
    public function withCustomHost(CustomHostIDType|null $customHost): HostIdDataDetailsType
    {
        $new = clone $this;
        $new->customHost = $customHost;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getCountFromParent(): int|null
    {
        return $this->countFromParent;
    }

    /**
     * @param  int|null  $countFromParent
     * @return HostIdDataDetailsType
     */
    public function withCountFromParent(int|null $countFromParent): HostIdDataDetailsType
    {
        $new = clone $this;
        $new->countFromParent = $countFromParent;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getCountFromOwn(): int|null
    {
        return $this->countFromOwn;
    }

    /**
     * @param  int|null  $countFromOwn
     * @return HostIdDataDetailsType
     */
    public function withCountFromOwn(int|null $countFromOwn): HostIdDataDetailsType
    {
        $new = clone $this;
        $new->countFromOwn = $countFromOwn;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getParentActivationId(): string|null
    {
        return $this->parentActivationId;
    }

    /**
     * @param  string|null  $parentActivationId
     * @return HostIdDataDetailsType
     */
    public function withParentActivationId(string|null $parentActivationId): HostIdDataDetailsType
    {
        $new = clone $this;
        $new->parentActivationId = $parentActivationId;

        return $new;
    }
}
