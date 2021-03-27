<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteDomainUserRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DomainUserIdentifierType
     */
    private $user;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DomainUserIdentifierType $user
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DomainUserIdentifierType $user)
    {
        $this->user = $user;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\DomainUserIdentifierType $user
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DomainUserIdentifierType $user)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DomainUserIdentifierType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DomainUserIdentifierType $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }


}

