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
    public function __construct(LicenseModelStateChangeDataType|array|null $licenseModel = null)
    {
        $this->licenseModel = $licenseModel;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType>|null  $licenseModel
     */
    public static function create(LicenseModelStateChangeDataType|array|null $licenseModel = null)
    {
        return new static(...\func_get_args());
    }

    public function getLicenseModel(): LicenseModelStateChangeDataType|array|null
    {
        return $this->licenseModel;
    }

    public function withLicenseModel(LicenseModelStateChangeDataType|array|null $licenseModel): LicenseModelStateChangeListType
    {
        $new = clone $this;
        $new->licenseModel = $licenseModel;

        return $new;
    }
}
