<?php

namespace Flexsim\FlexnetOperations\Services\ManageDeviceService;

use Flexsim\FlexnetOperations\Type;
use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ManageDeviceServiceClient
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
     * @param  RequestInterface|Type\BaseProductRequestType  $createBaseProductRequest
     * @return ResultInterface|Type\BaseProductResponseType
     *
     * @throws SoapException
     */
    public function createBaseProduct(\Flexsim\FlexnetOperations\Type\BaseProductRequestType $createBaseProductRequest): \Flexsim\FlexnetOperations\Type\BaseProductResponseType
    {
        return ($this->caller)('createBaseProduct', $createBaseProductRequest);
    }

    /**
     * @param  RequestInterface|Type\BaseProductRequestType  $updateBaseProductRequest
     * @return ResultInterface|Type\BaseProductResponseType
     *
     * @throws SoapException
     */
    public function updateBaseProduct(\Flexsim\FlexnetOperations\Type\BaseProductRequestType $updateBaseProductRequest): \Flexsim\FlexnetOperations\Type\BaseProductResponseType
    {
        return ($this->caller)('updateBaseProduct', $updateBaseProductRequest);
    }

    /**
     * @param  RequestInterface|Type\DeleteBaseProductRequestType  $deleteBaseProductRequest
     * @return ResultInterface|Type\BaseProductResponseType
     *
     * @throws SoapException
     */
    public function deleteBaseProduct(\Flexsim\FlexnetOperations\Type\DeleteBaseProductRequestType $deleteBaseProductRequest): \Flexsim\FlexnetOperations\Type\BaseProductResponseType
    {
        return ($this->caller)('deleteBaseProduct', $deleteBaseProductRequest);
    }

    /**
     * @param  RequestInterface|Type\CreateDevRequestType  $createDeviceRequest
     * @return ResultInterface|Type\CreateDevResponseType
     *
     * @throws SoapException
     */
    public function createDevice(\Flexsim\FlexnetOperations\Type\CreateDevRequestType $createDeviceRequest): \Flexsim\FlexnetOperations\Type\CreateDevResponseType
    {
        return ($this->caller)('createDevice', $createDeviceRequest);
    }

    /**
     * @param  RequestInterface|Type\CreateDevRequestType  $createTestDeviceRequest
     * @return ResultInterface|Type\CreateDevResponseType
     *
     * @throws SoapException
     */
    public function createTestDevice(\Flexsim\FlexnetOperations\Type\CreateDevRequestType $createTestDeviceRequest): \Flexsim\FlexnetOperations\Type\CreateDevResponseType
    {
        return ($this->caller)('createTestDevice', $createTestDeviceRequest);
    }

    /**
     * @param  RequestInterface|Type\DeleteDeviceRequestType  $deleteDeviceRequest
     * @return ResultInterface|Type\DeleteDeviceResponseType
     *
     * @throws SoapException
     */
    public function deleteDevice(\Flexsim\FlexnetOperations\Type\DeleteDeviceRequestType $deleteDeviceRequest): \Flexsim\FlexnetOperations\Type\DeleteDeviceResponseType
    {
        return ($this->caller)('deleteDevice', $deleteDeviceRequest);
    }

    /**
     * @param  RequestInterface|Type\UpdateDevRequestType  $updateDeviceRequest
     * @return ResultInterface|Type\UpdateDevResponseType
     *
     * @throws SoapException
     */
    public function updateDevice(\Flexsim\FlexnetOperations\Type\UpdateDevRequestType $updateDeviceRequest): \Flexsim\FlexnetOperations\Type\UpdateDevResponseType
    {
        return ($this->caller)('updateDevice', $updateDeviceRequest);
    }

    /**
     * @param  RequestInterface|Type\GeneratePrebuiltLicenseRequestType  $generatePrebuiltLicenseRequest
     * @return ResultInterface|Type\GeneratePrebuiltLicenseResponseType
     *
     * @throws SoapException
     */
    public function generatePrebuiltLicense(\Flexsim\FlexnetOperations\Type\GeneratePrebuiltLicenseRequestType $generatePrebuiltLicenseRequest): \Flexsim\FlexnetOperations\Type\GeneratePrebuiltLicenseResponseType
    {
        return ($this->caller)('generatePrebuiltLicense', $generatePrebuiltLicenseRequest);
    }

    /**
     * @param  RequestInterface|Type\GetDevicesRequestType  $getDevicesRequest
     * @return ResultInterface|Type\GetDevicesResponseType
     *
     * @throws SoapException
     */
    public function getDevicesQuery(\Flexsim\FlexnetOperations\Type\GetDevicesRequestType $getDevicesRequest): \Flexsim\FlexnetOperations\Type\GetDevicesResponseType
    {
        return ($this->caller)('getDevicesQuery', $getDevicesRequest);
    }

    /**
     * @param  RequestInterface|Type\GetDevicesCountRequestType  $getDeviceCountRequest
     * @return ResultInterface|Type\GetDeviceCountResponseType
     *
     * @throws SoapException
     */
    public function getDeviceCount(\Flexsim\FlexnetOperations\Type\GetDevicesCountRequestType $getDeviceCountRequest): \Flexsim\FlexnetOperations\Type\GetDeviceCountResponseType
    {
        return ($this->caller)('getDeviceCount', $getDeviceCountRequest);
    }

    /**
     * @param  RequestInterface|Type\LinkAddonLineItemsRequestType  $linkAddonLineItemsRequest
     * @return ResultInterface|Type\LinkAddonLineItemsResponseType
     *
     * @throws SoapException
     */
    public function linkAddonLineItems(\Flexsim\FlexnetOperations\Type\LinkAddonLineItemsRequestType $linkAddonLineItemsRequest): \Flexsim\FlexnetOperations\Type\LinkAddonLineItemsResponseType
    {
        return ($this->caller)('linkAddonLineItems', $linkAddonLineItemsRequest);
    }

    /**
     * @param  RequestInterface|Type\DeleteAddonLineItemsRequestType  $deleteAddonLineItemsRequest
     * @return ResultInterface|Type\DeleteAddonLineItemsResponseType
     *
     * @throws SoapException
     */
    public function deleteAddonLineItems(\Flexsim\FlexnetOperations\Type\DeleteAddonLineItemsRequestType $deleteAddonLineItemsRequest): \Flexsim\FlexnetOperations\Type\DeleteAddonLineItemsResponseType
    {
        return ($this->caller)('deleteAddonLineItems', $deleteAddonLineItemsRequest);
    }

    /**
     * @param  RequestInterface|Type\LinkAddonLineItemsRequestType  $incrementAddonLineItemsRequest
     * @return ResultInterface|Type\LinkAddonLineItemsResponseType
     *
     * @throws SoapException
     */
    public function incrementAddonLineItems(\Flexsim\FlexnetOperations\Type\LinkAddonLineItemsRequestType $incrementAddonLineItemsRequest): \Flexsim\FlexnetOperations\Type\LinkAddonLineItemsResponseType
    {
        return ($this->caller)('incrementAddonLineItems', $incrementAddonLineItemsRequest);
    }

    /**
     * @param  RequestInterface|Type\LinkAddonLineItemsRequestType  $decrementAddonLineItemsRequest
     * @return ResultInterface|Type\LinkAddonLineItemsResponseType
     *
     * @throws SoapException
     */
    public function decrementAddonLineItems(\Flexsim\FlexnetOperations\Type\LinkAddonLineItemsRequestType $decrementAddonLineItemsRequest): \Flexsim\FlexnetOperations\Type\LinkAddonLineItemsResponseType
    {
        return ($this->caller)('decrementAddonLineItems', $decrementAddonLineItemsRequest);
    }

    /**
     * @param  RequestInterface|Type\SetDeviceStatusRequestListType  $setDeviceStatusRequest
     * @return ResultInterface|Type\SetDeviceStatusResponseType
     *
     * @throws SoapException
     */
    public function setDeviceStatus(\Flexsim\FlexnetOperations\Type\SetDeviceStatusRequestListType $setDeviceStatusRequest): \Flexsim\FlexnetOperations\Type\SetDeviceStatusResponseType
    {
        return ($this->caller)('setDeviceStatus', $setDeviceStatusRequest);
    }

    /**
     * @param  RequestInterface|Type\GenerateCapabilityResponseRequestType  $generateCapabilityResponseRequest
     * @return ResultInterface|Type\GenerateCapabilityResponseResponseType
     *
     * @throws SoapException
     */
    public function generateCapabilityResponse(\Flexsim\FlexnetOperations\Type\GenerateCapabilityResponseRequestType $generateCapabilityResponseRequest): \Flexsim\FlexnetOperations\Type\GenerateCapabilityResponseResponseType
    {
        return ($this->caller)('generateCapabilityResponse', $generateCapabilityResponseRequest);
    }

    /**
     * @param  RequestInterface|Type\GetUsageSummaryRequestType  $getUsageSummaryRequest
     * @return ResultInterface|Type\GetUsageSummaryResponseType
     *
     * @throws SoapException
     */
    public function getUsageSummary(\Flexsim\FlexnetOperations\Type\GetUsageSummaryRequestType $getUsageSummaryRequest): \Flexsim\FlexnetOperations\Type\GetUsageSummaryResponseType
    {
        return ($this->caller)('getUsageSummary', $getUsageSummaryRequest);
    }

    /**
     * @param  RequestInterface|Type\GetUsageSummaryTimesRequestType  $getUsageSummaryTimesRequest
     * @return ResultInterface|Type\GetUsageSummaryTimesResponseType
     *
     * @throws SoapException
     */
    public function getUsageSummaryTimes(\Flexsim\FlexnetOperations\Type\GetUsageSummaryTimesRequestType $getUsageSummaryTimesRequest): \Flexsim\FlexnetOperations\Type\GetUsageSummaryTimesResponseType
    {
        return ($this->caller)('getUsageSummaryTimes', $getUsageSummaryTimesRequest);
    }

    /**
     * @param  RequestInterface|Type\GetUsageHistoryRequestType  $getUsageHistoryRequest
     * @return ResultInterface|Type\GetUsageHistoryResponseType
     *
     * @throws SoapException
     */
    public function getUsageHistory(\Flexsim\FlexnetOperations\Type\GetUsageHistoryRequestType $getUsageHistoryRequest): \Flexsim\FlexnetOperations\Type\GetUsageHistoryResponseType
    {
        return ($this->caller)('getUsageHistory', $getUsageHistoryRequest);
    }

    /**
     * @param  RequestInterface|Type\DeleteUsageHistoryRequestType  $deleteUsageHistoryRequest
     * @return ResultInterface|Type\DeleteUsageHistoryResponseType
     *
     * @throws SoapException
     */
    public function deleteUsageHistory(\Flexsim\FlexnetOperations\Type\DeleteUsageHistoryRequestType $deleteUsageHistoryRequest): \Flexsim\FlexnetOperations\Type\DeleteUsageHistoryResponseType
    {
        return ($this->caller)('deleteUsageHistory', $deleteUsageHistoryRequest);
    }

    /**
     * @param  RequestInterface|Type\MoveDeviceRequestType  $moveDeviceRequest
     * @return ResultInterface|Type\MoveDeviceResponseType
     *
     * @throws SoapException
     */
    public function moveDevice(\Flexsim\FlexnetOperations\Type\MoveDeviceRequestType $moveDeviceRequest): \Flexsim\FlexnetOperations\Type\MoveDeviceResponseType
    {
        return ($this->caller)('moveDevice', $moveDeviceRequest);
    }

    /**
     * @param  RequestInterface|Type\ReturnHostRequestListType  $returnHostRequest
     * @return ResultInterface|Type\ReturnHostResponseType
     *
     * @throws SoapException
     */
    public function returnHost(\Flexsim\FlexnetOperations\Type\ReturnHostRequestListType $returnHostRequest): \Flexsim\FlexnetOperations\Type\ReturnHostResponseType
    {
        return ($this->caller)('returnHost', $returnHostRequest);
    }

    /**
     * @param  RequestInterface|Type\ObsoleteHostRequestListType  $obsoleteHostRequest
     * @return ResultInterface|Type\ObsoleteHostResponseType
     *
     * @throws SoapException
     */
    public function obsoleteHost(\Flexsim\FlexnetOperations\Type\ObsoleteHostRequestListType $obsoleteHostRequest): \Flexsim\FlexnetOperations\Type\ObsoleteHostResponseType
    {
        return ($this->caller)('obsoleteHost', $obsoleteHostRequest);
    }

    /**
     * @param  RequestInterface|Type\GetDeletedSyncRequestType  $getDeletedSyncRequest
     * @return ResultInterface|Type\GetDeletedSyncResponseType
     *
     * @throws SoapException
     */
    public function getDeletedSync(\Flexsim\FlexnetOperations\Type\GetDeletedSyncRequestType $getDeletedSyncRequest): \Flexsim\FlexnetOperations\Type\GetDeletedSyncResponseType
    {
        return ($this->caller)('getDeletedSync', $getDeletedSyncRequest);
    }

    /**
     * @param  RequestInterface|Type\RestoreServedClientRequestType  $restoreServedClientRequest
     * @return ResultInterface|Type\RestoreServedClientResponseType
     *
     * @throws SoapException
     */
    public function restoreServedClient(\Flexsim\FlexnetOperations\Type\RestoreServedClientRequestType $restoreServedClientRequest): \Flexsim\FlexnetOperations\Type\RestoreServedClientResponseType
    {
        return ($this->caller)('restoreServedClient', $restoreServedClientRequest);
    }

    /**
     * @param  RequestInterface|Type\GetAutoProvisionedServerRequest  $getAutoProvisionedServerRequest
     * @return ResultInterface|Type\GetAutoProvisionedServerResponse
     *
     * @throws SoapException
     */
    public function getAutoProvisionedServer(\Flexsim\FlexnetOperations\Type\GetAutoProvisionedServerRequest $getAutoProvisionedServerRequest): \Flexsim\FlexnetOperations\Type\GetAutoProvisionedServerResponse
    {
        return ($this->caller)('getAutoProvisionedServer', $getAutoProvisionedServerRequest);
    }

    /**
     * @param  RequestInterface|Type\GenerateCloneDetectionReportRequest  $generateCloneDetectionReportRequest
     * @return ResultInterface|Type\GenerateCloneDetectionReportResponse
     *
     * @throws SoapException
     */
    public function generateCloneDetectionReport(\Flexsim\FlexnetOperations\Type\GenerateCloneDetectionReportRequest $generateCloneDetectionReportRequest): \Flexsim\FlexnetOperations\Type\GenerateCloneDetectionReportResponse
    {
        return ($this->caller)('generateCloneDetectionReport', $generateCloneDetectionReportRequest);
    }
}
