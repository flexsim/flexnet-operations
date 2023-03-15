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
     * @param  \Flexnet\LicenseService\Type\ActivationIdsListType  $activationIds
     */
    public function __construct(ActivationIdsListType $activationIds)
    {
        $this->activationIds = $activationIds;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ActivationIdsListType  $activationIds
     */
    public static function create(ActivationIdsListType $activationIds)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\ActivationIdsListType
     */
    public function getActivationIds(): ActivationIdsListType
    {
        return $this->activationIds;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ActivationIdsListType  $activationIds
     */
    public function withActivationIds(ActivationIdsListType $activationIds): GetFmtAttributesForBatchActivationRequestType
    {
        $new = clone $this;
        $new->activationIds = $activationIds;

        return $new;
    }
}
