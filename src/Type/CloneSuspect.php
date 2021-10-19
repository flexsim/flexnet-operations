<?php

namespace Flexsim\FlexnetOperations\Type;

class CloneSuspect extends FlexnetType 
{

    /**
     * @var \DateTimeInterface
     */
    protected $timeStamp;

    /**
     * @var string
     */
    protected $hostClass;

    /**
     * @var string
     */
    protected $hostAlias;

    /**
     * @var string
     */
    protected $deviceId;

    /**
     * @var string
     */
    protected $serverId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LineItemActivationIds
     */
    protected $lineItemActivationIds;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FeatureIds
     */
    protected $featureIds;

    /**
     * @var string
     */
    protected $acctId;

    /**
     * @var string
     */
    protected $orgId;

    /**
     * @var string
     */
    protected $acctName;

    /**
     * @var string
     */
    protected $orgName;

    /**
     * @var string
     */
    protected $enterpriseId;

    /**
     * Constructor
     *
     * @param \DateTimeInterface $timeStamp
     * @param string $hostClass
     * @param string $hostAlias
     * @param string $deviceId
     * @param string $serverId
     * @param \Flexsim\FlexnetOperations\Type\LineItemActivationIds $lineItemActivationIds
     * @param \Flexsim\FlexnetOperations\Type\FeatureIds $featureIds
     * @param string $acctId this method is backwards compatible so you may also pass $orgId
     * @param string $acctName this method is backwards compatible so you may also pass $orgName
     * @param string $enterpriseId
     */
    public function __construct(
        \DateTimeInterface $timeStamp = null,
        string $hostclass = extends FlexnetType null, extends FlexnetType 
        string $hostAlias = null,
        string $deviceId = null,
        string $serverId = null,
        \Flexsim\FlexnetOperations\Type\LineItemActivationIds $lineItemActivationIds,
        \Flexsim\FlexnetOperations\Type\FeatureIds $featureIds,
        string $acctId = null,
        string $acctName = null,
        string $enterpriseId = null
    ) {
        $this->timeStamp = $timeStamp;
        $this->hostclass = extends FlexnetType $hostClass; extends FlexnetType 
        $this->hostAlias = $hostAlias;
        $this->deviceId = $deviceId;
        $this->serverId = $serverId;
        $this->lineItemActivationIds = $lineItemActivationIds;
        $this->featureIds = $featureIds;
        $this->acctId = $acctId;
        $this->orgId = $acctId;
        $this->acctName = $acctName;
        $this->orgName = $acctName;
        $this->enterpriseId = $enterpriseId;
    }

    /**
     * create a new instance of this class
     *
     * @param \DateTimeInterface $timeStamp
     * @param string $hostClass
     * @param string $hostAlias
     * @param string $deviceId
     * @param string $serverId
     * @param \Flexsim\FlexnetOperations\Type\LineItemActivationIds $lineItemActivationIds
     * @param \Flexsim\FlexnetOperations\Type\FeatureIds $featureIds
     * @param string $acctId this method is backwards compatible so you may also pass $orgId
     * @param string $acctName this method is backwards compatible so you may also pass $orgName
     * @param string $enterpriseId
     */
    public static function create(
        \DateTimeInterface $timeStamp = null,
        string $hostclass = extends FlexnetType null, extends FlexnetType 
        string $hostAlias = null,
        string $deviceId = null,
        string $serverId = null,
        \Flexsim\FlexnetOperations\Type\LineItemActivationIds $lineItemActivationIds,
        \Flexsim\FlexnetOperations\Type\FeatureIds $featureIds,
        string $acctId = null,
        string $acctName = null,
        string $enterpriseId = null
    ) {
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
        $this->hostclass = extends FlexnetType $hostClass; extends FlexnetType 
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
    public function getAcctId()
    {
        return $this->acctId;
    }

    /**
     * @param string $acctId
     * @return $this
     */
    public function setAcctId($acctId)
    {
        $this->acctId = $acctId;
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
    public function getAcctName()
    {
        return $this->acctName;
    }

    /**
     * @param string $acctName
     * @return $this
     */
    public function setAcctName($acctName)
    {
        $this->acctName = $acctName;
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
