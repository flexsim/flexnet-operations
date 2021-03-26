<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteWebRegKeyRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\WebRegKeysListType
     */
    private $webRegKeyList;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\WebRegKeysListType $webRegKeyList
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\WebRegKeysListType $webRegKeyList)
    {
        $this->webRegKeyList = $webRegKeyList;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\WebRegKeysListType $webRegKeyList
     */
    public static function create(\Flexsim\FlexnetOperations\Type\WebRegKeysListType $webRegKeyList)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\WebRegKeysListType
     */
    public function getWebRegKeyList()
    {
        return $this->webRegKeyList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\WebRegKeysListType $webRegKeyList
     * @return $this
     */
    public function setWebRegKeyList($webRegKeyList)
    {
        $this->webRegKeyList = $webRegKeyList;
        return $this;
    }


}

