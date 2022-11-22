<?php

namespace Flexsim\FlexnetOperations\Services\ManageDeviceService\v2;

use Flexsim\FlexnetOperations\Type;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;

class ManageDeviceServiceClassmap
{
    public static function getCollection(): ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('ServerIdsType', Type\ServerIdsType::class),
            new ClassMap('createDeviceIdentifier', Type\CreateDeviceIdentifier::class),
            new ClassMap('hostTypeIdentifier', Type\HostTypeIdentifier::class),
            new ClassMap('publisherIdentifier', Type\PublisherIdentifier::class),
            new ClassMap('organizationPKType', Type\OrganizationPKType::class),
            new ClassMap('organizationIdentifierType', Type\OrganizationIdentifierType::class),
            new ClassMap('userPKType', Type\UserPKType::class),
            new ClassMap('userIdentifierType', Type\UserIdentifierType::class),
            new ClassMap('channelPartnerDataType', Type\ChannelPartnerDataType::class),
            new ClassMap('channelPartnerDataListType', Type\ChannelPartnerDataListType::class),
            new ClassMap('attributeDescriptorType', Type\AttributeDescriptorType::class),
            new ClassMap('attributeDescriptorDataType', Type\AttributeDescriptorDataType::class),
            new ClassMap('deviceDataType', Type\DeviceDataType::class),
            new ClassMap('createDevRequestType', Type\CreateDevRequestType::class),
            new ClassMap('OpsEmbeddedStatusInfoType', Type\OpsEmbeddedStatusInfoType::class),
            new ClassMap('failedCreateDeviceDataType', Type\FailedCreateDeviceDataType::class),
            new ClassMap('failedCreateDevDataListType', Type\FailedCreateDevDataListType::class),
            new ClassMap('deviceIdentifier', Type\DeviceIdentifier::class),
            new ClassMap('createdDeviceDataListType', Type\CreatedDeviceDataListType::class),
            new ClassMap('createDevResponseType', Type\CreateDevResponseType::class),
            new ClassMap('deleteDeviceRequestType', Type\DeleteDeviceRequestType::class),
            new ClassMap('failedDeleteDevDataType', Type\FailedDeleteDevDataType::class),
            new ClassMap('failedDeleteDevDataListType', Type\FailedDeleteDevDataListType::class),
            new ClassMap('deleteDeviceResponseType', Type\DeleteDeviceResponseType::class),
            new ClassMap('updateChannelPartnerDataListType', Type\UpdateChannelPartnerDataListType::class),
            new ClassMap('updateDevDataType', Type\UpdateDevDataType::class),
            new ClassMap('updateDevRequestType', Type\UpdateDevRequestType::class),
            new ClassMap('failedUpdateDeviceDataType', Type\FailedUpdateDeviceDataType::class),
            new ClassMap('failedUpdateDevDataListType', Type\FailedUpdateDevDataListType::class),
            new ClassMap('updatedDeviceDataListType', Type\UpdatedDeviceDataListType::class),
            new ClassMap('updateDevResponseType', Type\UpdateDevResponseType::class),
            new ClassMap('productPKType', Type\ProductPKType::class),
            new ClassMap('productIdentifierType', Type\ProductIdentifierType::class),
            new ClassMap('licenseModelPKType', Type\LicenseModelPKType::class),
            new ClassMap('licenseModelIdentifierType', Type\LicenseModelIdentifierType::class),
            new ClassMap('DurationType', Type\DurationType::class),
            new ClassMap('generatePrebuiltLicenseDataType', Type\GeneratePrebuiltLicenseDataType::class),
            new ClassMap('generatePrebuiltLicenseRequestType', Type\GeneratePrebuiltLicenseRequestType::class),
            new ClassMap('failedGeneratePrebuiltLicenseDataType', Type\FailedGeneratePrebuiltLicenseDataType::class),
            new ClassMap('failedGeneratePrebuiltLicenseDataListType', Type\FailedGeneratePrebuiltLicenseDataListType::class),
            new ClassMap('generatePrebuiltLicenseDataListType', Type\GeneratePrebuiltLicenseDataListType::class),
            new ClassMap('generatePrebuiltLicenseResponseType', Type\GeneratePrebuiltLicenseResponseType::class),
            new ClassMap('SimpleQueryType', Type\SimpleQueryType::class),
            new ClassMap('DeviceIdTypeQueryType', Type\DeviceIdTypeQueryType::class),
            new ClassMap('DeviceStateQueryType', Type\DeviceStateQueryType::class),
            new ClassMap('deviceTypeList', Type\DeviceTypeList::class),
            new ClassMap('getDevicesParametersType', Type\GetDevicesParametersType::class),
            new ClassMap('deviceResponseConfigRequestType', Type\DeviceResponseConfigRequestType::class),
            new ClassMap('getDevicesRequestType', Type\GetDevicesRequestType::class),
            new ClassMap('failedGetDevicesDataType', Type\FailedGetDevicesDataType::class),
            new ClassMap('soldToType', Type\SoldToType::class),
            new ClassMap('soldToOrgNameType', Type\SoldToOrgNameType::class),
            new ClassMap('entitledProductDataType', Type\EntitledProductDataType::class),
            new ClassMap('entitledProductDataListType', Type\EntitledProductDataListType::class),
            new ClassMap('addonLineItemDataDataType', Type\AddonLineItemDataDataType::class),
            new ClassMap('featureDataDataType', Type\FeatureDataDataType::class),
            new ClassMap('dictionaryEntry', Type\DictionaryEntry::class),
            new ClassMap('dictionaryType', Type\DictionaryType::class),
            new ClassMap('deviceQueryDataType', Type\DeviceQueryDataType::class),
            new ClassMap('getDevicesResponseDataType', Type\GetDevicesResponseDataType::class),
            new ClassMap('getDevicesResponseType', Type\GetDevicesResponseType::class),
            new ClassMap('getDevicesCountRequestType', Type\GetDevicesCountRequestType::class),
            new ClassMap('getDeviceCountResponseDataType', Type\GetDeviceCountResponseDataType::class),
            new ClassMap('getDeviceCountResponseType', Type\GetDeviceCountResponseType::class),
            new ClassMap('linkLineItemIdentifier', Type\LinkLineItemIdentifier::class),
            new ClassMap('linkLineItemDataType', Type\LinkLineItemDataType::class),
            new ClassMap('linkAddonLineItemDataType', Type\LinkAddonLineItemDataType::class),
            new ClassMap('linkAddonLineItemsRequestType', Type\LinkAddonLineItemsRequestType::class),
            new ClassMap('linkFailAddonDataType', Type\LinkFailAddonDataType::class),
            new ClassMap('linkFailAddonDataListType', Type\LinkFailAddonDataListType::class),
            new ClassMap('successAddonDataListType', Type\SuccessAddonDataListType::class),
            new ClassMap('linkAddonLineItemsResponseType', Type\LinkAddonLineItemsResponseType::class),
            new ClassMap('deleteLineItemIdentifier', Type\DeleteLineItemIdentifier::class),
            new ClassMap('deleteLineItemDataType', Type\DeleteLineItemDataType::class),
            new ClassMap('deleteAddonLineItemDataType', Type\DeleteAddonLineItemDataType::class),
            new ClassMap('deleteAddonLineItemsRequestType', Type\DeleteAddonLineItemsRequestType::class),
            new ClassMap('deleteFailAddonDataType', Type\DeleteFailAddonDataType::class),
            new ClassMap('deleteFailAddonDataListType', Type\DeleteFailAddonDataListType::class),
            new ClassMap('deleteAddonLineItemsResponseType', Type\DeleteAddonLineItemsResponseType::class),
            new ClassMap('generateCapabilityResponseDictionaryEntry', Type\GenerateCapabilityResponseDictionaryEntry::class),
            new ClassMap('generateCapabilityResponseDictionary', Type\GenerateCapabilityResponseDictionary::class),
            new ClassMap('capabilityRequestType', Type\CapabilityRequestType::class),
            new ClassMap('generateCapabilityResponseRequestType', Type\GenerateCapabilityResponseRequestType::class),
            new ClassMap('failedCapabilityResponseDataType', Type\FailedCapabilityResponseDataType::class),
            new ClassMap('failedGenerateCapabilityResponseDataType', Type\FailedGenerateCapabilityResponseDataType::class),
            new ClassMap('capabilityResponseDataType', Type\CapabilityResponseDataType::class),
            new ClassMap('generateCapabilityResponseDataType', Type\GenerateCapabilityResponseDataType::class),
            new ClassMap('generateCapabilityResponseResponseType', Type\GenerateCapabilityResponseResponseType::class),
            new ClassMap('moveDeviceList', Type\MoveDeviceList::class),
            new ClassMap('moveDeviceRequestType', Type\MoveDeviceRequestType::class),
            new ClassMap('failedMoveDeviceDataType', Type\FailedMoveDeviceDataType::class),
            new ClassMap('failedMoveDeviceListDataType', Type\FailedMoveDeviceListDataType::class),
            new ClassMap('moveDeviceResponseType', Type\MoveDeviceResponseType::class),
            new ClassMap('returnHostType', Type\ReturnHostType::class),
            new ClassMap('returnHostRequestListType', Type\ReturnHostRequestListType::class),
            new ClassMap('failedReturnHostDataType', Type\FailedReturnHostDataType::class),
            new ClassMap('failedReturnHostListDataType', Type\FailedReturnHostListDataType::class),
            new ClassMap('returnHostResponseType', Type\ReturnHostResponseType::class),
            new ClassMap('obsoleteHostType', Type\ObsoleteHostType::class),
            new ClassMap('obsoleteHostRequestListType', Type\ObsoleteHostRequestListType::class),
            new ClassMap('failedObsoleteHostDataType', Type\FailedObsoleteHostDataType::class),
            new ClassMap('failedObsoleteHostListDataType', Type\FailedObsoleteHostListDataType::class),
            new ClassMap('obsoleteHostResponseType', Type\ObsoleteHostResponseType::class),
            new ClassMap('getAutoProvisionedServerRequest', Type\GetAutoProvisionedServerRequest::class),
            new ClassMap('getAutoProvisionedServerResponse', Type\GetAutoProvisionedServerResponse::class),
            new ClassMap('generateCloneDetectionReportRequest', Type\GenerateCloneDetectionReportRequest::class),
            new ClassMap('enterpriseIds', Type\EnterpriseIds::class),
            new ClassMap('featureIds', Type\FeatureIds::class),
            new ClassMap('cloneSuspect', Type\CloneSuspect::class),
            new ClassMap('lineItemActivationIds', Type\LineItemActivationIds::class),
            new ClassMap('generateCloneDetectionReportResponse', Type\GenerateCloneDetectionReportResponse::class),
            new ClassMap('cloneSuspects', Type\CloneSuspects::class),
        );
    }
}
