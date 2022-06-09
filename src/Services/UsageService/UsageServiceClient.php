<?php

namespace Flexsim\FlexnetOperations\Services\UsageService;

use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Flexsim\FlexnetOperations\Type;

class UsageServiceClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface|Type\GetUsageRequest $GetUsageRequest
     * @return ResultInterface|Type\GetUsageResponse
     * @throws SoapException
     */
    public function getUsage(\Flexsim\FlexnetOperations\Type\GetUsageRequest $GetUsageRequest) : \Flexsim\FlexnetOperations\Type\GetUsageResponse
    {
        return ($this->caller)('getUsage', $GetUsageRequest);
    }
}

