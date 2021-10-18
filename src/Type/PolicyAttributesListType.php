<?php

namespace Flexsim\FlexnetOperations\Type;

class PolicyAttributesListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\PolicyDataType
     */
    protected $rehostsPolicy;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PolicyDataType
     */
    protected $returnsPolicy;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PolicyDataType
     */
    protected $repairsPolicy;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ExtraActivationDataType
     */
    protected $extraActivationsPolicy;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CancelLicensePolicyDataType
     */
    protected $cancelLicensePolicy;

    /**
     * @var \Flexsim\FlexnetOperations\Type\VirtualLicensePolicyDataType
     */
    protected $virtualLicensePolicy;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ReinstallPolicyDataType
     */
    protected $reinstallPolicy;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AcpiGenerationIdLicensePolicyDataType
     */
    protected $acpiGenerationIdLicensePolicy;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\PolicyDataType $rehostsPolicy
     * @var \Flexsim\FlexnetOperations\Type\PolicyDataType $returnsPolicy
     * @var \Flexsim\FlexnetOperations\Type\PolicyDataType $repairsPolicy
     * @var \Flexsim\FlexnetOperations\Type\ExtraActivationDataType $extraActivationsPolicy
     * @var \Flexsim\FlexnetOperations\Type\CancelLicensePolicyDataType $cancelLicensePolicy
     * @var \Flexsim\FlexnetOperations\Type\VirtualLicensePolicyDataType $virtualLicensePolicy
     * @var \Flexsim\FlexnetOperations\Type\ReinstallPolicyDataType $reinstallPolicy
     * @var \Flexsim\FlexnetOperations\Type\AcpiGenerationIdLicensePolicyDataType $acpiGenerationIdLicensePolicy
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\PolicyDataType $rehostsPolicy = null, \Flexsim\FlexnetOperations\Type\PolicyDataType $returnsPolicy = null, \Flexsim\FlexnetOperations\Type\PolicyDataType $repairsPolicy = null, \Flexsim\FlexnetOperations\Type\ExtraActivationDataType $extraActivationsPolicy = null, \Flexsim\FlexnetOperations\Type\CancelLicensePolicyDataType $cancelLicensePolicy = null, \Flexsim\FlexnetOperations\Type\VirtualLicensePolicyDataType $virtualLicensePolicy = null, \Flexsim\FlexnetOperations\Type\ReinstallPolicyDataType $reinstallPolicy = null, \Flexsim\FlexnetOperations\Type\AcpiGenerationIdLicensePolicyDataType $acpiGenerationIdLicensePolicy = null)
    {
        $this->rehostsPolicy = $rehostsPolicy;
        $this->returnsPolicy = $returnsPolicy;
        $this->repairsPolicy = $repairsPolicy;
        $this->extraActivationsPolicy = $extraActivationsPolicy;
        $this->cancelLicensePolicy = $cancelLicensePolicy;
        $this->virtualLicensePolicy = $virtualLicensePolicy;
        $this->reinstallPolicy = $reinstallPolicy;
        $this->acpiGenerationIdLicensePolicy = $acpiGenerationIdLicensePolicy;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\PolicyDataType $rehostsPolicy
     * @var \Flexsim\FlexnetOperations\Type\PolicyDataType $returnsPolicy
     * @var \Flexsim\FlexnetOperations\Type\PolicyDataType $repairsPolicy
     * @var \Flexsim\FlexnetOperations\Type\ExtraActivationDataType $extraActivationsPolicy
     * @var \Flexsim\FlexnetOperations\Type\CancelLicensePolicyDataType $cancelLicensePolicy
     * @var \Flexsim\FlexnetOperations\Type\VirtualLicensePolicyDataType $virtualLicensePolicy
     * @var \Flexsim\FlexnetOperations\Type\ReinstallPolicyDataType $reinstallPolicy
     * @var \Flexsim\FlexnetOperations\Type\AcpiGenerationIdLicensePolicyDataType $acpiGenerationIdLicensePolicy
     */
    public static function create(\Flexsim\FlexnetOperations\Type\PolicyDataType $rehostsPolicy = null, \Flexsim\FlexnetOperations\Type\PolicyDataType $returnsPolicy = null, \Flexsim\FlexnetOperations\Type\PolicyDataType $repairsPolicy = null, \Flexsim\FlexnetOperations\Type\ExtraActivationDataType $extraActivationsPolicy = null, \Flexsim\FlexnetOperations\Type\CancelLicensePolicyDataType $cancelLicensePolicy = null, \Flexsim\FlexnetOperations\Type\VirtualLicensePolicyDataType $virtualLicensePolicy = null, \Flexsim\FlexnetOperations\Type\ReinstallPolicyDataType $reinstallPolicy = null, \Flexsim\FlexnetOperations\Type\AcpiGenerationIdLicensePolicyDataType $acpiGenerationIdLicensePolicy = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PolicyDataType
     */
    public function getRehostsPolicy()
    {
        return $this->rehostsPolicy;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PolicyDataType $rehostsPolicy
     * @return $this
     */
    public function setRehostsPolicy($rehostsPolicy)
    {
        $this->rehostsPolicy = $rehostsPolicy;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PolicyDataType
     */
    public function getReturnsPolicy()
    {
        return $this->returnsPolicy;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PolicyDataType $returnsPolicy
     * @return $this
     */
    public function setReturnsPolicy($returnsPolicy)
    {
        $this->returnsPolicy = $returnsPolicy;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PolicyDataType
     */
    public function getRepairsPolicy()
    {
        return $this->repairsPolicy;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PolicyDataType $repairsPolicy
     * @return $this
     */
    public function setRepairsPolicy($repairsPolicy)
    {
        $this->repairsPolicy = $repairsPolicy;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ExtraActivationDataType
     */
    public function getExtraActivationsPolicy()
    {
        return $this->extraActivationsPolicy;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ExtraActivationDataType $extraActivationsPolicy
     * @return $this
     */
    public function setExtraActivationsPolicy($extraActivationsPolicy)
    {
        $this->extraActivationsPolicy = $extraActivationsPolicy;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CancelLicensePolicyDataType
     */
    public function getCancelLicensePolicy()
    {
        return $this->cancelLicensePolicy;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CancelLicensePolicyDataType $cancelLicensePolicy
     * @return $this
     */
    public function setCancelLicensePolicy($cancelLicensePolicy)
    {
        $this->cancelLicensePolicy = $cancelLicensePolicy;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\VirtualLicensePolicyDataType
     */
    public function getVirtualLicensePolicy()
    {
        return $this->virtualLicensePolicy;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\VirtualLicensePolicyDataType $virtualLicensePolicy
     * @return $this
     */
    public function setVirtualLicensePolicy($virtualLicensePolicy)
    {
        $this->virtualLicensePolicy = $virtualLicensePolicy;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ReinstallPolicyDataType
     */
    public function getReinstallPolicy()
    {
        return $this->reinstallPolicy;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ReinstallPolicyDataType $reinstallPolicy
     * @return $this
     */
    public function setReinstallPolicy($reinstallPolicy)
    {
        $this->reinstallPolicy = $reinstallPolicy;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AcpiGenerationIdLicensePolicyDataType
     */
    public function getAcpiGenerationIdLicensePolicy()
    {
        return $this->acpiGenerationIdLicensePolicy;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AcpiGenerationIdLicensePolicyDataType $acpiGenerationIdLicensePolicy
     * @return $this
     */
    public function setAcpiGenerationIdLicensePolicy($acpiGenerationIdLicensePolicy)
    {
        $this->acpiGenerationIdLicensePolicy = $acpiGenerationIdLicensePolicy;
        return $this;
    }
}
