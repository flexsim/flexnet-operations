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
     * @param  \Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType|array<\Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType>  $upgradedFulfillmentInfo
     */
    public function __construct(int $recordRefNo, \Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType|array $upgradedFulfillmentInfo)
    {
        $this->recordRefNo = $recordRefNo;
        $this->upgradedFulfillmentInfo = $upgradedFulfillmentInfo;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType|array<\Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType>  $upgradedFulfillmentInfo
     */
    public static function create(int $recordRefNo, \Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType|array $upgradedFulfillmentInfo)
    {
        return new static(...\func_get_args());
    }

    public function getRecordRefNo(): int
    {
        return $this->recordRefNo;
    }

    public function withRecordRefNo(int $recordRefNo): \Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataType
    {
        $new = clone $this;
        $new->recordRefNo = $recordRefNo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType|array<\Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType>
     */
    public function getUpgradedFulfillmentInfo(): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType|array
    {
        return $this->upgradedFulfillmentInfo;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType|array<\Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType>  $upgradedFulfillmentInfo
     */
    public function withUpgradedFulfillmentInfo(\Flexnet\LicenseService\Type\AdvancedFulfillmentLCInfoType|array $upgradedFulfillmentInfo): \Flexnet\LicenseService\Type\AdvancedFmtLCResponseDataType
    {
        $new = clone $this;
        $new->upgradedFulfillmentInfo = $upgradedFulfillmentInfo;

        return $new;
    }
}
