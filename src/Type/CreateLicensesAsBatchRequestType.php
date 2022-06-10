<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateLicensesAsBatchRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\ActivationIdsListType
     */
    protected $activationIds;

    /**
     * @var \Flexsim\FlexnetOperations\Type\HostIdDataSetType
     */
    protected $hostIdDataSet;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CountDataSetType
     */
    protected $countDataSet;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CommonBatchDataSetType
     */
    protected $commonBatchDataSet;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\ActivationIdsListType $activationIds
     * @param \Flexsim\FlexnetOperations\Type\HostIdDataSetType $hostIdDataSet
     * @param \Flexsim\FlexnetOperations\Type\CommonBatchDataSetType $commonBatchDataSet
     * @param \Flexsim\FlexnetOperations\Type\CountDataSetType $countDataSet
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ActivationIdsListType $activationIds, \Flexsim\FlexnetOperations\Type\HostIdDataSetType $hostIdDataSet, \Flexsim\FlexnetOperations\Type\CommonBatchDataSetType $commonBatchDataSet, \Flexsim\FlexnetOperations\Type\CountDataSetType $countDataSet = null)
    {
        $this->activationIds = $activationIds;
        $this->hostIdDataSet = $hostIdDataSet;
        $this->commonBatchDataSet = $commonBatchDataSet;
        $this->countDataSet = $countDataSet;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\ActivationIdsListType $activationIds
     * @param \Flexsim\FlexnetOperations\Type\HostIdDataSetType $hostIdDataSet
     * @param \Flexsim\FlexnetOperations\Type\CommonBatchDataSetType $commonBatchDataSet
     * @param \Flexsim\FlexnetOperations\Type\CountDataSetType $countDataSet
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ActivationIdsListType $activationIds, \Flexsim\FlexnetOperations\Type\HostIdDataSetType $hostIdDataSet, \Flexsim\FlexnetOperations\Type\CommonBatchDataSetType $commonBatchDataSet, \Flexsim\FlexnetOperations\Type\CountDataSetType $countDataSet = null)
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
