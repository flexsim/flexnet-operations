<?php

namespace Flexsim\FlexnetOperations\Services\v3\EntitlementOrderService;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Flexsim\FlexnetOperations\Type;

class EntitlementOrderServiceClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\CreateBulkEntitlementRequestType $createBulkEntitlementRequest
     * @return ResultInterface|Type\CreateBulkEntitlementResponseType
     * @throws SoapException
     */
    public function createBulkEntitlement(\Flexsim\FlexnetOperations\Type\CreateBulkEntitlementRequestType $createBulkEntitlementRequest) : \Flexsim\FlexnetOperations\Type\CreateBulkEntitlementResponseType
    {
        return $this->call('createBulkEntitlement', $createBulkEntitlementRequest);
    }

    /**
     * @param RequestInterface|Type\CreateSimpleEntitlementRequestType $createSimpleEntitlementRequest
     * @return ResultInterface|Type\CreateSimpleEntitlementResponseType
     * @throws SoapException
     */
    public function createSimpleEntitlement(\Flexsim\FlexnetOperations\Type\CreateSimpleEntitlementRequestType $createSimpleEntitlementRequest) : \Flexsim\FlexnetOperations\Type\CreateSimpleEntitlementResponseType
    {
        return $this->call('createSimpleEntitlement', $createSimpleEntitlementRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteEntitlementRequestType $deleteEntitlementRequest
     * @return ResultInterface|Type\DeleteEntitlementResponseType
     * @throws SoapException
     */
    public function deleteEntitlement(\Flexsim\FlexnetOperations\Type\DeleteEntitlementRequestType $deleteEntitlementRequest) : \Flexsim\FlexnetOperations\Type\DeleteEntitlementResponseType
    {
        return $this->call('deleteEntitlement', $deleteEntitlementRequest);
    }

    /**
     * @param RequestInterface|Type\AddWebRegKeyRequestType $addWebRegKeyRequest
     * @return ResultInterface|Type\AddWebRegKeyResponseType
     * @throws SoapException
     */
    public function createWebRegKey(\Flexsim\FlexnetOperations\Type\AddWebRegKeyRequestType $addWebRegKeyRequest) : \Flexsim\FlexnetOperations\Type\AddWebRegKeyResponseType
    {
        return $this->call('createWebRegKey', $addWebRegKeyRequest);
    }

    /**
     * @param RequestInterface|Type\UpdateBulkEntitlementRequestType $updateBulkEntitlementRequest
     * @return ResultInterface|Type\UpdateBulkEntitlementResponseType
     * @throws SoapException
     */
    public function updateBulkEntitlement(\Flexsim\FlexnetOperations\Type\UpdateBulkEntitlementRequestType $updateBulkEntitlementRequest) : \Flexsim\FlexnetOperations\Type\UpdateBulkEntitlementResponseType
    {
        return $this->call('updateBulkEntitlement', $updateBulkEntitlementRequest);
    }

    /**
     * @param RequestInterface|Type\UpdateSimpleEntitlementRequestType $updateSimpleEntitlementRequest
     * @return ResultInterface|Type\UpdateSimpleEntitlementResponseType
     * @throws SoapException
     */
    public function updateSimpleEntitlement(\Flexsim\FlexnetOperations\Type\UpdateSimpleEntitlementRequestType $updateSimpleEntitlementRequest) : \Flexsim\FlexnetOperations\Type\UpdateSimpleEntitlementResponseType
    {
        return $this->call('updateSimpleEntitlement', $updateSimpleEntitlementRequest);
    }

    /**
     * @param RequestInterface|Type\AddOnlyEntitlementLineItemRequestType $createEntitlementLineItemRequest
     * @return ResultInterface|Type\AddOnlyEntitlementLineItemResponseType
     * @throws SoapException
     */
    public function createEntitlementLineItem(\Flexsim\FlexnetOperations\Type\AddOnlyEntitlementLineItemRequestType $createEntitlementLineItemRequest) : \Flexsim\FlexnetOperations\Type\AddOnlyEntitlementLineItemResponseType
    {
        return $this->call('createEntitlementLineItem', $createEntitlementLineItemRequest);
    }

    /**
     * @param RequestInterface|Type\ReplaceOnlyEntitlementLineItemRequestType $replaceEntitlementLineItemRequest
     * @return ResultInterface|Type\ReplaceOnlyEntitlementLineItemResponseType
     * @throws SoapException
     */
    public function replaceEntitlementLineItem(\Flexsim\FlexnetOperations\Type\ReplaceOnlyEntitlementLineItemRequestType $replaceEntitlementLineItemRequest) : \Flexsim\FlexnetOperations\Type\ReplaceOnlyEntitlementLineItemResponseType
    {
        return $this->call('replaceEntitlementLineItem', $replaceEntitlementLineItemRequest);
    }

    /**
     * @param RequestInterface|Type\RemoveEntitlementLineItemRequestType $removeEntitlementLineItemRequest
     * @return ResultInterface|Type\RemoveEntitlementLineItemResponseType
     * @throws SoapException
     */
    public function deleteEntitlementLineItem(\Flexsim\FlexnetOperations\Type\RemoveEntitlementLineItemRequestType $removeEntitlementLineItemRequest) : \Flexsim\FlexnetOperations\Type\RemoveEntitlementLineItemResponseType
    {
        return $this->call('deleteEntitlementLineItem', $removeEntitlementLineItemRequest);
    }

    /**
     * @param RequestInterface|Type\UpdateEntitlementLineItemRequestType $updateEntitlementLineItemRequest
     * @return ResultInterface|Type\UpdateEntitlementLineItemResponseType
     * @throws SoapException
     */
    public function updateEntitlementLineItem(\Flexsim\FlexnetOperations\Type\UpdateEntitlementLineItemRequestType $updateEntitlementLineItemRequest) : \Flexsim\FlexnetOperations\Type\UpdateEntitlementLineItemResponseType
    {
        return $this->call('updateEntitlementLineItem', $updateEntitlementLineItemRequest);
    }

    /**
     * @param RequestInterface|Type\SearchEntitlementRequestType $searchEntitlementRequest
     * @return ResultInterface|Type\SearchEntitlementResponseType
     * @throws SoapException
     */
    public function getEntitlementsQuery(\Flexsim\FlexnetOperations\Type\SearchEntitlementRequestType $searchEntitlementRequest) : \Flexsim\FlexnetOperations\Type\SearchEntitlementResponseType
    {
        return $this->call('getEntitlementsQuery', $searchEntitlementRequest);
    }

    /**
     * @param RequestInterface|Type\GetBulkEntitlementPropertiesRequestType $getBulkEntitlementPropertiesRequest
     * @return ResultInterface|Type\GetBulkEntitlementPropertiesResponseType
     * @throws SoapException
     */
    public function getBulkEntitlementPropertiesQuery(\Flexsim\FlexnetOperations\Type\GetBulkEntitlementPropertiesRequestType $getBulkEntitlementPropertiesRequest) : \Flexsim\FlexnetOperations\Type\GetBulkEntitlementPropertiesResponseType
    {
        return $this->call('getBulkEntitlementPropertiesQuery', $getBulkEntitlementPropertiesRequest);
    }

    /**
     * @param RequestInterface|Type\GetBulkEntitlementCountRequestType $getBulkEntitlementCountRequest
     * @return ResultInterface|Type\GetBulkEntitlementCountResponseType
     * @throws SoapException
     */
    public function getBulkEntitlementCount(\Flexsim\FlexnetOperations\Type\GetBulkEntitlementCountRequestType $getBulkEntitlementCountRequest) : \Flexsim\FlexnetOperations\Type\GetBulkEntitlementCountResponseType
    {
        return $this->call('getBulkEntitlementCount', $getBulkEntitlementCountRequest);
    }

    /**
     * @param RequestInterface|Type\SearchActivatableItemRequestType $searchActivatableItemRequest
     * @return ResultInterface|Type\SearchActivatableItemResponseType
     * @throws SoapException
     */
    public function getActivatableItemsQuery(\Flexsim\FlexnetOperations\Type\SearchActivatableItemRequestType $searchActivatableItemRequest) : \Flexsim\FlexnetOperations\Type\SearchActivatableItemResponseType
    {
        return $this->call('getActivatableItemsQuery', $searchActivatableItemRequest);
    }

    /**
     * @param RequestInterface|Type\SearchEntitlementLineItemPropertiesRequestType $searchEntitlementLineItemPropertiesRequest
     * @return ResultInterface|Type\SearchEntitlementLineItemPropertiesResponseType
     * @throws SoapException
     */
    public function getEntitlementLineItemPropertiesQuery(\Flexsim\FlexnetOperations\Type\SearchEntitlementLineItemPropertiesRequestType $searchEntitlementLineItemPropertiesRequest) : \Flexsim\FlexnetOperations\Type\SearchEntitlementLineItemPropertiesResponseType
    {
        return $this->call('getEntitlementLineItemPropertiesQuery', $searchEntitlementLineItemPropertiesRequest);
    }

    /**
     * @param RequestInterface|Type\SearchEntitlementMaintenanceLineItemPropertiesRequestType $searchEntitlementMaintenanceLineItemPropertiesRequest
     * @return ResultInterface|Type\SearchEntitlementMaintenanceLineItemPropertiesResponseType
     * @throws SoapException
     */
    public function getEntitlementMaintenanceLineItemPropertiesQuery(\Flexsim\FlexnetOperations\Type\SearchEntitlementMaintenanceLineItemPropertiesRequestType $searchEntitlementMaintenanceLineItemPropertiesRequest) : \Flexsim\FlexnetOperations\Type\SearchEntitlementMaintenanceLineItemPropertiesResponseType
    {
        return $this->call('getEntitlementMaintenanceLineItemPropertiesQuery', $searchEntitlementMaintenanceLineItemPropertiesRequest);
    }

    /**
     * @param RequestInterface|Type\GetEntitlementCountRequestType $getEntitlementCountRequest
     * @return ResultInterface|Type\GetEntitlementCountResponseType
     * @throws SoapException
     */
    public function getEntitlementCount(\Flexsim\FlexnetOperations\Type\GetEntitlementCountRequestType $getEntitlementCountRequest) : \Flexsim\FlexnetOperations\Type\GetEntitlementCountResponseType
    {
        return $this->call('getEntitlementCount', $getEntitlementCountRequest);
    }

    /**
     * @param RequestInterface|Type\GetActivatableItemCountRequestType $getActivatableItemCountRequest
     * @return ResultInterface|Type\GetActivatableItemCountResponseType
     * @throws SoapException
     */
    public function getActivatableItemCount(\Flexsim\FlexnetOperations\Type\GetActivatableItemCountRequestType $getActivatableItemCountRequest) : \Flexsim\FlexnetOperations\Type\GetActivatableItemCountResponseType
    {
        return $this->call('getActivatableItemCount', $getActivatableItemCountRequest);
    }

    /**
     * @param RequestInterface|Type\GetExactAvailableCountRequestType $getExactAvailableCountRequest
     * @return ResultInterface|Type\GetExactAvailableCountResponseType
     * @throws SoapException
     */
    public function getExactAvailableCount(\Flexsim\FlexnetOperations\Type\GetExactAvailableCountRequestType $getExactAvailableCountRequest) : \Flexsim\FlexnetOperations\Type\GetExactAvailableCountResponseType
    {
        return $this->call('getExactAvailableCount', $getExactAvailableCountRequest);
    }

    /**
     * @param RequestInterface|Type\SetEntitlementStateRequestType $setEntitlementStateRequest
     * @return ResultInterface|Type\SetEntitlementStateResponseType
     * @throws SoapException
     */
    public function setEntitlementState(\Flexsim\FlexnetOperations\Type\SetEntitlementStateRequestType $setEntitlementStateRequest) : \Flexsim\FlexnetOperations\Type\SetEntitlementStateResponseType
    {
        return $this->call('setEntitlementState', $setEntitlementStateRequest);
    }

    /**
     * @param RequestInterface|Type\GetWebRegKeyCountRequestType $getWebRegKeyCountRequest
     * @return ResultInterface|Type\GetWebRegKeyCountResponseType
     * @throws SoapException
     */
    public function getWebRegKeyCount(\Flexsim\FlexnetOperations\Type\GetWebRegKeyCountRequestType $getWebRegKeyCountRequest) : \Flexsim\FlexnetOperations\Type\GetWebRegKeyCountResponseType
    {
        return $this->call('getWebRegKeyCount', $getWebRegKeyCountRequest);
    }

    /**
     * @param RequestInterface|Type\GetWebRegKeysQueryRequestType $getWebRegKeysQueryRequest
     * @return ResultInterface|Type\GetWebRegKeysQueryResponseType
     * @throws SoapException
     */
    public function getWebRegKeysQuery(\Flexsim\FlexnetOperations\Type\GetWebRegKeysQueryRequestType $getWebRegKeysQueryRequest) : \Flexsim\FlexnetOperations\Type\GetWebRegKeysQueryResponseType
    {
        return $this->call('getWebRegKeysQuery', $getWebRegKeysQueryRequest);
    }

    /**
     * @param RequestInterface|Type\GetEntitlementAttributesRequestType $getEntitlementAttributesRequest
     * @return ResultInterface|Type\GetEntitlementAttributesResponseType
     * @throws SoapException
     */
    public function getEntitlementAttributesFromModel(\Flexsim\FlexnetOperations\Type\GetEntitlementAttributesRequestType $getEntitlementAttributesRequest) : \Flexsim\FlexnetOperations\Type\GetEntitlementAttributesResponseType
    {
        return $this->call('getEntitlementAttributesFromModel', $getEntitlementAttributesRequest);
    }

    /**
     * @param RequestInterface|Type\RenewEntitlementRequestType $renewLicenseRequest
     * @return ResultInterface|Type\RenewEntitlementResponseType
     * @throws SoapException
     */
    public function renewLicense(\Flexsim\FlexnetOperations\Type\RenewEntitlementRequestType $renewLicenseRequest) : \Flexsim\FlexnetOperations\Type\RenewEntitlementResponseType
    {
        return $this->call('renewLicense', $renewLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\EntitlementLifeCycleRequestType $upgradeLicenseRequest
     * @return ResultInterface|Type\EntitlementLifeCycleResponseType
     * @throws SoapException
     */
    public function upgradeLicense(\Flexsim\FlexnetOperations\Type\EntitlementLifeCycleRequestType $upgradeLicenseRequest) : \Flexsim\FlexnetOperations\Type\EntitlementLifeCycleResponseType
    {
        return $this->call('upgradeLicense', $upgradeLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\EntitlementLifeCycleRequestType $upsellLicenseRequest
     * @return ResultInterface|Type\EntitlementLifeCycleResponseType
     * @throws SoapException
     */
    public function upsellLicense(\Flexsim\FlexnetOperations\Type\EntitlementLifeCycleRequestType $upsellLicenseRequest) : \Flexsim\FlexnetOperations\Type\EntitlementLifeCycleResponseType
    {
        return $this->call('upsellLicense', $upsellLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\MapEntitlementsToUserRequestType $mapEntitlementsToUserRequest
     * @return ResultInterface|Type\MapEntitlementsToUserResponseType
     * @throws SoapException
     */
    public function mapEntitlementsToUser(\Flexsim\FlexnetOperations\Type\MapEntitlementsToUserRequestType $mapEntitlementsToUserRequest) : \Flexsim\FlexnetOperations\Type\MapEntitlementsToUserResponseType
    {
        return $this->call('mapEntitlementsToUser', $mapEntitlementsToUserRequest);
    }

    /**
     * @param RequestInterface|Type\EmailEntitlementRequestType $emailEntitlementRequest
     * @return ResultInterface|Type\EmailEntitlementResponseType
     * @throws SoapException
     */
    public function emailEntitlement(\Flexsim\FlexnetOperations\Type\EmailEntitlementRequestType $emailEntitlementRequest) : \Flexsim\FlexnetOperations\Type\EmailEntitlementResponseType
    {
        return $this->call('emailEntitlement', $emailEntitlementRequest);
    }

    /**
     * @param RequestInterface|Type\EmailActivatableItemRequestType $emailActivatableItemRequest
     * @return ResultInterface|Type\EmailActivatableItemResponseType
     * @throws SoapException
     */
    public function emailActivatableItem(\Flexsim\FlexnetOperations\Type\EmailActivatableItemRequestType $emailActivatableItemRequest) : \Flexsim\FlexnetOperations\Type\EmailActivatableItemResponseType
    {
        return $this->call('emailActivatableItem', $emailActivatableItemRequest);
    }

    /**
     * @param RequestInterface|Type\SetLineItemStateRequestType $setLineItemStateRequest
     * @return ResultInterface|Type\SetLineItemStateResponseType
     * @throws SoapException
     */
    public function setLineItemState(\Flexsim\FlexnetOperations\Type\SetLineItemStateRequestType $setLineItemStateRequest) : \Flexsim\FlexnetOperations\Type\SetLineItemStateResponseType
    {
        return $this->call('setLineItemState', $setLineItemStateRequest);
    }

    /**
     * @param RequestInterface|Type\SetMaintenanceLineItemStateRequestType $setMaintenanceLineItemStateRequest
     * @return ResultInterface|Type\SetMaintenanceLineItemStateResponseType
     * @throws SoapException
     */
    public function setMaintenanceLineItemState(\Flexsim\FlexnetOperations\Type\SetMaintenanceLineItemStateRequestType $setMaintenanceLineItemStateRequest) : \Flexsim\FlexnetOperations\Type\SetMaintenanceLineItemStateResponseType
    {
        return $this->call('setMaintenanceLineItemState', $setMaintenanceLineItemStateRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteWebRegKeyRequestType $deleteWebRegKeyRequest
     * @return ResultInterface|Type\DeleteWebRegKeyResponseType
     * @throws SoapException
     */
    public function deleteWebRegKey(\Flexsim\FlexnetOperations\Type\DeleteWebRegKeyRequestType $deleteWebRegKeyRequest) : \Flexsim\FlexnetOperations\Type\DeleteWebRegKeyResponseType
    {
        return $this->call('deleteWebRegKey', $deleteWebRegKeyRequest);
    }

    /**
     * @param RequestInterface|Type\MergeEntitlementsRequestType $mergeEntitlementsRequest
     * @return ResultInterface|Type\MergeEntitlementsResponseType
     * @throws SoapException
     */
    public function mergeEntitlements(\Flexsim\FlexnetOperations\Type\MergeEntitlementsRequestType $mergeEntitlementsRequest) : \Flexsim\FlexnetOperations\Type\MergeEntitlementsResponseType
    {
        return $this->call('mergeEntitlements', $mergeEntitlementsRequest);
    }

    /**
     * @param RequestInterface|Type\TransferEntitlementsRequestType $transferEntitlementsRequest
     * @return ResultInterface|Type\TransferEntitlementsResponseType
     * @throws SoapException
     */
    public function transferEntitlement(\Flexsim\FlexnetOperations\Type\TransferEntitlementsRequestType $transferEntitlementsRequest) : \Flexsim\FlexnetOperations\Type\TransferEntitlementsResponseType
    {
        return $this->call('transferEntitlement', $transferEntitlementsRequest);
    }

    /**
     * @param RequestInterface|Type\TransferLineItemsRequestType $transferLineItemsRequest
     * @return ResultInterface|Type\TransferLineItemsResponseType
     * @throws SoapException
     */
    public function transferLineItem(\Flexsim\FlexnetOperations\Type\TransferLineItemsRequestType $transferLineItemsRequest) : \Flexsim\FlexnetOperations\Type\TransferLineItemsResponseType
    {
        return $this->call('transferLineItem', $transferLineItemsRequest);
    }

    /**
     * @param RequestInterface|Type\GetStateChangeHistoryRequestType $getStateChangeHistoryRequest
     * @return ResultInterface|Type\GetStateChangeHistoryResponseType
     * @throws SoapException
     */
    public function getStateChangeHistory(\Flexsim\FlexnetOperations\Type\GetStateChangeHistoryRequestType $getStateChangeHistoryRequest) : \Flexsim\FlexnetOperations\Type\GetStateChangeHistoryResponseType
    {
        return $this->call('getStateChangeHistory', $getStateChangeHistoryRequest);
    }

    /**
     * @param RequestInterface|Type\LinkMaintenanceLineItemRequestType $linkMaintenanceLineItemRequest
     * @return ResultInterface|Type\LinkMaintenanceLineItemResponseType
     * @throws SoapException
     */
    public function linkMaintenanceLineItem(\Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemRequestType $linkMaintenanceLineItemRequest) : \Flexsim\FlexnetOperations\Type\LinkMaintenanceLineItemResponseType
    {
        return $this->call('linkMaintenanceLineItem', $linkMaintenanceLineItemRequest);
    }

    /**
     * @param RequestInterface|Type\SplitLineItemRequestType $splitLineItemRequest
     * @return ResultInterface|Type\SplitLineItemResponseType
     * @throws SoapException
     */
    public function splitLineItem(\Flexsim\FlexnetOperations\Type\SplitLineItemRequestType $splitLineItemRequest) : \Flexsim\FlexnetOperations\Type\SplitLineItemResponseType
    {
        return $this->call('splitLineItem', $splitLineItemRequest);
    }

    /**
     * @param RequestInterface|Type\SplitBulkEntitlementRequestType $splitBulkEntitlementRequest
     * @return ResultInterface|Type\SplitBulkEntitlementResponseType
     * @throws SoapException
     */
    public function splitBulkEntitlement(\Flexsim\FlexnetOperations\Type\SplitBulkEntitlementRequestType $splitBulkEntitlementRequest) : \Flexsim\FlexnetOperations\Type\SplitBulkEntitlementResponseType
    {
        return $this->call('splitBulkEntitlement', $splitBulkEntitlementRequest);
    }

    /**
     * @param RequestInterface|Type\GetMatchingLineItemsRequestType $getMatchingLineItemsRequest
     * @return ResultInterface|Type\GetMatchingLineItemsResponseType
     * @throws SoapException
     */
    public function getMatchingLineItems(\Flexsim\FlexnetOperations\Type\GetMatchingLineItemsRequestType $getMatchingLineItemsRequest) : \Flexsim\FlexnetOperations\Type\GetMatchingLineItemsResponseType
    {
        return $this->call('getMatchingLineItems', $getMatchingLineItemsRequest);
    }

    /**
     * @param RequestInterface|Type\GetMatchingBulkEntsRequestType $getMatchingBulkEntsRequest
     * @return ResultInterface|Type\GetMatchingBulkEntsResponseType
     * @throws SoapException
     */
    public function getMatchingBulkEnts(\Flexsim\FlexnetOperations\Type\GetMatchingBulkEntsRequestType $getMatchingBulkEntsRequest) : \Flexsim\FlexnetOperations\Type\GetMatchingBulkEntsResponseType
    {
        return $this->call('getMatchingBulkEnts', $getMatchingBulkEntsRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteMaintenanceLineItemRequestType $deleteMaintenanceLineItemRequest
     * @return ResultInterface|Type\DeleteMaintenanceLineItemResponseType
     * @throws SoapException
     */
    public function deleteMaintenanceLineItem(\Flexsim\FlexnetOperations\Type\DeleteMaintenanceLineItemRequestType $deleteMaintenanceLineItemRequest) : \Flexsim\FlexnetOperations\Type\DeleteMaintenanceLineItemResponseType
    {
        return $this->call('deleteMaintenanceLineItem', $deleteMaintenanceLineItemRequest);
    }

    /**
     * @param RequestInterface|Type\UnlinkMaintenanceLineItemRequestType $unlinkMaintenanceLineItemRequest
     * @return ResultInterface|Type\UnlinkMaintenanceLineItemResponseType
     * @throws SoapException
     */
    public function unlinkMaintenanceLineItem(\Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemRequestType $unlinkMaintenanceLineItemRequest) : \Flexsim\FlexnetOperations\Type\UnlinkMaintenanceLineItemResponseType
    {
        return $this->call('unlinkMaintenanceLineItem', $unlinkMaintenanceLineItemRequest);
    }


}

