<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class StatusResponse extends FlexnetType implements ResultInterface
{
    /**
     * @var string
     */
    protected $statusCorelation;

    /**
     * @var string
     */
    protected $statusCode;

    /**
     * @var string
     */
    protected $statusMessage;

    /**
     * Constructor
     *
     * @param  string  $statusCorelation
     * @param  string  $statusCode
     * @param  string  $statusMessage
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
     * @param  string  $statusCorelation
     * @param  string  $statusCode
     * @param  string  $statusMessage
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
     * @param  string  $statusCorelation
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
     * @param  string  $statusCode
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
     * @param  string  $statusMessage
     * @return $this
     */
    public function setStatusMessage($statusMessage)
    {
        $this->statusMessage = $statusMessage;

        return $this;
    }
}
