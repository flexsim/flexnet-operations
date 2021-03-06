<?php

namespace Flexsim\FlexnetOperations\Type;

class GetUsersForProductCategoryResponseDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    protected $user;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\UserIdentifierType|array $user
     */
    public function __construct($user = null)
    {
        $this->user = $user;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\UserIdentifierType|array $user
     */
    public static function create($user = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserIdentifierType $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }
}
