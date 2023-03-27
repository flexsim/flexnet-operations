<?php

namespace Flexnet\LicenseService\Type;

use Flexnet\LicenseService\Result;

class EmailConsolidatedLicensesResponseType extends Result
{
    /**
     * @var \Flexnet\LicenseService\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     */
    public function __construct(StatusInfoType $statusInfo)
    {
        $this->statusInfo = $statusInfo;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     */
    public static function create(StatusInfoType $statusInfo)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\StatusInfoType
     */
    public function getStatusInfo(): StatusInfoType
    {
        return $this->statusInfo;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\StatusInfoType  $statusInfo
     */
    public function withStatusInfo(StatusInfoType $statusInfo): EmailConsolidatedLicensesResponseType
    {
        $new = clone $this;
        $new->statusInfo = $statusInfo;

        return $new;
    }
}
