<?php

namespace Flexsim\FlexnetOperations\Type;

class LineItemLifeCycleDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    private $parentLineItemIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateEntitlementLineItemDataType
     */
    private $lineItem;

    /**
     * @var bool
     */
    private $isFull;

    /**
     * @var bool
     */
    private $allowActivationsOnParent;

    /**
     * @var bool
     */
    private $autoDeploy;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItemIdentifier
     * @var \Flexsim\FlexnetOperations\Type\CreateEntitlementLineItemDataType $lineItem
     * @var bool $isFull
     * @var bool $allowActivationsOnParent
     * @var bool $autoDeploy
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItemIdentifier, \Flexsim\FlexnetOperations\Type\CreateEntitlementLineItemDataType $lineItem, bool $isFull = null, bool $allowActivationsOnParent = null, bool $autoDeploy = null)
    {
        $this->parentLineItemIdentifier = $parentLineItemIdentifier;
        $this->lineItem = $lineItem;
        $this->isFull = $isFull;
        $this->allowActivationsOnParent = $allowActivationsOnParent;
        $this->autoDeploy = $autoDeploy;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItemIdentifier
     * @var \Flexsim\FlexnetOperations\Type\CreateEntitlementLineItemDataType $lineItem
     * @var bool $isFull
     * @var bool $allowActivationsOnParent
     * @var bool $autoDeploy
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItemIdentifier, \Flexsim\FlexnetOperations\Type\CreateEntitlementLineItemDataType $lineItem, bool $isFull = null, bool $allowActivationsOnParent = null, bool $autoDeploy = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    public function getParentLineItemIdentifier()
    {
        return $this->parentLineItemIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItemIdentifier
     * @return $this
     */
    public function setParentLineItemIdentifier($parentLineItemIdentifier)
    {
        $this->parentLineItemIdentifier = $parentLineItemIdentifier;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateEntitlementLineItemDataType
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateEntitlementLineItemDataType $lineItem
     * @return $this
     */
    public function setLineItem($lineItem)
    {
        $this->lineItem = $lineItem;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsFull()
    {
        return $this->isFull;
    }

    /**
     * @param bool $isFull
     * @return $this
     */
    public function setIsFull($isFull)
    {
        $this->isFull = $isFull;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowActivationsOnParent()
    {
        return $this->allowActivationsOnParent;
    }

    /**
     * @param bool $allowActivationsOnParent
     * @return $this
     */
    public function setAllowActivationsOnParent($allowActivationsOnParent)
    {
        $this->allowActivationsOnParent = $allowActivationsOnParent;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAutoDeploy()
    {
        return $this->autoDeploy;
    }

    /**
     * @param bool $autoDeploy
     * @return $this
     */
    public function setAutoDeploy($autoDeploy)
    {
        $this->autoDeploy = $autoDeploy;
        return $this;
    }


}

