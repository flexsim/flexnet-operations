<?php

namespace Flexsim\FlexnetOperations\Type;

class FulfillmentHistoryDataType
{

    /**
     * @var string
     */
    private $activationId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentHistoryDetailsType
     */
    private $historyDetails;

    /**
     * Constructor
     *
     * @var string $activationId
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentHistoryDetailsType $historyDetails
     */
    public function __construct(string $activationId, \Flexsim\FlexnetOperations\Type\FulfillmentHistoryDetailsType $historyDetails)
    {
        $this->activationId = $activationId;
        $this->historyDetails = $historyDetails;
    }

    /**
     * create a new instance of this class
     *
     * @var string $activationId
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentHistoryDetailsType $historyDetails
     */
    public static function create(string $activationId, \Flexsim\FlexnetOperations\Type\FulfillmentHistoryDetailsType $historyDetails)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getActivationId()
    {
        return $this->activationId;
    }

    /**
     * @param string $activationId
     * @return $this
     */
    public function setActivationId($activationId)
    {
        $this->activationId = $activationId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FulfillmentHistoryDetailsType
     */
    public function getHistoryDetails()
    {
        return $this->historyDetails;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentHistoryDetailsType $historyDetails
     * @return $this
     */
    public function setHistoryDetails($historyDetails)
    {
        $this->historyDetails = $historyDetails;
        return $this;
    }


}

