<?php

namespace Flexsim\FlexnetOperations\Type;

class RestoreServedClientDataType extends FlexnetType
{
    /**
     * @var string
     */
    protected $servedClientResponse;

    /**
     * Constructor
     *
     * @param  string|array  $servedClientResponse
     */
    public function __construct($servedClientResponse = null)
    {
        $this->servedClientResponse = $servedClientResponse;
    }

    /**
     * create a new instance of this class
     *
     * @param  string|array  $servedClientResponse
     */
    public static function create($servedClientResponse = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getServedClientResponse()
    {
        return $this->servedClientResponse;
    }

    /**
     * @param  string  $servedClientResponse
     * @return $this
     */
    public function setServedClientResponse($servedClientResponse)
    {
        $this->servedClientResponse = $servedClientResponse;

        return $this;
    }
}
