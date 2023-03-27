<?php

namespace Flexnet\ProductPackagingService;

use Flexsim\FlexnetOperations\Exceptions\FailedOperation;
use Flexsim\FlexnetOperations\FlexnetResultInterface;
use Phpro\SoapClient\Type\ResultInterface;

/**
 * @method \Flexnet\ProductPackagingService\Type\StatusInfoType getStatusInfo()
 */
abstract class Result implements ResultInterface, FlexnetResultInterface
{
    public function throw(): static
    {
        if ($this->getStatusInfo()->getStatus() !== 'SUCCESS') {
            throw new FailedOperation($this->getStatusInfo()->getReason());
        }

        return $this;
    }
}
