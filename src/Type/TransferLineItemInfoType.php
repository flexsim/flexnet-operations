<?php

namespace Flexsim\FlexnetOperations\Type;

class TransferLineItemInfoType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    protected $lineItemIdentifier;

    /**
     * @var int
     */
    protected $numberOfCopies;

    /**
     * @var bool
     */
    protected $useSameActivationId;

    /**
     * @var string
     */
    protected $customActivationId;

    /**
     * @var bool
     */
    protected $generateActivationId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    protected $entitlementBelongsTo;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier
     * @param int $numberOfCopies
     * @param bool $useSameActivationId
     * @param string $customActivationId
     * @param bool $generateActivationId
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementBelongsTo
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, int $numberOfCopies, \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementBelongsTo, bool $useSameActivationId = null, string $customActivationId = null, bool $generateActivationId = null)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->numberOfCopies = $numberOfCopies;
        $this->entitlementBelongsTo = $entitlementBelongsTo;
        $this->useSameActivationId = $useSameActivationId;
        $this->customActivationId = $customActivationId;
        $this->generateActivationId = $generateActivationId;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier
     * @param int $numberOfCopies
     * @param bool $useSameActivationId
     * @param string $customActivationId
     * @param bool $generateActivationId
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementBelongsTo
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, int $numberOfCopies, \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementBelongsTo, bool $useSameActivationId = null, string $customActivationId = null, bool $generateActivationId = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    public function getLineItemIdentifier()
    {
        return $this->lineItemIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier
     * @return $this
     */
    public function setLineItemIdentifier($lineItemIdentifier)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfCopies()
    {
        return $this->numberOfCopies;
    }

    /**
     * @param int $numberOfCopies
     * @return $this
     */
    public function setNumberOfCopies($numberOfCopies)
    {
        $this->numberOfCopies = $numberOfCopies;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUseSameActivationId()
    {
        return $this->useSameActivationId;
    }

    /**
     * @param bool $useSameActivationId
     * @return $this
     */
    public function setUseSameActivationId($useSameActivationId)
    {
        $this->useSameActivationId = $useSameActivationId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomActivationId()
    {
        return $this->customActivationId;
    }

    /**
     * @param string $customActivationId
     * @return $this
     */
    public function setCustomActivationId($customActivationId)
    {
        $this->customActivationId = $customActivationId;
        return $this;
    }

    /**
     * @return bool
     */
    public function getGenerateActivationId()
    {
        return $this->generateActivationId;
    }

    /**
     * @param bool $generateActivationId
     * @return $this
     */
    public function setGenerateActivationId($generateActivationId)
    {
        $this->generateActivationId = $generateActivationId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    public function getEntitlementBelongsTo()
    {
        return $this->entitlementBelongsTo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $entitlementBelongsTo
     * @return $this
     */
    public function setEntitlementBelongsTo($entitlementBelongsTo)
    {
        $this->entitlementBelongsTo = $entitlementBelongsTo;
        return $this;
    }
}
