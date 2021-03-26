<?php

namespace Flexsim\FlexnetOperations\Type;

class AddWebRegKeyDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    private $bulkEntitlement;

    /**
     * @var \Flexsim\FlexnetOperations\Type\WebRegKeyDataType
     */
    private $webRegKeys;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $bulkEntitlement
     * @var \Flexsim\FlexnetOperations\Type\WebRegKeyDataType $webRegKeys
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $bulkEntitlement, \Flexsim\FlexnetOperations\Type\WebRegKeyDataType $webRegKeys)
    {
        $this->bulkEntitlement = $bulkEntitlement;
        $this->webRegKeys = $webRegKeys;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $bulkEntitlement
     * @var \Flexsim\FlexnetOperations\Type\WebRegKeyDataType $webRegKeys
     */
    public static function create(\Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $bulkEntitlement, \Flexsim\FlexnetOperations\Type\WebRegKeyDataType $webRegKeys)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    public function getBulkEntitlement()
    {
        return $this->bulkEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType $bulkEntitlement
     * @return $this
     */
    public function setBulkEntitlement($bulkEntitlement)
    {
        $this->bulkEntitlement = $bulkEntitlement;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\WebRegKeyDataType
     */
    public function getWebRegKeys()
    {
        return $this->webRegKeys;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\WebRegKeyDataType $webRegKeys
     * @return $this
     */
    public function setWebRegKeys($webRegKeys)
    {
        $this->webRegKeys = $webRegKeys;
        return $this;
    }


}

