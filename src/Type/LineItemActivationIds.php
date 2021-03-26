<?php

namespace Flexsim\FlexnetOperations\Type;

class LineItemActivationIds
{

    /**
     * @var string
     */
    private $lineItemActivationId;

    /**
     * Constructor
     *
     * @var string $lineItemActivationId
     */
    public function __construct(string $lineItemActivationId)
    {
        $this->lineItemActivationId = $lineItemActivationId;
    }

    /**
     * create a new instance of this class
     *
     * @var string $lineItemActivationId
     */
    public static function create(string $lineItemActivationId)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getLineItemActivationId()
    {
        return $this->lineItemActivationId;
    }

    /**
     * @param string $lineItemActivationId
     * @return $this
     */
    public function setLineItemActivationId($lineItemActivationId)
    {
        $this->lineItemActivationId = $lineItemActivationId;
        return $this;
    }


}

