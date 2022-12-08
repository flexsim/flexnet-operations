<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetFmtAttributesForBatchActivationRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\ActivationIdsListType
     */
    private $activationIds;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\ActivationIdsListType $activationIds
     */
    public function __construct(\Flexnet\LicenseService\Type\ActivationIdsListType $activationIds)
    {
        $this->activationIds = $activationIds;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ActivationIdsListType $activationIds
     */
    public static function create(\Flexnet\LicenseService\Type\ActivationIdsListType $activationIds)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\ActivationIdsListType
     */
    public function getActivationIds() : \Flexnet\LicenseService\Type\ActivationIdsListType
    {
        return $this->activationIds;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ActivationIdsListType $activationIds
     * @return GetFmtAttributesForBatchActivationRequestType
     */
    public function withActivationIds(\Flexnet\LicenseService\Type\ActivationIdsListType $activationIds) : \Flexnet\LicenseService\Type\GetFmtAttributesForBatchActivationRequestType
    {
        $new = clone $this;
        $new->activationIds = $activationIds;

        return $new;
    }
}

