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
     * @param  int  $recordRefNo
     * @param  \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentInfoType|array<\Flexnet\LicenseService\Type\CreatedChildLIFulfillmentInfoType>  $fulfillmentInfo
     */
    public function __construct(int $recordRefNo, CreatedChildLIFulfillmentInfoType|array $fulfillmentInfo)
    {
        $this->recordRefNo = $recordRefNo;
        $this->fulfillmentInfo = $fulfillmentInfo;
    }

    /**
     * @param  int  $recordRefNo
     * @param  \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentInfoType|array<\Flexnet\LicenseService\Type\CreatedChildLIFulfillmentInfoType>  $fulfillmentInfo
     */
    public static function create(int $recordRefNo, CreatedChildLIFulfillmentInfoType|array $fulfillmentInfo)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return int
     */
    public function getRecordRefNo(): int
    {
        return $this->recordRefNo;
    }

    /**
     * @param  int  $recordRefNo
     * @return CreatedChildLIFulfillmentDataType
     */
    public function withRecordRefNo(int $recordRefNo): CreatedChildLIFulfillmentDataType
    {
        $new = clone $this;
        $new->recordRefNo = $recordRefNo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentInfoType|array<\Flexnet\LicenseService\Type\CreatedChildLIFulfillmentInfoType>
     */
    public function getFulfillmentInfo(): CreatedChildLIFulfillmentInfoType|array
    {
        return $this->fulfillmentInfo;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CreatedChildLIFulfillmentInfoType|array<\Flexnet\LicenseService\Type\CreatedChildLIFulfillmentInfoType>  $fulfillmentInfo
     * @return CreatedChildLIFulfillmentDataType
     */
    public function withFulfillmentInfo(CreatedChildLIFulfillmentInfoType|array $fulfillmentInfo): CreatedChildLIFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentInfo = $fulfillmentInfo;

        return $new;
    }
}