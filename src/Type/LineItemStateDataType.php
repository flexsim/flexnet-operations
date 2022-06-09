<?php

namespace Flexsim\FlexnetOperations\Type;

class LineItemStateDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    protected $lineItemIdentifier;

    /**
     * @var string
     */
    protected $stateToSet;

    /**
     * @var bool
     */
    protected $includeChildItems;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier
     * @param string $stateToSet
     * @param bool $includeChildItems
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, string $stateToSet, bool $includeChildItems = null)
    {
        $this->lineItemIdentifier = $lineItemIdentifier;
        $this->stateToSet = $stateToSet;
        $this->includeChildItems = $includeChildItems;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier
     * @param string $stateToSet
     * @param bool $includeChildItems
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $lineItemIdentifier, string $stateToSet, bool $includeChildItems = null)
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
     * @return string
     */
    public function getStateToSet()
    {
        return $this->stateToSet;
    }

    /**
     * @param string $stateToSet
     * @return $this
     */
    public function setStateToSet($stateToSet)
    {
        $this->stateToSet = $stateToSet;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeChildItems()
    {
        return $this->includeChildItems;
    }

    /**
     * @param bool $includeChildItems
     * @return $this
     */
    public function setIncludeChildItems($includeChildItems)
    {
        $this->includeChildItems = $includeChildItems;

        return $this;
    }
}
