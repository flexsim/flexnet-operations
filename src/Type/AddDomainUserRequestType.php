<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AddDomainUserRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AddDomainUserDataType
     */
    private $user;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\AddDomainUserDataType $user
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\AddDomainUserDataType $user)
    {
        $this->user = $user;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\AddDomainUserDataType $user
     */
    public static function create(\Flexsim\FlexnetOperations\Type\AddDomainUserDataType $user)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AddDomainUserDataType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AddDomainUserDataType $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }


}

