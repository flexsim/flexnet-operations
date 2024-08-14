<?php

namespace Flexnet\EntitlementOrderService\Type;

class LicenseModelStateChangeDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType
     */
    private $licenseModelIdentifier;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null
     */
    private $stateChangeRecord;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null  $stateChangeRecord
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $licenseModelIdentifier, \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array|null $stateChangeRecord = null)
    {
        $this->licenseModelIdentifier = $licenseModelIdentifier;
        $this->stateChangeRecord = $stateChangeRecord;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null  $stateChangeRecord
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $licenseModelIdentifier, \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array|null $stateChangeRecord = null)
    {
        return new static(...\func_get_args());
    }

    public function getLicenseModelIdentifier(): \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType
    {
        return $this->licenseModelIdentifier;
    }

    public function withLicenseModelIdentifier(\Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType $licenseModelIdentifier): \Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType
    {
        $new = clone $this;
        $new->licenseModelIdentifier = $licenseModelIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null
     */
    public function getStateChangeRecord(): \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array|null
    {
        return $this->stateChangeRecord;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null  $stateChangeRecord
     */
    public function withStateChangeRecord(\Flexnet\EntitlementOrderService\Type\StateChangeDataType|array|null $stateChangeRecord): \Flexnet\EntitlementOrderService\Type\LicenseModelStateChangeDataType
    {
        $new = clone $this;
        $new->stateChangeRecord = $stateChangeRecord;

        return $new;
    }
}
