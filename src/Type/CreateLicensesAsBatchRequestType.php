<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateLicensesAsBatchRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ActivationIdsListType
     */
    private $activationIds;

    /**
     * @var \Flexsim\FlexnetOperations\Type\HostIdDataSetType
     */
    private $hostIdDataSet;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CountDataSetType
     */
    private $countDataSet;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CommonBatchDataSetType
     */
    private $commonBatchDataSet;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ActivationIdsListType $activationIds
     * @var \Flexsim\FlexnetOperations\Type\HostIdDataSetType $hostIdDataSet
     * @var \Flexsim\FlexnetOperations\Type\CountDataSetType $countDataSet
     * @var \Flexsim\FlexnetOperations\Type\CommonBatchDataSetType $commonBatchDataSet
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ActivationIdsListType $activationIds, \Flexsim\FlexnetOperations\Type\HostIdDataSetType $hostIdDataSet, \Flexsim\FlexnetOperations\Type\CountDataSetType $countDataSet = null, \Flexsim\FlexnetOperations\Type\CommonBatchDataSetType $commonBatchDataSet)
    {
        $this->activationIds = $activationIds;
        $this->hostIdDataSet = $hostIdDataSet;
        $this->countDataSet = $countDataSet;
        $this->commonBatchDataSet = $commonBatchDataSet;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ActivationIdsListType $activationIds
     * @var \Flexsim\FlexnetOperations\Type\HostIdDataSetType $hostIdDataSet
     * @var \Flexsim\FlexnetOperations\Type\CountDataSetType $countDataSet
     * @var \Flexsim\FlexnetOperations\Type\CommonBatchDataSetType $commonBatchDataSet
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ActivationIdsListType $activationIds, \Flexsim\FlexnetOperations\Type\HostIdDataSetType $hostIdDataSet, \Flexsim\FlexnetOperations\Type\CountDataSetType $countDataSet = null, \Flexsim\FlexnetOperations\Type\CommonBatchDataSetType $commonBatchDataSet)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ActivationIdsListType
     */
    public function getActivationIds()
    {
        return $this->activationIds;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ActivationIdsListType $activationIds
     * @return $this
     */
    public function setActivationIds($activationIds)
    {
        $this->activationIds = $activationIds;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\HostIdDataSetType
     */
    public function getHostIdDataSet()
    {
        return $this->hostIdDataSet;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\HostIdDataSetType $hostIdDataSet
     * @return $this
     */
    public function setHostIdDataSet($hostIdDataSet)
    {
        $this->hostIdDataSet = $hostIdDataSet;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CountDataSetType
     */
    public function getCountDataSet()
    {
        return $this->countDataSet;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CountDataSetType $countDataSet
     * @return $this
     */
    public function setCountDataSet($countDataSet)
    {
        $this->countDataSet = $countDataSet;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CommonBatchDataSetType
     */
    public function getCommonBatchDataSet()
    {
        return $this->commonBatchDataSet;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CommonBatchDataSetType $commonBatchDataSet
     * @return $this
     */
    public function setCommonBatchDataSet($commonBatchDataSet)
    {
        $this->commonBatchDataSet = $commonBatchDataSet;
        return $this;
    }


}

