<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class IsFulfillmentVisibleInTargetOrgRequestType implements RequestInterface
{

    /**
     * @var string
     */
    private $ActivationID;

    /**
     * @var string
     */
    private $targetOrgID;

    /**
     * Constructor
     *
     * @var string $ActivationID
     * @var string $targetOrgID
     */
    public function __construct(string $ActivationID, string $targetOrgID)
    {
        $this->ActivationID = $ActivationID;
        $this->targetOrgID = $targetOrgID;
    }

    /**
     * create a new instance of this class
     *
     * @var string $ActivationID
     * @var string $targetOrgID
     */
    public static function create(string $ActivationID, string $targetOrgID)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getActivationID()
    {
        return $this->ActivationID;
    }

    /**
     * @param string $ActivationID
     * @return $this
     */
    public function setActivationID($ActivationID)
    {
        $this->ActivationID = $ActivationID;
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

