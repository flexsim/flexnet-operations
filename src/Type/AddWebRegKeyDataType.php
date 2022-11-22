<?php

namespace Flexsim\FlexnetOperations\Type;

class AddWebRegKeyDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    protected $bulkEntitlement;

    /**
     * @var \Flexsim\FlexnetOperations\Type\WebRegKeyDataType
     */
    protected $webRegKeys;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType  $bulkEntitlement
     * @param  \Flexsim\FlexnetOperations\Type\WebRegKeyDataType  $webRegKeys
     */
    public function __construct(EntitlementIdentifierType $bulkEntitlement, WebRegKeyDataType $webRegKeys)
    {
        $this->bulkEntitlement = $bulkEntitlement;
        $this->webRegKeys = $webRegKeys;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType  $bulkEntitlement
     * @param  \Flexsim\FlexnetOperations\Type\WebRegKeyDataType  $webRegKeys
     */
    public static function create(EntitlementIdentifierType $bulkEntitlement, WebRegKeyDataType $webRegKeys)
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
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType  $bulkEntitlement
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
     * @param  \Flexsim\FlexnetOperations\Type\WebRegKeyDataType  $webRegKeys
     * @return $this
     */
    public function setWebRegKeys($webRegKeys)
    {
        $this->webRegKeys = $webRegKeys;

        return $this;
    }
}
