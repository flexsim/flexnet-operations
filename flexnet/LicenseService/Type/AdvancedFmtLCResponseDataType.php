<?php

namespace Flexnet\LicenseService\Type;

class AdvancedFmtLCResponseDataType
{
    /**
     * @var int
     */
    private $recordRefNo;

    /**
     * @var \Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType|array<\Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType>
     */
    private $upgradedFulfillmentInfo;

    /**
     * Constructor
     *
     * @param  int  $recordRefNo
     * @param  \Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType|array<\Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType>  $upgradedFulfillmentInfo
     */
    public function __construct(int $recordRefNo, AdvancedFulfillmentLCInfoType|array $upgradedFulfillmentInfo)
    {
        $this->recordRefNo = $recordRefNo;
        $this->upgradedFulfillmentInfo = $upgradedFulfillmentInfo;
    }

    /**
     * @param  int  $recordRefNo
     * @param  \Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType|array<\Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType>  $upgradedFulfillmentInfo
     */
    public static function create(int $recordRefNo, AdvancedFulfillmentLCInfoType|array $upgradedFulfillmentInfo)
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
     * @return AdvancedFmtLCResponseDataType
     */
    public function withRecordRefNo(int $recordRefNo): AdvancedFmtLCResponseDataType
    {
        $new = clone $this;
        $new->recordRefNo = $recordRefNo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType|array<\Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType>
     */
    public function getUpgradedFulfillmentInfo(): AdvancedFulfillmentLCInfoType|array
    {
        return $this->upgradedFulfillmentInfo;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType|array<\Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType>  $upgradedFulfillmentInfo
     * @return AdvancedFmtLCResponseDataType
     */
    public function withUpgradedFulfillmentInfo(AdvancedFulfillmentLCInfoType|array $upgradedFulfillmentInfo): AdvancedFmtLCResponseDataType
    {
        $new = clone $this;
        $new->upgradedFulfillmentInfo = $upgradedFulfillmentInfo;

        return $new;
    }
}
