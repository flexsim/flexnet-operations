<?php

namespace Flexsim\FlexnetOperations\Type;

class FulfillmentPKType extends FlexnetType
{
    /**
     * @var string
     */
    protected $fulfillmentId;

    /**
     * Constructor
     *
     * @param string $fulfillmentId
     */
    public function __construct(string $fulfillmentId)
    {
        $this->fulfillmentId = $fulfillmentId;
    }

    /**
     * create a new instance of this class
     *
     * @param string $fulfillmentId
     */
    public static function create(string $fulfillmentId)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getFulfillmentId()
    {
        return $this->fulfillmentId;
    }

    /**
     * @param string $fulfillmentId
     * @return $this
     */
    public function setFulfillmentId($fulfillmentId)
    {
        $this->fulfillmentId = $fulfillmentId;

        return $this;
    }
}
