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
 * @method static \Flexsim\FlexnetOperations\Type\CreateBulkEntitlementResponseType createBulkEntitlement(Flexsim\FlexnetOperations\Type\CreateBulkEntitlementRequestType $createBulkEntitlementRequest)
 * @method static \Flexsim\FlexnetOperations\Type\CreateSimpleEntitlementResponseType createSimpleEntitlement(Flexsim\FlexnetOperations\Type\CreateSimpleEntitlementRequestType $createSimpleEntitlementRequest)
 * @method static \Flexsim\FlexnetOperations\Type\DeleteEntitlementResponseType deleteEntitlement(Flexsim\FlexnetOperations\Type\DeleteEntitlementRequestType $deleteEntitlementRequest)
 * @method static \Flexsim\FlexnetOperations\Type\AddWebRegKeyResponseType createWebRegKey(Flexsim\FlexnetOperations\Type\AddWebRegKeyRequestType $addWebRegKeyRequest)
 * @method static \Flexsim\FlexnetOperations\Type\UpdateBulkEntitlementResponseType updateBulkEntitlement(Flexsim\FlexnetOperations\Type\UpdateBulkEntitlementRequestType $updateBulkEntitlementRequest)
 * @method static \Flexsim\FlexnetOperations\Type\UpdateSimpleEntitlementResponseType updateSimpleEntitlement(Flexsim\FlexnetOperations\Type\UpdateSimpleEntitlementRequestType $updateSimpleEntitlementRequest)
 * @method static \Flexsim\FlexnetOperations\Type\AddOnlyEntitlementLineItemResponseType createEntitlementLineItem(Flexsim\FlexnetOperations\Type\AddOnlyEntitlementLineItemRequestType $createEntitlementLineItemRequest)
 * @method static \Flexsim\FlexnetOperations\Type\ReplaceOnlyEntitlementLineItemResponseType replaceEntitlementLineItem(Flexsim\FlexnetOperations\Type\ReplaceOnlyEntitlementLineItemRequestType $replaceEntitlementLineItemRequest)
 * @method static \Flexsim\FlexnetOperations\Type\RemoveEntitlementLineItemResponseType deleteEntitlementLineItem(Flexsim\FlexnetOperations\Type\RemoveEntitlementLineItemRequestType $removeEntitlementLineItemRequest)
 * @method static \Flexsim\FlexnetOperations\Type\UpdateEntitlementLineItemResponseType updateEntitlementLineItem(Flexsim\FlexnetOperations\Type\UpdateEntitlementLineItemRequestType $updateEntitlementLineItemRequest)
 * @method static \Flexsim\FlexnetOperations\Type\SearchEntitlementResponseType getEntitlementsQuery(Flexsim\FlexnetOperations\Type\SearchEntitlementRequestType $searchEntitlementRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetBulkEntitlementPropertiesResponseType getBulkEntitlementPropertiesQuery(Flexsim\FlexnetOperations\Type\GetBulkEntitlementPropertiesRequestType $getBulkEntitlementPropertiesRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetBulkEntitlementCountResponseType getBulkEntitlementCount(Flexsim\FlexnetOperations\Type\GetBulkEntitlementCountRequestType $getBulkEntitlementCountRequest)
 * @method static \Flexsim\FlexnetOperations\Type\SearchActivatableItemResponseType getActivatableItemsQuery(Flexsim\FlexnetOperations\Type\SearchActivatableItemRequestType $searchActivatableItemRequest)
 * @method static \Flexsim\FlexnetOperations\Type\SearchEntitlementLineItemPropertiesResponseType getEntitlementLineItemPropertiesQuery(Flexsim\FlexnetOperations\Type\SearchEntitlementLineItemPropertiesRequestType $searchEntitlementLineItemPropertiesRequest)
 * @method static \Flexsim\FlexnetOperations\Type\SearchEntitlementMaintenanceLineItemPropertiesResponseType getEntitlementMaintenanceLineItemPropertiesQuery(Flexsim\FlexnetOperations\Type\SearchEntitlementMaintenanceLineItemPropertiesRequestType $searchEntitlementMaintenanceLineItemPropertiesRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetEntitlementCountResponseType getEntitlementCount(Flexsim\FlexnetOperations\Type\GetEntitlementCountRequestType $getEntitlementCountRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetActivatableItemCountResponseType getActivatableItemCount(Flexsim\FlexnetOperations\Type\GetActivatableItemCountRequestType $getActivatableItemCountRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetExactAvailableCountResponseType getExactAvailableCount(Flexsim\FlexnetOperations\Type\GetExactAvailableCountRequestType $getExactAvailableCountRequest)
 * @method static \Flexsim\FlexnetOperations\Type\SetEntitlementStateResponseType setEntitlementState(Flexsim\FlexnetOperations\Type\SetEntitlementStateRequestType $setEntitlementStateRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetWebRegKeyCountResponseType getWebRegKeyCount(Flexsim\FlexnetOperations\Type\GetWebRegKeyCountRequestType $getWebRegKeyCountRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetWebRegKeysQueryResponseType getWebRegKeysQuery(Flexsim\FlexnetOperations\Type\GetWebRegKeysQueryRequestType $getWebRegKeysQueryRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetEntitlementAttributesResponseType getEntitlementAttributesFromModel(Flexsim\FlexnetOperations\Type\GetEntitlementAttributesRequestType $getEntitlementAttributesRequest)
 * @method static \Flexsim\FlexnetOperations\Type\RenewEntitlementResponseType renewLicense(Flexsim\FlexnetOperations\Type\RenewEntitlementRequestType $renewLicenseRequest)
 * @method static \Flexsim\FlexnetOperations\Type\EntitlementLifeCycleResponseType upgradeLicense(Flexsim\FlexnetOperations\Type\EntitlementLifeCycleRequestType $upgradeLicenseRequest)
 * @method static \Flexsim\FlexnetOperations\Type\EntitlementLifeCycleResponseType upsellLicense(Flexsim\FlexnetOperations\Type\EntitlementLifeCycleRequestType $upsellLicenseRequest)
 * @method static \Flexsim\FlexnetOperations\Type\MapEntitlementsToUserResponseType mapEntitlementsToUser(Flexsim\FlexnetOperations\Type\MapEntitlementsToUserRequestType $mapEntitlementsToUserRequest)
 * @method static \Flexsim\FlexnetOperations\Type\EmailEntitlementResponseType emailEntitlement(Flexsim\FlexnetOperations\Type\EmailEntitlementRequestType $emailEntitlementRequest)
 * @method static \Flexsim\FlexnetOperations\Type\EmailActivatableItemResponseType emailActivatableItem(Flexsim\FlexnetOperations\Type\EmailActivatableItemRequestType $emailActivatableItemRequest)
 * @method static \Flexsim\FlexnetOperations\Type\SetLineItemStateResponseType setLineItemState(Flexsim\FlexnetOperations\Type\SetLineItemStateRequestType $setLineItemStateRequest)
 * @method static \Flexsim\FlexnetOperations\Type\SetMaintenanceLineItemStateResponseType setMaintenanceLineItemState(Flexsim\FlexnetOperations\Type\SetMaintenanceLineItemStateRequestType $setMaintenanceLineItemStateRequest)
 * @method static \Flexsim\FlexnetOperations\Type\DeleteWebRegKeyResponseType deleteWebRegKey(Flexsim\FlexnetOperations\Type\DeleteWebRegKeyRequestType $deleteWebRegKeyRequest)
 * @method static \Flexsim\FlexnetOperations\Type\MergeEntitlementsResponseType mergeEntitlements(Flexsim\FlexnetOperations\Type\MergeEntitlementsRequestType $mergeEntitlementsRequest)
 * @method static \Flexsim\FlexnetOperations\Type\TransferEntitlementsResponseType transferEntitlement(Flexsim\FlexnetOperations\Type\TransferEntitlementsRequestType $transferEntitlementsRequest)
 * @method static \Flexsim\FlexnetOperations\Type\TransferLineItemsResponseType transferLineItem(Flexsim\FlexnetOperations\Type\TransferLineItemsRequestType $transferLineItemsRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetStateChangeHistoryResponseType getStateChangeHistory(Flexsim\FlexnetOperations\Type\GetStateChangeHistoryRequestType $getStateChangeHistoryRequest)
 * @method static \Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemResponseType linkMaintenanceLineItem(Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemRequestType $linkMaintenanceLineItemRequest)
 * @method static \Flexsim\FlexnetOperations\Type\SplitLineItemResponseType splitLineItem(Flexsim\FlexnetOperations\Type\SplitLineItemRequestType $splitLineItemRequest)
 * @method static \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementResponseType splitBulkEntitlement(Flexsim\FlexnetOperations\Type\SplitBulkEntitlementRequestType $splitBulkEntitlementRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetMatchingLineItemsResponseType getMatchingLineItems(Flexsim\FlexnetOperations\Type\GetMatchingLineItemsRequestType $getMatchingLineItemsRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetMatchingBulkEntsResponseType getMatchingBulkEnts(Flexsim\FlexnetOperations\Type\GetMatchingBulkEntsRequestType $getMatchingBulkEntsRequest)
 * @method static \Flexsim\FlexnetOperations\Type\DeleteMaintenanceLineItemResponseType deleteMaintenanceLineItem(Flexsim\FlexnetOperations\Type\DeleteMaintenanceLineItemRequestType $deleteMaintenanceLineItemRequest)
 * @method static \Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemResponseType unlinkMaintenanceLineItem(Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemRequestType $unlinkMaintenanceLineItemRequest)
 *
 * @see \Flexsim\FlexnetOperations\FlexnetOperationsClientManager
 * @see \Flexsim\FlexnetOperations\Services\EntitlementOrderService
 * @see \Flexsim\FlexnetOperations\Services\EntitlementOrderService\v1
 * @see \Flexsim\FlexnetOperations\Services\EntitlementOrderService\v2
 * @see \Flexsim\FlexnetOperations\Services\EntitlementOrderService\v3
 */
class EntitlementOrderService extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'flexnet-operations.entitlement-order-service';
    }
}
