<?php

namespace Flexsim\FlexnetOperations\Type;

class WebRegKeyDataListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AddWebRegKeyDataType|array 
     */
    protected $webRegKeyData;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\AddWebRegKeyDataType|array $webRegKeyData
     */
    public function __construct($webRegKeyData)
    {
        $this->webRegKeyData = $webRegKeyData;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\AddWebRegKeyDataType|array $webRegKeyData
     */
    public static function create($webRegKeyData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AddWebRegKeyDataType|array 
     */
    public function getWebRegKeyData()
    {
        return $this->webRegKeyData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AddWebRegKeyDataType|array $webRegKeyData
     * @return $this
     */
    public function setWebRegKeyData($webRegKeyData)
    {
        $this->webRegKeyData = $webRegKeyData;
        return $this;
    }
}
