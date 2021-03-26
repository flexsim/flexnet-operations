<?php

namespace Flexsim\FlexnetOperations\Type;

class AddedEntitlementLineItemDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AddedEntitlementLineItemDataType
     */
    private $addedLineItems;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\AddedEntitlementLineItemDataType|array $addedLineItems
     */
    public function __construct($addedLineItems = null)
    {
        $this->addedLineItems = $addedLineItems;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\AddedEntitlementLineItemDataType|array $addedLineItems
     */
    public static function create($addedLineItems = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AddedEntitlementLineItemDataType
     */
    public function getAddedLineItems()
    {
        return $this->addedLineItems;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AddedEntitlementLineItemDataType $addedLineItems
     * @return $this
     */
    public function setAddedLineItems($addedLineItems)
    {
        $this->addedLineItems = $addedLineItems;
        return $this;
    }


}
