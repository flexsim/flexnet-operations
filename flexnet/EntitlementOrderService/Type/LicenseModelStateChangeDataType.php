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

    public function getLicenseModelIdentifier(): LicenseModelIdentifierType
    {
        return $this->licenseModelIdentifier;
    }

    public function withLicenseModelIdentifier(LicenseModelIdentifierType $licenseModelIdentifier): LicenseModelStateChangeDataType
    {
        $new = clone $this;
        $new->licenseModelIdentifier = $licenseModelIdentifier;

        return $new;
    }

    public function getStateChangeRecord(): StateChangeDataType|array|null
    {
        return $this->stateChangeRecord;
    }

    public function withStateChangeRecord(StateChangeDataType|array|null $stateChangeRecord): LicenseModelStateChangeDataType
    {
        $new = clone $this;
        $new->stateChangeRecord = $stateChangeRecord;

        return $new;
    }
}
