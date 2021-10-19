<?php

namespace Flexsim\FlexnetOperations\Type;

class ModelAttributesType extends FlexnetType
{

    /**
     * @var bool
     */
    protected $needServerId;

    /**
     * @var bool
     */
    protected $needNodeLockId;

    /**
     * @var bool
     */
    protected $needCount;

    /**
     * @var bool
     */
    protected $needOverdraftCount;

    /**
     * Constructor
     *
     * @param bool $needServerId
     * @param bool $needNodeLockId
     * @param bool $needCount
     * @param bool $needOverdraftCount
     */
    public function __construct(bool $needServerId, bool $needNodeLockId, bool $needCount, bool $needOverdraftCount)
    {
        $this->needServerId = $needServerId;
        $this->needNodeLockId = $needNodeLockId;
        $this->needCount = $needCount;
        $this->needOverdraftCount = $needOverdraftCount;
    }

    /**
     * create a new instance of this class
     *
     * @param bool $needServerId
     * @param bool $needNodeLockId
     * @param bool $needCount
     * @param bool $needOverdraftCount
     */
    public static function create(bool $needServerId, bool $needNodeLockId, bool $needCount, bool $needOverdraftCount)
    {
        return new self(...func_get_args());
    }

    /**
     * @return bool
     */
    public function getNeedServerId()
    {
        return $this->needServerId;
    }

    /**
     * @param bool $needServerId
     * @return $this
     */
    public function setNeedServerId($needServerId)
    {
        $this->needServerId = $needServerId;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedNodeLockId()
    {
        return $this->needNodeLockId;
    }

    /**
     * @param bool $needNodeLockId
     * @return $this
     */
    public function setNeedNodeLockId($needNodeLockId)
    {
        $this->needNodeLockId = $needNodeLockId;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedCount()
    {
        return $this->needCount;
    }

    /**
     * @param bool $needCount
     * @return $this
     */
    public function setNeedCount($needCount)
    {
        $this->needCount = $needCount;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedOverdraftCount()
    {
        return $this->needOverdraftCount;
    }

    /**
     * @param bool $needOverdraftCount
     * @return $this
     */
    public function setNeedOverdraftCount($needOverdraftCount)
    {
        $this->needOverdraftCount = $needOverdraftCount;
        return $this;
    }
}
