<?php

namespace Flexsim\FlexnetOperations\Type;

class GetMatchingBulkEntsResponseListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\MatchingBulkEntDataType|array
     */
    protected $matchingBulkEnt;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\MatchingBulkEntDataType|array  $matchingBulkEnt
     */
    public function __construct($matchingBulkEnt)
    {
        $this->matchingBulkEnt = $matchingBulkEnt;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\MatchingBulkEntDataType|array  $matchingBulkEnt
     */
    public static function create($matchingBulkEnt)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\MatchingBulkEntDataType|array
     */
    public function getMatchingBulkEnt()
    {
        return $this->matchingBulkEnt;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\MatchingBulkEntDataType|array  $matchingBulkEnt
     * @return $this
     */
    public function setMatchingBulkEnt($matchingBulkEnt)
    {
        $this->matchingBulkEnt = $matchingBulkEnt;

        return $this;
    }
}
