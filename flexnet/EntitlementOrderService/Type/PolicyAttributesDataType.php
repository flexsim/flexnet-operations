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
     *
     * @param  bool  $needRehostsPolicy
     * @param  bool  $needReturnsPolicy
     * @param  bool  $needRepairsPolicy
     * @param  bool  $needExtraActivationsPolicy
     * @param  bool  $needCancelLicensePolicy
     * @param  bool  $needVirtualLicensePolicy
     * @param  bool  $needReinstallPolicy
     * @param  bool  $needServerHostIdPolicy
     * @param  bool  $needNodelockedHostIdPolicy
     * @param  bool  $needPortalServerHostIdPolicy
     * @param  bool  $needPortalNodelockedHostIdPolicy
     * @param  bool  $needRedundantServerPolicy
     * @param  bool  $needACPIGenerationIdLicensePolicy
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

    /**
     * @param  bool  $needRehostsPolicy
     * @param  bool  $needReturnsPolicy
     * @param  bool  $needRepairsPolicy
     * @param  bool  $needExtraActivationsPolicy
     * @param  bool  $needCancelLicensePolicy
     * @param  bool  $needVirtualLicensePolicy
     * @param  bool  $needReinstallPolicy
     * @param  bool  $needServerHostIdPolicy
     * @param  bool  $needNodelockedHostIdPolicy
     * @param  bool  $needPortalServerHostIdPolicy
     * @param  bool  $needPortalNodelockedHostIdPolicy
     * @param  bool  $needRedundantServerPolicy
     * @param  bool  $needACPIGenerationIdLicensePolicy
     */
    public static function create(bool $needRehostsPolicy, bool $needReturnsPolicy, bool $needRepairsPolicy, bool $needExtraActivationsPolicy, bool $needCancelLicensePolicy, bool $needVirtualLicensePolicy, bool $needReinstallPolicy, bool $needServerHostIdPolicy, bool $needNodelockedHostIdPolicy, bool $needPortalServerHostIdPolicy, bool $needPortalNodelockedHostIdPolicy, bool $needRedundantServerPolicy, bool $needACPIGenerationIdLicensePolicy)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return bool
     */
    public function getNeedRehostsPolicy(): bool
    {
        return $this->needRehostsPolicy;
    }

    /**
     * @param  bool  $needRehostsPolicy
     * @return PolicyAttributesDataType
     */
    public function withNeedRehostsPolicy(bool $needRehostsPolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needRehostsPolicy = $needRehostsPolicy;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNeedReturnsPolicy(): bool
    {
        return $this->needReturnsPolicy;
    }

    /**
     * @param  bool  $needReturnsPolicy
     * @return PolicyAttributesDataType
     */
    public function withNeedReturnsPolicy(bool $needReturnsPolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needReturnsPolicy = $needReturnsPolicy;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNeedRepairsPolicy(): bool
    {
        return $this->needRepairsPolicy;
    }

    /**
     * @param  bool  $needRepairsPolicy
     * @return PolicyAttributesDataType
     */
    public function withNeedRepairsPolicy(bool $needRepairsPolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needRepairsPolicy = $needRepairsPolicy;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNeedExtraActivationsPolicy(): bool
    {
        return $this->needExtraActivationsPolicy;
    }

    /**
     * @param  bool  $needExtraActivationsPolicy
     * @return PolicyAttributesDataType
     */
    public function withNeedExtraActivationsPolicy(bool $needExtraActivationsPolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needExtraActivationsPolicy = $needExtraActivationsPolicy;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNeedCancelLicensePolicy(): bool
    {
        return $this->needCancelLicensePolicy;
    }

    /**
     * @param  bool  $needCancelLicensePolicy
     * @return PolicyAttributesDataType
     */
    public function withNeedCancelLicensePolicy(bool $needCancelLicensePolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needCancelLicensePolicy = $needCancelLicensePolicy;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNeedVirtualLicensePolicy(): bool
    {
        return $this->needVirtualLicensePolicy;
    }

    /**
     * @param  bool  $needVirtualLicensePolicy
     * @return PolicyAttributesDataType
     */
    public function withNeedVirtualLicensePolicy(bool $needVirtualLicensePolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needVirtualLicensePolicy = $needVirtualLicensePolicy;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNeedReinstallPolicy(): bool
    {
        return $this->needReinstallPolicy;
    }

    /**
     * @param  bool  $needReinstallPolicy
     * @return PolicyAttributesDataType
     */
    public function withNeedReinstallPolicy(bool $needReinstallPolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needReinstallPolicy = $needReinstallPolicy;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNeedServerHostIdPolicy(): bool
    {
        return $this->needServerHostIdPolicy;
    }

    /**
     * @param  bool  $needServerHostIdPolicy
     * @return PolicyAttributesDataType
     */
    public function withNeedServerHostIdPolicy(bool $needServerHostIdPolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needServerHostIdPolicy = $needServerHostIdPolicy;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNeedNodelockedHostIdPolicy(): bool
    {
        return $this->needNodelockedHostIdPolicy;
    }

    /**
     * @param  bool  $needNodelockedHostIdPolicy
     * @return PolicyAttributesDataType
     */
    public function withNeedNodelockedHostIdPolicy(bool $needNodelockedHostIdPolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needNodelockedHostIdPolicy = $needNodelockedHostIdPolicy;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNeedPortalServerHostIdPolicy(): bool
    {
        return $this->needPortalServerHostIdPolicy;
    }

    /**
     * @param  bool  $needPortalServerHostIdPolicy
     * @return PolicyAttributesDataType
     */
    public function withNeedPortalServerHostIdPolicy(bool $needPortalServerHostIdPolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needPortalServerHostIdPolicy = $needPortalServerHostIdPolicy;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNeedPortalNodelockedHostIdPolicy(): bool
    {
        return $this->needPortalNodelockedHostIdPolicy;
    }

    /**
     * @param  bool  $needPortalNodelockedHostIdPolicy
     * @return PolicyAttributesDataType
     */
    public function withNeedPortalNodelockedHostIdPolicy(bool $needPortalNodelockedHostIdPolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needPortalNodelockedHostIdPolicy = $needPortalNodelockedHostIdPolicy;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNeedRedundantServerPolicy(): bool
    {
        return $this->needRedundantServerPolicy;
    }

    /**
     * @param  bool  $needRedundantServerPolicy
     * @return PolicyAttributesDataType
     */
    public function withNeedRedundantServerPolicy(bool $needRedundantServerPolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needRedundantServerPolicy = $needRedundantServerPolicy;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNeedACPIGenerationIdLicensePolicy(): bool
    {
        return $this->needACPIGenerationIdLicensePolicy;
    }

    /**
     * @param  bool  $needACPIGenerationIdLicensePolicy
     * @return PolicyAttributesDataType
     */
    public function withNeedACPIGenerationIdLicensePolicy(bool $needACPIGenerationIdLicensePolicy): PolicyAttributesDataType
    {
        $new = clone $this;
        $new->needACPIGenerationIdLicensePolicy = $needACPIGenerationIdLicensePolicy;

        return $new;
    }
}
