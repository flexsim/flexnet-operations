<?php

namespace Flexnet\LicenseService\Type;

class CreatedChildLIFulfillmentDataType
{
    /**
     * @var int
     */
    private $recordRefNo;

    /**
     * @var \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentInfoType|array<\Flexnet\LicenseService\Type\CreatedChildLIFulfillmentInfoType>
     */
    private $fulfillmentInfo;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentInfoType|array<\Flexnet\LicenseService\Type\CreatedChildLIFulfillmentInfoType>  $fulfillmentInfo
     */
    public function __construct(int $recordRefNo, \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentInfoType|array $fulfillmentInfo)
    {
        $this->recordRefNo = $recordRefNo;
        $this->fulfillmentInfo = $fulfillmentInfo;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentInfoType|array<\Flexnet\LicenseService\Type\CreatedChildLIFulfillmentInfoType>  $fulfillmentInfo
     */
    public static function create(int $recordRefNo, \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentInfoType|array $fulfillmentInfo)
    {
        return new static(...\func_get_args());
    }

    public function getRecordRefNo(): int
    {
        return $this->recordRefNo;
    }

    public function withRecordRefNo(int $recordRefNo): \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType
    {
        $new = clone $this;
        $new->recordRefNo = $recordRefNo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentInfoType|array<\Flexnet\LicenseService\Type\CreatedChildLIFulfillmentInfoType>
     */
    public function getFulfillmentInfo(): \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentInfoType|array
    {
        return $this->fulfillmentInfo;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentInfoType|array<\Flexnet\LicenseService\Type\CreatedChildLIFulfillmentInfoType>  $fulfillmentInfo
     */
    public function withFulfillmentInfo(\Flexnet\LicenseService\Type\CreatedChildLIFulfillmentInfoType|array $fulfillmentInfo): \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentInfo = $fulfillmentInfo;

        return $new;
    }
}
