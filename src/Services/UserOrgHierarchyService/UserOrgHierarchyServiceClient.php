<?php

namespace Flexsim\FlexnetOperations\Services\UserOrgHierarchyService;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Flexsim\FlexnetOperations\Type;

class UserOrgHierarchyServiceClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\CreateOrgRequestType $createOrgRequest
     * @return ResultInterface|Type\CreateOrgResponseType
     * @throws SoapException
     */
    public function createOrganization(\Flexsim\FlexnetOperations\Type\CreateOrgRequestType $createOrgRequest) : \Flexsim\FlexnetOperations\Type\CreateOrgResponseType
    {
        return $this->call('createOrganization', $createOrgRequest);
    }

    /**
     * @param RequestInterface|Type\LinkOrganizationsRequestType $linkOrganizationsRequest
     * @return ResultInterface|Type\LinkOrganizationsResponseType
     * @throws SoapException
     */
    public function linkOrganizations(\Flexsim\FlexnetOperations\Type\LinkOrganizationsRequestType $linkOrganizationsRequest) : \Flexsim\FlexnetOperations\Type\LinkOrganizationsResponseType
    {
        return $this->call('linkOrganizations', $linkOrganizationsRequest);
    }

    /**
     * @param RequestInterface|Type\UpdateOrganizationRequestType $updateOrganizationRequest
     * @return ResultInterface|Type\UpdateOrganizationResponseType
     * @throws SoapException
     */
    public function updateOrganization(\Flexsim\FlexnetOperations\Type\UpdateOrganizationRequestType $updateOrganizationRequest) : \Flexsim\FlexnetOperations\Type\UpdateOrganizationResponseType
    {
        return $this->call('updateOrganization', $updateOrganizationRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteOrganizationRequestType $deleteOrganizationRequest
     * @return ResultInterface|Type\DeleteOrganizationResponseType
     * @throws SoapException
     */
    public function deleteOrganization(\Flexsim\FlexnetOperations\Type\DeleteOrganizationRequestType $deleteOrganizationRequest) : \Flexsim\FlexnetOperations\Type\DeleteOrganizationResponseType
    {
        return $this->call('deleteOrganization', $deleteOrganizationRequest);
    }

    /**
     * @param RequestInterface|Type\GetOrganizationsQueryRequestType $getOrganizationsQueryRequest
     * @return ResultInterface|Type\GetOrganizationsQueryResponseType
     * @throws SoapException
     */
    public function getOrganizationsQuery(\Flexsim\FlexnetOperations\Type\GetOrganizationsQueryRequestType $getOrganizationsQueryRequest) : \Flexsim\FlexnetOperations\Type\GetOrganizationsQueryResponseType
    {
        return $this->call('getOrganizationsQuery', $getOrganizationsQueryRequest);
    }

    /**
     * @param RequestInterface|Type\GetOrganizationCountRequestType $getOrganizationCountRequest
     * @return ResultInterface|Type\GetOrganizationCountResponseType
     * @throws SoapException
     */
    public function getOrganizationCount(\Flexsim\FlexnetOperations\Type\GetOrganizationCountRequestType $getOrganizationCountRequest) : \Flexsim\FlexnetOperations\Type\GetOrganizationCountResponseType
    {
        return $this->call('getOrganizationCount', $getOrganizationCountRequest);
    }

    /**
     * @param RequestInterface|Type\GetParentOrganizationsRequestType $getParentOrganizationsRequest
     * @return ResultInterface|Type\GetParentOrganizationsResponseType
     * @throws SoapException
     */
    public function getParentOrganizations(\Flexsim\FlexnetOperations\Type\GetParentOrganizationsRequestType $getParentOrganizationsRequest) : \Flexsim\FlexnetOperations\Type\GetParentOrganizationsResponseType
    {
        return $this->call('getParentOrganizations', $getParentOrganizationsRequest);
    }

    /**
     * @param RequestInterface|Type\GetSubOrganizationsRequestType $getSubOrganizationsRequest
     * @return ResultInterface|Type\GetSubOrganizationsResponseType
     * @throws SoapException
     */
    public function getSubOrganizations(\Flexsim\FlexnetOperations\Type\GetSubOrganizationsRequestType $getSubOrganizationsRequest) : \Flexsim\FlexnetOperations\Type\GetSubOrganizationsResponseType
    {
        return $this->call('getSubOrganizations', $getSubOrganizationsRequest);
    }

    /**
     * @param RequestInterface|Type\GetUsersQueryRequestType $getUsersQueryRequest
     * @return ResultInterface|Type\GetUsersQueryResponseType
     * @throws SoapException
     */
    public function getUsersQuery(\Flexsim\FlexnetOperations\Type\GetUsersQueryRequestType $getUsersQueryRequest) : \Flexsim\FlexnetOperations\Type\GetUsersQueryResponseType
    {
        return $this->call('getUsersQuery', $getUsersQueryRequest);
    }

    /**
     * @param RequestInterface|Type\GetUserCountRequestType $getUserCountRequest
     * @return ResultInterface|Type\GetUserCountResponseType
     * @throws SoapException
     */
    public function getUserCount(\Flexsim\FlexnetOperations\Type\GetUserCountRequestType $getUserCountRequest) : \Flexsim\FlexnetOperations\Type\GetUserCountResponseType
    {
        return $this->call('getUserCount', $getUserCountRequest);
    }

    /**
     * @param RequestInterface|Type\CreateUserRequestType $createUserRequest
     * @return ResultInterface|Type\CreateUserResponseType
     * @throws SoapException
     */
    public function createUser(\Flexsim\FlexnetOperations\Type\CreateUserRequestType $createUserRequest) : \Flexsim\FlexnetOperations\Type\CreateUserResponseType
    {
        return $this->call('createUser', $createUserRequest);
    }

    /**
     * @param RequestInterface|Type\UpdateUserRequestType $updateUserRequest
     * @return ResultInterface|Type\UpdateUserResponseType
     * @throws SoapException
     */
    public function updateUser(\Flexsim\FlexnetOperations\Type\UpdateUserRequestType $updateUserRequest) : \Flexsim\FlexnetOperations\Type\UpdateUserResponseType
    {
        return $this->call('updateUser', $updateUserRequest);
    }

    /**
     * @param RequestInterface|Type\UpdateUserRolesRequestType $updateUserRolesRequest
     * @return ResultInterface|Type\UpdateUserRolesResponseType
     * @throws SoapException
     */
    public function updateUserRoles(\Flexsim\FlexnetOperations\Type\UpdateUserRolesRequestType $updateUserRolesRequest) : \Flexsim\FlexnetOperations\Type\UpdateUserRolesResponseType
    {
        return $this->call('updateUserRoles', $updateUserRolesRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteUserRequestType $deleteUserRequest
     * @return ResultInterface|Type\DeleteUserResponseType
     * @throws SoapException
     */
    public function deleteUser(\Flexsim\FlexnetOperations\Type\DeleteUserRequestType $deleteUserRequest) : \Flexsim\FlexnetOperations\Type\DeleteUserResponseType
    {
        return $this->call('deleteUser', $deleteUserRequest);
    }

    /**
     * @param RequestInterface|Type\RelateOrganizationsRequestType $relateOrganizationsRequest
     * @return ResultInterface|Type\RelateOrganizationsResponseType
     * @throws SoapException
     */
    public function relateOrganizations(\Flexsim\FlexnetOperations\Type\RelateOrganizationsRequestType $relateOrganizationsRequest) : \Flexsim\FlexnetOperations\Type\RelateOrganizationsResponseType
    {
        return $this->call('relateOrganizations', $relateOrganizationsRequest);
    }

    /**
     * @param RequestInterface|Type\GetRelatedOrganizationsRequestType $getRelatedOrganizationsRequest
     * @return ResultInterface|Type\GetRelatedOrganizationsResponseType
     * @throws SoapException
     */
    public function getRelatedOrganizations(\Flexsim\FlexnetOperations\Type\GetRelatedOrganizationsRequestType $getRelatedOrganizationsRequest) : \Flexsim\FlexnetOperations\Type\GetRelatedOrganizationsResponseType
    {
        return $this->call('getRelatedOrganizations', $getRelatedOrganizationsRequest);
    }

    /**
     * @param RequestInterface|Type\GetUserPermissionsRequestType $getUserPermissionsRequest
     * @return ResultInterface|Type\GetUserPermissionsResponseType
     * @throws SoapException
     */
    public function getUserPermissions(\Flexsim\FlexnetOperations\Type\GetUserPermissionsRequestType $getUserPermissionsRequest) : \Flexsim\FlexnetOperations\Type\GetUserPermissionsResponseType
    {
        return $this->call('getUserPermissions', $getUserPermissionsRequest);
    }


}

