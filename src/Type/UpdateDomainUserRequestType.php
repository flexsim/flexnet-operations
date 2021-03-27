<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateDomainUserRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateDomainUserDataType
     */
    private $user;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateDomainUserDataType $user
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateDomainUserDataType $user)
    {
        $this->user = $user;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateDomainUserDataType $user
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateDomainUserDataType $user)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateDomainUserDataType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateDomainUserDataType $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }


}

