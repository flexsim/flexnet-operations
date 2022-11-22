<?php

namespace Flexsim\FlexnetOperations\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Phpro\SoapClient\Client client()
 * @method static self connection( $name = NULL)
 * @method static self version( $version = NULL)
 * @method static string getDefaultConnection()
 * @method static setDefaultConnection( $name)
 * @method static string getDefaultVersion( $connection = NULL)
 * @method static setDefaultVersion( $version,  $connection = NULL)
 * @method static array getClients()
 * @method static \Flexsim\FlexnetOperations\Type\CreateDevResponseType createDevice(\Flexsim\FlexnetOperations\Type\CreateDevRequestType $createDeviceRequest)
 * @method static \Flexsim\FlexnetOperations\Type\DeleteDeviceResponseType deleteDevice(\Flexsim\FlexnetOperations\Type\DeleteDeviceRequestType $deleteDeviceRequest)
 * @method static \Flexsim\FlexnetOperations\Type\UpdateDevResponseType updateDevice(\Flexsim\FlexnetOperations\Type\UpdateDevRequestType $updateDeviceRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GeneratePrebuiltLicenseResponseType generatePrebuiltLicense(\Flexsim\FlexnetOperations\Type\GeneratePrebuiltLicenseRequestType $generatePrebuiltLicenseRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetDevicesResponseType getDevicesQuery(\Flexsim\FlexnetOperations\Type\GetDevicesRequestType $getDevicesRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetDeviceCountResponseType getDeviceCount(\Flexsim\FlexnetOperations\Type\GetDevicesCountRequestType $getDeviceCountRequest)
 * @method static \Flexsim\FlexnetOperations\Type\LinkAddonLineItemsResponseType linkAddonLineItems(\Flexsim\FlexnetOperations\Type\LinkAddonLineItemsRequestType $linkAddonLineItemsRequest)
 * @method static \Flexsim\FlexnetOperations\Type\DeleteAddonLineItemsResponseType deleteAddonLineItems(\Flexsim\FlexnetOperations\Type\DeleteAddonLineItemsRequestType $deleteAddonLineItemsRequest)
 * @method static \Flexsim\FlexnetOperations\Type\LinkAddonLineItemsResponseType incrementAddonLineItems(\Flexsim\FlexnetOperations\Type\LinkAddonLineItemsRequestType $incrementAddonLineItemsRequest)
 * @method static \Flexsim\FlexnetOperations\Type\LinkAddonLineItemsResponseType decrementAddonLineItems(\Flexsim\FlexnetOperations\Type\LinkAddonLineItemsRequestType $decrementAddonLineItemsRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GenerateCapabilityResponseResponseType generateCapabilityResponse(\Flexsim\FlexnetOperations\Type\GenerateCapabilityResponseRequestType $generateCapabilityResponseRequest)
 * @method static \Flexsim\FlexnetOperations\Type\MoveDeviceResponseType moveDevice(\Flexsim\FlexnetOperations\Type\MoveDeviceRequestType $moveDeviceRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetDeviceResponseType getDevice(\Flexsim\FlexnetOperations\Type\GetDeviceRequestType $getDeviceRequest)
 * @method static \Flexsim\FlexnetOperations\Type\SearchDevicesResponseType searchDevices(\Flexsim\FlexnetOperations\Type\SearchDevicesRequestType $searchDevicesRequest)
 * @method static \Flexsim\FlexnetOperations\Type\CountDevicesResponseType countDevices(\Flexsim\FlexnetOperations\Type\CountDevicesRequestType $countDevicesRequest)
 * @method static \Flexsim\FlexnetOperations\Type\ReturnHostResponseType returnHost(\Flexsim\FlexnetOperations\Type\ReturnHostRequestListType $returnHostRequest)
 * @method static \Flexsim\FlexnetOperations\Type\ObsoleteHostResponseType obsoleteHost(\Flexsim\FlexnetOperations\Type\ObsoleteHostRequestListType $obsoleteHostRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetAutoProvisionedServerResponse getAutoProvisionedServer(\Flexsim\FlexnetOperations\Type\GetAutoProvisionedServerRequest $getAutoProvisionedServerRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GenerateCloneDetectionReportResponse generateCloneDetectionReport(\Flexsim\FlexnetOperations\Type\GenerateCloneDetectionReportRequest $generateCloneDetectionReportRequest)
 *
 * @see \Flexsim\FlexnetOperations\FlexnetOperationsClientManager
 * @see \Flexsim\FlexnetOperations\Services\ManageDeviceServiceService
 * @see \Flexsim\FlexnetOperations\Services\ManageDeviceServiceService\v1
 * @see \Flexsim\FlexnetOperations\Services\ManageDeviceServiceService\v2
 * @see \Flexsim\FlexnetOperations\Services\ManageDeviceServiceService\v3
 */
class ManageDeviceService extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'flexnet-operations.manage-device-service';
    }
}
