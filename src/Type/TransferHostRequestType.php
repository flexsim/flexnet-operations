<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TransferHostRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\TransferHostList
     */
    protected $sourceHosts;

    /**
     * @var string
     */
    protected $soldTo;

    /**
     * @var bool
     */
    protected $poolEntitlements;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\TransferHostList $sourceHosts
     * @var string $soldTo
     * @var bool $poolEntitlements
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\TransferHostList $sourceHosts, string $soldTo = null, bool $poolEntitlements = null)
    {
        $this->sourceHosts = $sourceHosts;
        $this->soldTo = $soldTo;
        $this->poolEntitlements = $poolEntitlements;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\TransferHostList $sourceHosts
     * @var string $soldTo
     * @var bool $poolEntitlements
     */
    public static function create(\Flexsim\FlexnetOperations\Type\TransferHostList $sourceHosts, string $soldTo = null, bool $poolEntitlements = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\TransferHostList
     */
    public function getSourceHosts()
    {
        return $this->sourceHosts;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\TransferHostList $sourceHosts
     * @return $this
     */
    public function setSourceHosts($sourceHosts)
    {
        $this->sourceHosts = $sourceHosts;
        return $this;
    }

    /**
     * @return string
     */
    public function getSoldTo()
    {
        return $this->soldTo;
    }

    /**
     * @param string $soldTo
     * @return $this
     */
    public function setSoldTo($soldTo)
    {
        $this->soldTo = $soldTo;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPoolEntitlements()
    {
        return $this->poolEntitlements;
    }

    /**
     * @param bool $poolEntitlements
     * @return $this
     */
    public function setPoolEntitlements($poolEntitlements)
    {
        $this->poolEntitlements = $poolEntitlements;
        return $this;
    }
}
