<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class IsEntitlementVisibleInTargetOrgRequestType implements RequestInterface
{

    /**
     * @var string
     */
    private $entitlementID;

    /**
     * @var string
     */
    private $targetOrgID;

    /**
     * Constructor
     *
     * @var string $entitlementID
     * @var string $targetOrgID
     */
    public function __construct(string $entitlementID, string $targetOrgID)
    {
        $this->entitlementID = $entitlementID;
        $this->targetOrgID = $targetOrgID;
    }

    /**
     * create a new instance of this class
     *
     * @var string $entitlementID
     * @var string $targetOrgID
     */
    public static function create(string $entitlementID, string $targetOrgID)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getEntitlementID()
    {
        return $this->entitlementID;
    }

    /**
     * @param string $entitlementID
     * @return $this
     */
    public function setEntitlementID($entitlementID)
    {
        $this->entitlementID = $entitlementID;
        return $this;
    }

    /**
     * @return string
     */
    public function getTargetOrgID()
    {
        return $this->targetOrgID;
    }

    /**
     * @param string $targetOrgID
     * @return $this
     */
    public function setTargetOrgID($targetOrgID)
    {
        $this->targetOrgID = $targetOrgID;
        return $this;
    }


}

