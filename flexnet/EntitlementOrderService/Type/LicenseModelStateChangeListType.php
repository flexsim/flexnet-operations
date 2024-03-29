<?php

namespace Flexnet\EntitlementOrderService\Type;

class LicenseModelStateChangeListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType>|null
     */
    private $licenseModel;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType>|null  $licenseModel
     */
    public function __construct(LicenseModelStateChangeDataType|array $licenseModel = null)
    {
        $this->licenseModel = $licenseModel;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType>|null  $licenseModel
     */
    public static function create(LicenseModelStateChangeDataType|array $licenseModel = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType>|null
     */
    public function getLicenseModel(): LicenseModelStateChangeDataType|array|null
    {
        return $this->licenseModel;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType>|null  $licenseModel
     */
    public function withLicenseModel(LicenseModelStateChangeDataType|array|null $licenseModel): LicenseModelStateChangeListType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }
}
