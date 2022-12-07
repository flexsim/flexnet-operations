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
     *
     * @param  bool  $useACPIGenerationId
     */
    public function __construct(bool $useACPIGenerationId)
    {
        $this->useACPIGenerationId = $useACPIGenerationId;
    }

    /**
     * @param  bool  $useACPIGenerationId
     */
    public static function create(bool $useACPIGenerationId)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return bool
     */
    public function getUseACPIGenerationId(): bool
    {
        return $this->useACPIGenerationId;
    }

    /**
     * @param  bool  $useACPIGenerationId
     * @return AcpiGenerationIdLicensePolicyDataType
     */
    public function withUseACPIGenerationId(bool $useACPIGenerationId): AcpiGenerationIdLicensePolicyDataType
    {
        $new = clone $this;
        $new->useACPIGenerationId = $useACPIGenerationId;

        return $new;
    }
}
