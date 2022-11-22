<?php

namespace Flexsim\FlexnetOperations\Type;

class PolicyDataType extends FlexnetType
{
    /**
     * @var int
     */
    protected $allowedCount;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PolicyTermType
     */
    protected $policyTerm;

    /**
     * Constructor
     *
     * @param  int  $allowedCount
     * @param  \Flexsim\FlexnetOperations\Type\PolicyTermType  $policyTerm
     */
    public function __construct(int $allowedCount, PolicyTermType $policyTerm)
    {
        $this->allowedCount = $allowedCount;
        $this->policyTerm = $policyTerm;
    }

    /**
     * create a new instance of this class
     *
     * @param  int  $allowedCount
     * @param  \Flexsim\FlexnetOperations\Type\PolicyTermType  $policyTerm
     */
    public static function create(int $allowedCount, PolicyTermType $policyTerm)
    {
        return new self(...func_get_args());
    }

    /**
     * @return int
     */
    public function getAllowedCount()
    {
        return $this->allowedCount;
    }

    /**
     * @param  int  $allowedCount
     * @return $this
     */
    public function setAllowedCount($allowedCount)
    {
        $this->allowedCount = $allowedCount;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PolicyTermType
     */
    public function getPolicyTerm()
    {
        return $this->policyTerm;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\PolicyTermType  $policyTerm
     * @return $this
     */
    public function setPolicyTerm($policyTerm)
    {
        $this->policyTerm = $policyTerm;

        return $this;
    }
}
