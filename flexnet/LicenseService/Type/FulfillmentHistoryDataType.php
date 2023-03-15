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
     * @param  \Flexnet\LicenseService\Type\FulfillmentHistoryDetailsType  $historyDetails
     */
    public function __construct(string $activationId, FulfillmentHistoryDetailsType $historyDetails)
    {
        $this->activationId = $activationId;
        $this->historyDetails = $historyDetails;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentHistoryDetailsType  $historyDetails
     */
    public static function create(string $activationId, FulfillmentHistoryDetailsType $historyDetails)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): string
    {
        return $this->activationId;
    }

    public function withActivationId(string $activationId): FulfillmentHistoryDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentHistoryDetailsType
     */
    public function getHistoryDetails(): FulfillmentHistoryDetailsType
    {
        return $this->historyDetails;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentHistoryDetailsType  $historyDetails
     */
    public function withHistoryDetails(FulfillmentHistoryDetailsType $historyDetails): FulfillmentHistoryDataType
    {
        $new = clone $this;
        $new->historyDetails = $historyDetails;

        return $new;
    }
}
