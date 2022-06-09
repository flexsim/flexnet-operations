<?php

namespace Flexsim\FlexnetOperations\Type;

class TypeLineItem extends FlexnetType
{
    /**
     * @var string
     */
    protected $activationId;

    /**
     * @var string
     */
    protected $Reason;

    /**
     * @var string
     */
    protected $Count;

    /**
     * @var \Flexsim\FlexnetOperations\Type\Dictionary
     */
    protected $VendorDictionary;

    /**
     * Constructor
     *
     * @param string $activationId
     * @param string $Reason
     * @param string $Count
     * @param \Flexsim\FlexnetOperations\Type\Dictionary $VendorDictionary
     */
    public function __construct(string $activationId, string $Reason = null, string $Count = null, \Flexsim\FlexnetOperations\Type\Dictionary $VendorDictionary = null)
    {
        $this->activationId = $activationId;
        $this->Reason = $Reason;
        $this->Count = $Count;
        $this->VendorDictionary = $VendorDictionary;
    }

    /**
     * create a new instance of this class
     *
     * @param string $activationId
     * @param string $Reason
     * @param string $Count
     * @param \Flexsim\FlexnetOperations\Type\Dictionary $VendorDictionary
     */
    public static function create(string $activationId, string $Reason = null, string $Count = null, \Flexsim\FlexnetOperations\Type\Dictionary $VendorDictionary = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getActivationId()
    {
        return $this->activationId;
    }

    /**
     * @param string $activationId
     * @return $this
     */
    public function setActivationId($activationId)
    {
        $this->activationId = $activationId;

        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->Reason;
    }

    /**
     * @param string $Reason
     * @return $this
     */
    public function setReason($Reason)
    {
        $this->Reason = $Reason;

        return $this;
    }

    /**
     * @return string
     */
    public function getCount()
    {
        return $this->Count;
    }

    /**
     * @param string $Count
     * @return $this
     */
    public function setCount($Count)
    {
        $this->Count = $Count;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\Dictionary
     */
    public function getVendorDictionary()
    {
        return $this->VendorDictionary;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\Dictionary $VendorDictionary
     * @return $this
     */
    public function setVendorDictionary($VendorDictionary)
    {
        $this->VendorDictionary = $VendorDictionary;

        return $this;
    }
}
