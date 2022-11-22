<?php

namespace Flexsim\FlexnetOperations\Services\UsageService\v1;

use Flexsim\FlexnetOperations\Type;
use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class UsageServiceClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param  RequestInterface|Type\GetUsageRequest  $GetUsageRequest
     * @return ResultInterface|Type\GetUsageResponse
     *
     * @throws SoapException
     */
    public function getUsage(\Flexsim\FlexnetOperations\Type\GetUsageRequest $GetUsageRequest): \Flexsim\FlexnetOperations\Type\GetUsageResponse
    {
        return ($this->caller)('getUsage', $GetUsageRequest);
    }
}
