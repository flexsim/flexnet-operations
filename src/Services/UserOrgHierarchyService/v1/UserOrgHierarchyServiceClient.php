<?php

namespace Flexsim\FlexnetOperations\Services\UserOrgHierarchyService\v1;

use Flexsim\FlexnetOperations\Type;
use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class UserOrgHierarchyServiceClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param  RequestInterface|Type\CreateOrgRequestType  $createOrgRequest
     * @return ResultInterface|Type\CreateOrgResponseType
     *
     * @throws SoapException
     */
    public function createOrganization(\Flexsim\FlexnetOperations\Type\CreateOrgRequestType $createOrgRequest): \Flexsim\FlexnetOperations\Type\CreateOrgResponseType
    {
        return ($this->caller)('createOrganization', $createOrgRequest);
    }

    /**
     * @param  RequestInterface|Type\LinkOrganizationsRequestType  $linkOrganizationsRequest
     * @return ResultInterface|Type\LinkOrganizationsResponseType
     *
     * @throws SoapException
     */
    public function linkOrganizations(\Flexsim\FlexnetOperations\Type\LinkOrganizationsRequestType $linkOrganizationsRequest): \Flexsim\FlexnetOperations\Type\LinkOrganizationsResponseType
    {
        return ($this->caller)('linkOrganizations', $linkOrganizationsRequest);
    }

    /**
     * @param  RequestInterface|Type\UpdateOrganizationRequestType  $updateOrganizationRequest
     * @return ResultInterface|Type\UpdateOrganizationResponseType
     *
     * @throws SoapException
     */
    public function updateOrganization(\Flexsim\FlexnetOperations\Type\UpdateOrganizationRequestType $updateOrganizationRequest): \Flexsim\FlexnetOperations\Type\UpdateOrganizationResponseType
    {
        return ($this->caller)('updateOrganization', $updateOrganizationRequest);
    }

    /**
     * @param  RequestInterface|Type\DeleteOrganizationRequestType  $deleteOrganizationRequest
     * @return ResultInterface|Type\DeleteOrganizationResponseType
     *
     * @throws SoapException
     */
    public function deleteOrganization(\Flexsim\FlexnetOperations\Type\DeleteOrganizationRequestType $deleteOrganizationRequest): \Flexsim\FlexnetOperations\Type\DeleteOrganizationResponseType
    {
        return ($this->caller)('deleteOrganization', $deleteOrganizationRequest);
    }

    /**
     * @param  RequestInterface|Type\GetOrganizationsQueryRequestType  $getOrganizationsQueryRequest
     * @return ResultInterface|Type\GetOrganizationsQueryResponseType
     *
     * @throws SoapException
     */
    public function getOrganizationsQuery(\Flexsim\FlexnetOperations\Type\GetOrganizationsQueryRequestType $getOrganizationsQueryRequest): \Flexsim\FlexnetOperations\Type\GetOrganizationsQueryResponseType
    {
        return ($this->caller)('getOrganizationsQuery', $getOrganizationsQueryRequest);
    }

    /**
     * @param  RequestInterface|Type\GetOrganizationCountRequestType  $getOrganizationCountRequest
     * @return ResultInterface|Type\GetOrganizationCountResponseType
     *
     * @throws SoapException
     */
    public function getOrganizationCount(\Flexsim\FlexnetOperations\Type\GetOrganizationCountRequestType $getOrganizationCountRequest): \Flexsim\FlexnetOperations\Type\GetOrganizationCountResponseType
    {
        return ($this->caller)('getOrganizationCount', $getOrganizationCountRequest);
    }

    /**
     * @param  RequestInterface|Type\GetParentOrganizationsRequestType  $getParentOrganizationsRequest
     * @return ResultInterface|Type\GetParentOrganizationsResponseType
     *
     * @throws SoapException
     */
    public function getParentOrganizations(\Flexsim\FlexnetOperations\Type\GetParentOrganizationsRequestType $getParentOrganizationsRequest): \Flexsim\FlexnetOperations\Type\GetParentOrganizationsResponseType
    {
        return ($this->caller)('getParentOrganizations', $getParentOrganizationsRequest);
    }

    /**
     * @param  RequestInterface|Type\GetSubOrganizationsRequestType  $getSubOrganizationsRequest
     * @return ResultInterface|Type\GetSubOrganizationsResponseType
     *
     * @throws SoapException
     */
    public function getSubOrganizations(\Flexsim\FlexnetOperations\Type\GetSubOrganizationsRequestType $getSubOrganizationsRequest): \Flexsim\FlexnetOperations\Type\GetSubOrganizationsResponseType
    {
        return ($this->caller)('getSubOrganizations', $getSubOrganizationsRequest);
    }

    /**
     * @param  RequestInterface|Type\GetUsersQueryRequestType  $getUsersQueryRequest
     * @return ResultInterface|Type\GetUsersQueryResponseType
     *
     * @throws SoapException
     */
    public function getUsersQuery(\Flexsim\FlexnetOperations\Type\GetUsersQueryRequestType $getUsersQueryRequest): \Flexsim\FlexnetOperations\Type\GetUsersQueryResponseType
    {
        return ($this->caller)('getUsersQuery', $getUsersQueryRequest);
    }

    /**
     * @param  RequestInterface|Type\GetUserCountRequestType  $getUserCountRequest
     * @return ResultInterface|Type\GetUserCountResponseType
     *
     * @throws SoapException
     */
    public function getUserCount(\Flexsim\FlexnetOperations\Type\GetUserCountRequestType $getUserCountRequest): \Flexsim\FlexnetOperations\Type\GetUserCountResponseType
    {
        return ($this->caller)('getUserCount', $getUserCountRequest);
    }

    /**
     * @param  RequestInterface|Type\CreateUserRequestType  $createUserRequest
     * @return ResultInterface|Type\CreateUserResponseType
     *
     * @throws SoapException
     */
    public function createUser(\Flexsim\FlexnetOperations\Type\CreateUserRequestType $createUserRequest): \Flexsim\FlexnetOperations\Type\CreateUserResponseType
    {
        return ($this->caller)('createUser', $createUserRequest);
    }

    /**
     * @param  RequestInterface|Type\UpdateUserRequestType  $updateUserRequest
     * @return ResultInterface|Type\UpdateUserResponseType
     *
     * @throws SoapException
     */
    public function updateUser(\Flexsim\FlexnetOperations\Type\UpdateUserRequestType $updateUserRequest): \Flexsim\FlexnetOperations\Type\UpdateUserResponseType
    {
        return ($this->caller)('updateUser', $updateUserRequest);
    }

    /**
     * @param  RequestInterface|Type\UpdateUserRolesRequestType  $updateUserRolesRequest
     * @return ResultInterface|Type\UpdateUserRolesResponseType
     *
     * @throws SoapException
     */
    public function updateUserRoles(\Flexsim\FlexnetOperations\Type\UpdateUserRolesRequestType $updateUserRolesRequest): \Flexsim\FlexnetOperations\Type\UpdateUserRolesResponseType
    {
        return ($this->caller)('updateUserRoles', $updateUserRolesRequest);
    }

    /**
     * @param  RequestInterface|Type\DeleteUserRequestType  $deleteUserRequest
     * @return ResultInterface|Type\DeleteUserResponseType
     *
     * @throws SoapException
     */
    public function deleteUser(\Flexsim\FlexnetOperations\Type\DeleteUserRequestType $deleteUserRequest): \Flexsim\FlexnetOperations\Type\DeleteUserResponseType
    {
        return ($this->caller)('deleteUser', $deleteUserRequest);
    }

    /**
     * @param  RequestInterface|Type\RelateOrganizationsRequestType  $relateOrganizationsRequest
     * @return ResultInterface|Type\RelateOrganizationsResponseType
     *
     * @throws SoapException
     */
    public function relateOrganizations(\Flexsim\FlexnetOperations\Type\RelateOrganizationsRequestType $relateOrganizationsRequest): \Flexsim\FlexnetOperations\Type\RelateOrganizationsResponseType
    {
        return ($this->caller)('relateOrganizations', $relateOrganizationsRequest);
    }

    /**
     * @param  RequestInterface|Type\GetRelatedOrganizationsRequestType  $getRelatedOrganizationsRequest
     * @return ResultInterface|Type\GetRelatedOrganizationsResponseType
     *
     * @throws SoapException
     */
    public function getRelatedOrganizations(\Flexsim\FlexnetOperations\Type\GetRelatedOrganizationsRequestType $getRelatedOrganizationsRequest): \Flexsim\FlexnetOperations\Type\GetRelatedOrganizationsResponseType
    {
        return ($this->caller)('getRelatedOrganizations', $getRelatedOrganizationsRequest);
    }

    /**
     * @param  RequestInterface|Type\GetUserPermissionsRequestType  $getUserPermissionsRequest
     * @return ResultInterface|Type\GetUserPermissionsResponseType
     *
     * @throws SoapException
     */
    public function getUserPermissions(\Flexsim\FlexnetOperations\Type\GetUserPermissionsRequestType $getUserPermissionsRequest): \Flexsim\FlexnetOperations\Type\GetUserPermissionsResponseType
    {
        return ($this->caller)('getUserPermissions', $getUserPermissionsRequest);
    }
}
