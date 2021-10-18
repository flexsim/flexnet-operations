<?php

namespace Flexsim\FlexnetOperations\Type;

class HostIdDataDetailsType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ServerIDsType
     */
    protected $serverHost;

    /**
     * @var string
     */
    protected $nodeLockHost;

    /**
     * @var \Flexsim\FlexnetOperations\Type\NodeIDsType
     */
    protected $countedNodeLockHostIds;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CustomHostIDType
     */
    protected $customHost;

    /**
     * @var int
     */
    protected $countFromParent;

    /**
     * @var int
     */
    protected $countFromOwn;

    /**
     * @var string
     */
    protected $parentActivationId;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ServerIDsType $serverHost
     * @var string $nodeLockHost
     * @var \Flexsim\FlexnetOperations\Type\NodeIDsType $countedNodeLockHostIds
     * @var \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost
     * @var int $countFromParent
     * @var int $countFromOwn
     * @var string $parentActivationId
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ServerIDsType $serverHost = null, string $nodeLockHost = null, \Flexsim\FlexnetOperations\Type\NodeIDsType $countedNodeLockHostIds = null, \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost = null, int $countFromParent = null, int $countFromOwn = null, string $parentActivationId = null)
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
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ServerIDsType $serverHost
     * @var string $nodeLockHost
     * @var \Flexsim\FlexnetOperations\Type\NodeIDsType $countedNodeLockHostIds
     * @var \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost
     * @var int $countFromParent
     * @var int $countFromOwn
     * @var string $parentActivationId
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ServerIDsType $serverHost = null, string $nodeLockHost = null, \Flexsim\FlexnetOperations\Type\NodeIDsType $countedNodeLockHostIds = null, \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost = null, int $countFromParent = null, int $countFromOwn = null, string $parentActivationId = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ServerIDsType
     */
    public function getServerHost()
    {
        return $this->serverHost;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ServerIDsType $serverHost
     * @return $this
     */
    public function setServerHost($serverHost)
    {
        $this->serverHost = $serverHost;
        return $this;
    }

    /**
     * @return string
     */
    public function getNodeLockHost()
    {
        return $this->nodeLockHost;
    }

    /**
     * @param string $nodeLockHost
     * @return $this
     */
    public function setNodeLockHost($nodeLockHost)
    {
        $this->nodeLockHost = $nodeLockHost;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\NodeIDsType
     */
    public function getCountedNodeLockHostIds()
    {
        return $this->countedNodeLockHostIds;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\NodeIDsType $countedNodeLockHostIds
     * @return $this
     */
    public function setCountedNodeLockHostIds($countedNodeLockHostIds)
    {
        $this->countedNodeLockHostIds = $countedNodeLockHostIds;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CustomHostIDType
     */
    public function getCustomHost()
    {
        return $this->customHost;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost
     * @return $this
     */
    public function setCustomHost($customHost)
    {
        $this->customHost = $customHost;
        return $this;
    }

    /**
     * @return int
     */
    public function getCountFromParent()
    {
        return $this->countFromParent;
    }

    /**
     * @param int $countFromParent
     * @return $this
     */
    public function setCountFromParent($countFromParent)
    {
        $this->countFromParent = $countFromParent;
        return $this;
    }

    /**
     * @return int
     */
    public function getCountFromOwn()
    {
        return $this->countFromOwn;
    }

    /**
     * @param int $countFromOwn
     * @return $this
     */
    public function setCountFromOwn($countFromOwn)
    {
        $this->countFromOwn = $countFromOwn;
        return $this;
    }

    /**
     * @return string
     */
    public function getParentActivationId()
    {
        return $this->parentActivationId;
    }

    /**
     * @param string $parentActivationId
     * @return $this
     */
    public function setParentActivationId($parentActivationId)
    {
        $this->parentActivationId = $parentActivationId;
        return $this;
    }
}
