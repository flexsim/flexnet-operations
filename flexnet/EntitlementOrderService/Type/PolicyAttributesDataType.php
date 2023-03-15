<?php

namespace Flexnet\EntitlementOrderService\Type;

class PolicyAttributesDataType
{
    /**
     * @var bool
     */
    private $needRehostsPolicy;

    /**
     * @var bool
     */
    private $needReturnsPolicy;

    /**
     * @var bool
     */
    private $needRepairsPolicy;

    /**
     * @var bool
     */
    private $needExtraActivationsPolicy;

    /**
     * @var bool
     */
    private $needCancelLicensePolicy;

    /**
     * @var bool
     */
    private $needVirtualLicensePolicy;

    /**
     * @var bool
     */
    private $needReinstallPolicy;

    /**
     * @var bool
     */
    private $needServerHostIdPolicy;

    /**
     * @var bool
     */
    private $needNodelockedHostIdPolicy;

    /**
     * @var bool
     */
    private $needPortalServerHostIdPolicy;

    /**
     * @var bool
     */
    private $needPortalNodelockedHostIdPolicy;

    /**
     * @var bool
     */
    private $needRedundantServerPolicy;

    /**
     * @var bool
     */
    private $needACPIGenerationIdLicensePolicy;

    /**
     * Constructor
     */
    public function __construct(bool $needRehostsPolicy, bool $needReturnsPolicy, bool $needRepairsPolicy, bool $needExtraActivationsPolicy, bool $needCancelLicensePolicy, bool $needVirtualLicensePolicy, bool $needReinstallPolicy, bool $needServerHostIdPolicy, bool $needNodelockedHostIdPolicy, bool $needPortalServerHostIdPolicy, bool $needPortalNodelockedHostIdPolicy, bool $needRedundantServerPolicy, bool $needACPIGenerationIdLicensePolicy)
    {
        $this->needRehostsPolicy = $needRehostsPolicy;
        $this->needReturnsPolicy = $needReturnsPolicy;
        $this->needRepairsPolicy = $needRepairsPolicy;
        $this->needExtraActivationsPolicy = $needExtraActivationsPolicy;
        $this->needCancelLicensePolicy = $needCancelLicensePolicy;
        $this->needVirtualLicensePolicy = $needVirtualLicensePolicy;
        $this->needReinstallPolicy = $needReinstallPolicy;
        $this->needServerHostIdPolicy = $needServerHostIdPolicy;
        $this->needNodelockedHostIdPolicy = $needNodelockedHostIdPolicy;
        $this->needPortalServerHostIdPolicy = $needPortalServerHostIdPolicy;
        $this->needPortalNodelockedHostIdPolicy = $needPortalNodelockedHostIdPolicy;
        $this->needRedundantServerPolicy = $needRedundantServerPolicy;
        $this->needACPIGenerationIdLicensePolicy = $needACPIGenerationIdLicensePolicy;
    }

    public static function create(bool $needRehostsPolicy, bool $needReturnsPolicy, bool $needRepairsPolicy, bool $needExtraActivationsPolicy, bool $needCancelLicensePolicy, bool $needVirtualLicensePolicy, bool $needReinstallPolicy, bool $needServerHostIdPolicy, bool $needNodelockedHostIdPolicy, bool $needPortalServerHostIdPolicy, bool $needPortalNodelockedHostIdPolicy, bool $needRedundantServerPolicy, bool $needACPIGenerationIdLicensePolicy)
    {
        return new static(...\func_get_args());
    }

    public function getNeedRehostsPolicy(): bool
    {
        return $this->needRehostsPolicy;
    }

    public function withNeedRehostsPolicy(bool $needRehostsPolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needRehostsPolicy = $needRehostsPolicy;

        return $new;
    }

    public function getNeedReturnsPolicy(): bool
    {
        return $this->needReturnsPolicy;
    }

    public function withNeedReturnsPolicy(bool $needReturnsPolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needReturnsPolicy = $needReturnsPolicy;

        return $new;
    }

    public function getNeedRepairsPolicy(): bool
    {
        return $this->needRepairsPolicy;
    }

    public function withNeedRepairsPolicy(bool $needRepairsPolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needRepairsPolicy = $needRepairsPolicy;

        return $new;
    }

    public function getNeedExtraActivationsPolicy(): bool
    {
        return $this->needExtraActivationsPolicy;
    }

    public function withNeedExtraActivationsPolicy(bool $needExtraActivationsPolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needExtraActivationsPolicy = $needExtraActivationsPolicy;

        return $new;
    }

    public function getNeedCancelLicensePolicy(): bool
    {
        return $this->needCancelLicensePolicy;
    }

    public function withNeedCancelLicensePolicy(bool $needCancelLicensePolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needCancelLicensePolicy = $needCancelLicensePolicy;

        return $new;
    }

    public function getNeedVirtualLicensePolicy(): bool
    {
        return $this->needVirtualLicensePolicy;
    }

    public function withNeedVirtualLicensePolicy(bool $needVirtualLicensePolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needVirtualLicensePolicy = $needVirtualLicensePolicy;

        return $new;
    }

    public function getNeedReinstallPolicy(): bool
    {
        return $this->needReinstallPolicy;
    }

    public function withNeedReinstallPolicy(bool $needReinstallPolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needReinstallPolicy = $needReinstallPolicy;

        return $new;
    }

    public function getNeedServerHostIdPolicy(): bool
    {
        return $this->needServerHostIdPolicy;
    }

    public function withNeedServerHostIdPolicy(bool $needServerHostIdPolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needServerHostIdPolicy = $needServerHostIdPolicy;

        return $new;
    }

    public function getNeedNodelockedHostIdPolicy(): bool
    {
        return $this->needNodelockedHostIdPolicy;
    }

    public function withNeedNodelockedHostIdPolicy(bool $needNodelockedHostIdPolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needNodelockedHostIdPolicy = $needNodelockedHostIdPolicy;

        return $new;
    }

    public function getNeedPortalServerHostIdPolicy(): bool
    {
        return $this->needPortalServerHostIdPolicy;
    }

    public function withNeedPortalServerHostIdPolicy(bool $needPortalServerHostIdPolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needPortalServerHostIdPolicy = $needPortalServerHostIdPolicy;

        return $new;
    }

    public function getNeedPortalNodelockedHostIdPolicy(): bool
    {
        return $this->needPortalNodelockedHostIdPolicy;
    }

    public function withNeedPortalNodelockedHostIdPolicy(bool $needPortalNodelockedHostIdPolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needPortalNodelockedHostIdPolicy = $needPortalNodelockedHostIdPolicy;

        return $new;
    }

    public function getNeedRedundantServerPolicy(): bool
    {
        return $this->needRedundantServerPolicy;
    }

    public function withNeedRedundantServerPolicy(bool $needRedundantServerPolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needRedundantServerPolicy = $needRedundantServerPolicy;

        return $new;
    }

    public function getNeedACPIGenerationIdLicensePolicy(): bool
    {
        return $this->needACPIGenerationIdLicensePolicy;
    }

    public function withNeedACPIGenerationIdLicensePolicy(bool $needACPIGenerationIdLicensePolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needACPIGenerationIdLicensePolicy = $needACPIGenerationIdLicensePolicy;

        return $new;
    }
}
