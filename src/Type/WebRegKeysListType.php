<?php

namespace Flexsim\FlexnetOperations\Type;

class WebRegKeysListType
{

    /**
     * @var string
     */
    private $webRegKey;

    /**
     * Constructor
     *
     * @var string|array $webRegKey
     */
    public function __construct($webRegKey = null)
    {
        $this->webRegKey = $webRegKey;
    }

    /**
     * create a new instance of this class
     *
     * @var string|array $webRegKey
     */
    public static function create($webRegKey = null)
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

