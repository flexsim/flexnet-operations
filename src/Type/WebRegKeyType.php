<?php

namespace Flexsim\FlexnetOperations\Type;

class WebRegKeyType
{

    /**
     * @var string
     */
    private $webRegKey;

    /**
     * Constructor
     *
     * @var string $webRegKey
     */
    public function __construct(string $webRegKey)
    {
        $this->webRegKey = $webRegKey;
    }

    /**
     * create a new instance of this class
     *
     * @var string $webRegKey
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
     * @param string $webRegKey
     * @return $this
     */
    public function setWebRegKey($webRegKey)
    {
        $this->webRegKey = $webRegKey;
        return $this;
    }


}

