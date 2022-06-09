<?php

namespace Flexsim\FlexnetOperations\Services\UserAcctHierarchyService\v3;

use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Flexsim\FlexnetOperations\Type;

class UserAcctHierarchyServiceClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface|Type\CreateAcctRequestType $createAcctRequest
     * @return ResultInterface|Type\CreateAcctResponseType
     * @throws SoapException
     */
    public function createAccount(\Flexsim\FlexnetOperations\Type\CreateAcctRequestType $createAcctRequest) : \Flexsim\FlexnetOperations\Type\CreateAcctResponseType
    {
        return ($this->caller)('createAccount', $createAcctRequest);
    }

    /**
     * @param RequestInterface|Type\LinkAccountsRequestType $linkAccountsRequest
     * @return ResultInterface|Type\LinkAccountsResponseType
     * @throws SoapException
     */
    public function linkAccounts(\Flexsim\FlexnetOperations\Type\LinkAccountsRequestType $linkAccountsRequest) : \Flexsim\FlexnetOperations\Type\LinkAccountsResponseType
    {
        return ($this->caller)('linkAccounts', $linkAccountsRequest);
    }

    /**
     * @param RequestInterface|Type\UpdateAccountRequestType $updateAccountRequest
     * @return ResultInterface|Type\UpdateAccountResponseType
     * @throws SoapException
     */
    public function updateAccount(\Flexsim\FlexnetOperations\Type\UpdateAccountRequestType $updateAccountRequest) : \Flexsim\FlexnetOperations\Type\UpdateAccountResponseType
    {
        return ($this->caller)('updateAccount', $updateAccountRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteAccountRequestType $deleteAccountRequest
     * @return ResultInterface|Type\DeleteAccountResponseType
     * @throws SoapException
     */
    public function deleteAccount(\Flexsim\FlexnetOperations\Type\DeleteAccountRequestType $deleteAccountRequest) : \Flexsim\FlexnetOperations\Type\DeleteAccountResponseType
    {
        return ($this->caller)('deleteAccount', $deleteAccountRequest);
    }

    /**
     * @param RequestInterface|Type\GetAccountsQueryRequestType $getAccountsQueryRequest
     * @return ResultInterface|Type\GetAccountsQueryResponseType
     * @throws SoapException
     */
    public function getAccountsQuery(\Flexsim\FlexnetOperations\Type\GetAccountsQueryRequestType $getAccountsQueryRequest) : \Flexsim\FlexnetOperations\Type\GetAccountsQueryResponseType
    {
        return ($this->caller)('getAccountsQuery', $getAccountsQueryRequest);
    }

    /**
     * @param RequestInterface|Type\GetUserAccountsExpiryQueryRequestType $getUserAccountsExpiryQueryRequest
     * @return ResultInterface|Type\GetUserAccountsExpiryQueryResponseType
     * @throws SoapException
     */
    public function getUserAccountsExpiryQuery(\Flexsim\FlexnetOperations\Type\GetUserAccountsExpiryQueryRequestType $getUserAccountsExpiryQueryRequest) : \Flexsim\FlexnetOperations\Type\GetUserAccountsExpiryQueryResponseType
    {
        return ($this->caller)('getUserAccountsExpiryQuery', $getUserAccountsExpiryQueryRequest);
    }

    /**
     * @param RequestInterface|Type\GetAccountCountRequestType $getAccountCountRequest
     * @return ResultInterface|Type\GetAccountCountResponseType
     * @throws SoapException
     */
    public function getAccountCount(\Flexsim\FlexnetOperations\Type\GetAccountCountRequestType $getAccountCountRequest) : \Flexsim\FlexnetOperations\Type\GetAccountCountResponseType
    {
        return ($this->caller)('getAccountCount', $getAccountCountRequest);
    }

    /**
     * @param RequestInterface|Type\GetParentAccountsRequestType $getParentAccountsRequest
     * @return ResultInterface|Type\GetParentAccountsResponseType
     * @throws SoapException
     */
    public function getParentAccounts(\Flexsim\FlexnetOperations\Type\GetParentAccountsRequestType $getParentAccountsRequest) : \Flexsim\FlexnetOperations\Type\GetParentAccountsResponseType
    {
        return ($this->caller)('getParentAccounts', $getParentAccountsRequest);
    }

    /**
     * @param RequestInterface|Type\GetSubAccountsRequestType $getSubAccountsRequest
     * @return ResultInterface|Type\GetSubAccountsResponseType
     * @throws SoapException
     */
    public function getSubAccounts(\Flexsim\FlexnetOperations\Type\GetSubAccountsRequestType $getSubAccountsRequest) : \Flexsim\FlexnetOperations\Type\GetSubAccountsResponseType
    {
        return ($this->caller)('getSubAccounts', $getSubAccountsRequest);
    }

    /**
     * @param RequestInterface|Type\GetUsersQueryRequestType $getUsersQueryRequest
     * @return ResultInterface|Type\GetUsersQueryResponseType
     * @throws SoapException
     */
    public function getUsersQuery(\Flexsim\FlexnetOperations\Type\GetUsersQueryRequestType $getUsersQueryRequest) : \Flexsim\FlexnetOperations\Type\GetUsersQueryResponseType
    {
        return ($this->caller)('getUsersQuery', $getUsersQueryRequest);
    }

    /**
     * @param RequestInterface|Type\GetUserCountRequestType $getUserCountRequest
     * @return ResultInterface|Type\GetUserCountResponseType
     * @throws SoapException
     */
    public function getUserCount(\Flexsim\FlexnetOperations\Type\GetUserCountRequestType $getUserCountRequest) : \Flexsim\FlexnetOperations\Type\GetUserCountResponseType
    {
        return ($this->caller)('getUserCount', $getUserCountRequest);
    }

    /**
     * @param RequestInterface|Type\CreateUserRequestType $createUserRequest
     * @return ResultInterface|Type\CreateUserResponseType
     * @throws SoapException
     */
    public function createUser(\Flexsim\FlexnetOperations\Type\CreateUserRequestType $createUserRequest) : \Flexsim\FlexnetOperations\Type\CreateUserResponseType
    {
        return ($this->caller)('createUser', $createUserRequest);
    }

    /**
     * @param RequestInterface|Type\UpdateUserRequestType $updateUserRequest
     * @return ResultInterface|Type\UpdateUserResponseType
     * @throws SoapException
     */
    public function updateUser(\Flexsim\FlexnetOperations\Type\UpdateUserRequestType $updateUserRequest) : \Flexsim\FlexnetOperations\Type\UpdateUserResponseType
    {
        return ($this->caller)('updateUser', $updateUserRequest);
    }

    /**
     * @param RequestInterface|Type\UpdateUserRolesRequestType $updateUserRolesRequest
     * @return ResultInterface|Type\UpdateUserRolesResponseType
     * @throws SoapException
     */
    public function updateUserRoles(\Flexsim\FlexnetOperations\Type\UpdateUserRolesRequestType $updateUserRolesRequest) : \Flexsim\FlexnetOperations\Type\UpdateUserRolesResponseType
    {
        return ($this->caller)('updateUserRoles', $updateUserRolesRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteUserRequestType $deleteUserRequest
     * @return ResultInterface|Type\DeleteUserResponseType
     * @throws SoapException
     */
    public function deleteUser(\Flexsim\FlexnetOperations\Type\DeleteUserRequestType $deleteUserRequest) : \Flexsim\FlexnetOperations\Type\DeleteUserResponseType
    {
        return ($this->caller)('deleteUser', $deleteUserRequest);
    }

    /**
     * @param RequestInterface|Type\RelateAccountsRequestType $relateAccountsRequest
     * @return ResultInterface|Type\RelateAccountsResponseType
     * @throws SoapException
     */
    public function relateAccounts(\Flexsim\FlexnetOperations\Type\RelateAccountsRequestType $relateAccountsRequest) : \Flexsim\FlexnetOperations\Type\RelateAccountsResponseType
    {
        return ($this->caller)('relateAccounts', $relateAccountsRequest);
    }

    /**
     * @param RequestInterface|Type\GetRelatedAccountsRequestType $getRelatedAccountsRequest
     * @return ResultInterface|Type\GetRelatedAccountsResponseType
     * @throws SoapException
     */
    public function getRelatedAccounts(\Flexsim\FlexnetOperations\Type\GetRelatedAccountsRequestType $getRelatedAccountsRequest) : \Flexsim\FlexnetOperations\Type\GetRelatedAccountsResponseType
    {
        return ($this->caller)('getRelatedAccounts', $getRelatedAccountsRequest);
    }

    /**
     * @param RequestInterface|Type\GetUserPermissionsRequestType $getUserPermissionsRequest
     * @return ResultInterface|Type\GetUserPermissionsResponseType
     * @throws SoapException
     */
    public function getUserPermissions(\Flexsim\FlexnetOperations\Type\GetUserPermissionsRequestType $getUserPermissionsRequest) : \Flexsim\FlexnetOperations\Type\GetUserPermissionsResponseType
    {
        return ($this->caller)('getUserPermissions', $getUserPermissionsRequest);
    }

    /**
     * @param RequestInterface|Type\AddDomainUserRequestType $addDomainUserRequest
     * @return ResultInterface|Type\AddDomainUserResponseType
     * @throws SoapException
     */
    public function addDomainUsers(\Flexsim\FlexnetOperations\Type\AddDomainUserRequestType $addDomainUserRequest) : \Flexsim\FlexnetOperations\Type\AddDomainUserResponseType
    {
        return ($this->caller)('addDomainUsers', $addDomainUserRequest);
    }

    /**
     * @param RequestInterface|Type\UpdateDomainUserRequestType $updateDomainUserRequest
     * @return ResultInterface|Type\UpdateDomainUserResponseType
     * @throws SoapException
     */
    public function updateDomainUsers(\Flexsim\FlexnetOperations\Type\UpdateDomainUserRequestType $updateDomainUserRequest) : \Flexsim\FlexnetOperations\Type\UpdateDomainUserResponseType
    {
        return ($this->caller)('updateDomainUsers', $updateDomainUserRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteDomainUserRequestType $deleteDomainUserRequest
     * @return ResultInterface|Type\DeleteDomainUserResponseType
     * @throws SoapException
     */
    public function deleteDomainUsers(\Flexsim\FlexnetOperations\Type\DeleteDomainUserRequestType $deleteDomainUserRequest) : \Flexsim\FlexnetOperations\Type\DeleteDomainUserResponseType
    {
        return ($this->caller)('deleteDomainUsers', $deleteDomainUserRequest);
    }
}

