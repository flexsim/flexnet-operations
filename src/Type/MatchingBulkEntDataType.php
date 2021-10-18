<?php

namespace Flexsim\FlexnetOperations\Type;

class MatchingBulkEntDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    protected $matchingBulkEntIdentifier;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $matchingBulkEntIdentifier
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $matchingBulkEntIdentifier)
    {
        $this->matchingBulkEntIdentifier = $matchingBulkEntIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $matchingBulkEntIdentifier
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $matchingBulkEntIdentifier)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    public function getMatchingBulkEntIdentifier()
    {
        return $this->matchingBulkEntIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $matchingBulkEntIdentifier
     * @return $this
     */
    public function setMatchingBulkEntIdentifier($matchingBulkEntIdentifier)
    {
        $this->matchingBulkEntIdentifier = $matchingBulkEntIdentifier;
        return $this;
    }
}
