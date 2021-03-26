<?php

namespace Flexsim\FlexnetOperations\Type;

class GetMatchingLineItemsResponseListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\MatchingLineItemDataType
     */
    private $matchingLineItem;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\MatchingLineItemDataType $matchingLineItem
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\MatchingLineItemDataType $matchingLineItem)
    {
        $this->matchingLineItem = $matchingLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\MatchingLineItemDataType $matchingLineItem
     */
    public static function create(\Flexsim\FlexnetOperations\Type\MatchingLineItemDataType $matchingLineItem)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\MatchingLineItemDataType
     */
    public function getMatchingLineItem()
    {
        return $this->matchingLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\MatchingLineItemDataType $matchingLineItem
     * @return $this
     */
    public function setMatchingLineItem($matchingLineItem)
    {
        $this->matchingLineItem = $matchingLineItem;
        return $this;
    }


}

