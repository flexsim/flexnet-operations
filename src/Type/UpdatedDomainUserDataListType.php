<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdatedDomainUserDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DomainUserIdentifierType
     */
    private $user;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DomainUserIdentifierType|array $user
     */
    public function __construct($user = null)
    {
        $this->user = $user;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\DomainUserIdentifierType|array $user
     */
    public static function create($user = null)
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

