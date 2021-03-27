<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteUserRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ForceDeleteUserIdentifierType|\Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    private $user;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ForceDeleteUserIdentifierType|\Flexsim\FlexnetOperations\Type\UserIdentifierType $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ForceDeleteUserIdentifierType|\Flexsim\FlexnetOperations\Type\UserIdentifierType $user
     */
    public static function create($user)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ForceDeleteUserIdentifierType|\Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ForceDeleteUserIdentifierType|\Flexsim\FlexnetOperations\Type\UserIdentifierType $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }
}
