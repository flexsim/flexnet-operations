<?php

namespace Flexsim\FlexnetOperations\Type;

class WebRegKeysListType extends FlexnetType
{

    /**
     * @var string|array
     */
    protected $webRegKey;

    /**
     * Constructor
     *
     * @var string|array $webRegKey
     */
    public function __construct($webRegKey)
    {
        $this->webRegKey = $webRegKey;
    }

    /**
     * create a new instance of this class
     *
     * @var string|array $webRegKey
     */
    public static function create($webRegKey)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string|array
     */
    public function getWebRegKey()
    {
        return $this->webRegKey;
    }

    /**
     * @param string|array $webRegKey
     * @return $this
     */
    public function setWebRegKey($webRegKey)
    {
        $this->webRegKey = $webRegKey;
        return $this;
    }
}
