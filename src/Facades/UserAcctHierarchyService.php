<?php

namespace Flexsim\FlexnetOperations\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Phpro\SoapClient\Client client()
 * @method static self connection( $name = NULL)
 * @method static self version( $version = NULL)
 * @method static string getDefaultConnection()
 * @method static setDefaultConnection( $name)
 * @method static string getDefaultVersion( $connection = NULL)
 * @method static setDefaultVersion( $version,  $connection = NULL)
 * @method static array getClients()
 * @method static \Flexsim\FlexnetOperations\Type\CreateAcctResponseType createAccount(\Flexsim\FlexnetOperations\Type\CreateAcctRequestType $createAcctRequest)
 * @method static \Flexsim\FlexnetOperations\Type\LinkAccountsResponseType linkAccounts(\Flexsim\FlexnetOperations\Type\LinkAccountsRequestType $linkAccountsRequest)
 * @method static \Flexsim\FlexnetOperations\Type\UpdateAccountResponseType updateAccount(\Flexsim\FlexnetOperations\Type\UpdateAccountRequestType $updateAccountRequest)
 * @method static \Flexsim\FlexnetOperations\Type\DeleteAccountResponseType deleteAccount(\Flexsim\FlexnetOperations\Type\DeleteAccountRequestType $deleteAccountRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetAccountsQueryResponseType getAccountsQuery(\Flexsim\FlexnetOperations\Type\GetAccountsQueryRequestType $getAccountsQueryRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetUserAccountsExpiryQueryResponseType getUserAccountsExpiryQuery(\Flexsim\FlexnetOperations\Type\GetUserAccountsExpiryQueryRequestType $getUserAccountsExpiryQueryRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetAccountCountResponseType getAccountCount(\Flexsim\FlexnetOperations\Type\GetAccountCountRequestType $getAccountCountRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetParentAccountsResponseType getParentAccounts(\Flexsim\FlexnetOperations\Type\GetParentAccountsRequestType $getParentAccountsRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetSubAccountsResponseType getSubAccounts(\Flexsim\FlexnetOperations\Type\GetSubAccountsRequestType $getSubAccountsRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetUsersQueryResponseType getUsersQuery(\Flexsim\FlexnetOperations\Type\GetUsersQueryRequestType $getUsersQueryRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetUserCountResponseType getUserCount(\Flexsim\FlexnetOperations\Type\GetUserCountRequestType $getUserCountRequest)
 * @method static \Flexsim\FlexnetOperations\Type\CreateUserResponseType createUser(\Flexsim\FlexnetOperations\Type\CreateUserRequestType $createUserRequest)
 * @method static \Flexsim\FlexnetOperations\Type\UpdateUserResponseType updateUser(\Flexsim\FlexnetOperations\Type\UpdateUserRequestType $updateUserRequest)
 * @method static \Flexsim\FlexnetOperations\Type\UpdateUserRolesResponseType updateUserRoles(\Flexsim\FlexnetOperations\Type\UpdateUserRolesRequestType $updateUserRolesRequest)
 * @method static \Flexsim\FlexnetOperations\Type\DeleteUserResponseType deleteUser(\Flexsim\FlexnetOperations\Type\DeleteUserRequestType $deleteUserRequest)
 * @method static \Flexsim\FlexnetOperations\Type\RelateAccountsResponseType relateAccounts(\Flexsim\FlexnetOperations\Type\RelateAccountsRequestType $relateAccountsRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetRelatedAccountsResponseType getRelatedAccounts(\Flexsim\FlexnetOperations\Type\GetRelatedAccountsRequestType $getRelatedAccountsRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetUserPermissionsResponseType getUserPermissions(\Flexsim\FlexnetOperations\Type\GetUserPermissionsRequestType $getUserPermissionsRequest)
 * @method static \Flexsim\FlexnetOperations\Type\AddDomainUserResponseType addDomainUsers(\Flexsim\FlexnetOperations\Type\AddDomainUserRequestType $addDomainUserRequest)
 * @method static \Flexsim\FlexnetOperations\Type\UpdateDomainUserResponseType updateDomainUsers(\Flexsim\FlexnetOperations\Type\UpdateDomainUserRequestType $updateDomainUserRequest)
 * @method static \Flexsim\FlexnetOperations\Type\DeleteDomainUserResponseType deleteDomainUsers(\Flexsim\FlexnetOperations\Type\DeleteDomainUserRequestType $deleteDomainUserRequest)
 *
 * @see \Flexsim\FlexnetOperations\FlexnetOperationsClientManager
 * @see \Flexsim\FlexnetOperations\Services\UserAcctHierarchyService\v2
 * @see \Flexsim\FlexnetOperations\Services\UserAcctHierarchyService\v3
 */
class UserAcctHierarchyService extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'flexnet-operations.user-acct-hierarchy-service';
    }
}
