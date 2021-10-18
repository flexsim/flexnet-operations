<?php

namespace Flexsim\FlexnetOperations\Type;

class AdvancedReinstallPolicyType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\PolicyDataType
     */
    protected $umn1Policy;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PolicyDataType
     */
    protected $umn2Policy;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PolicyDataType
     */
    protected $umn3Policy;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PolicyDataType
     */
    protected $midPolicy;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\PolicyDataType $umn1Policy
     * @var \Flexsim\FlexnetOperations\Type\PolicyDataType $umn2Policy
     * @var \Flexsim\FlexnetOperations\Type\PolicyDataType $umn3Policy
     * @var \Flexsim\FlexnetOperations\Type\PolicyDataType $midPolicy
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\PolicyDataType $umn1Policy, \Flexsim\FlexnetOperations\Type\PolicyDataType $umn2Policy, \Flexsim\FlexnetOperations\Type\PolicyDataType $umn3Policy, \Flexsim\FlexnetOperations\Type\PolicyDataType $midPolicy)
    {
        $this->umn1Policy = $umn1Policy;
        $this->umn2Policy = $umn2Policy;
        $this->umn3Policy = $umn3Policy;
        $this->midPolicy = $midPolicy;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\PolicyDataType $umn1Policy
     * @var \Flexsim\FlexnetOperations\Type\PolicyDataType $umn2Policy
     * @var \Flexsim\FlexnetOperations\Type\PolicyDataType $umn3Policy
     * @var \Flexsim\FlexnetOperations\Type\PolicyDataType $midPolicy
     */
    public static function create(\Flexsim\FlexnetOperations\Type\PolicyDataType $umn1Policy, \Flexsim\FlexnetOperations\Type\PolicyDataType $umn2Policy, \Flexsim\FlexnetOperations\Type\PolicyDataType $umn3Policy, \Flexsim\FlexnetOperations\Type\PolicyDataType $midPolicy)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PolicyDataType
     */
    public function getUmn1Policy()
    {
        return $this->umn1Policy;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PolicyDataType $umn1Policy
     * @return $this
     */
    public function setUmn1Policy($umn1Policy)
    {
        $this->umn1Policy = $umn1Policy;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PolicyDataType
     */
    public function getUmn2Policy()
    {
        return $this->umn2Policy;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PolicyDataType $umn2Policy
     * @return $this
     */
    public function setUmn2Policy($umn2Policy)
    {
        $this->umn2Policy = $umn2Policy;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PolicyDataType
     */
    public function getUmn3Policy()
    {
        return $this->umn3Policy;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PolicyDataType $umn3Policy
     * @return $this
     */
    public function setUmn3Policy($umn3Policy)
    {
        $this->umn3Policy = $umn3Policy;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PolicyDataType
     */
    public function getMidPolicy()
    {
        return $this->midPolicy;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PolicyDataType $midPolicy
     * @return $this
     */
    public function setMidPolicy($midPolicy)
    {
        $this->midPolicy = $midPolicy;
        return $this;
    }
}
