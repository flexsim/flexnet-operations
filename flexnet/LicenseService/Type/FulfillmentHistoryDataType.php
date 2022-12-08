<?php

namespace Flexnet\LicenseService\Type;

class FulfillmentHistoryDataType
{
    /**
     * @var string
     */
    private $activationId;

    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentHistoryDetailsType
     */
    private $historyDetails;

    /**
     * Constructor
     *
     * @param string $activationId
     * @param \Flexnet\LicenseService\Type\FulfillmentHistoryDetailsType $historyDetails
     */
    public function __construct(string $activationId, \Flexnet\LicenseService\Type\FulfillmentHistoryDetailsType $historyDetails)
    {
        $this->activationId = $activationId;
        $this->historyDetails = $historyDetails;
    }

    /**
     * @param string $activationId
     * @param \Flexnet\LicenseService\Type\FulfillmentHistoryDetailsType $historyDetails
     */
    public static function create(string $activationId, \Flexnet\LicenseService\Type\FulfillmentHistoryDetailsType $historyDetails)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getActivationId() : string
    {
        return $this->activationId;
    }

    /**
     * @param string $activationId
     * @return FulfillmentHistoryDataType
     */
    public function withActivationId(string $activationId) : \Flexnet\LicenseService\Type\FulfillmentHistoryDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentHistoryDetailsType
     */
    public function getHistoryDetails() : \Flexnet\LicenseService\Type\FulfillmentHistoryDetailsType
    {
        return $this->historyDetails;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentHistoryDetailsType $historyDetails
     * @return FulfillmentHistoryDataType
     */
    public function withHistoryDetails(\Flexnet\LicenseService\Type\FulfillmentHistoryDetailsType $historyDetails) : \Flexnet\LicenseService\Type\FulfillmentHistoryDataType
    {
        $new = clone $this;
        $new->historyDetails = $historyDetails;

        return $new;
    }
}

