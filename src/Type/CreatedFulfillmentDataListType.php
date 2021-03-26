<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatedFulfillmentDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreatedFulfillmentDataType
     */
    private $createdFulfillment;

    /**
     * @var \Flexsim\FlexnetOperations\Type\VerifiedFulfillmentDataType
     */
    private $verifiedFulfillment;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreatedFulfillmentDataType|array $createdFulfillment
     * @var \Flexsim\FlexnetOperations\Type\VerifiedFulfillmentDataType|array $verifiedFulfillment
     */
    public function __construct($createdFulfillment = null, $verifiedFulfillment = null)
    {
        $this->createdFulfillment = $createdFulfillment;
        $this->verifiedFulfillment = $verifiedFulfillment;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreatedFulfillmentDataType|array $createdFulfillment
     * @var \Flexsim\FlexnetOperations\Type\VerifiedFulfillmentDataType|array $verifiedFulfillment
     */
    public static function create($createdFulfillment = null, $verifiedFulfillment = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreatedFulfillmentDataType
     */
    public function getCreatedFulfillment()
    {
        return $this->createdFulfillment;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreatedFulfillmentDataType $createdFulfillment
     * @return $this
     */
    public function setCreatedFulfillment($createdFulfillment)
    {
        $this->createdFulfillment = $createdFulfillment;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\VerifiedFulfillmentDataType
     */
    public function getVerifiedFulfillment()
    {
        return $this->verifiedFulfillment;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\VerifiedFulfillmentDataType $verifiedFulfillment
     * @return $this
     */
    public function setVerifiedFulfillment($verifiedFulfillment)
    {
        $this->verifiedFulfillment = $verifiedFulfillment;
        return $this;
    }


}

