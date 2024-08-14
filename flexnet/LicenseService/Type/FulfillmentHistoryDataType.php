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
     */
    public function __construct(string $activationId, \Flexnet\LicenseService\Type\FulfillmentHistoryDetailsType $historyDetails)
    {
        $this->activationId = $activationId;
        $this->historyDetails = $historyDetails;
    }

    public static function create(string $activationId, \Flexnet\LicenseService\Type\FulfillmentHistoryDetailsType $historyDetails)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): string
    {
        return $this->activationId;
    }

    public function withActivationId(string $activationId): \Flexnet\LicenseService\Type\FulfillmentHistoryDataType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getHistoryDetails(): \Flexnet\LicenseService\Type\FulfillmentHistoryDetailsType
    {
        return $this->historyDetails;
    }

    public function withHistoryDetails(\Flexnet\LicenseService\Type\FulfillmentHistoryDetailsType $historyDetails): \Flexnet\LicenseService\Type\FulfillmentHistoryDataType
    {
        $new = clone $this;
        $new->historyDetails = $historyDetails;

        return $new;
    }
}
