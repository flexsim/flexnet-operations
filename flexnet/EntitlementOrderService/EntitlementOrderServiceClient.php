<?php

namespace Flexnet\EntitlementOrderService;

use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class EntitlementOrderServiceClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param  RequestInterface|Type\CreateBulkEntitlementRequestType  $createBulkEntitlementRequest
     * @return ResultInterface|Type\CreateBulkEntitlementResponseType
     *
     * @throws SoapException
     */
    public function createBulkEntitlement(Type\CreateBulkEntitlementRequestType $createBulkEntitlementRequest): Type\CreateBulkEntitlementResponseType
    {
        return ($this->caller)('createBulkEntitlement', $createBulkEntitlementRequest);
    }

    /**
     * @param  RequestInterface|Type\CreateSimpleEntitlementRequestType  $createSimpleEntitlementRequest
     * @return ResultInterface|Type\CreateSimpleEntitlementResponseType
     *
     * @throws SoapException
     */
    public function createSimpleEntitlement(Type\CreateSimpleEntitlementRequestType $createSimpleEntitlementRequest): Type\CreateSimpleEntitlementResponseType
    {
        return ($this->caller)('createSimpleEntitlement', $createSimpleEntitlementRequest);
    }

    /**
     * @param  RequestInterface|Type\DeleteEntitlementRequestType  $deleteEntitlementRequest
     * @return ResultInterface|Type\DeleteEntitlementResponseType
     *
     * @throws SoapException
     */
    public function deleteEntitlement(Type\DeleteEntitlementRequestType $deleteEntitlementRequest): Type\DeleteEntitlementResponseType
    {
        return ($this->caller)('deleteEntitlement', $deleteEntitlementRequest);
    }

    /**
     * @param  RequestInterface|Type\AddWebRegKeyRequestType  $addWebRegKeyRequest
     * @return ResultInterface|Type\AddWebRegKeyResponseType
     *
     * @throws SoapException
     */
    public function createWebRegKey(Type\AddWebRegKeyRequestType $addWebRegKeyRequest): Type\AddWebRegKeyResponseType
    {
        return ($this->caller)('createWebRegKey', $addWebRegKeyRequest);
    }

    /**
     * @param  RequestInterface|Type\UpdateBulkEntitlementRequestType  $updateBulkEntitlementRequest
     * @return ResultInterface|Type\UpdateBulkEntitlementResponseType
     *
     * @throws SoapException
     */
    public function updateBulkEntitlement(Type\UpdateBulkEntitlementRequestType $updateBulkEntitlementRequest): Type\UpdateBulkEntitlementResponseType
    {
        return ($this->caller)('updateBulkEntitlement', $updateBulkEntitlementRequest);
    }

    /**
     * @param  RequestInterface|Type\UpdateSimpleEntitlementRequestType  $updateSimpleEntitlementRequest
     * @return ResultInterface|Type\UpdateSimpleEntitlementResponseType
     *
     * @throws SoapException
     */
    public function updateSimpleEntitlement(Type\UpdateSimpleEntitlementRequestType $updateSimpleEntitlementRequest): Type\UpdateSimpleEntitlementResponseType
    {
        return ($this->caller)('updateSimpleEntitlement', $updateSimpleEntitlementRequest);
    }

    /**
     * @param  RequestInterface|Type\AddOnlyEntitlementLineItemRequestType  $createEntitlementLineItemRequest
     * @return ResultInterface|Type\AddOnlyEntitlementLineItemResponseType
     *
     * @throws SoapException
     */
    public function createEntitlementLineItem(Type\AddOnlyEntitlementLineItemRequestType $createEntitlementLineItemRequest): Type\AddOnlyEntitlementLineItemResponseType
    {
        return ($this->caller)('createEntitlementLineItem', $createEntitlementLineItemRequest);
    }

    /**
     * @param  RequestInterface|Type\ReplaceOnlyEntitlementLineItemRequestType  $replaceEntitlementLineItemRequest
     * @return ResultInterface|Type\ReplaceOnlyEntitlementLineItemResponseType
     *
     * @throws SoapException
     */
    public function replaceEntitlementLineItem(Type\ReplaceOnlyEntitlementLineItemRequestType $replaceEntitlementLineItemRequest): Type\ReplaceOnlyEntitlementLineItemResponseType
    {
        return ($this->caller)('replaceEntitlementLineItem', $replaceEntitlementLineItemRequest);
    }

    /**
     * @param  RequestInterface|Type\RemoveEntitlementLineItemRequestType  $removeEntitlementLineItemRequest
     * @return ResultInterface|Type\RemoveEntitlementLineItemResponseType
     *
     * @throws SoapException
     */
    public function deleteEntitlementLineItem(Type\RemoveEntitlementLineItemRequestType $removeEntitlementLineItemRequest): Type\RemoveEntitlementLineItemResponseType
    {
        return ($this->caller)('deleteEntitlementLineItem', $removeEntitlementLineItemRequest);
    }

    /**
     * @param  RequestInterface|Type\UpdateEntitlementLineItemRequestType  $updateEntitlementLineItemRequest
     * @return ResultInterface|Type\UpdateEntitlementLineItemResponseType
     *
     * @throws SoapException
     */
    public function updateEntitlementLineItem(Type\UpdateEntitlementLineItemRequestType $updateEntitlementLineItemRequest): Type\UpdateEntitlementLineItemResponseType
    {
        return ($this->caller)('updateEntitlementLineItem', $updateEntitlementLineItemRequest);
    }

    /**
     * @param  RequestInterface|Type\SearchEntitlementRequestType  $searchEntitlementRequest
     * @return ResultInterface|Type\SearchEntitlementResponseType
     *
     * @throws SoapException
     */
    public function getEntitlementsQuery(Type\SearchEntitlementRequestType $searchEntitlementRequest): Type\SearchEntitlementResponseType
    {
        return ($this->caller)('getEntitlementsQuery', $searchEntitlementRequest);
    }

    /**
     * @param  RequestInterface|Type\GetBulkEntitlementPropertiesRequestType  $getBulkEntitlementPropertiesRequest
     * @return ResultInterface|Type\GetBulkEntitlementPropertiesResponseType
     *
     * @throws SoapException
     */
    public function getBulkEntitlementPropertiesQuery(Type\GetBulkEntitlementPropertiesRequestType $getBulkEntitlementPropertiesRequest): Type\GetBulkEntitlementPropertiesResponseType
    {
        return ($this->caller)('getBulkEntitlementPropertiesQuery', $getBulkEntitlementPropertiesRequest);
    }

    /**
     * @param  RequestInterface|Type\GetBulkEntitlementCountRequestType  $getBulkEntitlementCountRequest
     * @return ResultInterface|Type\GetBulkEntitlementCountResponseType
     *
     * @throws SoapException
     */
    public function getBulkEntitlementCount(Type\GetBulkEntitlementCountRequestType $getBulkEntitlementCountRequest): Type\GetBulkEntitlementCountResponseType
    {
        return ($this->caller)('getBulkEntitlementCount', $getBulkEntitlementCountRequest);
    }

    /**
     * @param  RequestInterface|Type\SearchActivatableItemRequestType  $searchActivatableItemRequest
     * @return ResultInterface|Type\SearchActivatableItemResponseType
     *
     * @throws SoapException
     */
    public function getActivatableItemsQuery(Type\SearchActivatableItemRequestType $searchActivatableItemRequest): Type\SearchActivatableItemResponseType
    {
        return ($this->caller)('getActivatableItemsQuery', $searchActivatableItemRequest);
    }

    /**
     * @param  RequestInterface|Type\SearchEntitlementLineItemPropertiesRequestType  $searchEntitlementLineItemPropertiesRequest
     * @return ResultInterface|Type\SearchEntitlementLineItemPropertiesResponseType
     *
     * @throws SoapException
     */
    public function getEntitlementLineItemPropertiesQuery(Type\SearchEntitlementLineItemPropertiesRequestType $searchEntitlementLineItemPropertiesRequest): Type\SearchEntitlementLineItemPropertiesResponseType
    {
        return ($this->caller)('getEntitlementLineItemPropertiesQuery', $searchEntitlementLineItemPropertiesRequest);
    }

    /**
     * @param  RequestInterface|Type\SearchEntitlementMaintenanceLineItemPropertiesRequestType  $searchEntitlementMaintenanceLineItemPropertiesRequest
     * @return ResultInterface|Type\SearchEntitlementMaintenanceLineItemPropertiesResponseType
     *
     * @throws SoapException
     */
    public function getEntitlementMaintenanceLineItemPropertiesQuery(Type\SearchEntitlementMaintenanceLineItemPropertiesRequestType $searchEntitlementMaintenanceLineItemPropertiesRequest): Type\SearchEntitlementMaintenanceLineItemPropertiesResponseType
    {
        return ($this->caller)('getEntitlementMaintenanceLineItemPropertiesQuery', $searchEntitlementMaintenanceLineItemPropertiesRequest);
    }

    /**
     * @param  RequestInterface|Type\GetEntitlementCountRequestType  $getEntitlementCountRequest
     * @return ResultInterface|Type\GetEntitlementCountResponseType
     *
     * @throws SoapException
     */
    public function getEntitlementCount(Type\GetEntitlementCountRequestType $getEntitlementCountRequest): Type\GetEntitlementCountResponseType
    {
        return ($this->caller)('getEntitlementCount', $getEntitlementCountRequest);
    }

    /**
     * @param  RequestInterface|Type\GetActivatableItemCountRequestType  $getActivatableItemCountRequest
     * @return ResultInterface|Type\GetActivatableItemCountResponseType
     *
     * @throws SoapException
     */
    public function getActivatableItemCount(Type\GetActivatableItemCountRequestType $getActivatableItemCountRequest): Type\GetActivatableItemCountResponseType
    {
        return ($this->caller)('getActivatableItemCount', $getActivatableItemCountRequest);
    }

    /**
     * @param  RequestInterface|Type\GetExactAvailableCountRequestType  $getExactAvailableCountRequest
     * @return ResultInterface|Type\GetExactAvailableCountResponseType
     *
     * @throws SoapException
     */
    public function getExactAvailableCount(Type\GetExactAvailableCountRequestType $getExactAvailableCountRequest): Type\GetExactAvailableCountResponseType
    {
        return ($this->caller)('getExactAvailableCount', $getExactAvailableCountRequest);
    }

    /**
     * @param  RequestInterface|Type\SetEntitlementStateRequestType  $setEntitlementStateRequest
     * @return ResultInterface|Type\SetEntitlementStateResponseType
     *
     * @throws SoapException
     */
    public function setEntitlementState(Type\SetEntitlementStateRequestType $setEntitlementStateRequest): Type\SetEntitlementStateResponseType
    {
        return ($this->caller)('setEntitlementState', $setEntitlementStateRequest);
    }

    /**
     * @param  RequestInterface|Type\GetWebRegKeyCountRequestType  $getWebRegKeyCountRequest
     * @return ResultInterface|Type\GetWebRegKeyCountResponseType
     *
     * @throws SoapException
     */
    public function getWebRegKeyCount(Type\GetWebRegKeyCountRequestType $getWebRegKeyCountRequest): Type\GetWebRegKeyCountResponseType
    {
        return ($this->caller)('getWebRegKeyCount', $getWebRegKeyCountRequest);
    }

    /**
     * @param  RequestInterface|Type\GetWebRegKeysQueryRequestType  $getWebRegKeysQueryRequest
     * @return ResultInterface|Type\GetWebRegKeysQueryResponseType
     *
     * @throws SoapException
     */
    public function getWebRegKeysQuery(Type\GetWebRegKeysQueryRequestType $getWebRegKeysQueryRequest): Type\GetWebRegKeysQueryResponseType
    {
        return ($this->caller)('getWebRegKeysQuery', $getWebRegKeysQueryRequest);
    }

    /**
     * @param  RequestInterface|Type\GetEntitlementAttributesRequestType  $getEntitlementAttributesRequest
     * @return ResultInterface|Type\GetEntitlementAttributesResponseType
     *
     * @throws SoapException
     */
    public function getEntitlementAttributesFromModel(Type\GetEntitlementAttributesRequestType $getEntitlementAttributesRequest): Type\GetEntitlementAttributesResponseType
    {
        return ($this->caller)('getEntitlementAttributesFromModel', $getEntitlementAttributesRequest);
    }

    /**
     * @param  RequestInterface|Type\RenewEntitlementRequestType  $renewLicenseRequest
     * @return ResultInterface|Type\RenewEntitlementResponseType
     *
     * @throws SoapException
     */
    public function renewLicense(Type\RenewEntitlementRequestType $renewLicenseRequest): Type\RenewEntitlementResponseType
    {
        return ($this->caller)('renewLicense', $renewLicenseRequest);
    }

    /**
     * @param  RequestInterface|Type\EntitlementLifeCycleRequestType  $upgradeLicenseRequest
     * @return ResultInterface|Type\EntitlementLifeCycleResponseType
     *
     * @throws SoapException
     */
    public function upgradeLicense(Type\EntitlementLifeCycleRequestType $upgradeLicenseRequest): Type\EntitlementLifeCycleResponseType
    {
        return ($this->caller)('upgradeLicense', $upgradeLicenseRequest);
    }

    /**
     * @param  RequestInterface|Type\EntitlementLifeCycleRequestType  $upsellLicenseRequest
     * @return ResultInterface|Type\EntitlementLifeCycleResponseType
     *
     * @throws SoapException
     */
    public function upsellLicense(Type\EntitlementLifeCycleRequestType $upsellLicenseRequest): Type\EntitlementLifeCycleResponseType
    {
        return ($this->caller)('upsellLicense', $upsellLicenseRequest);
    }

    /**
     * @param  RequestInterface|Type\MapEntitlementsToUserRequestType  $mapEntitlementsToUserRequest
     * @return ResultInterface|Type\MapEntitlementsToUserResponseType
     *
     * @throws SoapException
     */
    public function mapEntitlementsToUser(Type\MapEntitlementsToUserRequestType $mapEntitlementsToUserRequest): Type\MapEntitlementsToUserResponseType
    {
        return ($this->caller)('mapEntitlementsToUser', $mapEntitlementsToUserRequest);
    }

    /**
     * @param  RequestInterface|Type\EmailEntitlementRequestType  $emailEntitlementRequest
     * @return ResultInterface|Type\EmailEntitlementResponseType
     *
     * @throws SoapException
     */
    public function emailEntitlement(Type\EmailEntitlementRequestType $emailEntitlementRequest): Type\EmailEntitlementResponseType
    {
        return ($this->caller)('emailEntitlement', $emailEntitlementRequest);
    }

    /**
     * @param  RequestInterface|Type\EmailActivatableItemRequestType  $emailActivatableItemRequest
     * @return ResultInterface|Type\EmailActivatableItemResponseType
     *
     * @throws SoapException
     */
    public function emailActivatableItem(Type\EmailActivatableItemRequestType $emailActivatableItemRequest): Type\EmailActivatableItemResponseType
    {
        return ($this->caller)('emailActivatableItem', $emailActivatableItemRequest);
    }

    /**
     * @param  RequestInterface|Type\SetLineItemStateRequestType  $setLineItemStateRequest
     * @return ResultInterface|Type\SetLineItemStateResponseType
     *
     * @throws SoapException
     */
    public function setLineItemState(Type\SetLineItemStateRequestType $setLineItemStateRequest): Type\SetLineItemStateResponseType
    {
        return ($this->caller)('setLineItemState', $setLineItemStateRequest);
    }

    /**
     * @param  RequestInterface|Type\SetMaintenanceLineItemStateRequestType  $setMaintenanceLineItemStateRequest
     * @return ResultInterface|Type\SetMaintenanceLineItemStateResponseType
     *
     * @throws SoapException
     */
    public function setMaintenanceLineItemState(Type\SetMaintenanceLineItemStateRequestType $setMaintenanceLineItemStateRequest): Type\SetMaintenanceLineItemStateResponseType
    {
        return ($this->caller)('setMaintenanceLineItemState', $setMaintenanceLineItemStateRequest);
    }

    /**
     * @param  RequestInterface|Type\DeleteWebRegKeyRequestType  $deleteWebRegKeyRequest
     * @return ResultInterface|Type\DeleteWebRegKeyResponseType
     *
     * @throws SoapException
     */
    public function deleteWebRegKey(Type\DeleteWebRegKeyRequestType $deleteWebRegKeyRequest): Type\DeleteWebRegKeyResponseType
    {
        return ($this->caller)('deleteWebRegKey', $deleteWebRegKeyRequest);
    }

    /**
     * @param  RequestInterface|Type\MergeEntitlementsRequestType  $mergeEntitlementsRequest
     * @return ResultInterface|Type\MergeEntitlementsResponseType
     *
     * @throws SoapException
     */
    public function mergeEntitlements(Type\MergeEntitlementsRequestType $mergeEntitlementsRequest): Type\MergeEntitlementsResponseType
    {
        return ($this->caller)('mergeEntitlements', $mergeEntitlementsRequest);
    }

    /**
     * @param  RequestInterface|Type\TransferEntitlementsRequestType  $transferEntitlementsRequest
     * @return ResultInterface|Type\TransferEntitlementsResponseType
     *
     * @throws SoapException
     */
    public function transferEntitlement(Type\TransferEntitlementsRequestType $transferEntitlementsRequest): Type\TransferEntitlementsResponseType
    {
        return ($this->caller)('transferEntitlement', $transferEntitlementsRequest);
    }

    /**
     * @param  RequestInterface|Type\TransferLineItemsRequestType  $transferLineItemsRequest
     * @return ResultInterface|Type\TransferLineItemsResponseType
     *
     * @throws SoapException
     */
    public function transferLineItem(Type\TransferLineItemsRequestType $transferLineItemsRequest): Type\TransferLineItemsResponseType
    {
        return ($this->caller)('transferLineItem', $transferLineItemsRequest);
    }

    /**
     * @param  RequestInterface|Type\GetStateChangeHistoryRequestType  $getStateChangeHistoryRequest
     * @return ResultInterface|Type\GetStateChangeHistoryResponseType
     *
     * @throws SoapException
     */
    public function getStateChangeHistory(Type\GetStateChangeHistoryRequestType $getStateChangeHistoryRequest): Type\GetStateChangeHistoryResponseType
    {
        return ($this->caller)('getStateChangeHistory', $getStateChangeHistoryRequest);
    }

    /**
     * @param  RequestInterface|Type\LinkMaintenanceLineItemRequestType  $linkMaintenanceLineItemRequest
     * @return ResultInterface|Type\LinkMaintenanceLineItemResponseType
     *
     * @throws SoapException
     */
    public function linkMaintenanceLineItem(Type\LinkMaintenanceLineItemRequestType $linkMaintenanceLineItemRequest): Type\LinkMaintenanceLineItemResponseType
    {
        return ($this->caller)('linkMaintenanceLineItem', $linkMaintenanceLineItemRequest);
    }

    /**
     * @param  RequestInterface|Type\SplitLineItemRequestType  $splitLineItemRequest
     * @return ResultInterface|Type\SplitLineItemResponseType
     *
     * @throws SoapException
     */
    public function splitLineItem(Type\SplitLineItemRequestType $splitLineItemRequest): Type\SplitLineItemResponseType
    {
        return ($this->caller)('splitLineItem', $splitLineItemRequest);
    }

    /**
     * @param  RequestInterface|Type\SplitBulkEntitlementRequestType  $splitBulkEntitlementRequest
     * @return ResultInterface|Type\SplitBulkEntitlementResponseType
     *
     * @throws SoapException
     */
    public function splitBulkEntitlement(Type\SplitBulkEntitlementRequestType $splitBulkEntitlementRequest): Type\SplitBulkEntitlementResponseType
    {
        return ($this->caller)('splitBulkEntitlement', $splitBulkEntitlementRequest);
    }

    /**
     * @param  RequestInterface|Type\GetMatchingLineItemsRequestType  $getMatchingLineItemsRequest
     * @return ResultInterface|Type\GetMatchingLineItemsResponseType
     *
     * @throws SoapException
     */
    public function getMatchingLineItems(Type\GetMatchingLineItemsRequestType $getMatchingLineItemsRequest): Type\GetMatchingLineItemsResponseType
    {
        return ($this->caller)('getMatchingLineItems', $getMatchingLineItemsRequest);
    }

    /**
     * @param  RequestInterface|Type\GetMatchingBulkEntsRequestType  $getMatchingBulkEntsRequest
     * @return ResultInterface|Type\GetMatchingBulkEntsResponseType
     *
     * @throws SoapException
     */
    public function getMatchingBulkEnts(Type\GetMatchingBulkEntsRequestType $getMatchingBulkEntsRequest): Type\GetMatchingBulkEntsResponseType
    {
        return ($this->caller)('getMatchingBulkEnts', $getMatchingBulkEntsRequest);
    }

    /**
     * @param  RequestInterface|Type\DeleteMaintenanceLineItemRequestType  $deleteMaintenanceLineItemRequest
     * @return ResultInterface|Type\DeleteMaintenanceLineItemResponseType
     *
     * @throws SoapException
     */
    public function deleteMaintenanceLineItem(Type\DeleteMaintenanceLineItemRequestType $deleteMaintenanceLineItemRequest): Type\DeleteMaintenanceLineItemResponseType
    {
        return ($this->caller)('deleteMaintenanceLineItem', $deleteMaintenanceLineItemRequest);
    }

    /**
     * @param  RequestInterface|Type\UnlinkMaintenanceLineItemRequestType  $unlinkMaintenanceLineItemRequest
     * @return ResultInterface|Type\UnlinkMaintenanceLineItemResponseType
     *
     * @throws SoapException
     */
    public function unlinkMaintenanceLineItem(Type\UnlinkMaintenanceLineItemRequestType $unlinkMaintenanceLineItemRequest): Type\UnlinkMaintenanceLineItemResponseType
    {
        return ($this->caller)('unlinkMaintenanceLineItem', $unlinkMaintenanceLineItemRequest);
    }
}
