<?php

namespace Flexsim\FlexnetOperations\Type;

class ReturnFulfillmentDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    private $fulfillmentIdentifier;

    /**
     * @var int
     */
    private $partialCount;

    /**
     * @var int
     */
    private $overDraftCount;

    /**
     * @var bool
     */
    private $overridePolicy;

    /**
     * @var bool
     */
    private $forceReturnOfThisTrustedFulfillment;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @var int $partialCount
     * @var int $overDraftCount
     * @var bool $overridePolicy
     * @var bool $forceReturnOfThisTrustedFulfillment
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier, int $partialCount = null, int $overDraftCount = null, bool $overridePolicy = null, bool $forceReturnOfThisTrustedFulfillment = null)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->partialCount = $partialCount;
        $this->overDraftCount = $overDraftCount;
        $this->overridePolicy = $overridePolicy;
        $this->forceReturnOfThisTrustedFulfillment = $forceReturnOfThisTrustedFulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @var int $partialCount
     * @var int $overDraftCount
     * @var bool $overridePolicy
     * @var bool $forceReturnOfThisTrustedFulfillment
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier, int $partialCount = null, int $overDraftCount = null, bool $overridePolicy = null, bool $forceReturnOfThisTrustedFulfillment = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    public function getFulfillmentIdentifier()
    {
        return $this->fulfillmentIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @return $this
     */
    public function setFulfillmentIdentifier($fulfillmentIdentifier)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        return $this;
    }

    /**
     * @return int
     */
    public function getPartialCount()
    {
        return $this->partialCount;
    }

    /**
     * @param int $partialCount
     * @return $this
     */
    public function setPartialCount($partialCount)
    {
        $this->partialCount = $partialCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getOverDraftCount()
    {
        return $this->overDraftCount;
    }

    /**
     * @param int $overDraftCount
     * @return $this
     */
    public function setOverDraftCount($overDraftCount)
    {
        $this->overDraftCount = $overDraftCount;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOverridePolicy()
    {
        return $this->overridePolicy;
    }

    /**
     * @param bool $overridePolicy
     * @return $this
     */
    public function setOverridePolicy($overridePolicy)
    {
        $this->overridePolicy = $overridePolicy;
        return $this;
    }

    /**
     * @return bool
     */
    public function getForceReturnOfThisTrustedFulfillment()
    {
        return $this->forceReturnOfThisTrustedFulfillment;
    }

    /**
     * @param bool $forceReturnOfThisTrustedFulfillment
     * @return $this
     */
    public function setForceReturnOfThisTrustedFulfillment($forceReturnOfThisTrustedFulfillment)
    {
        $this->forceReturnOfThisTrustedFulfillment = $forceReturnOfThisTrustedFulfillment;
        return $this;
    }


}

