<?php

namespace Flexnet\LicenseService;

use FailedOperation;
use Flexsim\FlexnetOperations\FlexnetResultInterface;
use Phpro\SoapClient\Type\ResultInterface;

/**
 * @method \Flexnet\LicenseService\Type\StatusInfoType getStatusInfo()
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
