<?php

namespace Flexsim\FlexnetOperations\Services\UserAcctHierarchyService\v3;

use Flexsim\FlexnetOperations\Type;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;

class UserAcctHierarchyServiceClassmap
{
    public static function getCollection(): \Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('addressDataType', Type\AddressDataType::class),
            new ClassMap('attributeDescriptorType', Type\AttributeDescriptorType::class),
            new ClassMap('attributeDescriptorDataType', Type\AttributeDescriptorDataType::class),
            new ClassMap('accountDataType', Type\AccountDataType::class),
            new ClassMap('createAcctRequestType', Type\CreateAcctRequestType::class),
            new ClassMap('StatusInfoType', Type\StatusInfoType::class),
            new ClassMap('failedCreateAcctDataType', Type\FailedCreateAcctDataType::class),
            new ClassMap('failedCreateAcctDataListType', Type\FailedCreateAcctDataListType::class),
            new ClassMap('accountPKTypeUser', Type\AccountPKTypeUser::class),
            new ClassMap('accountIdentifierTypeUser', Type\AccountIdentifierTypeUser::class),
            new ClassMap('createdAccountDataListType', Type\CreatedAccountDataListType::class),
            new ClassMap('createAcctResponseType', Type\CreateAcctResponseType::class),
            new ClassMap('linkAccountsDataType', Type\LinkAccountsDataType::class),
            new ClassMap('linkAccountsRequestType', Type\LinkAccountsRequestType::class),
            new ClassMap('failedLinkAcctDataType', Type\FailedLinkAcctDataType::class),
            new ClassMap('failedLinkAcctDataListType', Type\FailedLinkAcctDataListType::class),
            new ClassMap('linkAccountsResponseType', Type\LinkAccountsResponseType::class),
            new ClassMap('updateSubAccountsListType', Type\UpdateSubAccountsListType::class),
            new ClassMap('updateRelatedAccountsListType', Type\UpdateRelatedAccountsListType::class),
            new ClassMap('updateAcctDataType', Type\UpdateAcctDataType::class),
            new ClassMap('updateAccountRequestType', Type\UpdateAccountRequestType::class),
            new ClassMap('failedUpdateAcctDataType', Type\FailedUpdateAcctDataType::class),
            new ClassMap('failedUpdateAcctDataListType', Type\FailedUpdateAcctDataListType::class),
            new ClassMap('updateAccountResponseType', Type\UpdateAccountResponseType::class),
            new ClassMap('deleteAcctDataType', Type\DeleteAcctDataType::class),
            new ClassMap('deleteAccountRequestType', Type\DeleteAccountRequestType::class),
            new ClassMap('failedDeleteAcctDataType', Type\FailedDeleteAcctDataType::class),
            new ClassMap('failedDeleteAcctDataListType', Type\FailedDeleteAcctDataListType::class),
            new ClassMap('deleteAccountResponseType', Type\DeleteAccountResponseType::class),
            new ClassMap('SimpleQueryType', Type\SimpleQueryType::class),
            new ClassMap('AcctTypeList', Type\AcctTypeList::class),
            new ClassMap('acctCustomAttributeQueryType', Type\AcctCustomAttributeQueryType::class),
            new ClassMap('acctCustomAttributesQueryListType', Type\AcctCustomAttributesQueryListType::class),
            new ClassMap('DateTimeQueryType', Type\DateTimeQueryType::class),
            new ClassMap('accountQueryParametersType', Type\AccountQueryParametersType::class),
            new ClassMap('getAccountsQueryRequestType', Type\GetAccountsQueryRequestType::class),
            new ClassMap('accountDetailDataType', Type\AccountDetailDataType::class),
            new ClassMap('getAccountsQueryResponseDataType', Type\GetAccountsQueryResponseDataType::class),
            new ClassMap('getAccountsQueryResponseType', Type\GetAccountsQueryResponseType::class),
            new ClassMap('DateQueryType', Type\DateQueryType::class),
            new ClassMap('accountUserExpiryQueryParametersType', Type\AccountUserExpiryQueryParametersType::class),
            new ClassMap('getUserAccountsExpiryQueryRequestType', Type\GetUserAccountsExpiryQueryRequestType::class),
            new ClassMap('userPKType', Type\UserPKType::class),
            new ClassMap('userIdentifierType', Type\UserIdentifierType::class),
            new ClassMap('forceDeleteUserIdentifierType', Type\ForceDeleteUserIdentifierType::class),
            new ClassMap('userAccountRolesListType', Type\UserAccountRolesListType::class),
            new ClassMap('userAccountType', Type\UserAccountType::class),
            new ClassMap('userAccountsListType', Type\UserAccountsListType::class),
            new ClassMap('userDetailDataType', Type\UserDetailDataType::class),
            new ClassMap('accountExpiryType', Type\AccountExpiryType::class),
            new ClassMap('userAccountExpiryType', Type\UserAccountExpiryType::class),
            new ClassMap('getUserAccountsExpiryQueryResponseDataType', Type\GetUserAccountsExpiryQueryResponseDataType::class),
            new ClassMap('getUserAccountsExpiryQueryResponseType', Type\GetUserAccountsExpiryQueryResponseType::class),
            new ClassMap('getAccountCountRequestType', Type\GetAccountCountRequestType::class),
            new ClassMap('getAccountCountResponseDataType', Type\GetAccountCountResponseDataType::class),
            new ClassMap('getAccountCountResponseType', Type\GetAccountCountResponseType::class),
            new ClassMap('getParentAccountsRequestType', Type\GetParentAccountsRequestType::class),
            new ClassMap('getParentAccountsResponseType', Type\GetParentAccountsResponseType::class),
            new ClassMap('getSubAccountsRequestType', Type\GetSubAccountsRequestType::class),
            new ClassMap('getSubAccountsResponseType', Type\GetSubAccountsResponseType::class),
            new ClassMap('userCustomAttributeQueryType', Type\UserCustomAttributeQueryType::class),
            new ClassMap('userCustomAttributesQueryListType', Type\UserCustomAttributesQueryListType::class),
            new ClassMap('userQueryParametersType', Type\UserQueryParametersType::class),
            new ClassMap('getUsersQueryRequestType', Type\GetUsersQueryRequestType::class),
            new ClassMap('getUsersQueryResponseDataType', Type\GetUsersQueryResponseDataType::class),
            new ClassMap('getUsersQueryResponseType', Type\GetUsersQueryResponseType::class),
            new ClassMap('getUserCountRequestType', Type\GetUserCountRequestType::class),
            new ClassMap('getUserCountResponseDataType', Type\GetUserCountResponseDataType::class),
            new ClassMap('getUserCountResponseType', Type\GetUserCountResponseType::class),
            new ClassMap('rolePKType', Type\RolePKType::class),
            new ClassMap('roleIdentifierType', Type\RoleIdentifierType::class),
            new ClassMap('createUserAccountRolesListType', Type\CreateUserAccountRolesListType::class),
            new ClassMap('createUserAccountType', Type\CreateUserAccountType::class),
            new ClassMap('createUserAccountsListType', Type\CreateUserAccountsListType::class),
            new ClassMap('createUserDataType', Type\CreateUserDataType::class),
            new ClassMap('createUserRequestType', Type\CreateUserRequestType::class),
            new ClassMap('failedCreateUserDataType', Type\FailedCreateUserDataType::class),
            new ClassMap('failedCreateUserDataListType', Type\FailedCreateUserDataListType::class),
            new ClassMap('createdUserDataListType', Type\CreatedUserDataListType::class),
            new ClassMap('createUserResponseType', Type\CreateUserResponseType::class),
            new ClassMap('updateUserRolesAccountListType', Type\UpdateUserRolesAccountListType::class),
            new ClassMap('updateUserAccountType', Type\UpdateUserAccountType::class),
            new ClassMap('updateUserAccountsListType', Type\UpdateUserAccountsListType::class),
            new ClassMap('updateUserDataType', Type\UpdateUserDataType::class),
            new ClassMap('updateUserRequestType', Type\UpdateUserRequestType::class),
            new ClassMap('failedUpdateUserDataType', Type\FailedUpdateUserDataType::class),
            new ClassMap('failedUpdateUserDataListType', Type\FailedUpdateUserDataListType::class),
            new ClassMap('updateUserResponseType', Type\UpdateUserResponseType::class),
            new ClassMap('updateUserRolesListType', Type\UpdateUserRolesListType::class),
            new ClassMap('updateUserAccountRolesDataType', Type\UpdateUserAccountRolesDataType::class),
            new ClassMap('updateUserRolesDataType', Type\UpdateUserRolesDataType::class),
            new ClassMap('updateUserRolesRequestType', Type\UpdateUserRolesRequestType::class),
            new ClassMap('failedUpdateUserRolesDataType', Type\FailedUpdateUserRolesDataType::class),
            new ClassMap('failedUpdateUserRolesDataListType', Type\FailedUpdateUserRolesDataListType::class),
            new ClassMap('updateUserRolesResponseType', Type\UpdateUserRolesResponseType::class),
            new ClassMap('deleteUserRequestType', Type\DeleteUserRequestType::class),
            new ClassMap('failedDeleteUserDataType', Type\FailedDeleteUserDataType::class),
            new ClassMap('failedDeleteUserDataListType', Type\FailedDeleteUserDataListType::class),
            new ClassMap('deleteUserResponseType', Type\DeleteUserResponseType::class),
            new ClassMap('relateAccountsDataType', Type\RelateAccountsDataType::class),
            new ClassMap('relateAccountsRequestType', Type\RelateAccountsRequestType::class),
            new ClassMap('failedRelateAccountsDataType', Type\FailedRelateAccountsDataType::class),
            new ClassMap('failedRelateAccountsDataListType', Type\FailedRelateAccountsDataListType::class),
            new ClassMap('relateAccountsResponseType', Type\RelateAccountsResponseType::class),
            new ClassMap('getRelatedAccountsRequestType', Type\GetRelatedAccountsRequestType::class),
            new ClassMap('getRelatedAccountsResponseType', Type\GetRelatedAccountsResponseType::class),
            new ClassMap('getUserPermissionsRequestType', Type\GetUserPermissionsRequestType::class),
            new ClassMap('permissionListType', Type\PermissionListType::class),
            new ClassMap('getUserPermissionsResponseDataType', Type\GetUserPermissionsResponseDataType::class),
            new ClassMap('getUserPermissionsResponseType', Type\GetUserPermissionsResponseType::class),
            new ClassMap('addDomainUserDataType', Type\AddDomainUserDataType::class),
            new ClassMap('addDomainUserRequestType', Type\AddDomainUserRequestType::class),
            new ClassMap('failedAddDomainUserDataType', Type\FailedAddDomainUserDataType::class),
            new ClassMap('failedAddDomainUserDataListType', Type\FailedAddDomainUserDataListType::class),
            new ClassMap('domainUserPKType', Type\DomainUserPKType::class),
            new ClassMap('domainUserIdentifierType', Type\DomainUserIdentifierType::class),
            new ClassMap('addedDomainUserDataListType', Type\AddedDomainUserDataListType::class),
            new ClassMap('addDomainUserResponseType', Type\AddDomainUserResponseType::class),
            new ClassMap('updateDomainUserDataType', Type\UpdateDomainUserDataType::class),
            new ClassMap('updateDomainUserRequestType', Type\UpdateDomainUserRequestType::class),
            new ClassMap('failedUpdateDomainUserDataType', Type\FailedUpdateDomainUserDataType::class),
            new ClassMap('failedUpdateDomainUserDataListType', Type\FailedUpdateDomainUserDataListType::class),
            new ClassMap('updatedDomainUserDataListType', Type\UpdatedDomainUserDataListType::class),
            new ClassMap('updateDomainUserResponseType', Type\UpdateDomainUserResponseType::class),
            new ClassMap('deleteDomainUserRequestType', Type\DeleteDomainUserRequestType::class),
            new ClassMap('failedDeleteDomainUserDataType', Type\FailedDeleteDomainUserDataType::class),
            new ClassMap('failedDeleteDomainUserDataListType', Type\FailedDeleteDomainUserDataListType::class),
            new ClassMap('deleteDomainUserResponseType', Type\DeleteDomainUserResponseType::class),
        );
    }
}
