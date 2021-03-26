<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class StatusResponse implements ResultInterface
{

    /**
     * @var string
     */
    private $statusCorelation;

    /**
     * @var string
     */
    private $statusCode;

    /**
     * @var string
     */
    private $statusMessage;

    /**
     * Constructor
     *
     * @var string $statusCorelation
     * @var string $statusCode
     * @var string $statusMessage
     */
    public function __construct(string $statusCorelation = null, string $statusCode = null, string $statusMessage = null)
    {
        $this->statusCorelation = $statusCorelation;
        $this->statusCode = $statusCode;
        $this->statusMessage = $statusMessage;
    }

    /**
     * create a new instance of this class
     *
     * @var string $statusCorelation
     * @var string $statusCode
     * @var string $statusMessage
     */
    public static function create(string $statusCorelation = null, string $statusCode = null, string $statusMessage = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getStatusCorelation()
    {
        return $this->statusCorelation;
    }

    /**
     * @param string $statusCorelation
     * @return $this
     */
    public function setStatusCorelation($statusCorelation)
    {
        $this->statusCorelation = $statusCorelation;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param string $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->statusMessage;
    }

    /**
     * @param string $statusMessage
     * @return $this
     */
    public function setStatusMessage($statusMessage)
    {
        $this->statusMessage = $statusMessage;
        return $this;
    }


}

