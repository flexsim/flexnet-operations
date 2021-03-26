<?php

namespace Flexsim\FlexnetOperations\Type;

class WebRegKeyDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AddWebRegKeyDataType
     */
    private $webRegKeyData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\AddWebRegKeyDataType $webRegKeyData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\AddWebRegKeyDataType $webRegKeyData)
    {
        $this->webRegKeyData = $webRegKeyData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\AddWebRegKeyDataType $webRegKeyData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\AddWebRegKeyDataType $webRegKeyData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AddWebRegKeyDataType
     */
    public function getWebRegKeyData()
    {
        return $this->webRegKeyData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AddWebRegKeyDataType $webRegKeyData
     * @return $this
     */
    public function setWebRegKeyData($webRegKeyData)
    {
        $this->webRegKeyData = $webRegKeyData;
        return $this;
    }


}

