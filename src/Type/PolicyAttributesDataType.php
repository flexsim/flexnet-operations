<?php

namespace Flexsim\FlexnetOperations\Type;

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
     * @var bool $needRehostsPolicy
     * @var bool $needReturnsPolicy
     * @var bool $needRepairsPolicy
     * @var bool $needExtraActivationsPolicy
     * @var bool $needCancelLicensePolicy
     * @var bool $needVirtualLicensePolicy
     * @var bool $needReinstallPolicy
     * @var bool $needServerHostIdPolicy
     * @var bool $needNodelockedHostIdPolicy
     * @var bool $needPortalServerHostIdPolicy
     * @var bool $needPortalNodelockedHostIdPolicy
     * @var bool $needRedundantServerPolicy
     * @var bool $needACPIGenerationIdLicensePolicy
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
     * create a new instance of this class
     *
     * @var bool $needRehostsPolicy
     * @var bool $needReturnsPolicy
     * @var bool $needRepairsPolicy
     * @var bool $needExtraActivationsPolicy
     * @var bool $needCancelLicensePolicy
     * @var bool $needVirtualLicensePolicy
     * @var bool $needReinstallPolicy
     * @var bool $needServerHostIdPolicy
     * @var bool $needNodelockedHostIdPolicy
     * @var bool $needPortalServerHostIdPolicy
     * @var bool $needPortalNodelockedHostIdPolicy
     * @var bool $needRedundantServerPolicy
     * @var bool $needACPIGenerationIdLicensePolicy
     */
    public static function create(bool $needRehostsPolicy, bool $needReturnsPolicy, bool $needRepairsPolicy, bool $needExtraActivationsPolicy, bool $needCancelLicensePolicy, bool $needVirtualLicensePolicy, bool $needReinstallPolicy, bool $needServerHostIdPolicy, bool $needNodelockedHostIdPolicy, bool $needPortalServerHostIdPolicy, bool $needPortalNodelockedHostIdPolicy, bool $needRedundantServerPolicy, bool $needACPIGenerationIdLicensePolicy)
    {
        return new self(...func_get_args());
    }

    /**
     * @return bool
     */
    public function getNeedRehostsPolicy()
    {
        return $this->needRehostsPolicy;
    }

    /**
     * @param bool $needRehostsPolicy
     * @return $this
     */
    public function setNeedRehostsPolicy($needRehostsPolicy)
    {
        $this->needRehostsPolicy = $needRehostsPolicy;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedReturnsPolicy()
    {
        return $this->needReturnsPolicy;
    }

    /**
     * @param bool $needReturnsPolicy
     * @return $this
     */
    public function setNeedReturnsPolicy($needReturnsPolicy)
    {
        $this->needReturnsPolicy = $needReturnsPolicy;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedRepairsPolicy()
    {
        return $this->needRepairsPolicy;
    }

    /**
     * @param bool $needRepairsPolicy
     * @return $this
     */
    public function setNeedRepairsPolicy($needRepairsPolicy)
    {
        $this->needRepairsPolicy = $needRepairsPolicy;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedExtraActivationsPolicy()
    {
        return $this->needExtraActivationsPolicy;
    }

    /**
     * @param bool $needExtraActivationsPolicy
     * @return $this
     */
    public function setNeedExtraActivationsPolicy($needExtraActivationsPolicy)
    {
        $this->needExtraActivationsPolicy = $needExtraActivationsPolicy;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedCancelLicensePolicy()
    {
        return $this->needCancelLicensePolicy;
    }

    /**
     * @param bool $needCancelLicensePolicy
     * @return $this
     */
    public function setNeedCancelLicensePolicy($needCancelLicensePolicy)
    {
        $this->needCancelLicensePolicy = $needCancelLicensePolicy;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedVirtualLicensePolicy()
    {
        return $this->needVirtualLicensePolicy;
    }

    /**
     * @param bool $needVirtualLicensePolicy
     * @return $this
     */
    public function setNeedVirtualLicensePolicy($needVirtualLicensePolicy)
    {
        $this->needVirtualLicensePolicy = $needVirtualLicensePolicy;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedReinstallPolicy()
    {
        return $this->needReinstallPolicy;
    }

    /**
     * @param bool $needReinstallPolicy
     * @return $this
     */
    public function setNeedReinstallPolicy($needReinstallPolicy)
    {
        $this->needReinstallPolicy = $needReinstallPolicy;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedServerHostIdPolicy()
    {
        return $this->needServerHostIdPolicy;
    }

    /**
     * @param bool $needServerHostIdPolicy
     * @return $this
     */
    public function setNeedServerHostIdPolicy($needServerHostIdPolicy)
    {
        $this->needServerHostIdPolicy = $needServerHostIdPolicy;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedNodelockedHostIdPolicy()
    {
        return $this->needNodelockedHostIdPolicy;
    }

    /**
     * @param bool $needNodelockedHostIdPolicy
     * @return $this
     */
    public function setNeedNodelockedHostIdPolicy($needNodelockedHostIdPolicy)
    {
        $this->needNodelockedHostIdPolicy = $needNodelockedHostIdPolicy;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedPortalServerHostIdPolicy()
    {
        return $this->needPortalServerHostIdPolicy;
    }

    /**
     * @param bool $needPortalServerHostIdPolicy
     * @return $this
     */
    public function setNeedPortalServerHostIdPolicy($needPortalServerHostIdPolicy)
    {
        $this->needPortalServerHostIdPolicy = $needPortalServerHostIdPolicy;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedPortalNodelockedHostIdPolicy()
    {
        return $this->needPortalNodelockedHostIdPolicy;
    }

    /**
     * @param bool $needPortalNodelockedHostIdPolicy
     * @return $this
     */
    public function setNeedPortalNodelockedHostIdPolicy($needPortalNodelockedHostIdPolicy)
    {
        $this->needPortalNodelockedHostIdPolicy = $needPortalNodelockedHostIdPolicy;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedRedundantServerPolicy()
    {
        return $this->needRedundantServerPolicy;
    }

    /**
     * @param bool $needRedundantServerPolicy
     * @return $this
     */
    public function setNeedRedundantServerPolicy($needRedundantServerPolicy)
    {
        $this->needRedundantServerPolicy = $needRedundantServerPolicy;
        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedACPIGenerationIdLicensePolicy()
    {
        return $this->needACPIGenerationIdLicensePolicy;
    }

    /**
     * @param bool $needACPIGenerationIdLicensePolicy
     * @return $this
     */
    public function setNeedACPIGenerationIdLicensePolicy($needACPIGenerationIdLicensePolicy)
    {
        $this->needACPIGenerationIdLicensePolicy = $needACPIGenerationIdLicensePolicy;
        return $this;
    }


}
