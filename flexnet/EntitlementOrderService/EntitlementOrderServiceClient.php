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

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param  RequestInterface & Type\CreateBulkEntitlementRequestType  $createBulkEntitlementRequest
     * @return ResultInterface & Type\CreateBulkEntitlementResponseType
     *
     * @throws SoapException
     */
    public function createBulkEntitlement(\Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementRequestType $createBulkEntitlementRequest): \Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementResponseType
    {
        $response = ($this->caller)('createBulkEntitlement', $createBulkEntitlementRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\CreateBulkEntitlementResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\CreateSimpleEntitlementRequestType  $createSimpleEntitlementRequest
     * @return ResultInterface & Type\CreateSimpleEntitlementResponseType
     *
     * @throws SoapException
     */
    public function createSimpleEntitlement(\Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementRequestType $createSimpleEntitlementRequest): \Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementResponseType
    {
        $response = ($this->caller)('createSimpleEntitlement', $createSimpleEntitlementRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\CreateSimpleEntitlementResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\DeleteEntitlementRequestType  $deleteEntitlementRequest
     * @return ResultInterface & Type\DeleteEntitlementResponseType
     *
     * @throws SoapException
     */
    public function deleteEntitlement(\Flexnet\EntitlementOrderService\Type\DeleteEntitlementRequestType $deleteEntitlementRequest): \Flexnet\EntitlementOrderService\Type\DeleteEntitlementResponseType
    {
        $response = ($this->caller)('deleteEntitlement', $deleteEntitlementRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\DeleteEntitlementResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\AddWebRegKeyRequestType  $addWebRegKeyRequest
     * @return ResultInterface & Type\AddWebRegKeyResponseType
     *
     * @throws SoapException
     */
    public function createWebRegKey(\Flexnet\EntitlementOrderService\Type\AddWebRegKeyRequestType $addWebRegKeyRequest): \Flexnet\EntitlementOrderService\Type\AddWebRegKeyResponseType
    {
        $response = ($this->caller)('createWebRegKey', $addWebRegKeyRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\AddWebRegKeyResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\UpdateBulkEntitlementRequestType  $updateBulkEntitlementRequest
     * @return ResultInterface & Type\UpdateBulkEntitlementResponseType
     *
     * @throws SoapException
     */
    public function updateBulkEntitlement(\Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementRequestType $updateBulkEntitlementRequest): \Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementResponseType
    {
        $response = ($this->caller)('updateBulkEntitlement', $updateBulkEntitlementRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\UpdateBulkEntitlementResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\UpdateSimpleEntitlementRequestType  $updateSimpleEntitlementRequest
     * @return ResultInterface & Type\UpdateSimpleEntitlementResponseType
     *
     * @throws SoapException
     */
    public function updateSimpleEntitlement(\Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementRequestType $updateSimpleEntitlementRequest): \Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementResponseType
    {
        $response = ($this->caller)('updateSimpleEntitlement', $updateSimpleEntitlementRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\UpdateSimpleEntitlementResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\AddOnlyEntitlementLineItemRequestType  $createEntitlementLineItemRequest
     * @return ResultInterface & Type\AddOnlyEntitlementLineItemResponseType
     *
     * @throws SoapException
     */
    public function createEntitlementLineItem(\Flexnet\EntitlementOrderService\Type\AddOnlyEntitlementLineItemRequestType $createEntitlementLineItemRequest): \Flexnet\EntitlementOrderService\Type\AddOnlyEntitlementLineItemResponseType
    {
        $response = ($this->caller)('createEntitlementLineItem', $createEntitlementLineItemRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\AddOnlyEntitlementLineItemResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\ReplaceOnlyEntitlementLineItemRequestType  $replaceEntitlementLineItemRequest
     * @return ResultInterface & Type\ReplaceOnlyEntitlementLineItemResponseType
     *
     * @throws SoapException
     */
    public function replaceEntitlementLineItem(\Flexnet\EntitlementOrderService\Type\ReplaceOnlyEntitlementLineItemRequestType $replaceEntitlementLineItemRequest): \Flexnet\EntitlementOrderService\Type\ReplaceOnlyEntitlementLineItemResponseType
    {
        $response = ($this->caller)('replaceEntitlementLineItem', $replaceEntitlementLineItemRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\ReplaceOnlyEntitlementLineItemResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\RemoveEntitlementLineItemRequestType  $removeEntitlementLineItemRequest
     * @return ResultInterface & Type\RemoveEntitlementLineItemResponseType
     *
     * @throws SoapException
     */
    public function deleteEntitlementLineItem(\Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemRequestType $removeEntitlementLineItemRequest): \Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemResponseType
    {
        $response = ($this->caller)('deleteEntitlementLineItem', $removeEntitlementLineItemRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\RemoveEntitlementLineItemResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\UpdateEntitlementLineItemRequestType  $updateEntitlementLineItemRequest
     * @return ResultInterface & Type\UpdateEntitlementLineItemResponseType
     *
     * @throws SoapException
     */
    public function updateEntitlementLineItem(\Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemRequestType $updateEntitlementLineItemRequest): \Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemResponseType
    {
        $response = ($this->caller)('updateEntitlementLineItem', $updateEntitlementLineItemRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\UpdateEntitlementLineItemResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\SearchEntitlementRequestType  $searchEntitlementRequest
     * @return ResultInterface & Type\SearchEntitlementResponseType
     *
     * @throws SoapException
     */
    public function getEntitlementsQuery(\Flexnet\EntitlementOrderService\Type\SearchEntitlementRequestType $searchEntitlementRequest): \Flexnet\EntitlementOrderService\Type\SearchEntitlementResponseType
    {
        $response = ($this->caller)('getEntitlementsQuery', $searchEntitlementRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\SearchEntitlementResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetBulkEntitlementPropertiesRequestType  $getBulkEntitlementPropertiesRequest
     * @return ResultInterface & Type\GetBulkEntitlementPropertiesResponseType
     *
     * @throws SoapException
     */
    public function getBulkEntitlementPropertiesQuery(\Flexnet\EntitlementOrderService\Type\GetBulkEntitlementPropertiesRequestType $getBulkEntitlementPropertiesRequest): \Flexnet\EntitlementOrderService\Type\GetBulkEntitlementPropertiesResponseType
    {
        $response = ($this->caller)('getBulkEntitlementPropertiesQuery', $getBulkEntitlementPropertiesRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\GetBulkEntitlementPropertiesResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetBulkEntitlementCountRequestType  $getBulkEntitlementCountRequest
     * @return ResultInterface & Type\GetBulkEntitlementCountResponseType
     *
     * @throws SoapException
     */
    public function getBulkEntitlementCount(\Flexnet\EntitlementOrderService\Type\GetBulkEntitlementCountRequestType $getBulkEntitlementCountRequest): \Flexnet\EntitlementOrderService\Type\GetBulkEntitlementCountResponseType
    {
        $response = ($this->caller)('getBulkEntitlementCount', $getBulkEntitlementCountRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\GetBulkEntitlementCountResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\SearchActivatableItemRequestType  $searchActivatableItemRequest
     * @return ResultInterface & Type\SearchActivatableItemResponseType
     *
     * @throws SoapException
     */
    public function getActivatableItemsQuery(\Flexnet\EntitlementOrderService\Type\SearchActivatableItemRequestType $searchActivatableItemRequest): \Flexnet\EntitlementOrderService\Type\SearchActivatableItemResponseType
    {
        $response = ($this->caller)('getActivatableItemsQuery', $searchActivatableItemRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\SearchActivatableItemResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\SearchEntitlementLineItemPropertiesRequestType  $searchEntitlementLineItemPropertiesRequest
     * @return ResultInterface & Type\SearchEntitlementLineItemPropertiesResponseType
     *
     * @throws SoapException
     */
    public function getEntitlementLineItemPropertiesQuery(\Flexnet\EntitlementOrderService\Type\SearchEntitlementLineItemPropertiesRequestType $searchEntitlementLineItemPropertiesRequest): \Flexnet\EntitlementOrderService\Type\SearchEntitlementLineItemPropertiesResponseType
    {
        $response = ($this->caller)('getEntitlementLineItemPropertiesQuery', $searchEntitlementLineItemPropertiesRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\SearchEntitlementLineItemPropertiesResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\SearchEntitlementMaintenanceLineItemPropertiesRequestType  $searchEntitlementMaintenanceLineItemPropertiesRequest
     * @return ResultInterface & Type\SearchEntitlementMaintenanceLineItemPropertiesResponseType
     *
     * @throws SoapException
     */
    public function getEntitlementMaintenanceLineItemPropertiesQuery(\Flexnet\EntitlementOrderService\Type\SearchEntitlementMaintenanceLineItemPropertiesRequestType $searchEntitlementMaintenanceLineItemPropertiesRequest): \Flexnet\EntitlementOrderService\Type\SearchEntitlementMaintenanceLineItemPropertiesResponseType
    {
        $response = ($this->caller)('getEntitlementMaintenanceLineItemPropertiesQuery', $searchEntitlementMaintenanceLineItemPropertiesRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\SearchEntitlementMaintenanceLineItemPropertiesResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetEntitlementCountRequestType  $getEntitlementCountRequest
     * @return ResultInterface & Type\GetEntitlementCountResponseType
     *
     * @throws SoapException
     */
    public function getEntitlementCount(\Flexnet\EntitlementOrderService\Type\GetEntitlementCountRequestType $getEntitlementCountRequest): \Flexnet\EntitlementOrderService\Type\GetEntitlementCountResponseType
    {
        $response = ($this->caller)('getEntitlementCount', $getEntitlementCountRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\GetEntitlementCountResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetActivatableItemCountRequestType  $getActivatableItemCountRequest
     * @return ResultInterface & Type\GetActivatableItemCountResponseType
     *
     * @throws SoapException
     */
    public function getActivatableItemCount(\Flexnet\EntitlementOrderService\Type\GetActivatableItemCountRequestType $getActivatableItemCountRequest): \Flexnet\EntitlementOrderService\Type\GetActivatableItemCountResponseType
    {
        $response = ($this->caller)('getActivatableItemCount', $getActivatableItemCountRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\GetActivatableItemCountResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetExactAvailableCountRequestType  $getExactAvailableCountRequest
     * @return ResultInterface & Type\GetExactAvailableCountResponseType
     *
     * @throws SoapException
     */
    public function getExactAvailableCount(\Flexnet\EntitlementOrderService\Type\GetExactAvailableCountRequestType $getExactAvailableCountRequest): \Flexnet\EntitlementOrderService\Type\GetExactAvailableCountResponseType
    {
        $response = ($this->caller)('getExactAvailableCount', $getExactAvailableCountRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\GetExactAvailableCountResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\SetEntitlementStateRequestType  $setEntitlementStateRequest
     * @return ResultInterface & Type\SetEntitlementStateResponseType
     *
     * @throws SoapException
     */
    public function setEntitlementState(\Flexnet\EntitlementOrderService\Type\SetEntitlementStateRequestType $setEntitlementStateRequest): \Flexnet\EntitlementOrderService\Type\SetEntitlementStateResponseType
    {
        $response = ($this->caller)('setEntitlementState', $setEntitlementStateRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\SetEntitlementStateResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetWebRegKeyCountRequestType  $getWebRegKeyCountRequest
     * @return ResultInterface & Type\GetWebRegKeyCountResponseType
     *
     * @throws SoapException
     */
    public function getWebRegKeyCount(\Flexnet\EntitlementOrderService\Type\GetWebRegKeyCountRequestType $getWebRegKeyCountRequest): \Flexnet\EntitlementOrderService\Type\GetWebRegKeyCountResponseType
    {
        $response = ($this->caller)('getWebRegKeyCount', $getWebRegKeyCountRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\GetWebRegKeyCountResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetWebRegKeysQueryRequestType  $getWebRegKeysQueryRequest
     * @return ResultInterface & Type\GetWebRegKeysQueryResponseType
     *
     * @throws SoapException
     */
    public function getWebRegKeysQuery(\Flexnet\EntitlementOrderService\Type\GetWebRegKeysQueryRequestType $getWebRegKeysQueryRequest): \Flexnet\EntitlementOrderService\Type\GetWebRegKeysQueryResponseType
    {
        $response = ($this->caller)('getWebRegKeysQuery', $getWebRegKeysQueryRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\GetWebRegKeysQueryResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetEntitlementAttributesRequestType  $getEntitlementAttributesRequest
     * @return ResultInterface & Type\GetEntitlementAttributesResponseType
     *
     * @throws SoapException
     */
    public function getEntitlementAttributesFromModel(\Flexnet\EntitlementOrderService\Type\GetEntitlementAttributesRequestType $getEntitlementAttributesRequest): \Flexnet\EntitlementOrderService\Type\GetEntitlementAttributesResponseType
    {
        $response = ($this->caller)('getEntitlementAttributesFromModel', $getEntitlementAttributesRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\GetEntitlementAttributesResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\RenewEntitlementRequestType  $renewLicenseRequest
     * @return ResultInterface & Type\RenewEntitlementResponseType
     *
     * @throws SoapException
     */
    public function renewLicense(\Flexnet\EntitlementOrderService\Type\RenewEntitlementRequestType $renewLicenseRequest): \Flexnet\EntitlementOrderService\Type\RenewEntitlementResponseType
    {
        $response = ($this->caller)('renewLicense', $renewLicenseRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\RenewEntitlementResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\EntitlementLifeCycleRequestType  $upgradeLicenseRequest
     * @return ResultInterface & Type\EntitlementLifeCycleResponseType
     *
     * @throws SoapException
     */
    public function upgradeLicense(\Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleRequestType $upgradeLicenseRequest): \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleResponseType
    {
        $response = ($this->caller)('upgradeLicense', $upgradeLicenseRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\EntitlementLifeCycleRequestType  $upsellLicenseRequest
     * @return ResultInterface & Type\EntitlementLifeCycleResponseType
     *
     * @throws SoapException
     */
    public function upsellLicense(\Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleRequestType $upsellLicenseRequest): \Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleResponseType
    {
        $response = ($this->caller)('upsellLicense', $upsellLicenseRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\EntitlementLifeCycleResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\MapEntitlementsToUserRequestType  $mapEntitlementsToUserRequest
     * @return ResultInterface & Type\MapEntitlementsToUserResponseType
     *
     * @throws SoapException
     */
    public function mapEntitlementsToUser(\Flexnet\EntitlementOrderService\Type\MapEntitlementsToUserRequestType $mapEntitlementsToUserRequest): \Flexnet\EntitlementOrderService\Type\MapEntitlementsToUserResponseType
    {
        $response = ($this->caller)('mapEntitlementsToUser', $mapEntitlementsToUserRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\MapEntitlementsToUserResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\EmailEntitlementRequestType  $emailEntitlementRequest
     * @return ResultInterface & Type\EmailEntitlementResponseType
     *
     * @throws SoapException
     */
    public function emailEntitlement(\Flexnet\EntitlementOrderService\Type\EmailEntitlementRequestType $emailEntitlementRequest): \Flexnet\EntitlementOrderService\Type\EmailEntitlementResponseType
    {
        $response = ($this->caller)('emailEntitlement', $emailEntitlementRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\EmailEntitlementResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\EmailActivatableItemRequestType  $emailActivatableItemRequest
     * @return ResultInterface & Type\EmailActivatableItemResponseType
     *
     * @throws SoapException
     */
    public function emailActivatableItem(\Flexnet\EntitlementOrderService\Type\EmailActivatableItemRequestType $emailActivatableItemRequest): \Flexnet\EntitlementOrderService\Type\EmailActivatableItemResponseType
    {
        $response = ($this->caller)('emailActivatableItem', $emailActivatableItemRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\EmailActivatableItemResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\SetLineItemStateRequestType  $setLineItemStateRequest
     * @return ResultInterface & Type\SetLineItemStateResponseType
     *
     * @throws SoapException
     */
    public function setLineItemState(\Flexnet\EntitlementOrderService\Type\SetLineItemStateRequestType $setLineItemStateRequest): \Flexnet\EntitlementOrderService\Type\SetLineItemStateResponseType
    {
        $response = ($this->caller)('setLineItemState', $setLineItemStateRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\SetLineItemStateResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\SetMaintenanceLineItemStateRequestType  $setMaintenanceLineItemStateRequest
     * @return ResultInterface & Type\SetMaintenanceLineItemStateResponseType
     *
     * @throws SoapException
     */
    public function setMaintenanceLineItemState(\Flexnet\EntitlementOrderService\Type\SetMaintenanceLineItemStateRequestType $setMaintenanceLineItemStateRequest): \Flexnet\EntitlementOrderService\Type\SetMaintenanceLineItemStateResponseType
    {
        $response = ($this->caller)('setMaintenanceLineItemState', $setMaintenanceLineItemStateRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\SetMaintenanceLineItemStateResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\DeleteWebRegKeyRequestType  $deleteWebRegKeyRequest
     * @return ResultInterface & Type\DeleteWebRegKeyResponseType
     *
     * @throws SoapException
     */
    public function deleteWebRegKey(\Flexnet\EntitlementOrderService\Type\DeleteWebRegKeyRequestType $deleteWebRegKeyRequest): \Flexnet\EntitlementOrderService\Type\DeleteWebRegKeyResponseType
    {
        $response = ($this->caller)('deleteWebRegKey', $deleteWebRegKeyRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\DeleteWebRegKeyResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\MergeEntitlementsRequestType  $mergeEntitlementsRequest
     * @return ResultInterface & Type\MergeEntitlementsResponseType
     *
     * @throws SoapException
     */
    public function mergeEntitlements(\Flexnet\EntitlementOrderService\Type\MergeEntitlementsRequestType $mergeEntitlementsRequest): \Flexnet\EntitlementOrderService\Type\MergeEntitlementsResponseType
    {
        $response = ($this->caller)('mergeEntitlements', $mergeEntitlementsRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\MergeEntitlementsResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\TransferEntitlementsRequestType  $transferEntitlementsRequest
     * @return ResultInterface & Type\TransferEntitlementsResponseType
     *
     * @throws SoapException
     */
    public function transferEntitlement(\Flexnet\EntitlementOrderService\Type\TransferEntitlementsRequestType $transferEntitlementsRequest): \Flexnet\EntitlementOrderService\Type\TransferEntitlementsResponseType
    {
        $response = ($this->caller)('transferEntitlement', $transferEntitlementsRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\TransferEntitlementsResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\TransferLineItemsRequestType  $transferLineItemsRequest
     * @return ResultInterface & Type\TransferLineItemsResponseType
     *
     * @throws SoapException
     */
    public function transferLineItem(\Flexnet\EntitlementOrderService\Type\TransferLineItemsRequestType $transferLineItemsRequest): \Flexnet\EntitlementOrderService\Type\TransferLineItemsResponseType
    {
        $response = ($this->caller)('transferLineItem', $transferLineItemsRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\TransferLineItemsResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetStateChangeHistoryRequestType  $getStateChangeHistoryRequest
     * @return ResultInterface & Type\GetStateChangeHistoryResponseType
     *
     * @throws SoapException
     */
    public function getStateChangeHistory(\Flexnet\EntitlementOrderService\Type\GetStateChangeHistoryRequestType $getStateChangeHistoryRequest): \Flexnet\EntitlementOrderService\Type\GetStateChangeHistoryResponseType
    {
        $response = ($this->caller)('getStateChangeHistory', $getStateChangeHistoryRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\GetStateChangeHistoryResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\LinkMaintenanceLineItemRequestType  $linkMaintenanceLineItemRequest
     * @return ResultInterface & Type\LinkMaintenanceLineItemResponseType
     *
     * @throws SoapException
     */
    public function linkMaintenanceLineItem(\Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemRequestType $linkMaintenanceLineItemRequest): \Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemResponseType
    {
        $response = ($this->caller)('linkMaintenanceLineItem', $linkMaintenanceLineItemRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\LinkMaintenanceLineItemResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\SplitLineItemRequestType  $splitLineItemRequest
     * @return ResultInterface & Type\SplitLineItemResponseType
     *
     * @throws SoapException
     */
    public function splitLineItem(\Flexnet\EntitlementOrderService\Type\SplitLineItemRequestType $splitLineItemRequest): \Flexnet\EntitlementOrderService\Type\SplitLineItemResponseType
    {
        $response = ($this->caller)('splitLineItem', $splitLineItemRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\SplitLineItemResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\SplitBulkEntitlementRequestType  $splitBulkEntitlementRequest
     * @return ResultInterface & Type\SplitBulkEntitlementResponseType
     *
     * @throws SoapException
     */
    public function splitBulkEntitlement(\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementRequestType $splitBulkEntitlementRequest): \Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementResponseType
    {
        $response = ($this->caller)('splitBulkEntitlement', $splitBulkEntitlementRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\SplitBulkEntitlementResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetMatchingLineItemsRequestType  $getMatchingLineItemsRequest
     * @return ResultInterface & Type\GetMatchingLineItemsResponseType
     *
     * @throws SoapException
     */
    public function getMatchingLineItems(\Flexnet\EntitlementOrderService\Type\GetMatchingLineItemsRequestType $getMatchingLineItemsRequest): \Flexnet\EntitlementOrderService\Type\GetMatchingLineItemsResponseType
    {
        $response = ($this->caller)('getMatchingLineItems', $getMatchingLineItemsRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\GetMatchingLineItemsResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetMatchingBulkEntsRequestType  $getMatchingBulkEntsRequest
     * @return ResultInterface & Type\GetMatchingBulkEntsResponseType
     *
     * @throws SoapException
     */
    public function getMatchingBulkEnts(\Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsRequestType $getMatchingBulkEntsRequest): \Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsResponseType
    {
        $response = ($this->caller)('getMatchingBulkEnts', $getMatchingBulkEntsRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\GetMatchingBulkEntsResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\DeleteMaintenanceLineItemRequestType  $deleteMaintenanceLineItemRequest
     * @return ResultInterface & Type\DeleteMaintenanceLineItemResponseType
     *
     * @throws SoapException
     */
    public function deleteMaintenanceLineItem(\Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemRequestType $deleteMaintenanceLineItemRequest): \Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemResponseType
    {
        $response = ($this->caller)('deleteMaintenanceLineItem', $deleteMaintenanceLineItemRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\DeleteMaintenanceLineItemResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\UnlinkMaintenanceLineItemRequestType  $unlinkMaintenanceLineItemRequest
     * @return ResultInterface & Type\UnlinkMaintenanceLineItemResponseType
     *
     * @throws SoapException
     */
    public function unlinkMaintenanceLineItem(\Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemRequestType $unlinkMaintenanceLineItemRequest): \Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemResponseType
    {
        $response = ($this->caller)('unlinkMaintenanceLineItem', $unlinkMaintenanceLineItemRequest);

        \Psl\Type\instance_of(\Flexnet\EntitlementOrderService\Type\UnlinkMaintenanceLineItemResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}
