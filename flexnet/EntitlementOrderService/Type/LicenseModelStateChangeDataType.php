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
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType  $licenseModelIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null  $stateChangeRecord
     */
    public function __construct(LicenseModelIdentifierType $licenseModelIdentifier, StateChangeDataType|array|null $stateChangeRecord = null)
    {
        $this->licenseModelIdentifier = $licenseModelIdentifier;
        $this->stateChangeRecord = $stateChangeRecord;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType  $licenseModelIdentifier
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null  $stateChangeRecord
     */
    public static function create(LicenseModelIdentifierType $licenseModelIdentifier, StateChangeDataType|array|null $stateChangeRecord = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType
     */
    public function getLicenseModelIdentifier(): LicenseModelIdentifierType
    {
        return $this->licenseModelIdentifier;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\LicenseModelIdentifierType  $licenseModelIdentifier
     * @return LicenseModelStateChangeDataType
     */
    public function withLicenseModelIdentifier(LicenseModelIdentifierType $licenseModelIdentifier): LicenseModelStateChangeDataType
    {
        $new = clone $this;
        $new->licenseModelIdentifier = $licenseModelIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null
     */
    public function getStateChangeRecord(): StateChangeDataType|array|null
    {
        return $this->stateChangeRecord;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\StateChangeDataType|array<\Flexnet\EntitlementOrderService\Type\StateChangeDataType>|null  $stateChangeRecord
     * @return LicenseModelStateChangeDataType
     */
    public function withStateChangeRecord(StateChangeDataType|array|null $stateChangeRecord): LicenseModelStateChangeDataType
    {
        $new = clone $this;
        $new->stateChangeRecord = $stateChangeRecord;

        return $new;
    }
}
