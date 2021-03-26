<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedOnholdFulfillmentDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    private $fulfillmentIdentifier;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier, string $reason)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier, string $reason)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    public function getFulfillmentIdentifier()
    {
        return $this->fulfillmentIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @return $this
     */
    public function setFulfillmentIdentifier($fulfillmentIdentifier)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }


}

