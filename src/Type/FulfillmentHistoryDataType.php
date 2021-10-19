<?php

namespace Flexsim\FlexnetOperations\Type;

class FulfillmentHistoryDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $activationId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentHistoryDetailsType
     */
    protected $historyDetails;

    /**
     * Constructor
     *
     * @param string $activationId
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentHistoryDetailsType $historyDetails
     */
    public function __construct(string $activationId, \Flexsim\FlexnetOperations\Type\FulfillmentHistoryDetailsType $historyDetails)
    {
        $this->activationId = $activationId;
        $this->historyDetails = $historyDetails;
    }

    /**
     * create a new instance of this class
     *
     * @param string $activationId
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentHistoryDetailsType $historyDetails
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
