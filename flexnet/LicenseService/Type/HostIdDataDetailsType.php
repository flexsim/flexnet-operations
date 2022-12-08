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
     * @param \Flexnet\LicenseService\Type\ServerIDsType|null $serverHost
     * @param string|null $nodeLockHost
     * @param \Flexnet\LicenseService\Type\NodeIDsType|null $countedNodeLockHostIds
     * @param \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost
     * @param int|null $countFromParent
     * @param int|null $countFromOwn
     * @param string|null $parentActivationId
     */
    public function __construct(\Flexnet\LicenseService\Type\ServerIDsType|null $serverHost = null, string|null $nodeLockHost = null, \Flexnet\LicenseService\Type\NodeIDsType|null $countedNodeLockHostIds = null, \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost = null, int|null $countFromParent = null, int|null $countFromOwn = null, string|null $parentActivationId = null)
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
     * @param \Flexnet\LicenseService\Type\ServerIDsType|null $serverHost
     * @param string|null $nodeLockHost
     * @param \Flexnet\LicenseService\Type\NodeIDsType|null $countedNodeLockHostIds
     * @param \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost
     * @param int|null $countFromParent
     * @param int|null $countFromOwn
     * @param string|null $parentActivationId
     */
    public static function create(\Flexnet\LicenseService\Type\ServerIDsType|null $serverHost = null, string|null $nodeLockHost = null, \Flexnet\LicenseService\Type\NodeIDsType|null $countedNodeLockHostIds = null, \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost = null, int|null $countFromParent = null, int|null $countFromOwn = null, string|null $parentActivationId = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\ServerIDsType|null
     */
    public function getServerHost() : \Flexnet\LicenseService\Type\ServerIDsType|null
    {
        return $this->serverHost;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ServerIDsType|null $serverHost
     * @return HostIdDataDetailsType
     */
    public function withServerHost(\Flexnet\LicenseService\Type\ServerIDsType|null $serverHost) : \Flexnet\LicenseService\Type\HostIdDataDetailsType
    {
        $new = clone $this;
        $new->serverHost = $serverHost;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getNodeLockHost() : string|null
    {
        return $this->nodeLockHost;
    }

    /**
     * @param string|null $nodeLockHost
     * @return HostIdDataDetailsType
     */
    public function withNodeLockHost(string|null $nodeLockHost) : \Flexnet\LicenseService\Type\HostIdDataDetailsType
    {
        $new = clone $this;
        $new->nodeLockHost = $nodeLockHost;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\NodeIDsType|null
     */
    public function getCountedNodeLockHostIds() : \Flexnet\LicenseService\Type\NodeIDsType|null
    {
        return $this->countedNodeLockHostIds;
    }

    /**
     * @param \Flexnet\LicenseService\Type\NodeIDsType|null $countedNodeLockHostIds
     * @return HostIdDataDetailsType
     */
    public function withCountedNodeLockHostIds(\Flexnet\LicenseService\Type\NodeIDsType|null $countedNodeLockHostIds) : \Flexnet\LicenseService\Type\HostIdDataDetailsType
    {
        $new = clone $this;
        $new->countedNodeLockHostIds = $countedNodeLockHostIds;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CustomHostIDType|null
     */
    public function getCustomHost() : \Flexnet\LicenseService\Type\CustomHostIDType|null
    {
        return $this->customHost;
    }

    /**
     * @param \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost
     * @return HostIdDataDetailsType
     */
    public function withCustomHost(\Flexnet\LicenseService\Type\CustomHostIDType|null $customHost) : \Flexnet\LicenseService\Type\HostIdDataDetailsType
    {
        $new = clone $this;
        $new->customHost = $customHost;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getCountFromParent() : int|null
    {
        return $this->countFromParent;
    }

    /**
     * @param int|null $countFromParent
     * @return HostIdDataDetailsType
     */
    public function withCountFromParent(int|null $countFromParent) : \Flexnet\LicenseService\Type\HostIdDataDetailsType
    {
        $new = clone $this;
        $new->countFromParent = $countFromParent;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getCountFromOwn() : int|null
    {
        return $this->countFromOwn;
    }

    /**
     * @param int|null $countFromOwn
     * @return HostIdDataDetailsType
     */
    public function withCountFromOwn(int|null $countFromOwn) : \Flexnet\LicenseService\Type\HostIdDataDetailsType
    {
        $new = clone $this;
        $new->countFromOwn = $countFromOwn;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getParentActivationId() : string|null
    {
        return $this->parentActivationId;
    }

    /**
     * @param string|null $parentActivationId
     * @return HostIdDataDetailsType
     */
    public function withParentActivationId(string|null $parentActivationId) : \Flexnet\LicenseService\Type\HostIdDataDetailsType
    {
        $new = clone $this;
        $new->parentActivationId = $parentActivationId;

        return $new;
    }
}

