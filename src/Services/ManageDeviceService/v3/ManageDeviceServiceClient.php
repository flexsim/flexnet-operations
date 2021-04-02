<?php

namespace Flexsim\FlexnetOperations\Services\ManageDeviceService\v3;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Flexsim\FlexnetOperations\Type;

class ManageDeviceServiceClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\CreateDevRequestType $createDeviceRequest
     * @return ResultInterface|Type\CreateDevResponseType
     * @throws SoapException
     */
    public function createDevice(\Flexsim\FlexnetOperations\Type\CreateDevRequestType $createDeviceRequest): \Flexsim\FlexnetOperations\Type\CreateDevResponseType
    {
        return $this->call('createDevice', $createDeviceRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteDeviceRequestType $deleteDeviceRequest
     * @return ResultInterface|Type\DeleteDeviceResponseType
     * @throws SoapException
     */
    public function deleteDevice(\Flexsim\FlexnetOperations\Type\DeleteDeviceRequestType $deleteDeviceRequest): \Flexsim\FlexnetOperations\Type\DeleteDeviceResponseType
    {
        return $this->call('deleteDevice', $deleteDeviceRequest);
    }

    /**
     * @param RequestInterface|Type\UpdateDevRequestType $updateDeviceRequest
     * @return ResultInterface|Type\UpdateDevResponseType
     * @throws SoapException
     */
    public function updateDevice(\Flexsim\FlexnetOperations\Type\UpdateDevRequestType $updateDeviceRequest): \Flexsim\FlexnetOperations\Type\UpdateDevResponseType
    {
        return $this->call('updateDevice', $updateDeviceRequest);
    }

    /**
     * @param RequestInterface|Type\GeneratePrebuiltLicenseRequestType $generatePrebuiltLicenseRequest
     * @return ResultInterface|Type\GeneratePrebuiltLicenseResponseType
     * @throws SoapException
     */
    public function generatePrebuiltLicense(\Flexsim\FlexnetOperations\Type\GeneratePrebuiltLicenseRequestType $generatePrebuiltLicenseRequest): \Flexsim\FlexnetOperations\Type\GeneratePrebuiltLicenseResponseType
    {
        return $this->call('generatePrebuiltLicense', $generatePrebuiltLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\GetDevicesRequestType $getDevicesRequest
     * @return ResultInterface|Type\GetDevicesResponseType
     * @throws SoapException
     */
    public function getDevicesQuery(\Flexsim\FlexnetOperations\Type\GetDevicesRequestType $getDevicesRequest): \Flexsim\FlexnetOperations\Type\GetDevicesResponseType
    {
        return $this->call('getDevicesQuery', $getDevicesRequest);
    }

    /**
     * @param RequestInterface|Type\GetDevicesCountRequestType $getDeviceCountRequest
     * @return ResultInterface|Type\GetDeviceCountResponseType
     * @throws SoapException
     */
    public function getDeviceCount(\Flexsim\FlexnetOperations\Type\GetDevicesCountRequestType $getDeviceCountRequest): \Flexsim\FlexnetOperations\Type\GetDeviceCountResponseType
    {
        return $this->call('getDeviceCount', $getDeviceCountRequest);
    }

    /**
     * @param RequestInterface|Type\LinkAddonLineItemsRequestType $linkAddonLineItemsRequest
     * @return ResultInterface|Type\LinkAddonLineItemsResponseType
     * @throws SoapException
     */
    public function linkAddonLineItems(\Flexsim\FlexnetOperations\Type\LinkAddonLineItemsRequestType $linkAddonLineItemsRequest): \Flexsim\FlexnetOperations\Type\LinkAddonLineItemsResponseType
    {
        return $this->call('linkAddonLineItems', $linkAddonLineItemsRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteAddonLineItemsRequestType $deleteAddonLineItemsRequest
     * @return ResultInterface|Type\DeleteAddonLineItemsResponseType
     * @throws SoapException
     */
    public function deleteAddonLineItems(\Flexsim\FlexnetOperations\Type\DeleteAddonLineItemsRequestType $deleteAddonLineItemsRequest): \Flexsim\FlexnetOperations\Type\DeleteAddonLineItemsResponseType
    {
        return $this->call('deleteAddonLineItems', $deleteAddonLineItemsRequest);
    }

    /**
     * @param RequestInterface|Type\LinkAddonLineItemsRequestType $incrementAddonLineItemsRequest
     * @return ResultInterface|Type\LinkAddonLineItemsResponseType
     * @throws SoapException
     */
    public function incrementAddonLineItems(\Flexsim\FlexnetOperations\Type\LinkAddonLineItemsRequestType $incrementAddonLineItemsRequest): \Flexsim\FlexnetOperations\Type\LinkAddonLineItemsResponseType
    {
        return $this->call('incrementAddonLineItems', $incrementAddonLineItemsRequest);
    }

    /**
     * @param RequestInterface|Type\LinkAddonLineItemsRequestType $decrementAddonLineItemsRequest
     * @return ResultInterface|Type\LinkAddonLineItemsResponseType
     * @throws SoapException
     */
    public function decrementAddonLineItems(\Flexsim\FlexnetOperations\Type\LinkAddonLineItemsRequestType $decrementAddonLineItemsRequest): \Flexsim\FlexnetOperations\Type\LinkAddonLineItemsResponseType
    {
        return $this->call('decrementAddonLineItems', $decrementAddonLineItemsRequest);
    }

    /**
     * @param RequestInterface|Type\GenerateCapabilityResponseRequestType $generateCapabilityResponseRequest
     * @return ResultInterface|Type\GenerateCapabilityResponseResponseType
     * @throws SoapException
     */
    public function generateCapabilityResponse(\Flexsim\FlexnetOperations\Type\GenerateCapabilityResponseRequestType $generateCapabilityResponseRequest): \Flexsim\FlexnetOperations\Type\GenerateCapabilityResponseResponseType
    {
        return $this->call('generateCapabilityResponse', $generateCapabilityResponseRequest);
    }

    /**
     * @param RequestInterface|Type\MoveDeviceRequestType $moveDeviceRequest
     * @return ResultInterface|Type\MoveDeviceResponseType
     * @throws SoapException
     */
    public function moveDevice(\Flexsim\FlexnetOperations\Type\MoveDeviceRequestType $moveDeviceRequest): \Flexsim\FlexnetOperations\Type\MoveDeviceResponseType
    {
        return $this->call('moveDevice', $moveDeviceRequest);
    }

    /**
     * @param RequestInterface|Type\GetDeviceRequestType $getDeviceRequest
     * @return ResultInterface|Type\GetDeviceResponseType
     * @throws SoapException
     */
    public function getDevice(\Flexsim\FlexnetOperations\Type\GetDeviceRequestType $getDeviceRequest): \Flexsim\FlexnetOperations\Type\GetDeviceResponseType
    {
        return $this->call('getDevice', $getDeviceRequest);
    }

    /**
     * @param RequestInterface|Type\SearchDevicesRequestType $searchDevicesRequest
     * @return ResultInterface|Type\SearchDevicesResponseType
     * @throws SoapException
     */
    public function searchDevices(\Flexsim\FlexnetOperations\Type\SearchDevicesRequestType $searchDevicesRequest): \Flexsim\FlexnetOperations\Type\SearchDevicesResponseType
    {
        return $this->call('searchDevices', $searchDevicesRequest);
    }

    /**
     * @param RequestInterface|Type\CountDevicesRequestType $countDevicesRequest
     * @return ResultInterface|Type\CountDevicesResponseType
     * @throws SoapException
     */
    public function countDevices(\Flexsim\FlexnetOperations\Type\CountDevicesRequestType $countDevicesRequest): \Flexsim\FlexnetOperations\Type\CountDevicesResponseType
    {
        return $this->call('countDevices', $countDevicesRequest);
    }

    /**
     * @param RequestInterface|Type\ReturnHostRequestListType $returnHostRequest
     * @return ResultInterface|Type\ReturnHostResponseType
     * @throws SoapException
     */
    public function returnHost(\Flexsim\FlexnetOperations\Type\ReturnHostRequestListType $returnHostRequest): \Flexsim\FlexnetOperations\Type\ReturnHostResponseType
    {
        return $this->call('returnHost', $returnHostRequest);
    }

    /**
     * @param RequestInterface|Type\ObsoleteHostRequestListType $obsoleteHostRequest
     * @return ResultInterface|Type\ObsoleteHostResponseType
     * @throws SoapException
     */
    public function obsoleteHost(\Flexsim\FlexnetOperations\Type\ObsoleteHostRequestListType $obsoleteHostRequest): \Flexsim\FlexnetOperations\Type\ObsoleteHostResponseType
    {
        return $this->call('obsoleteHost', $obsoleteHostRequest);
    }

    /**
     * @param RequestInterface|Type\GetAutoProvisionedServerRequest $getAutoProvisionedServerRequest
     * @return ResultInterface|Type\GetAutoProvisionedServerResponse
     * @throws SoapException
     */
    public function getAutoProvisionedServer(\Flexsim\FlexnetOperations\Type\GetAutoProvisionedServerRequest $getAutoProvisionedServerRequest): \Flexsim\FlexnetOperations\Type\GetAutoProvisionedServerResponse
    {
        return $this->call('getAutoProvisionedServer', $getAutoProvisionedServerRequest);
    }

    /**
     * @param RequestInterface|Type\GenerateCloneDetectionReportRequest $generateCloneDetectionReportRequest
     * @return ResultInterface|Type\GenerateCloneDetectionReportResponse
     * @throws SoapException
     */
    public function generateCloneDetectionReport(\Flexsim\FlexnetOperations\Type\GenerateCloneDetectionReportRequest $generateCloneDetectionReportRequest): \Flexsim\FlexnetOperations\Type\GenerateCloneDetectionReportResponse
    {
        return $this->call('generateCloneDetectionReport', $generateCloneDetectionReportRequest);
    }
}
