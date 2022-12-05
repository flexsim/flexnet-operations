<?php

namespace Flexnet\EntitlementOrderService;

use Illuminate\Support\Facades\Facade;

/**
 * @method static Type\CreateBulkEntitlementResponseType  createBulkEntitlement(Type\CreateBulkEntitlementRequestType $createBulkEntitlementRequest)
 * @method static Type\CreateSimpleEntitlementResponseType  createSimpleEntitlement(Type\CreateSimpleEntitlementRequestType $createSimpleEntitlementRequest)
 * @method static Type\DeleteEntitlementResponseType  deleteEntitlement(Type\DeleteEntitlementRequestType $deleteEntitlementRequest)
 * @method static Type\AddWebRegKeyResponseType  createWebRegKey(Type\AddWebRegKeyRequestType $addWebRegKeyRequest)
 * @method static Type\UpdateBulkEntitlementResponseType  updateBulkEntitlement(Type\UpdateBulkEntitlementRequestType $updateBulkEntitlementRequest)
 * @method static Type\UpdateSimpleEntitlementResponseType  updateSimpleEntitlement(Type\UpdateSimpleEntitlementRequestType $updateSimpleEntitlementRequest)
 * @method static Type\AddOnlyEntitlementLineItemResponseType  createEntitlementLineItem(Type\AddOnlyEntitlementLineItemRequestType $createEntitlementLineItemRequest)
 * @method static Type\ReplaceOnlyEntitlementLineItemResponseType  replaceEntitlementLineItem(Type\ReplaceOnlyEntitlementLineItemRequestType $replaceEntitlementLineItemRequest)
 * @method static Type\RemoveEntitlementLineItemResponseType  deleteEntitlementLineItem(Type\RemoveEntitlementLineItemRequestType $removeEntitlementLineItemRequest)
 * @method static Type\UpdateEntitlementLineItemResponseType  updateEntitlementLineItem(Type\UpdateEntitlementLineItemRequestType $updateEntitlementLineItemRequest)
 * @method static Type\SearchEntitlementResponseType  getEntitlementsQuery(Type\SearchEntitlementRequestType $searchEntitlementRequest)
 * @method static Type\GetBulkEntitlementPropertiesResponseType  getBulkEntitlementPropertiesQuery(Type\GetBulkEntitlementPropertiesRequestType $getBulkEntitlementPropertiesRequest)
 * @method static Type\GetBulkEntitlementCountResponseType  getBulkEntitlementCount(Type\GetBulkEntitlementCountRequestType $getBulkEntitlementCountRequest)
 * @method static Type\SearchActivatableItemResponseType  getActivatableItemsQuery(Type\SearchActivatableItemRequestType $searchActivatableItemRequest)
 * @method static Type\SearchEntitlementLineItemPropertiesResponseType  getEntitlementLineItemPropertiesQuery(Type\SearchEntitlementLineItemPropertiesRequestType $searchEntitlementLineItemPropertiesRequest)
 * @method static Type\SearchEntitlementMaintenanceLineItemPropertiesResponseType  getEntitlementMaintenanceLineItemPropertiesQuery(Type\SearchEntitlementMaintenanceLineItemPropertiesRequestType $searchEntitlementMaintenanceLineItemPropertiesRequest)
 * @method static Type\GetEntitlementCountResponseType  getEntitlementCount(Type\GetEntitlementCountRequestType $getEntitlementCountRequest)
 * @method static Type\GetActivatableItemCountResponseType  getActivatableItemCount(Type\GetActivatableItemCountRequestType $getActivatableItemCountRequest)
 * @method static Type\GetExactAvailableCountResponseType  getExactAvailableCount(Type\GetExactAvailableCountRequestType $getExactAvailableCountRequest)
 * @method static Type\SetEntitlementStateResponseType  setEntitlementState(Type\SetEntitlementStateRequestType $setEntitlementStateRequest)
 * @method static Type\GetWebRegKeyCountResponseType  getWebRegKeyCount(Type\GetWebRegKeyCountRequestType $getWebRegKeyCountRequest)
 * @method static Type\GetWebRegKeysQueryResponseType  getWebRegKeysQuery(Type\GetWebRegKeysQueryRequestType $getWebRegKeysQueryRequest)
 * @method static Type\GetEntitlementAttributesResponseType  getEntitlementAttributesFromModel(Type\GetEntitlementAttributesRequestType $getEntitlementAttributesRequest)
 * @method static Type\RenewEntitlementResponseType  renewLicense(Type\RenewEntitlementRequestType $renewLicenseRequest)
 * @method static Type\EntitlementLifeCycleResponseType  upgradeLicense(Type\EntitlementLifeCycleRequestType $upgradeLicenseRequest)
 * @method static Type\EntitlementLifeCycleResponseType  upsellLicense(Type\EntitlementLifeCycleRequestType $upsellLicenseRequest)
 * @method static Type\MapEntitlementsToUserResponseType  mapEntitlementsToUser(Type\MapEntitlementsToUserRequestType $mapEntitlementsToUserRequest)
 * @method static Type\EmailEntitlementResponseType  emailEntitlement(Type\EmailEntitlementRequestType $emailEntitlementRequest)
 * @method static Type\EmailActivatableItemResponseType  emailActivatableItem(Type\EmailActivatableItemRequestType $emailActivatableItemRequest)
 * @method static Type\SetLineItemStateResponseType  setLineItemState(Type\SetLineItemStateRequestType $setLineItemStateRequest)
 * @method static Type\SetMaintenanceLineItemStateResponseType  setMaintenanceLineItemState(Type\SetMaintenanceLineItemStateRequestType $setMaintenanceLineItemStateRequest)
 * @method static Type\DeleteWebRegKeyResponseType  deleteWebRegKey(Type\DeleteWebRegKeyRequestType $deleteWebRegKeyRequest)
 * @method static Type\MergeEntitlementsResponseType  mergeEntitlements(Type\MergeEntitlementsRequestType $mergeEntitlementsRequest)
 * @method static Type\TransferEntitlementsResponseType  transferEntitlement(Type\TransferEntitlementsRequestType $transferEntitlementsRequest)
 * @method static Type\TransferLineItemsResponseType  transferLineItem(Type\TransferLineItemsRequestType $transferLineItemsRequest)
 * @method static Type\GetStateChangeHistoryResponseType  getStateChangeHistory(Type\GetStateChangeHistoryRequestType $getStateChangeHistoryRequest)
 * @method static Type\LinkMaintenanceLineItemResponseType  linkMaintenanceLineItem(Type\LinkMaintenanceLineItemRequestType $linkMaintenanceLineItemRequest)
 * @method static Type\SplitLineItemResponseType  splitLineItem(Type\SplitLineItemRequestType $splitLineItemRequest)
 * @method static Type\SplitBulkEntitlementResponseType  splitBulkEntitlement(Type\SplitBulkEntitlementRequestType $splitBulkEntitlementRequest)
 * @method static Type\GetMatchingLineItemsResponseType  getMatchingLineItems(Type\GetMatchingLineItemsRequestType $getMatchingLineItemsRequest)
 * @method static Type\GetMatchingBulkEntsResponseType  getMatchingBulkEnts(Type\GetMatchingBulkEntsRequestType $getMatchingBulkEntsRequest)
 * @method static Type\DeleteMaintenanceLineItemResponseType  deleteMaintenanceLineItem(Type\DeleteMaintenanceLineItemRequestType $deleteMaintenanceLineItemRequest)
 * @method static Type\UnlinkMaintenanceLineItemResponseType  unlinkMaintenanceLineItem(Type\UnlinkMaintenanceLineItemRequestType $unlinkMaintenanceLineItemRequest)
 *
 * @see \Flexnet\EntitlementOrderService\EntitlementOrderServiceClient
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
        return EntitlementOrderServiceClient::class;
    }
}
