<?php

namespace Flexsim\FlexnetOperations\Services\UserOrgHierarchyService;

use Flexsim\FlexnetOperations\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class UserOrgHierarchyServiceClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('addressDataType', Type\AddressDataType::class),
            new ClassMap('attributeDescriptorType', Type\AttributeDescriptorType::class),
            new ClassMap('attributeDescriptorDataType', Type\AttributeDescriptorDataType::class),
            new ClassMap('organizationDataType', Type\OrganizationDataType::class),
            new ClassMap('createOrgRequestType', Type\CreateOrgRequestType::class),
            new ClassMap('StatusInfoType', Type\StatusInfoType::class),
            new ClassMap('failedCreateOrgDataType', Type\FailedCreateOrgDataType::class),
            new ClassMap('failedCreateOrgDataListType', Type\FailedCreateOrgDataListType::class),
            new ClassMap('organizationPKType', Type\OrganizationPKType::class),
            new ClassMap('organizationIdentifierType', Type\OrganizationIdentifierType::class),
            new ClassMap('createdOrganizationDataListType', Type\CreatedOrganizationDataListType::class),
            new ClassMap('createOrgResponseType', Type\CreateOrgResponseType::class),
            new ClassMap('linkOrganizationsDataType', Type\LinkOrganizationsDataType::class),
            new ClassMap('linkOrganizationsRequestType', Type\LinkOrganizationsRequestType::class),
            new ClassMap('failedLinkOrgDataType', Type\FailedLinkOrgDataType::class),
            new ClassMap('failedLinkOrgDataListType', Type\FailedLinkOrgDataListType::class),
            new ClassMap('linkOrganizationsResponseType', Type\LinkOrganizationsResponseType::class),
            new ClassMap('updateSubOrganizationsListType', Type\UpdateSubOrganizationsListType::class),
            new ClassMap('updateRelatedOrganizationsListType', Type\UpdateRelatedOrganizationsListType::class),
            new ClassMap('updateOrgDataType', Type\UpdateOrgDataType::class),
            new ClassMap('updateOrganizationRequestType', Type\UpdateOrganizationRequestType::class),
            new ClassMap('failedUpdateOrgDataType', Type\FailedUpdateOrgDataType::class),
            new ClassMap('failedUpdateOrgDataListType', Type\FailedUpdateOrgDataListType::class),
            new ClassMap('updateOrganizationResponseType', Type\UpdateOrganizationResponseType::class),
            new ClassMap('deleteOrgDataType', Type\DeleteOrgDataType::class),
            new ClassMap('deleteOrganizationRequestType', Type\DeleteOrganizationRequestType::class),
            new ClassMap('failedDeleteOrgDataType', Type\FailedDeleteOrgDataType::class),
            new ClassMap('failedDeleteOrgDataListType', Type\FailedDeleteOrgDataListType::class),
            new ClassMap('deleteOrganizationResponseType', Type\DeleteOrganizationResponseType::class),
            new ClassMap('SimpleQueryType', Type\SimpleQueryType::class),
            new ClassMap('OrgTypeList', Type\OrgTypeList::class),
            new ClassMap('orgCustomAttributeQueryType', Type\OrgCustomAttributeQueryType::class),
            new ClassMap('orgCustomAttributesQueryListType', Type\OrgCustomAttributesQueryListType::class),
            new ClassMap('DateTimeQueryType', Type\DateTimeQueryType::class),
            new ClassMap('organizationQueryParametersType', Type\OrganizationQueryParametersType::class),
            new ClassMap('getOrganizationsQueryRequestType', Type\GetOrganizationsQueryRequestType::class),
            new ClassMap('organizationDetailDataType', Type\OrganizationDetailDataType::class),
            new ClassMap('getOrganizationsQueryResponseDataType', Type\GetOrganizationsQueryResponseDataType::class),
            new ClassMap('getOrganizationsQueryResponseType', Type\GetOrganizationsQueryResponseType::class),
            new ClassMap('getOrganizationCountRequestType', Type\GetOrganizationCountRequestType::class),
            new ClassMap('getOrganizationCountResponseDataType', Type\GetOrganizationCountResponseDataType::class),
            new ClassMap('getOrganizationCountResponseType', Type\GetOrganizationCountResponseType::class),
            new ClassMap('getParentOrganizationsRequestType', Type\GetParentOrganizationsRequestType::class),
            new ClassMap('getParentOrganizationsResponseType', Type\GetParentOrganizationsResponseType::class),
            new ClassMap('getSubOrganizationsRequestType', Type\GetSubOrganizationsRequestType::class),
            new ClassMap('getSubOrganizationsResponseType', Type\GetSubOrganizationsResponseType::class),
            new ClassMap('userCustomAttributeQueryType', Type\UserCustomAttributeQueryType::class),
            new ClassMap('userCustomAttributesQueryListType', Type\UserCustomAttributesQueryListType::class),
            new ClassMap('userQueryParametersType', Type\UserQueryParametersType::class),
            new ClassMap('getUsersQueryRequestType', Type\GetUsersQueryRequestType::class),
            new ClassMap('userPKType', Type\UserPKType::class),
            new ClassMap('userIdentifierType', Type\UserIdentifierType::class),
            new ClassMap('userOrganizationRolesListType', Type\UserOrganizationRolesListType::class),
            new ClassMap('userOrganizationType', Type\UserOrganizationType::class),
            new ClassMap('userOrganizationsListType', Type\UserOrganizationsListType::class),
            new ClassMap('userDetailDataType', Type\UserDetailDataType::class),
            new ClassMap('getUsersQueryResponseDataType', Type\GetUsersQueryResponseDataType::class),
            new ClassMap('getUsersQueryResponseType', Type\GetUsersQueryResponseType::class),
            new ClassMap('getUserCountRequestType', Type\GetUserCountRequestType::class),
            new ClassMap('getUserCountResponseDataType', Type\GetUserCountResponseDataType::class),
            new ClassMap('getUserCountResponseType', Type\GetUserCountResponseType::class),
            new ClassMap('rolePKType', Type\RolePKType::class),
            new ClassMap('roleIdentifierType', Type\RoleIdentifierType::class),
            new ClassMap('createUserOrganizationRolesListType', Type\CreateUserOrganizationRolesListType::class),
            new ClassMap('createUserOrganizationType', Type\CreateUserOrganizationType::class),
            new ClassMap('createUserOrganizationsListType', Type\CreateUserOrganizationsListType::class),
            new ClassMap('createUserDataType', Type\CreateUserDataType::class),
            new ClassMap('createUserRequestType', Type\CreateUserRequestType::class),
            new ClassMap('failedCreateUserDataType', Type\FailedCreateUserDataType::class),
            new ClassMap('failedCreateUserDataListType', Type\FailedCreateUserDataListType::class),
            new ClassMap('createdUserDataListType', Type\CreatedUserDataListType::class),
            new ClassMap('createUserResponseType', Type\CreateUserResponseType::class),
            new ClassMap('updateUserOrganizationRolesListType', Type\UpdateUserOrganizationRolesListType::class),
            new ClassMap('updateUserOrganizationType', Type\UpdateUserOrganizationType::class),
            new ClassMap('updateUserOrganizationsListType', Type\UpdateUserOrganizationsListType::class),
            new ClassMap('updateUserDataType', Type\UpdateUserDataType::class),
            new ClassMap('updateUserRequestType', Type\UpdateUserRequestType::class),
            new ClassMap('failedUpdateUserDataType', Type\FailedUpdateUserDataType::class),
            new ClassMap('failedUpdateUserDataListType', Type\FailedUpdateUserDataListType::class),
            new ClassMap('updateUserResponseType', Type\UpdateUserResponseType::class),
            new ClassMap('updateUserRolesListType', Type\UpdateUserRolesListType::class),
            new ClassMap('updateUserRolesOrganizationDataType', Type\UpdateUserRolesOrganizationDataType::class),
            new ClassMap('updateUserRolesDataType', Type\UpdateUserRolesDataType::class),
            new ClassMap('updateUserRolesRequestType', Type\UpdateUserRolesRequestType::class),
            new ClassMap('failedUpdateUserRolesDataType', Type\FailedUpdateUserRolesDataType::class),
            new ClassMap('failedUpdateUserRolesDataListType', Type\FailedUpdateUserRolesDataListType::class),
            new ClassMap('updateUserRolesResponseType', Type\UpdateUserRolesResponseType::class),
            new ClassMap('deleteUserRequestType', Type\DeleteUserRequestType::class),
            new ClassMap('failedDeleteUserDataType', Type\FailedDeleteUserDataType::class),
            new ClassMap('failedDeleteUserDataListType', Type\FailedDeleteUserDataListType::class),
            new ClassMap('deleteUserResponseType', Type\DeleteUserResponseType::class),
            new ClassMap('relateOrganizationsDataType', Type\RelateOrganizationsDataType::class),
            new ClassMap('relateOrganizationsRequestType', Type\RelateOrganizationsRequestType::class),
            new ClassMap('failedRelateOrganizationsDataType', Type\FailedRelateOrganizationsDataType::class),
            new ClassMap('failedRelateOrganizationsDataListType', Type\FailedRelateOrganizationsDataListType::class),
            new ClassMap('relateOrganizationsResponseType', Type\RelateOrganizationsResponseType::class),
            new ClassMap('getRelatedOrganizationsRequestType', Type\GetRelatedOrganizationsRequestType::class),
            new ClassMap('getRelatedOrganizationsResponseType', Type\GetRelatedOrganizationsResponseType::class),
            new ClassMap('getUserPermissionsRequestType', Type\GetUserPermissionsRequestType::class),
            new ClassMap('permissionListType', Type\PermissionListType::class),
            new ClassMap('getUserPermissionsResponseDataType', Type\GetUserPermissionsResponseDataType::class),
            new ClassMap('getUserPermissionsResponseType', Type\GetUserPermissionsResponseType::class),
        ]);
    }


}

