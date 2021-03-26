<?php

namespace Flexsim\FlexnetOperations\Type;

class CloneSuspect
{

    /**
     * @var \DateTimeInterface
     */
    private $timeStamp;

    /**
     * @var string
     */
    private $hostClass;

    /**
     * @var string
     */
    private $hostAlias;

    /**
     * @var string
     */
    private $deviceId;

    /**
     * @var string
     */
    private $serverId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LineItemActivationIds
     */
    private $lineItemActivationIds;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureIds
     */
    private $featureIds;

    /**
     * @var string
     */
    private $orgId;

    /**
     * @var string
     */
    private $orgName;

    /**
     * @var string
     */
    private $enterpriseId;

    /**
     * Constructor
     *
     * @var \DateTimeInterface $timeStamp
     * @var string $hostClass
     * @var string $hostAlias
     * @var string $deviceId
     * @var string $serverId
     * @var \Flexsim\FlexnetOperations\Type\LineItemActivationIds $lineItemActivationIds
     * @var \Flexsim\FlexnetOperations\Type\FeatureIds $featureIds
     * @var string $orgId
     * @var string $orgName
     * @var string $enterpriseId
     */
    public function __construct(\DateTimeInterface $timeStamp = null, string $hostClass = null, string $hostAlias = null, string $deviceId = null, string $serverId = null, \Flexsim\FlexnetOperations\Type\LineItemActivationIds $lineItemActivationIds, \Flexsim\FlexnetOperations\Type\FeatureIds $featureIds, string $orgId = null, string $orgName = null, string $enterpriseId = null)
    {
        $this->timeStamp = $timeStamp;
        $this->hostClass = $hostClass;
        $this->hostAlias = $hostAlias;
        $this->deviceId = $deviceId;
        $this->serverId = $serverId;
        $this->lineItemActivationIds = $lineItemActivationIds;
        $this->featureIds = $featureIds;
        $this->orgId = $orgId;
        $this->orgName = $orgName;
        $this->enterpriseId = $enterpriseId;
    }

    /**
     * create a new instance of this class
     *
     * @var \DateTimeInterface $timeStamp
     * @var string $hostClass
     * @var string $hostAlias
     * @var string $deviceId
     * @var string $serverId
     * @var \Flexsim\FlexnetOperations\Type\LineItemActivationIds $lineItemActivationIds
     * @var \Flexsim\FlexnetOperations\Type\FeatureIds $featureIds
     * @var string $orgId
     * @var string $orgName
     * @var string $enterpriseId
     */
    public static function create(\DateTimeInterface $timeStamp = null, string $hostClass = null, string $hostAlias = null, string $deviceId = null, string $serverId = null, \Flexsim\FlexnetOperations\Type\LineItemActivationIds $lineItemActivationIds, \Flexsim\FlexnetOperations\Type\FeatureIds $featureIds, string $orgId = null, string $orgName = null, string $enterpriseId = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \DateTimeInterface
     */
    public function getTimeStamp()
    {
        return $this->timeStamp;
    }

    /**
     * @param \DateTimeInterface $timeStamp
     * @return $this
     */
    public function setTimeStamp($timeStamp)
    {
        $this->timeStamp = $timeStamp;
        return $this;
    }

    /**
     * @return string
     */
    public function getHostClass()
    {
        return $this->hostClass;
    }

    /**
     * @param string $hostClass
     * @return $this
     */
    public function setHostClass($hostClass)
    {
        $this->hostClass = $hostClass;
        return $this;
    }

    /**
     * @return string
     */
    public function getHostAlias()
    {
        return $this->hostAlias;
    }

    /**
     * @param string $hostAlias
     * @return $this
     */
    public function setHostAlias($hostAlias)
    {
        $this->hostAlias = $hostAlias;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @param string $deviceId
     * @return $this
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getServerId()
    {
        return $this->serverId;
    }

    /**
     * @param string $serverId
     * @return $this
     */
    public function setServerId($serverId)
    {
        $this->serverId = $serverId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LineItemActivationIds
     */
    public function getLineItemActivationIds()
    {
        return $this->lineItemActivationIds;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LineItemActivationIds $lineItemActivationIds
     * @return $this
     */
    public function setLineItemActivationIds($lineItemActivationIds)
    {
        $this->lineItemActivationIds = $lineItemActivationIds;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FeatureIds
     */
    public function getFeatureIds()
    {
        return $this->featureIds;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FeatureIds $featureIds
     * @return $this
     */
    public function setFeatureIds($featureIds)
    {
        $this->featureIds = $featureIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrgId()
    {
        return $this->orgId;
    }

    /**
     * @param string $orgId
     * @return $this
     */
    public function setOrgId($orgId)
    {
        $this->orgId = $orgId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrgName()
    {
        return $this->orgName;
    }

    /**
     * @param string $orgName
     * @return $this
     */
    public function setOrgName($orgName)
    {
        $this->orgName = $orgName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnterpriseId()
    {
        return $this->enterpriseId;
    }

    /**
     * @param string $enterpriseId
     * @return $this
     */
    public function setEnterpriseId($enterpriseId)
    {
        $this->enterpriseId = $enterpriseId;
        return $this;
    }


}
