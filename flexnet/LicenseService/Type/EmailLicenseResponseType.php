<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class EmailLicenseResponseType implements ResultInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * Constructor
     *
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     */
    public function __construct(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo)
    {
        $this->statusInfo = $statusInfo;
    }

    /**
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     */
    public static function create(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\StatusInfoType
     */
    public function getStatusInfo() : \Flexnet\LicenseService\Type\StatusInfoType
    {
        return $this->statusInfo;
    }

    /**
     * @param \Flexnet\LicenseService\Type\StatusInfoType $statusInfo
     * @return EmailLicenseResponseType
     */
    public function withStatusInfo(\Flexnet\LicenseService\Type\StatusInfoType $statusInfo) : \Flexnet\LicenseService\Type\EmailLicenseResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }
}

