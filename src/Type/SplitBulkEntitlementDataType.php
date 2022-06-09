<?php

namespace Flexsim\FlexnetOperations\Type;

class SplitBulkEntitlementDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    protected $bulkEntIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    protected $newBulkEntIdentifier;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $bulkEntIdentifier
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $newBulkEntIdentifier
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $bulkEntIdentifier, \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $newBulkEntIdentifier = null)
    {
        $this->bulkEntIdentifier = $bulkEntIdentifier;
        $this->newBulkEntIdentifier = $newBulkEntIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $bulkEntIdentifier
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $newBulkEntIdentifier
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $bulkEntIdentifier, \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $newBulkEntIdentifier = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    public function getBulkEntIdentifier()
    {
        return $this->bulkEntIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $bulkEntIdentifier
     * @return $this
     */
    public function setBulkEntIdentifier($bulkEntIdentifier)
    {
        $this->bulkEntIdentifier = $bulkEntIdentifier;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    public function getNewBulkEntIdentifier()
    {
        return $this->newBulkEntIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $newBulkEntIdentifier
     * @return $this
     */
    public function setNewBulkEntIdentifier($newBulkEntIdentifier)
    {
        $this->newBulkEntIdentifier = $newBulkEntIdentifier;

        return $this;
    }
}
