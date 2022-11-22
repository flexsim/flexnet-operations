<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GenerateCloneDetectionReportResponse extends FlexnetType implements ResultInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType
     */
    protected $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CloneSuspects
     */
    protected $cloneSuspects;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\CloneSuspects  $cloneSuspects
     */
    public function __construct(OpsEmbeddedStatusInfoType $statusInfo, CloneSuspects $cloneSuspects)
    {
        $this->statusInfo = $statusInfo;
        $this->cloneSuspects = $cloneSuspects;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType  $statusInfo
     * @param  \Flexsim\FlexnetOperations\Type\CloneSuspects  $cloneSuspects
     */
    public static function create(OpsEmbeddedStatusInfoType $statusInfo, CloneSuspects $cloneSuspects)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType
     */
    public function getStatusInfo()
    {
        return $this->statusInfo;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\OpsEmbeddedStatusInfoType  $statusInfo
     * @return $this
     */
    public function setStatusInfo($statusInfo)
    {
        $this->statusInfo = $statusInfo;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CloneSuspects
     */
    public function getCloneSuspects()
    {
        return $this->cloneSuspects;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\CloneSuspects  $cloneSuspects
     * @return $this
     */
    public function setCloneSuspects($cloneSuspects)
    {
        $this->cloneSuspects = $cloneSuspects;

        return $this;
    }
}
