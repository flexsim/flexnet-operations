<?php

namespace Flexnet\EntitlementOrderService\Type;

class AcpiGenerationIdLicensePolicyDataType
{
    /**
     * @var bool
     */
    private $useACPIGenerationId;

    /**
     * Constructor
     */
    public function __construct(bool $useACPIGenerationId)
    {
        $this->useACPIGenerationId = $useACPIGenerationId;
    }

    public static function create(bool $useACPIGenerationId)
    {
        return new static(...\func_get_args());
    }

    public function getUseACPIGenerationId(): bool
    {
        return $this->useACPIGenerationId;
    }

    public function withUseACPIGenerationId(bool $useACPIGenerationId): \Flexnet\EntitlementOrderService\Type\AcpiGenerationIdLicensePolicyDataType
    {
        $new = clone $this;
        $new->useACPIGenerationId = $useACPIGenerationId;

        return $new;
    }
}
