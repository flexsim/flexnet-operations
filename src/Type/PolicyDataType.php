<?php

namespace Flexsim\FlexnetOperations\Type;

class PolicyDataType
{

    /**
     * @var int
     */
    private $allowedCount;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PolicyTermType
     */
    private $policyTerm;

    /**
     * Constructor
     *
     * @var int $allowedCount
     * @var \Flexsim\FlexnetOperations\Type\PolicyTermType $policyTerm
     */
    public function __construct(int $allowedCount, \Flexsim\FlexnetOperations\Type\PolicyTermType $policyTerm)
    {
        $this->allowedCount = $allowedCount;
        $this->policyTerm = $policyTerm;
    }

    /**
     * create a new instance of this class
     *
     * @var int $allowedCount
     * @var \Flexsim\FlexnetOperations\Type\PolicyTermType $policyTerm
     */
    public static function create(int $allowedCount, \Flexsim\FlexnetOperations\Type\PolicyTermType $policyTerm)
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
     * @param int $allowedCount
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
     * @param \Flexsim\FlexnetOperations\Type\PolicyTermType $policyTerm
     * @return $this
     */
    public function setPolicyTerm($policyTerm)
    {
        $this->policyTerm = $policyTerm;
        return $this;
    }


}

