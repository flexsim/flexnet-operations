<?php

namespace Flexnet\EntitlementOrderService;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementResponseType createBulkEntitlement(\Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementRequestType $createBulkEntitlementRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementResponseType createSimpleEntitlement(\Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementRequestType $createSimpleEntitlementRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\DeleteEntitlementResponseType deleteEntitlement(\Flexnet\EntitlementOrderService\Type\DeleteEntitlementRequestType $deleteEntitlementRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\AddWebRegKeyResponseType createWebRegKey(\Flexnet\EntitlementOrderService\Type\AddWebRegKeyRequestType $addWebRegKeyRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementResponseType updateBulkEntitlement(\Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementRequestType $updateBulkEntitlementRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementResponseType updateSimpleEntitlement(\Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementRequestType $updateSimpleEntitlementRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\AddOnlyEntitlementLineItemResponseType createEntitlementLineItem(\Flexnet\EntitlementOrderService\Type\AddOnlyEntitlementLineItemRequestType $createEntitlementLineItemRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\ReplaceOnlyEntitlementLineItemResponseType replaceEntitlementLineItem(\Flexnet\EntitlementOrderService\Type\ReplaceOnlyEntitlementLineItemRequestType $replaceEntitlementLineItemRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemResponseType deleteEntitlementLineItem(\Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemRequestType $removeEntitlementLineItemRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemResponseType updateEntitlementLineItem(\Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemRequestType $updateEntitlementLineItemRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\SearchEntitlementResponseType getEntitlementsQuery(\Flexnet\EntitlementOrderService\Type\SearchEntitlementRequestType $searchEntitlementRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\GetBulkEntitlementPropertiesResponseType getBulkEntitlementPropertiesQuery(\Flexnet\EntitlementOrderService\Type\GetBulkEntitlementPropertiesRequestType $getBulkEntitlementPropertiesRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\GetBulkEntitlementCountResponseType getBulkEntitlementCount(\Flexnet\EntitlementOrderService\Type\GetBulkEntitlementCountRequestType $getBulkEntitlementCountRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\SearchActivatableItemResponseType getActivatableItemsQuery(\Flexnet\EntitlementOrderService\Type\SearchActivatableItemRequestType $searchActivatableItemRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\SearchEntitlementLineItemPropertiesResponseType getEntitlementLineItemPropertiesQuery(\Flexnet\EntitlementOrderService\Type\SearchEntitlementLineItemPropertiesRequestType $searchEntitlementLineItemPropertiesRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\SearchEntitlementMaintenanceLineItemPropertiesResponseType getEntitlementMaintenanceLineItemPropertiesQuery(\Flexnet\EntitlementOrderService\Type\SearchEntitlementMaintenanceLineItemPropertiesRequestType $searchEntitlementMaintenanceLineItemPropertiesRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\GetEntitlementCountResponseType getEntitlementCount(\Flexnet\EntitlementOrderService\Type\GetEntitlementCountRequestType $getEntitlementCountRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\GetActivatableItemCountResponseType getActivatableItemCount(\Flexnet\EntitlementOrderService\Type\GetActivatableItemCountRequestType $getActivatableItemCountRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\GetExactAvailableCountResponseType getExactAvailableCount(\Flexnet\EntitlementOrderService\Type\GetExactAvailableCountRequestType $getExactAvailableCountRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\SetEntitlementStateResponseType setEntitlementState(\Flexnet\EntitlementOrderService\Type\SetEntitlementStateRequestType $setEntitlementStateRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\GetWebRegKeyCountResponseType getWebRegKeyCount(\Flexnet\EntitlementOrderService\Type\GetWebRegKeyCountRequestType $getWebRegKeyCountRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\GetWebRegKeysQueryResponseType getWebRegKeysQuery(\Flexnet\EntitlementOrderService\Type\GetWebRegKeysQueryRequestType $getWebRegKeysQueryRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\GetEntitlementAttributesResponseType getEntitlementAttributesFromModel(\Flexnet\EntitlementOrderService\Type\GetEntitlementAttributesRequestType $getEntitlementAttributesRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\RenewEntitlementResponseType renewLicense(\Flexnet\EntitlementOrderService\Type\RenewEntitlementRequestType $renewLicenseRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleResponseType upgradeLicense(\Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleRequestType $upgradeLicenseRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleResponseType upsellLicense(\Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleRequestType $upsellLicenseRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\MapEntitlementsToUserResponseType mapEntitlementsToUser(\Flexnet\EntitlementOrderService\Type\MapEntitlementsToUserRequestType $mapEntitlementsToUserRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\EmailEntitlementResponseType emailEntitlement(\Flexnet\EntitlementOrderService\Type\EmailEntitlementRequestType $emailEntitlementRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\EmailActivatableItemResponseType emailActivatableItem(\Flexnet\EntitlementOrderService\Type\EmailActivatableItemRequestType $emailActivatableItemRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\SetLineItemStateResponseType setLineItemState(\Flexnet\EntitlementOrderService\Type\SetLineItemStateRequestType $setLineItemStateRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\SetMaintenanceLineItemStateResponseType setMaintenanceLineItemState(\Flexnet\EntitlementOrderService\Type\SetMaintenanceLineItemStateRequestType $setMaintenanceLineItemStateRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\DeleteWebRegKeyResponseType deleteWebRegKey(\Flexnet\EntitlementOrderService\Type\DeleteWebRegKeyRequestType $deleteWebRegKeyRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\MergeEntitlementsResponseType mergeEntitlements(\Flexnet\EntitlementOrderService\Type\MergeEntitlementsRequestType $mergeEntitlementsRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\TransferEntitlementsResponseType transferEntitlement(\Flexnet\EntitlementOrderService\Type\TransferEntitlementsRequestType $transferEntitlementsRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\TransferLineItemsResponseType transferLineItem(\Flexnet\EntitlementOrderService\Type\TransferLineItemsRequestType $transferLineItemsRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\GetStateChangeHistoryResponseType getStateChangeHistory(\Flexnet\EntitlementOrderService\Type\GetStateChangeHistoryRequestType $getStateChangeHistoryRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemResponseType linkMaintenanceLineItem(\Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemRequestType $linkMaintenanceLineItemRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\SplitLineItemResponseType splitLineItem(\Flexnet\EntitlementOrderService\Type\SplitLineItemRequestType $splitLineItemRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementResponseType splitBulkEntitlement(\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementRequestType $splitBulkEntitlementRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemsResponseType getMatchingLineItems(\Flexnet\EntitlementOrderService\Type\GetMatchingLineItemsRequestType $getMatchingLineItemsRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsResponseType getMatchingBulkEnts(\Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsRequestType $getMatchingBulkEntsRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemResponseType deleteMaintenanceLineItem(\Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemRequestType $deleteMaintenanceLineItemRequest)
 * @method static \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemResponseType unlinkMaintenanceLineItem(\Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemRequestType $unlinkMaintenanceLineItemRequest)
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
