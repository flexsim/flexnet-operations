<?php

namespace Flexsim\FlexnetOperations\Type;

class WebRegKeysDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\WebRegKeyType
     */
    private $webRegKeys;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\WebRegKeyType $webRegKeys
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\WebRegKeyType $webRegKeys = null)
    {
        $this->webRegKeys = $webRegKeys;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\WebRegKeyType $webRegKeys
     */
    public static function create(\Flexsim\FlexnetOperations\Type\WebRegKeyType $webRegKeys = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\WebRegKeyType
     */
    public function getWebRegKeys()
    {
        return $this->webRegKeys;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\WebRegKeyType $webRegKeys
     * @return $this
     */
    public function setWebRegKeys($webRegKeys)
    {
        $this->webRegKeys = $webRegKeys;
        return $this;
    }


}

