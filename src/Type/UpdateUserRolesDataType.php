<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateUserRolesDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    protected $user;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserAccountRolesDataType
     */
    protected $accountRoles;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserRolesOrganizationDataType
     */
    protected $orgRoles;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\UserIdentifierType $user
     * @param \Flexsim\FlexnetOperations\Type\UpdateUserAccountRolesDataType|\Flexsim\FlexnetOperations\Type\UpdateUserRolesOrganizationDataType $accountRoles this method is backwards compatible so you may also pass $orgRoles
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UserIdentifierType $user, $accountRoles)
    {
        $this->user = $user;
        $this->accountRoles = $accountRoles;
        $this->orgRoles = $accountRoles;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\UserIdentifierType $user
     * @param \Flexsim\FlexnetOperations\Type\UpdateUserAccountRolesDataType|\Flexsim\FlexnetOperations\Type\UpdateUserRolesOrganizationDataType $accountRoles this method is backwards compatible so you may also pass $orgRoles
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UserIdentifierType $user, $accountRoles)
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

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateUserAccountRolesDataType
     */
    public function getAccountRoles()
    {
        return $this->accountRoles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateUserAccountRolesDataType $accountRoles
     * @return $this
     */
    public function setAccountRoles($accountRoles)
    {
        $this->accountRoles = $accountRoles;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateUserRolesOrganizationDataType
     */
    public function getOrgRoles()
    {
        return $this->orgRoles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateUserRolesOrganizationDataType $orgRoles
     * @return $this
     */
    public function setOrgRoles($orgRoles)
    {
        $this->orgRoles = $orgRoles;
        return $this;
    }
}
