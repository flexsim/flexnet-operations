<?php

namespace Flexsim\FlexnetOperations\Type;

class GetUsersQueryResponseDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserDetailDataType
     */
    protected $user;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UserDetailDataType|array $user
     */
    public function __construct($user = null)
    {
        $this->user = $user;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UserDetailDataType|array $user
     */
    public static function create($user = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserDetailDataType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserDetailDataType $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }
}
