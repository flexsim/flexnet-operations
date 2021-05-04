<?php

namespace Flexsim\FlexnetOperations\Type;

class WebRegKeysDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\WebRegKeyType|array 
     */
    private $webRegKeys;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\WebRegKeyType|array $webRegKeys
     */
    public function __construct($webRegKeys = null)
    {
        $this->webRegKeys = $webRegKeys;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\WebRegKeyType|array $webRegKeys
     */
    public static function create($webRegKeys = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\WebRegKeyType|array 
     */
    public function getWebRegKeys()
    {
        return $this->webRegKeys;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\WebRegKeyType|array $webRegKeys
     * @return $this
     */
    public function setWebRegKeys($webRegKeys)
    {
        $this->webRegKeys = $webRegKeys;
        return $this;
    }
}
