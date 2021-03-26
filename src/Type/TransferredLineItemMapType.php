<?php

namespace Flexsim\FlexnetOperations\Type;

class TransferredLineItemMapType
{

    /**
     * @var string
     */
    private $activationId;

    /**
     * @var string
     */
    private $transferredFromId;

    /**
     * Constructor
     *
     * @var string $activationId
     * @var string $transferredFromId
     */
    public function __construct(string $activationId, string $transferredFromId = null)
    {
        $this->activationId = $activationId;
        $this->transferredFromId = $transferredFromId;
    }

    /**
     * create a new instance of this class
     *
     * @var string $activationId
     * @var string $transferredFromId
     */
    public static function create(string $activationId, string $transferredFromId = null)
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
    public function getTransferredFromId()
    {
        return $this->transferredFromId;
    }

    /**
     * @param string $transferredFromId
     * @return $this
     */
    public function setTransferredFromId($transferredFromId)
    {
        $this->transferredFromId = $transferredFromId;
        return $this;
    }


}

