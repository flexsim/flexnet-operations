<?php

namespace Flexsim\FlexnetOperations\Type;

class GetMatchingBulkEntsResponseListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\MatchingBulkEntDataType
     */
    private $matchingBulkEnt;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\MatchingBulkEntDataType $matchingBulkEnt
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\MatchingBulkEntDataType $matchingBulkEnt)
    {
        $this->matchingBulkEnt = $matchingBulkEnt;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\MatchingBulkEntDataType $matchingBulkEnt
     */
    public static function create(\Flexsim\FlexnetOperations\Type\MatchingBulkEntDataType $matchingBulkEnt)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\MatchingBulkEntDataType
     */
    public function getMatchingBulkEnt()
    {
        return $this->matchingBulkEnt;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\MatchingBulkEntDataType $matchingBulkEnt
     * @return $this
     */
    public function setMatchingBulkEnt($matchingBulkEnt)
    {
        $this->matchingBulkEnt = $matchingBulkEnt;
        return $this;
    }


}

