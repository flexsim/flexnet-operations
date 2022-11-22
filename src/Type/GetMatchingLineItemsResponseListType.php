<?php

namespace Flexsim\FlexnetOperations\Type;

class GetMatchingLineItemsResponseListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\MatchingLineItemDataType|array
     */
    protected $matchingLineItem;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\MatchingLineItemDataType|array  $matchingLineItem
     */
    public function __construct($matchingLineItem)
    {
        $this->matchingLineItem = $matchingLineItem;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\MatchingLineItemDataType|array  $matchingLineItem
     */
    public static function create($matchingLineItem)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\MatchingLineItemDataType|array
     */
    public function getMatchingLineItem()
    {
        return $this->matchingLineItem;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\MatchingLineItemDataType|array  $matchingLineItem
     * @return $this
     */
    public function setMatchingLineItem($matchingLineItem)
    {
        $this->matchingLineItem = $matchingLineItem;

        return $this;
    }
}
