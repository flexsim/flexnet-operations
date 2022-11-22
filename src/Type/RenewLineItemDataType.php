<?php

namespace Flexsim\FlexnetOperations\Type;

class RenewLineItemDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    protected $parentLineItemIdentifier;

    /**
     * @var \Flexsim\FlexnetOperations\Type\RenewParametersDataType
     */
    protected $renewParameters;

    /**
     * @var bool
     */
    protected $isFull;

    /**
     * @var bool
     */
    protected $allowActivationsOnParent;

    /**
     * @var bool
     */
    protected $autoDeploy;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType  $parentLineItemIdentifier
     * @param  \Flexsim\FlexnetOperations\Type\RenewParametersDataType  $renewParameters
     * @param  bool  $isFull
     * @param  bool  $allowActivationsOnParent
     * @param  bool  $autoDeploy
     */
    public function __construct(EntitlementLineItemIdentifierType $parentLineItemIdentifier, RenewParametersDataType $renewParameters, bool $isFull = null, bool $allowActivationsOnParent = null, bool $autoDeploy = null)
    {
        $this->parentLineItemIdentifier = $parentLineItemIdentifier;
        $this->renewParameters = $renewParameters;
        $this->isFull = $isFull;
        $this->allowActivationsOnParent = $allowActivationsOnParent;
        $this->autoDeploy = $autoDeploy;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType  $parentLineItemIdentifier
     * @param  \Flexsim\FlexnetOperations\Type\RenewParametersDataType  $renewParameters
     * @param  bool  $isFull
     * @param  bool  $allowActivationsOnParent
     * @param  bool  $autoDeploy
     */
    public static function create(EntitlementLineItemIdentifierType $parentLineItemIdentifier, RenewParametersDataType $renewParameters, bool $isFull = null, bool $allowActivationsOnParent = null, bool $autoDeploy = null)
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
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType  $parentLineItemIdentifier
     * @return $this
     */
    public function setParentLineItemIdentifier($parentLineItemIdentifier)
    {
        $this->parentLineItemIdentifier = $parentLineItemIdentifier;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\RenewParametersDataType
     */
    public function getRenewParameters()
    {
        return $this->renewParameters;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\RenewParametersDataType  $renewParameters
     * @return $this
     */
    public function setRenewParameters($renewParameters)
    {
        $this->renewParameters = $renewParameters;

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
     * @param  bool  $isFull
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
     * @param  bool  $allowActivationsOnParent
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
     * @param  bool  $autoDeploy
     * @return $this
     */
    public function setAutoDeploy($autoDeploy)
    {
        $this->autoDeploy = $autoDeploy;

        return $this;
    }
}
