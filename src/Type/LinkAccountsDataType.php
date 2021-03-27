<?php

namespace Flexsim\FlexnetOperations\Type;

class LinkAccountsDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    private $parentAcct;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    private $subAcct;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType $parentAcct
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType $subAcct
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\AccountIdentifierType $parentAcct, \Flexsim\FlexnetOperations\Type\AccountIdentifierType $subAcct)
    {
        $this->parentAcct = $parentAcct;
        $this->subAcct = $subAcct;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType $parentAcct
     * @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType $subAcct
     */
    public static function create(\Flexsim\FlexnetOperations\Type\AccountIdentifierType $parentAcct, \Flexsim\FlexnetOperations\Type\AccountIdentifierType $subAcct)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    public function getParentAcct()
    {
        return $this->parentAcct;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierType $parentAcct
     * @return $this
     */
    public function setParentAcct($parentAcct)
    {
        $this->parentAcct = $parentAcct;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AccountIdentifierType
     */
    public function getSubAcct()
    {
        return $this->subAcct;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AccountIdentifierType $subAcct
     * @return $this
     */
    public function setSubAcct($subAcct)
    {
        $this->subAcct = $subAcct;
        return $this;
    }


}

