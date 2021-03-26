<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RestoreServedClientRequestType implements RequestInterface
{

    /**
     * @var string
     */
    private $servedClientHostId;

    /**
     * @var string
     */
    private $servedClientIdType;

    /**
     * @var string
     */
    private $newHostID;

    /**
     * @var string
     */
    private $serverHostIdTypes;

    /**
     * Constructor
     *
     * @var string $servedClientHostId
     * @var string $servedClientIdType
     * @var string $newHostID
     * @var string|array $serverHostIdTypes
     */
    public function __construct(string $servedClientHostId, string $servedClientIdType, string $newHostID = null, $serverHostIdTypes = null)
    {
        $this->servedClientHostId = $servedClientHostId;
        $this->servedClientIdType = $servedClientIdType;
        $this->newHostID = $newHostID;
        $this->serverHostIdTypes = $serverHostIdTypes;
    }

    /**
     * create a new instance of this class
     *
     * @var string $servedClientHostId
     * @var string $servedClientIdType
     * @var string $newHostID
     * @var string|array $serverHostIdTypes
     */
    public static function create(string $servedClientHostId, string $servedClientIdType, string $newHostID = null, $serverHostIdTypes = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getServedClientHostId()
    {
        return $this->servedClientHostId;
    }

    /**
     * @param string $servedClientHostId
     * @return $this
     */
    public function setServedClientHostId($servedClientHostId)
    {
        $this->servedClientHostId = $servedClientHostId;
        return $this;
    }

    /**
     * @return string
     */
    public function getServedClientIdType()
    {
        return $this->servedClientIdType;
    }

    /**
     * @param string $servedClientIdType
     * @return $this
     */
    public function setServedClientIdType($servedClientIdType)
    {
        $this->servedClientIdType = $servedClientIdType;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewHostID()
    {
        return $this->newHostID;
    }

    /**
     * @param string $newHostID
     * @return $this
     */
    public function setNewHostID($newHostID)
    {
        $this->newHostID = $newHostID;
        return $this;
    }

    /**
     * @return string
     */
    public function getServerHostIdTypes()
    {
        return $this->serverHostIdTypes;
    }

    /**
     * @param string $serverHostIdTypes
     * @return $this
     */
    public function setServerHostIdTypes($serverHostIdTypes)
    {
        $this->serverHostIdTypes = $serverHostIdTypes;
        return $this;
    }


}

