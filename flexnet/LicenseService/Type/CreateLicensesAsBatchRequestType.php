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
     *
     * @param  \Flexnet\LicenseService\Type\ActivationIdsListType  $activationIds
     * @param  \Flexnet\LicenseService\Type\HostIdDataSetType  $hostIdDataSet
     * @param  \Flexnet\LicenseService\Type\CommonBatchDataSetType  $commonBatchDataSet
     * @param  \Flexnet\LicenseService\Type\CountDataSetType|null  $countDataSet
     */
    public function __construct(ActivationIdsListType $activationIds, HostIdDataSetType $hostIdDataSet, CommonBatchDataSetType $commonBatchDataSet, CountDataSetType|null $countDataSet = null)
    {
        $this->activationIds = $activationIds;
        $this->hostIdDataSet = $hostIdDataSet;
        $this->commonBatchDataSet = $commonBatchDataSet;
        $this->countDataSet = $countDataSet;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ActivationIdsListType  $activationIds
     * @param  \Flexnet\LicenseService\Type\HostIdDataSetType  $hostIdDataSet
     * @param  \Flexnet\LicenseService\Type\CommonBatchDataSetType  $commonBatchDataSet
     * @param  \Flexnet\LicenseService\Type\CountDataSetType|null  $countDataSet
     */
    public static function create(ActivationIdsListType $activationIds, HostIdDataSetType $hostIdDataSet, CommonBatchDataSetType $commonBatchDataSet, CountDataSetType|null $countDataSet = null)
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
    public function withActivationIds(ActivationIdsListType $activationIds): CreateLicensesAsBatchRequestType
    {
        $new = clone $this;
        $new->activationIds = $activationIds;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\HostIdDataSetType
     */
    public function getHostIdDataSet(): HostIdDataSetType
    {
        return $this->hostIdDataSet;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\HostIdDataSetType  $hostIdDataSet
     */
    public function withHostIdDataSet(HostIdDataSetType $hostIdDataSet): CreateLicensesAsBatchRequestType
    {
        $new = clone $this;
        $new->hostIdDataSet = $hostIdDataSet;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CountDataSetType|null
     */
    public function getCountDataSet(): CountDataSetType|null
    {
        return $this->countDataSet;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CountDataSetType|null  $countDataSet
     */
    public function withCountDataSet(CountDataSetType|null $countDataSet): CreateLicensesAsBatchRequestType
    {
        $new = clone $this;
        $new->countDataSet = $countDataSet;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CommonBatchDataSetType
     */
    public function getCommonBatchDataSet(): CommonBatchDataSetType
    {
        return $this->commonBatchDataSet;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CommonBatchDataSetType  $commonBatchDataSet
     */
    public function withCommonBatchDataSet(CommonBatchDataSetType $commonBatchDataSet): CreateLicensesAsBatchRequestType
    {
        $new = clone $this;
        $new->commonBatchDataSet = $commonBatchDataSet;

        return $new;
    }
}
