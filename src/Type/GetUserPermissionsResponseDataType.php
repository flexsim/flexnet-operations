<?php

namespace Flexsim\FlexnetOperations\Type;

class GetUserPermissionsResponseDataType
{

    /**
     * @var string
     */
    private $userName;

    /**
     * @var string
     */
    private $accountType;

    /**
     * @var string
     */
    private $orgType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PermissionListType
     */
    private $permissions;

    /**
     * Constructor
     *
     * @var string $userName
     * @var string $accountType this method is backwards compatible so you may also pass $orgType
     * @var \Flexsim\FlexnetOperations\Type\PermissionListType $permissions
     */
    public function __construct(string $userName, string $accountType, \Flexsim\FlexnetOperations\Type\PermissionListType $permissions)
    {
        $this->userName = $userName;
        $this->accountType = $accountType;
        $this->orgType = $accountType;
        $this->permissions = $permissions;
    }

    /**
     * create a new instance of this class
     *
     * @var string $userName
     * @var string $accountType this method is backwards compatible so you may also pass $orgType
     * @var \Flexsim\FlexnetOperations\Type\PermissionListType $permissions
     */
    public static function create(string $userName, string $accountType, \Flexsim\FlexnetOperations\Type\PermissionListType $permissions)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     * @return $this
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrgType()
    {
        return $this->orgType;
    }

    /**
     * @param string $orgType
     * @return $this
     */
    public function setOrgType($orgType)
    {
        $this->orgType = $orgType;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PermissionListType
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PermissionListType $permissions
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
        return $this;
    }
}
