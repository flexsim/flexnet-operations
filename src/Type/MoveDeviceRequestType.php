<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class MoveDeviceRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\MoveDeviceList
     */
    protected $sourceDevices;

    /**
     * @var string
     */
    protected $soldToUniqueId;

    /**
     * @var string
     */
    protected $soldToName;

    /**
     * @var bool
     */
    protected $poolEntitlements;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\MoveDeviceList  $sourceDevices
     * @param  string  $soldToUniqueId
     * @param  string  $soldToName
     * @param  bool  $poolEntitlements
     */
    public function __construct(MoveDeviceList $sourceDevices, string $soldToUniqueId = null, string $soldToName = null, bool $poolEntitlements = null)
    {
        $this->sourceDevices = $sourceDevices;
        $this->soldToUniqueId = $soldToUniqueId;
        $this->soldToName = $soldToName;
        $this->poolEntitlements = $poolEntitlements;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\MoveDeviceList  $sourceDevices
     * @param  string  $soldToUniqueId
     * @param  string  $soldToName
     * @param  bool  $poolEntitlements
     */
    public static function create(MoveDeviceList $sourceDevices, string $soldToUniqueId = null, string $soldToName = null, bool $poolEntitlements = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\MoveDeviceList
     */
    public function getSourceDevices()
    {
        return $this->sourceDevices;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\MoveDeviceList  $sourceDevices
     * @return $this
     */
    public function setSourceDevices($sourceDevices)
    {
        $this->sourceDevices = $sourceDevices;

        return $this;
    }

    /**
     * @return string
     */
    public function getSoldToUniqueId()
    {
        return $this->soldToUniqueId;
    }

    /**
     * @param  string  $soldToUniqueId
     * @return $this
     */
    public function setSoldToUniqueId($soldToUniqueId)
    {
        $this->soldToUniqueId = $soldToUniqueId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSoldToName()
    {
        return $this->soldToName;
    }

    /**
     * @param  string  $soldToName
     * @return $this
     */
    public function setSoldToName($soldToName)
    {
        $this->soldToName = $soldToName;

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
     * @param  bool  $poolEntitlements
     * @return $this
     */
    public function setPoolEntitlements($poolEntitlements)
    {
        $this->poolEntitlements = $poolEntitlements;

        return $this;
    }
}
