<?php

namespace Flexsim\FlexnetOperations\Services\UsageService\v1;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Flexsim\FlexnetOperations\Type;

class UsageServiceClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\GetUsageRequest $GetUsageRequest
     * @return ResultInterface|Type\GetUsageResponse
     * @throws SoapException
     */
    public function getUsage(\Flexsim\FlexnetOperations\Type\GetUsageRequest $GetUsageRequest): \Flexsim\FlexnetOperations\Type\GetUsageResponse
    {
        return $this->call('getUsage', $GetUsageRequest);
    }
}
