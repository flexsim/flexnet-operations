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
     * @param \Flexnet\LicenseService\Type\ActivationIdsListType $activationIds
     * @param \Flexnet\LicenseService\Type\HostIdDataSetType $hostIdDataSet
     * @param \Flexnet\LicenseService\Type\CountDataSetType|null $countDataSet
     * @param \Flexnet\LicenseService\Type\CommonBatchDataSetType $commonBatchDataSet
     */
    public function __construct(\Flexnet\LicenseService\Type\ActivationIdsListType $activationIds, \Flexnet\LicenseService\Type\HostIdDataSetType $hostIdDataSet, \Flexnet\LicenseService\Type\CountDataSetType|null $countDataSet = null, \Flexnet\LicenseService\Type\CommonBatchDataSetType $commonBatchDataSet)
    {
        $this->activationIds = $activationIds;
        $this->hostIdDataSet = $hostIdDataSet;
        $this->countDataSet = $countDataSet;
        $this->commonBatchDataSet = $commonBatchDataSet;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ActivationIdsListType $activationIds
     * @param \Flexnet\LicenseService\Type\HostIdDataSetType $hostIdDataSet
     * @param \Flexnet\LicenseService\Type\CountDataSetType|null $countDataSet
     * @param \Flexnet\LicenseService\Type\CommonBatchDataSetType $commonBatchDataSet
     */
    public static function create(\Flexnet\LicenseService\Type\ActivationIdsListType $activationIds, \Flexnet\LicenseService\Type\HostIdDataSetType $hostIdDataSet, \Flexnet\LicenseService\Type\CountDataSetType|null $countDataSet = null, \Flexnet\LicenseService\Type\CommonBatchDataSetType $commonBatchDataSet)
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
     * @return CreateLicensesAsBatchRequestType
     */
    public function withActivationIds(\Flexnet\LicenseService\Type\ActivationIdsListType $activationIds) : \Flexnet\LicenseService\Type\CreateLicensesAsBatchRequestType
    {
        $new = clone $this;
        $new->activationIds = $activationIds;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\HostIdDataSetType
     */
    public function getHostIdDataSet() : \Flexnet\LicenseService\Type\HostIdDataSetType
    {
        return $this->hostIdDataSet;
    }

    /**
     * @param \Flexnet\LicenseService\Type\HostIdDataSetType $hostIdDataSet
     * @return CreateLicensesAsBatchRequestType
     */
    public function withHostIdDataSet(\Flexnet\LicenseService\Type\HostIdDataSetType $hostIdDataSet) : \Flexnet\LicenseService\Type\CreateLicensesAsBatchRequestType
    {
        $new = clone $this;
        $new->hostIdDataSet = $hostIdDataSet;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CountDataSetType|null
     */
    public function getCountDataSet() : \Flexnet\LicenseService\Type\CountDataSetType|null
    {
        return $this->countDataSet;
    }

    /**
     * @param \Flexnet\LicenseService\Type\CountDataSetType|null $countDataSet
     * @return CreateLicensesAsBatchRequestType
     */
    public function withCountDataSet(\Flexnet\LicenseService\Type\CountDataSetType|null $countDataSet) : \Flexnet\LicenseService\Type\CreateLicensesAsBatchRequestType
    {
        $new = clone $this;
        $new->countDataSet = $countDataSet;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CommonBatchDataSetType
     */
    public function getCommonBatchDataSet() : \Flexnet\LicenseService\Type\CommonBatchDataSetType
    {
        return $this->commonBatchDataSet;
    }

    /**
     * @param \Flexnet\LicenseService\Type\CommonBatchDataSetType $commonBatchDataSet
     * @return CreateLicensesAsBatchRequestType
     */
    public function withCommonBatchDataSet(\Flexnet\LicenseService\Type\CommonBatchDataSetType $commonBatchDataSet) : \Flexnet\LicenseService\Type\CreateLicensesAsBatchRequestType
    {
        $new = clone $this;
        $new->commonBatchDataSet = $commonBatchDataSet;

        return $new;
    }
}

