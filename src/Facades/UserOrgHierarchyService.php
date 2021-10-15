<?php

namespace Flexsim\FlexnetOperations\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static client()
 * @method static activeConnection()
 * @method static activeVersion()
 * @method static createClient( $connection,  $version)
 * @method static configuration( $connection)
 * @method static validateConfig( $config,  $connection)
 * @method static createWsdlPath( $config)
 * @method static getFactoryClass( $version)
 * @method static connection( $name = NULL)
 * @method static version( $version = NULL)
 * @method static getDefaultConnection()
 * @method static setDefaultConnection( $name)
 * @method static getDefaultVersion( $connection = NULL)
 * @method static setDefaultVersion( $version,  $connection = NULL)
 * @method static getServiceName()
 * @method static getClients()
 *
 * @method static \Flexsim\FlexnetOperations\Type\CreateOrgResponseType createOrganization(Flexsim\FlexnetOperations\Type\CreateOrgRequestType $createOrgRequest)
 * @method static \Flexsim\FlexnetOperations\Type\LinkOrganizationsResponseType linkOrganizations(Flexsim\FlexnetOperations\Type\LinkOrganizationsRequestType $linkOrganizationsRequest)
 * @method static \Flexsim\FlexnetOperations\Type\UpdateOrganizationResponseType updateOrganization(Flexsim\FlexnetOperations\Type\UpdateOrganizationRequestType $updateOrganizationRequest)
 * @method static \Flexsim\FlexnetOperations\Type\DeleteOrganizationResponseType deleteOrganization(Flexsim\FlexnetOperations\Type\DeleteOrganizationRequestType $deleteOrganizationRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetOrganizationsQueryResponseType getOrganizationsQuery(Flexsim\FlexnetOperations\Type\GetOrganizationsQueryRequestType $getOrganizationsQueryRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetOrganizationCountResponseType getOrganizationCount(Flexsim\FlexnetOperations\Type\GetOrganizationCountRequestType $getOrganizationCountRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetParentOrganizationsResponseType getParentOrganizations(Flexsim\FlexnetOperations\Type\GetParentOrganizationsRequestType $getParentOrganizationsRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetSubOrganizationsResponseType getSubOrganizations(Flexsim\FlexnetOperations\Type\GetSubOrganizationsRequestType $getSubOrganizationsRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetUsersQueryResponseType getUsersQuery(Flexsim\FlexnetOperations\Type\GetUsersQueryRequestType $getUsersQueryRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetUserCountResponseType getUserCount(Flexsim\FlexnetOperations\Type\GetUserCountRequestType $getUserCountRequest)
 * @method static \Flexsim\FlexnetOperations\Type\CreateUserResponseType createUser(Flexsim\FlexnetOperations\Type\CreateUserRequestType $createUserRequest)
 * @method static \Flexsim\FlexnetOperations\Type\UpdateUserResponseType updateUser(Flexsim\FlexnetOperations\Type\UpdateUserRequestType $updateUserRequest)
 * @method static \Flexsim\FlexnetOperations\Type\UpdateUserRolesResponseType updateUserRoles(Flexsim\FlexnetOperations\Type\UpdateUserRolesRequestType $updateUserRolesRequest)
 * @method static \Flexsim\FlexnetOperations\Type\DeleteUserResponseType deleteUser(Flexsim\FlexnetOperations\Type\DeleteUserRequestType $deleteUserRequest)
 * @method static \Flexsim\FlexnetOperations\Type\RelateOrganizationsResponseType relateOrganizations(Flexsim\FlexnetOperations\Type\RelateOrganizationsRequestType $relateOrganizationsRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetRelatedOrganizationsResponseType getRelatedOrganizations(Flexsim\FlexnetOperations\Type\GetRelatedOrganizationsRequestType $getRelatedOrganizationsRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetUserPermissionsResponseType getUserPermissions(Flexsim\FlexnetOperations\Type\GetUserPermissionsRequestType $getUserPermissionsRequest)
 *
 * @see \Flexsim\FlexnetOperations\FlexnetOperationsClientManager
 * @see \Flexsim\FlexnetOperations\Services\UserOrgHierarchyService
 * @see \Flexsim\FlexnetOperations\Services\UserOrgHierarchyService\v1
 */
class UserOrgHierarchyService extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'flexnet-operations.user-org-hierarchy-service';
    }
}
