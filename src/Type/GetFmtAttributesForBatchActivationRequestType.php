<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetFmtAttributesForBatchActivationRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ActivationIdsListType
     */
    private $activationIds;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ActivationIdsListType $activationIds
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ActivationIdsListType $activationIds)
    {
        $this->activationIds = $activationIds;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ActivationIdsListType $activationIds
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ActivationIdsListType $activationIds)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ActivationIdsListType
     */
    public function getActivationIds()
    {
        return $this->activationIds;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ActivationIdsListType $activationIds
     * @return $this
     */
    public function setActivationIds($activationIds)
    {
        $this->activationIds = $activationIds;
        return $this;
    }


}

