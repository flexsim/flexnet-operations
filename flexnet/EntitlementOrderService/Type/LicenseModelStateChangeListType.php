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
    public function __construct(\Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType|array|null $licenseModel = null)
    {
        $this->licenseModel = $licenseModel;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType>|null  $licenseModel
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType|array|null $licenseModel = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType>|null
     */
    public function getLicenseModel(): \Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType|array|null
    {
        return $this->licenseModel;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType>|null  $licenseModel
     */
    public function withLicenseModel(\Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType|array|null $licenseModel): \Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeListType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }
}
