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
    public function __construct(\Flexnet\LicenseService\Type\ActivationIdsListType $activationIds, \Flexnet\LicenseService\Type\HostIdDataSetType $hostIdDataSet, \Flexnet\LicenseService\Type\CommonBatchDataSetType $commonBatchDataSet, ?\Flexnet\LicenseService\Type\CountDataSetType $countDataSet = null)
    {
        $this->activationIds = $activationIds;
        $this->hostIdDataSet = $hostIdDataSet;
        $this->commonBatchDataSet = $commonBatchDataSet;
        $this->countDataSet = $countDataSet;
    }

    public static function create(\Flexnet\LicenseService\Type\ActivationIdsListType $activationIds, \Flexnet\LicenseService\Type\HostIdDataSetType $hostIdDataSet, \Flexnet\LicenseService\Type\CommonBatchDataSetType $commonBatchDataSet, ?\Flexnet\LicenseService\Type\CountDataSetType $countDataSet = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationIds(): \Flexnet\LicenseService\Type\ActivationIdsListType
    {
        return $this->activationIds;
    }

    public function withActivationIds(\Flexnet\LicenseService\Type\ActivationIdsListType $activationIds): \Flexnet\LicenseService\Type\CreateLicensesAsBatchRequestType
    {
        $new = clone $this;
        $new->activationIds = $activationIds;

        return $new;
    }

    public function getHostIdDataSet(): \Flexnet\LicenseService\Type\HostIdDataSetType
    {
        return $this->hostIdDataSet;
    }

    public function withHostIdDataSet(\Flexnet\LicenseService\Type\HostIdDataSetType $hostIdDataSet): \Flexnet\LicenseService\Type\CreateLicensesAsBatchRequestType
    {
        $new = clone $this;
        $new->hostIdDataSet = $hostIdDataSet;

        return $new;
    }

    public function getCountDataSet(): ?\Flexnet\LicenseService\Type\CountDataSetType
    {
        return $this->countDataSet;
    }

    public function withCountDataSet(?\Flexnet\LicenseService\Type\CountDataSetType $countDataSet): \Flexnet\LicenseService\Type\CreateLicensesAsBatchRequestType
    {
        $new = clone $this;
        $new->countDataSet = $countDataSet;

        return $new;
    }

    public function getCommonBatchDataSet(): \Flexnet\LicenseService\Type\CommonBatchDataSetType
    {
        return $this->commonBatchDataSet;
    }

    public function withCommonBatchDataSet(\Flexnet\LicenseService\Type\CommonBatchDataSetType $commonBatchDataSet): \Flexnet\LicenseService\Type\CreateLicensesAsBatchRequestType
    {
        $new = clone $this;
        $new->commonBatchDataSet = $commonBatchDataSet;

        return $new;
    }
}
