<?php

namespace Flexnet\EntitlementOrderService;

use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;

class EntitlementOrderServiceClassmap
{
    public static function getCollection(): \Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('idType', Type\IdType::class),
            new ClassMap('productPKType', Type\ProductPKType::class),
            new ClassMap('productIdentifierType', Type\ProductIdentifierType::class),
            new ClassMap('partNumberPKType', Type\PartNumberPKType::class),
            new ClassMap('partNumberIdentifierType', Type\PartNumberIdentifierType::class),
            new ClassMap('licenseModelPKType', Type\LicenseModelPKType::class),
            new ClassMap('licenseModelIdentifierType', Type\LicenseModelIdentifierType::class),
            new ClassMap('attributeDescriptorType', Type\AttributeDescriptorType::class),
            new ClassMap('attributeDescriptorDataType', Type\AttributeDescriptorDataType::class),
            new ClassMap('policyTermType', Type\PolicyTermType::class),
            new ClassMap('policyDataType', Type\PolicyDataType::class),
            new ClassMap('extraActivationDataType', Type\ExtraActivationDataType::class),
            new ClassMap('cancelLicensePolicyDataType', Type\CancelLicensePolicyDataType::class),
            new ClassMap('virtualLicensePolicyDataType', Type\VirtualLicensePolicyDataType::class),
            new ClassMap('advancedReinstallPolicyType', Type\AdvancedReinstallPolicyType::class),
            new ClassMap('reinstallPolicyDataType', Type\ReinstallPolicyDataType::class),
            new ClassMap('acpiGenerationIdLicensePolicyDataType', Type\AcpiGenerationIdLicensePolicyDataType::class),
            new ClassMap('policyAttributesListType', Type\PolicyAttributesListType::class),
            new ClassMap('DurationType', Type\DurationType::class),
            new ClassMap('versionDateAttributesType', Type\VersionDateAttributesType::class),
            new ClassMap('entitledProductDataType', Type\EntitledProductDataType::class),
            new ClassMap('entitledProductDataListType', Type\EntitledProductDataListType::class),
            new ClassMap('accountPKType', Type\AccountPKType::class),
            new ClassMap('accountIdentifierType', Type\AccountIdentifierType::class),
            new ClassMap('userPKType', Type\UserPKType::class),
            new ClassMap('userIdentifierType', Type\UserIdentifierType::class),
            new ClassMap('channelPartnerDataType', Type\ChannelPartnerDataType::class),
            new ClassMap('channelPartnerDataListType', Type\ChannelPartnerDataListType::class),
            new ClassMap('createBulkEntitlementDataType', Type\CreateBulkEntitlementDataType::class),
            new ClassMap('licenseTechnologyPKType', Type\LicenseTechnologyPKType::class),
            new ClassMap('licenseTechnologyIdentifierType', Type\LicenseTechnologyIdentifierType::class),
            new ClassMap('bulkEntitlementDataType', Type\BulkEntitlementDataType::class),
            new ClassMap('createBulkEntitlementRequestType', Type\CreateBulkEntitlementRequestType::class),
            new ClassMap('StatusInfoType', Type\StatusInfoType::class),
            new ClassMap('failedBulkEntitlementDataType', Type\FailedBulkEntitlementDataType::class),
            new ClassMap('failedBulkEntitlementDataListType', Type\FailedBulkEntitlementDataListType::class),
            new ClassMap('createdBulkEntitlementDataType', Type\CreatedBulkEntitlementDataType::class),
            new ClassMap('createdBulkEntitlementDataListType', Type\CreatedBulkEntitlementDataListType::class),
            new ClassMap('createBulkEntitlementResponseType', Type\CreateBulkEntitlementResponseType::class),
            new ClassMap('createEntitlementLineItemDataType', Type\CreateEntitlementLineItemDataType::class),
            new ClassMap('productCategoryDataType', Type\ProductCategoryDataType::class),
            new ClassMap('entitlementLineItemPKType', Type\EntitlementLineItemPKType::class),
            new ClassMap('entitlementLineItemIdentifierType', Type\EntitlementLineItemIdentifierType::class),
            new ClassMap('entitlementLineItemDataType', Type\EntitlementLineItemDataType::class),
            new ClassMap('createMaintenanceLineItemDataType', Type\CreateMaintenanceLineItemDataType::class),
            new ClassMap('maintenanceLineItemDataType', Type\MaintenanceLineItemDataType::class),
            new ClassMap('createSimpleEntitlementDataType', Type\CreateSimpleEntitlementDataType::class),
            new ClassMap('createSimpleEntitlementRequestType', Type\CreateSimpleEntitlementRequestType::class),
            new ClassMap('failedSimpleEntitlementDataType', Type\FailedSimpleEntitlementDataType::class),
            new ClassMap('failedSimpleEntitlementDataListType', Type\FailedSimpleEntitlementDataListType::class),
            new ClassMap('createdSimpleEntitlementDataType', Type\CreatedSimpleEntitlementDataType::class),
            new ClassMap('createdSimpleEntitlementDataListType', Type\CreatedSimpleEntitlementDataListType::class),
            new ClassMap('createSimpleEntitlementResponseType', Type\CreateSimpleEntitlementResponseType::class),
            new ClassMap('entitlementPKType', Type\EntitlementPKType::class),
            new ClassMap('entitlementIdentifierType', Type\EntitlementIdentifierType::class),
            new ClassMap('deleteEntitlementDataType', Type\DeleteEntitlementDataType::class),
            new ClassMap('deleteEntitlementRequestType', Type\DeleteEntitlementRequestType::class),
            new ClassMap('failedDeleteEntitlementDataType', Type\FailedDeleteEntitlementDataType::class),
            new ClassMap('failedDeleteEntitlementDataListType', Type\FailedDeleteEntitlementDataListType::class),
            new ClassMap('deleteEntitlementResponseType', Type\DeleteEntitlementResponseType::class),
            new ClassMap('webRegKeyDataType', Type\WebRegKeyDataType::class),
            new ClassMap('addWebRegKeyDataType', Type\AddWebRegKeyDataType::class),
            new ClassMap('addWebRegKeyRequestType', Type\AddWebRegKeyRequestType::class),
            new ClassMap('webRegKeyDataListType', Type\WebRegKeyDataListType::class),
            new ClassMap('failedAddWebRegKeyDataType', Type\FailedAddWebRegKeyDataType::class),
            new ClassMap('failedAddWebRegKeyDataListType', Type\FailedAddWebRegKeyDataListType::class),
            new ClassMap('addWebRegKeyResponseType', Type\AddWebRegKeyResponseType::class),
            new ClassMap('updateEntitledProductDataListType', Type\UpdateEntitledProductDataListType::class),
            new ClassMap('updateBulkEntitlementDataType', Type\UpdateBulkEntitlementDataType::class),
            new ClassMap('updateBulkEntitlementRequestType', Type\UpdateBulkEntitlementRequestType::class),
            new ClassMap('failedUpdateBulkEntitlementDataType', Type\FailedUpdateBulkEntitlementDataType::class),
            new ClassMap('failedUpdateBulkEntitlementDataListType', Type\FailedUpdateBulkEntitlementDataListType::class),
            new ClassMap('updateBulkEntitlementResponseType', Type\UpdateBulkEntitlementResponseType::class),
            new ClassMap('updateSimpleEntitlementDataType', Type\UpdateSimpleEntitlementDataType::class),
            new ClassMap('updateSimpleEntitlementRequestType', Type\UpdateSimpleEntitlementRequestType::class),
            new ClassMap('failedUpdateSimpleEntitlementDataType', Type\FailedUpdateSimpleEntitlementDataType::class),
            new ClassMap('failedUpdateSimpleEntitlementDataListType', Type\FailedUpdateSimpleEntitlementDataListType::class),
            new ClassMap('updateSimpleEntitlementResponseType', Type\UpdateSimpleEntitlementResponseType::class),
            new ClassMap('addEntitlementLineItemDataType', Type\AddEntitlementLineItemDataType::class),
            new ClassMap('addOnlyEntitlementLineItemRequestType', Type\AddOnlyEntitlementLineItemRequestType::class),
            new ClassMap('failedAddEntitlementLineItemDataType', Type\FailedAddEntitlementLineItemDataType::class),
            new ClassMap('failedAddEntitlementLineItemDataListType', Type\FailedAddEntitlementLineItemDataListType::class),
            new ClassMap('addedEntitlementLineItemDataType', Type\AddedEntitlementLineItemDataType::class),
            new ClassMap('addedEntitlementLineItemDataListType', Type\AddedEntitlementLineItemDataListType::class),
            new ClassMap('addOnlyEntitlementLineItemResponseType', Type\AddOnlyEntitlementLineItemResponseType::class),
            new ClassMap('replaceOnlyEntitlementLineItemRequestType', Type\ReplaceOnlyEntitlementLineItemRequestType::class),
            new ClassMap('replaceOnlyEntitlementLineItemResponseType', Type\ReplaceOnlyEntitlementLineItemResponseType::class),
            new ClassMap('removeEntitlementLineItemDataType', Type\RemoveEntitlementLineItemDataType::class),
            new ClassMap('removeEntitlementLineItemRequestType', Type\RemoveEntitlementLineItemRequestType::class),
            new ClassMap('failedRemoveEntitlementLineItemDataType', Type\FailedRemoveEntitlementLineItemDataType::class),
            new ClassMap('failedRemoveEntitlementLineItemDataListType', Type\FailedRemoveEntitlementLineItemDataListType::class),
            new ClassMap('removeEntitlementLineItemResponseType', Type\RemoveEntitlementLineItemResponseType::class),
            new ClassMap('updateLineItemDataType', Type\UpdateLineItemDataType::class),
            new ClassMap('updateMaintenanceLineItemDataType', Type\UpdateMaintenanceLineItemDataType::class),
            new ClassMap('updateEntitlementLineItemDataType', Type\UpdateEntitlementLineItemDataType::class),
            new ClassMap('updateEntitlementLineItemRequestType', Type\UpdateEntitlementLineItemRequestType::class),
            new ClassMap('failedUpdateEntitlementLineItemDataType', Type\FailedUpdateEntitlementLineItemDataType::class),
            new ClassMap('failedUpdateEntitlementLineItemDataListType', Type\FailedUpdateEntitlementLineItemDataListType::class),
            new ClassMap('updateEntitlementLineItemResponseType', Type\UpdateEntitlementLineItemResponseType::class),
            new ClassMap('SimpleQueryType', Type\SimpleQueryType::class),
            new ClassMap('DateQueryType', Type\DateQueryType::class),
            new ClassMap('StateQueryType', Type\StateQueryType::class),
            new ClassMap('PartnerTierQueryType', Type\PartnerTierQueryType::class),
            new ClassMap('entCustomAttributeQueryType', Type\EntCustomAttributeQueryType::class),
            new ClassMap('entCustomAttributesQueryListType', Type\EntCustomAttributesQueryListType::class),
            new ClassMap('searchEntitlementDataType', Type\SearchEntitlementDataType::class),
            new ClassMap('searchEntitlementRequestType', Type\SearchEntitlementRequestType::class),
            new ClassMap('simpleEntitlementDataType', Type\SimpleEntitlementDataType::class),
            new ClassMap('entitlementDataType', Type\EntitlementDataType::class),
            new ClassMap('searchEntitlementResponseType', Type\SearchEntitlementResponseType::class),
            new ClassMap('NumberQueryType', Type\NumberQueryType::class),
            new ClassMap('customAttributeQueryType', Type\CustomAttributeQueryType::class),
            new ClassMap('customAttributesQueryListType', Type\CustomAttributesQueryListType::class),
            new ClassMap('searchBulkEntitlementDataType', Type\SearchBulkEntitlementDataType::class),
            new ClassMap('customAttributeDescriptorType', Type\CustomAttributeDescriptorType::class),
            new ClassMap('customAttributeDescriptorDataType', Type\CustomAttributeDescriptorDataType::class),
            new ClassMap('bulkEntitlementResponseConfigRequestType', Type\BulkEntitlementResponseConfigRequestType::class),
            new ClassMap('getBulkEntitlementPropertiesRequestType', Type\GetBulkEntitlementPropertiesRequestType::class),
            new ClassMap('bulkEntitlementPropertiesType', Type\BulkEntitlementPropertiesType::class),
            new ClassMap('getBulkEntitlementPropertiesResponseType', Type\GetBulkEntitlementPropertiesResponseType::class),
            new ClassMap('getBulkEntitlementCountRequestType', Type\GetBulkEntitlementCountRequestType::class),
            new ClassMap('getBulkEntitlementCountResponseType', Type\GetBulkEntitlementCountResponseType::class),
            new ClassMap('DateTimeQueryType', Type\DateTimeQueryType::class),
            new ClassMap('lineItemCustomAttributeQueryType', Type\LineItemCustomAttributeQueryType::class),
            new ClassMap('lineItemCustomAttributesQueryListType', Type\LineItemCustomAttributesQueryListType::class),
            new ClassMap('searchActivatableItemDataType', Type\SearchActivatableItemDataType::class),
            new ClassMap('searchActivatableItemRequestType', Type\SearchActivatableItemRequestType::class),
            new ClassMap('activatableItemDetailType', Type\ActivatableItemDetailType::class),
            new ClassMap('searchActivatableItemResponseType', Type\SearchActivatableItemResponseType::class),
            new ClassMap('entitlementLineItemResponseConfigRequestType', Type\EntitlementLineItemResponseConfigRequestType::class),
            new ClassMap('searchEntitlementLineItemPropertiesRequestType', Type\SearchEntitlementLineItemPropertiesRequestType::class),
            new ClassMap('maintenanceLineItemPropertiesType', Type\MaintenanceLineItemPropertiesType::class),
            new ClassMap('entitlementLineItemPropertiesType', Type\EntitlementLineItemPropertiesType::class),
            new ClassMap('searchEntitlementLineItemPropertiesResponseType', Type\SearchEntitlementLineItemPropertiesResponseType::class),
            new ClassMap('searchMaintenanceLineItemDataType', Type\SearchMaintenanceLineItemDataType::class),
            new ClassMap('entitlementMaintenanceLineItemResponseConfigRequestType', Type\EntitlementMaintenanceLineItemResponseConfigRequestType::class),
            new ClassMap('searchEntitlementMaintenanceLineItemPropertiesRequestType', Type\SearchEntitlementMaintenanceLineItemPropertiesRequestType::class),
            new ClassMap('entitlementMaintenanceLineItemPropertiesType', Type\EntitlementMaintenanceLineItemPropertiesType::class),
            new ClassMap('searchEntitlementMaintenanceLineItemPropertiesResponseType', Type\SearchEntitlementMaintenanceLineItemPropertiesResponseType::class),
            new ClassMap('getEntitlementCountRequestType', Type\GetEntitlementCountRequestType::class),
            new ClassMap('getEntitlementCountResponseType', Type\GetEntitlementCountResponseType::class),
            new ClassMap('getActivatableItemCountRequestType', Type\GetActivatableItemCountRequestType::class),
            new ClassMap('getActivatableItemCountResponseType', Type\GetActivatableItemCountResponseType::class),
            new ClassMap('getExactAvailableCountRequestType', Type\GetExactAvailableCountRequestType::class),
            new ClassMap('getExactAvailableCountResponseType', Type\GetExactAvailableCountResponseType::class),
            new ClassMap('entitlementStateDataType', Type\EntitlementStateDataType::class),
            new ClassMap('setEntitlementStateRequestType', Type\SetEntitlementStateRequestType::class),
            new ClassMap('failedEntitlementStateDataType', Type\FailedEntitlementStateDataType::class),
            new ClassMap('failedEntitlementStateDataListType', Type\FailedEntitlementStateDataListType::class),
            new ClassMap('setEntitlementStateResponseType', Type\SetEntitlementStateResponseType::class),
            new ClassMap('getWebRegKeyCountRequestType', Type\GetWebRegKeyCountRequestType::class),
            new ClassMap('webRegKeyCountDataType', Type\WebRegKeyCountDataType::class),
            new ClassMap('getWebRegKeyCountResponseType', Type\GetWebRegKeyCountResponseType::class),
            new ClassMap('getWebRegKeysQueryRequestType', Type\GetWebRegKeysQueryRequestType::class),
            new ClassMap('webRegKeyType', Type\WebRegKeyType::class),
            new ClassMap('webRegKeysDataListType', Type\WebRegKeysDataListType::class),
            new ClassMap('getWebRegKeysQueryResponseType', Type\GetWebRegKeysQueryResponseType::class),
            new ClassMap('getEntitlementAttributesRequestType', Type\GetEntitlementAttributesRequestType::class),
            new ClassMap('valueType', Type\ValueType::class),
            new ClassMap('attributeMetaDescriptorType', Type\AttributeMetaDescriptorType::class),
            new ClassMap('attributeMetaDescriptorDataType', Type\AttributeMetaDescriptorDataType::class),
            new ClassMap('policyAttributesDataType', Type\PolicyAttributesDataType::class),
            new ClassMap('getEntitlementAttributesResponseType', Type\GetEntitlementAttributesResponseType::class),
            new ClassMap('expirationTermsDataType', Type\ExpirationTermsDataType::class),
            new ClassMap('renewParametersDataType', Type\RenewParametersDataType::class),
            new ClassMap('renewLineItemDataType', Type\RenewLineItemDataType::class),
            new ClassMap('renewEntitlementDataType', Type\RenewEntitlementDataType::class),
            new ClassMap('renewEntitlementRequestType', Type\RenewEntitlementRequestType::class),
            new ClassMap('failedRenewEntitlementDataType', Type\FailedRenewEntitlementDataType::class),
            new ClassMap('failedRenewEntitlementDataListType', Type\FailedRenewEntitlementDataListType::class),
            new ClassMap('newEntitlementLineItemDataType', Type\NewEntitlementLineItemDataType::class),
            new ClassMap('renewedEntitlementLineItemDataType', Type\RenewedEntitlementLineItemDataType::class),
            new ClassMap('createdRenewEntitlementDataType', Type\CreatedRenewEntitlementDataType::class),
            new ClassMap('createdRenewEntitlementDataListType', Type\CreatedRenewEntitlementDataListType::class),
            new ClassMap('renewEntitlementResponseType', Type\RenewEntitlementResponseType::class),
            new ClassMap('lineItemLifeCycleDataType', Type\LineItemLifeCycleDataType::class),
            new ClassMap('entitlementLifeCycleDataType', Type\EntitlementLifeCycleDataType::class),
            new ClassMap('EntitlementLifeCycleRequestType', Type\EntitlementLifeCycleRequestType::class),
            new ClassMap('failedEntitlementLifeCycleDataType', Type\FailedEntitlementLifeCycleDataType::class),
            new ClassMap('failedEntitlementLifeCycleDataListType', Type\FailedEntitlementLifeCycleDataListType::class),
            new ClassMap('lifeCycleLineItemDataType', Type\LifeCycleLineItemDataType::class),
            new ClassMap('createdEntitlementLifeCycleDataType', Type\CreatedEntitlementLifeCycleDataType::class),
            new ClassMap('createdEntitlementLifeCycleDataListType', Type\CreatedEntitlementLifeCycleDataListType::class),
            new ClassMap('EntitlementLifeCycleResponseType', Type\EntitlementLifeCycleResponseType::class),
            new ClassMap('idListType', Type\IdListType::class),
            new ClassMap('mapEntitlementsToUserRequestType', Type\MapEntitlementsToUserRequestType::class),
            new ClassMap('failedIdDataType', Type\FailedIdDataType::class),
            new ClassMap('failedMapEntitlementsToUserDataListType', Type\FailedMapEntitlementsToUserDataListType::class),
            new ClassMap('mapEntitlementsToUserResponseType', Type\MapEntitlementsToUserResponseType::class),
            new ClassMap('emailContactListType', Type\EmailContactListType::class),
            new ClassMap('emailEntitlementRequestType', Type\EmailEntitlementRequestType::class),
            new ClassMap('emailEntitlementResponseType', Type\EmailEntitlementResponseType::class),
            new ClassMap('emailActivatableItemRequestType', Type\EmailActivatableItemRequestType::class),
            new ClassMap('emailActivatableItemResponseType', Type\EmailActivatableItemResponseType::class),
            new ClassMap('lineItemStateDataType', Type\LineItemStateDataType::class),
            new ClassMap('setLineItemStateRequestType', Type\SetLineItemStateRequestType::class),
            new ClassMap('failedLineItemStateDataType', Type\FailedLineItemStateDataType::class),
            new ClassMap('failedLineItemStateDataListType', Type\FailedLineItemStateDataListType::class),
            new ClassMap('setLineItemStateResponseType', Type\SetLineItemStateResponseType::class),
            new ClassMap('maintenanceLineItemStateDataType', Type\MaintenanceLineItemStateDataType::class),
            new ClassMap('setMaintenanceLineItemStateRequestType', Type\SetMaintenanceLineItemStateRequestType::class),
            new ClassMap('failedMaintenanceLineItemStateDataType', Type\FailedMaintenanceLineItemStateDataType::class),
            new ClassMap('failedMaintenanceLineItemStateDataListType', Type\FailedMaintenanceLineItemStateDataListType::class),
            new ClassMap('setMaintenanceLineItemStateResponseType', Type\SetMaintenanceLineItemStateResponseType::class),
            new ClassMap('webRegKeysListType', Type\WebRegKeysListType::class),
            new ClassMap('deleteWebRegKeyRequestType', Type\DeleteWebRegKeyRequestType::class),
            new ClassMap('failedDeleteWebRegKeyDataType', Type\FailedDeleteWebRegKeyDataType::class),
            new ClassMap('failedDeleteWebRegKeyListType', Type\FailedDeleteWebRegKeyListType::class),
            new ClassMap('deleteWebRegKeyResponseType', Type\DeleteWebRegKeyResponseType::class),
            new ClassMap('mergeEntitlementsRequestType', Type\MergeEntitlementsRequestType::class),
            new ClassMap('mergeEntitlementsResponseType', Type\MergeEntitlementsResponseType::class),
            new ClassMap('transferEntitlementInfoType', Type\TransferEntitlementInfoType::class),
            new ClassMap('transferEntitlementsListType', Type\TransferEntitlementsListType::class),
            new ClassMap('transferEntitlementsRequestType', Type\TransferEntitlementsRequestType::class),
            new ClassMap('transferredLineItemMapType', Type\TransferredLineItemMapType::class),
            new ClassMap('transferredEntitlementDataType', Type\TransferredEntitlementDataType::class),
            new ClassMap('transferredEntitlementsListType', Type\TransferredEntitlementsListType::class),
            new ClassMap('failedTransferEntitlementDataType', Type\FailedTransferEntitlementDataType::class),
            new ClassMap('failedTransferEntitlementListType', Type\FailedTransferEntitlementListType::class),
            new ClassMap('transferEntitlementsResponseType', Type\TransferEntitlementsResponseType::class),
            new ClassMap('transferLineItemInfoType', Type\TransferLineItemInfoType::class),
            new ClassMap('transferLineItemsListType', Type\TransferLineItemsListType::class),
            new ClassMap('transferLineItemsRequestType', Type\TransferLineItemsRequestType::class),
            new ClassMap('transferredLineItemDataType', Type\TransferredLineItemDataType::class),
            new ClassMap('transferredLineItemsListType', Type\TransferredLineItemsListType::class),
            new ClassMap('failedTransferLineItemDataType', Type\FailedTransferLineItemDataType::class),
            new ClassMap('failedTransferLineItemListType', Type\FailedTransferLineItemListType::class),
            new ClassMap('transferLineItemsResponseType', Type\TransferLineItemsResponseType::class),
            new ClassMap('featurePKType', Type\FeaturePKType::class),
            new ClassMap('featureIdentifierType', Type\FeatureIdentifierType::class),
            new ClassMap('featureListType', Type\FeatureListType::class),
            new ClassMap('featureBundlePKType', Type\FeatureBundlePKType::class),
            new ClassMap('featureBundleIdentifierType', Type\FeatureBundleIdentifierType::class),
            new ClassMap('featureBundleListType', Type\FeatureBundleListType::class),
            new ClassMap('productListType', Type\ProductListType::class),
            new ClassMap('licenseModelListType', Type\LicenseModelListType::class),
            new ClassMap('entitlementListType', Type\EntitlementListType::class),
            new ClassMap('getStateChangeHistoryRequestType', Type\GetStateChangeHistoryRequestType::class),
            new ClassMap('stateChangeDataType', Type\StateChangeDataType::class),
            new ClassMap('featureStateChangeDataType', Type\FeatureStateChangeDataType::class),
            new ClassMap('featureStateChangeListType', Type\FeatureStateChangeListType::class),
            new ClassMap('featureBundleStateChangeDataType', Type\FeatureBundleStateChangeDataType::class),
            new ClassMap('featureBundleStateChangeListType', Type\FeatureBundleStateChangeListType::class),
            new ClassMap('productStateChangeDataType', Type\ProductStateChangeDataType::class),
            new ClassMap('productStateChangeListType', Type\ProductStateChangeListType::class),
            new ClassMap('licenseModelStateChangeDataType', Type\LicenseModelStateChangeDataType::class),
            new ClassMap('licenseModelStateChangeListType', Type\LicenseModelStateChangeListType::class),
            new ClassMap('entitlementStateChangeDataType', Type\EntitlementStateChangeDataType::class),
            new ClassMap('entitlementStateChangeListType', Type\EntitlementStateChangeListType::class),
            new ClassMap('stateChangeResponseType', Type\StateChangeResponseType::class),
            new ClassMap('getStateChangeHistoryResponseType', Type\GetStateChangeHistoryResponseType::class),
            new ClassMap('linkMaintenanceLineItemDataType', Type\LinkMaintenanceLineItemDataType::class),
            new ClassMap('linkMaintenanceLineItemListType', Type\LinkMaintenanceLineItemListType::class),
            new ClassMap('linkMaintenanceLineItemRequestType', Type\LinkMaintenanceLineItemRequestType::class),
            new ClassMap('failedLinkMaintenanceLineItemDataType', Type\FailedLinkMaintenanceLineItemDataType::class),
            new ClassMap('failedLinkMaintenanceLineItemListType', Type\FailedLinkMaintenanceLineItemListType::class),
            new ClassMap('linkMaintenanceLineItemResponseType', Type\LinkMaintenanceLineItemResponseType::class),
            new ClassMap('splitLineItemInfoType', Type\SplitLineItemInfoType::class),
            new ClassMap('splitLineItemListType', Type\SplitLineItemListType::class),
            new ClassMap('splitLineItemRequestType', Type\SplitLineItemRequestType::class),
            new ClassMap('splitLineItemDataType', Type\SplitLineItemDataType::class),
            new ClassMap('splitLineItemResponseListType', Type\SplitLineItemResponseListType::class),
            new ClassMap('failedSplitLineItemDataType', Type\FailedSplitLineItemDataType::class),
            new ClassMap('failedSplitLineItemListType', Type\FailedSplitLineItemListType::class),
            new ClassMap('splitLineItemResponseType', Type\SplitLineItemResponseType::class),
            new ClassMap('splitBulkEntitlementInfoType', Type\SplitBulkEntitlementInfoType::class),
            new ClassMap('splitBulkEntitlementListType', Type\SplitBulkEntitlementListType::class),
            new ClassMap('splitBulkEntitlementRequestType', Type\SplitBulkEntitlementRequestType::class),
            new ClassMap('splitBulkEntitlementDataType', Type\SplitBulkEntitlementDataType::class),
            new ClassMap('splitBulkEntitlementResponseListType', Type\SplitBulkEntitlementResponseListType::class),
            new ClassMap('failedSplitBulkEntitlementDataType', Type\FailedSplitBulkEntitlementDataType::class),
            new ClassMap('failedSplitBulkEntitlementListType', Type\FailedSplitBulkEntitlementListType::class),
            new ClassMap('splitBulkEntitlementResponseType', Type\SplitBulkEntitlementResponseType::class),
            new ClassMap('getMatchingLineItemInfoType', Type\GetMatchingLineItemInfoType::class),
            new ClassMap('getMatchingLineItemsListType', Type\GetMatchingLineItemsListType::class),
            new ClassMap('getMatchingLineItemsRequestType', Type\GetMatchingLineItemsRequestType::class),
            new ClassMap('matchingLineItemDataType', Type\MatchingLineItemDataType::class),
            new ClassMap('getMatchingLineItemsResponseListType', Type\GetMatchingLineItemsResponseListType::class),
            new ClassMap('failedMatchingLineItemDataType', Type\FailedMatchingLineItemDataType::class),
            new ClassMap('failedMatchingLineItemsListType', Type\FailedMatchingLineItemsListType::class),
            new ClassMap('getMatchingLineItemsResponseType', Type\GetMatchingLineItemsResponseType::class),
            new ClassMap('getMatchingBulkEntInfoType', Type\GetMatchingBulkEntInfoType::class),
            new ClassMap('getMatchingBulkEntsListType', Type\GetMatchingBulkEntsListType::class),
            new ClassMap('getMatchingBulkEntsRequestType', Type\GetMatchingBulkEntsRequestType::class),
            new ClassMap('matchingBulkEntDataType', Type\MatchingBulkEntDataType::class),
            new ClassMap('getMatchingBulkEntsResponseListType', Type\GetMatchingBulkEntsResponseListType::class),
            new ClassMap('failedMatchingBulkEntDataType', Type\FailedMatchingBulkEntDataType::class),
            new ClassMap('failedMatchingBulkEntsListType', Type\FailedMatchingBulkEntsListType::class),
            new ClassMap('getMatchingBulkEntsResponseType', Type\GetMatchingBulkEntsResponseType::class),
            new ClassMap('deleteMaintenanceLineItemDataType', Type\DeleteMaintenanceLineItemDataType::class),
            new ClassMap('deleteMaintenanceLineItemRequestType', Type\DeleteMaintenanceLineItemRequestType::class),
            new ClassMap('failedDeleteMaintenanceLineItemDataType', Type\FailedDeleteMaintenanceLineItemDataType::class),
            new ClassMap('failedDeleteMaintenanceLineItemDataListType', Type\FailedDeleteMaintenanceLineItemDataListType::class),
            new ClassMap('deleteMaintenanceLineItemResponseType', Type\DeleteMaintenanceLineItemResponseType::class),
            new ClassMap('unlinkMaintenanceLineItemDataType', Type\UnlinkMaintenanceLineItemDataType::class),
            new ClassMap('unlinkMaintenanceLineItemListType', Type\UnlinkMaintenanceLineItemListType::class),
            new ClassMap('unlinkMaintenanceLineItemRequestType', Type\UnlinkMaintenanceLineItemRequestType::class),
            new ClassMap('failedUnlinkMaintenanceLineItemDataType', Type\FailedUnlinkMaintenanceLineItemDataType::class),
            new ClassMap('failedUnlinkMaintenanceLineItemListType', Type\FailedUnlinkMaintenanceLineItemListType::class),
            new ClassMap('unlinkMaintenanceLineItemResponseType', Type\UnlinkMaintenanceLineItemResponseType::class),
        );
    }
}
