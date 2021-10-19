<?php

namespace Flexsim\FlexnetOperations\Type;

class ReinstallPolicyDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\PolicyDataType
     */
    protected $defaultPolicy;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AdvancedReinstallPolicyType
     */
    protected $advancedPolicy;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\PolicyDataType $defaultPolicy
     * @param \Flexsim\FlexnetOperations\Type\AdvancedReinstallPolicyType $advancedPolicy
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\PolicyDataType $defaultPolicy = null, \Flexsim\FlexnetOperations\Type\AdvancedReinstallPolicyType $advancedPolicy = null)
    {
        $this->defaultPolicy = $defaultPolicy;
        $this->advancedPolicy = $advancedPolicy;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\PolicyDataType $defaultPolicy
     * @param \Flexsim\FlexnetOperations\Type\AdvancedReinstallPolicyType $advancedPolicy
     */
    public static function create(\Flexsim\FlexnetOperations\Type\PolicyDataType $defaultPolicy = null, \Flexsim\FlexnetOperations\Type\AdvancedReinstallPolicyType $advancedPolicy = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PolicyDataType
     */
    public function getDefaultPolicy()
    {
        return $this->defaultPolicy;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PolicyDataType $defaultPolicy
     * @return $this
     */
    public function setDefaultPolicy($defaultPolicy)
    {
        $this->defaultPolicy = $defaultPolicy;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AdvancedReinstallPolicyType
     */
    public function getAdvancedPolicy()
    {
        return $this->advancedPolicy;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AdvancedReinstallPolicyType $advancedPolicy
     * @return $this
     */
    public function setAdvancedPolicy($advancedPolicy)
    {
        $this->advancedPolicy = $advancedPolicy;
        return $this;
    }
}
