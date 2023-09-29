<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateLicensesAsBatchRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\ActivationIdsListType
     */
    private $activationIds;

    /**
     * @var \Flexnet\LicenseService\Type\HostIdDataSetType
     */
    private $hostIdDataSet;

    /**
     * @var \Flexnet\LicenseService\Type\CountDataSetType|null
     */
    private $countDataSet;

    /**
     * @var \Flexnet\LicenseService\Type\CommonBatchDataSetType
     */
    private $commonBatchDataSet;

    /**
     * Constructor
     */
    public function __construct(ActivationIdsListType $activationIds, HostIdDataSetType $hostIdDataSet, CommonBatchDataSetType $commonBatchDataSet, CountDataSetType $countDataSet = null)
    {
        $this->activationIds = $activationIds;
        $this->hostIdDataSet = $hostIdDataSet;
        $this->commonBatchDataSet = $commonBatchDataSet;
        $this->countDataSet = $countDataSet;
    }

    public static function create(ActivationIdsListType $activationIds, HostIdDataSetType $hostIdDataSet, CommonBatchDataSetType $commonBatchDataSet, CountDataSetType $countDataSet = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationIds(): ActivationIdsListType
    {
        return $this->activationIds;
    }

    public function withActivationIds(ActivationIdsListType $activationIds): CreateLicensesAsBatchRequestType
    {
        $new = clone $this;
        $new->activationIds = $activationIds;

        return $new;
    }

    public function getHostIdDataSet(): HostIdDataSetType
    {
        return $this->hostIdDataSet;
    }

    public function withHostIdDataSet(HostIdDataSetType $hostIdDataSet): CreateLicensesAsBatchRequestType
    {
        $new = clone $this;
        $new->hostIdDataSet = $hostIdDataSet;

        return $new;
    }

    public function getCountDataSet(): ?CountDataSetType
    {
        return $this->countDataSet;
    }

    public function withCountDataSet(?CountDataSetType $countDataSet): CreateLicensesAsBatchRequestType
    {
        $new = clone $this;
        $new->countDataSet = $countDataSet;

        return $new;
    }

    public function getCommonBatchDataSet(): CommonBatchDataSetType
    {
        return $this->commonBatchDataSet;
    }

    public function withCommonBatchDataSet(CommonBatchDataSetType $commonBatchDataSet): CreateLicensesAsBatchRequestType
    {
        $new = clone $this;
        $new->commonBatchDataSet = $commonBatchDataSet;

        return $new;
    }
}
