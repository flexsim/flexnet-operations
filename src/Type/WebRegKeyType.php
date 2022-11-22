<?php

namespace Flexsim\FlexnetOperations\Type;

class WebRegKeyType extends FlexnetType
{
    /**
     * @var string
     */
    protected $webRegKey;

    /**
     * Constructor
     *
     * @param  string  $webRegKey
     */
    public function __construct(string $webRegKey)
    {
        $this->webRegKey = $webRegKey;
    }

    /**
     * create a new instance of this class
     *
     * @param  string  $webRegKey
     */
    public static function create(string $webRegKey)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getWebRegKey()
    {
        return $this->webRegKey;
    }

    /**
     * @param  string  $webRegKey
     * @return $this
     */
    public function setWebRegKey($webRegKey)
    {
        $this->webRegKey = $webRegKey;

        return $this;
    }
}
