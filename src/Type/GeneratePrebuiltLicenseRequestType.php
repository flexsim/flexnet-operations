<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GeneratePrebuiltLicenseRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\GeneratePrebuiltLicenseDataType
     */
    protected $requestDataList;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\GeneratePrebuiltLicenseDataType $requestDataList
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\GeneratePrebuiltLicenseDataType $requestDataList)
    {
        $this->requestDataList = $requestDataList;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\GeneratePrebuiltLicenseDataType $requestDataList
     */
    public static function create(\Flexsim\FlexnetOperations\Type\GeneratePrebuiltLicenseDataType $requestDataList)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\GeneratePrebuiltLicenseDataType
     */
    public function getRequestDataList()
    {
        return $this->requestDataList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\GeneratePrebuiltLicenseDataType $requestDataList
     * @return $this
     */
    public function setRequestDataList($requestDataList)
    {
        $this->requestDataList = $requestDataList;

        return $this;
    }
}
