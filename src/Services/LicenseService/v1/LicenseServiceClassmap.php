<?php

namespace Flexsim\FlexnetOperations\Services\LicenseService\v1;

use Flexsim\FlexnetOperations\Type;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;

class LicenseServiceClassmap
{
    public static function getCollection() : \Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('SimpleQueryType', Type\SimpleQueryType::class),
            new ClassMap('DateQueryType', Type\DateQueryType::class),
            new ClassMap('DateTimeQueryType', Type\DateTimeQueryType::class),
            new ClassMap('StateQueryType', Type\StateQueryType::class),
            new ClassMap('NumberQueryType', Type\NumberQueryType::class),
            new ClassMap('customAttributeQueryType', Type\CustomAttributeQueryType::class),
            new ClassMap('customAttributesQueryListType', Type\CustomAttributesQueryListType::class),
            new ClassMap('fulfillmentsQueryParametersType', Type\FulfillmentsQueryParametersType::class),
            new ClassMap('getFulfillmentCountRequestType', Type\GetFulfillmentCountRequestType::class),
            new ClassMap('StatusInfoType', Type\StatusInfoType::class),
            new ClassMap('getFulfillmentCountResponseDataType', Type\GetFulfillmentCountResponseDataType::class),
            new ClassMap('getFulfillmentCountResponseType', Type\GetFulfillmentCountResponseType::class),
            new ClassMap('getFulfillmentsQueryRequestType', Type\GetFulfillmentsQueryRequestType::class),
            new ClassMap('entitlementPKType', Type\EntitlementPKType::class),
            new ClassMap('entitlementIdentifierType', Type\EntitlementIdentifierType::class),
            new ClassMap('fulfillmentPKType', Type\FulfillmentPKType::class),
            new ClassMap('fulfillmentIdentifierType', Type\FulfillmentIdentifierType::class),
            new ClassMap('entitlementLineItemPKType', Type\EntitlementLineItemPKType::class),
            new ClassMap('entitlementLineItemIdentifierType', Type\EntitlementLineItemIdentifierType::class),
            new ClassMap('productPKType', Type\ProductPKType::class),
            new ClassMap('productIdentifierType', Type\ProductIdentifierType::class),
            new ClassMap('ServerIDsType', Type\ServerIDsType::class),
            new ClassMap('NodeIDsType', Type\NodeIDsType::class),
            new ClassMap('attributeDescriptorType', Type\AttributeDescriptorType::class),
            new ClassMap('attributeDescriptorDataType', Type\AttributeDescriptorDataType::class),
            new ClassMap('hostTypePKType', Type\HostTypePKType::class),
            new ClassMap('CustomHostIDType', Type\CustomHostIDType::class),
            new ClassMap('consolidatedHostLicenseDataType', Type\ConsolidatedHostLicenseDataType::class),
            new ClassMap('licenseTechnologyPKType', Type\LicenseTechnologyPKType::class),
            new ClassMap('licenseTechnologyIdentifierType', Type\LicenseTechnologyIdentifierType::class),
            new ClassMap('licenseFileDataType', Type\LicenseFileDataType::class),
            new ClassMap('licenseFileDataListType', Type\LicenseFileDataListType::class),
            new ClassMap('entitledProductDataType', Type\EntitledProductDataType::class),
            new ClassMap('entitledProductDataListType', Type\EntitledProductDataListType::class),
            new ClassMap('fulfillmentDataType', Type\FulfillmentDataType::class),
            new ClassMap('getFulfillmentsQueryResponseDataType', Type\GetFulfillmentsQueryResponseDataType::class),
            new ClassMap('getFulfillmentsQueryResponseType', Type\GetFulfillmentsQueryResponseType::class),
            new ClassMap('customAttributeDescriptorType', Type\CustomAttributeDescriptorType::class),
            new ClassMap('customAttributeDescriptorDataType', Type\CustomAttributeDescriptorDataType::class),
            new ClassMap('fulfillmentResponseConfigRequestType', Type\FulfillmentResponseConfigRequestType::class),
            new ClassMap('getFulfillmentPropertiesRequestType', Type\GetFulfillmentPropertiesRequestType::class),
            new ClassMap('partNumberPKType', Type\PartNumberPKType::class),
            new ClassMap('partNumberIdentifierType', Type\PartNumberIdentifierType::class),
            new ClassMap('licenseModelPKType', Type\LicenseModelPKType::class),
            new ClassMap('licenseModelIdentifierType', Type\LicenseModelIdentifierType::class),
            new ClassMap('accountPKType', Type\AccountPKType::class),
            new ClassMap('accountIdentifierType', Type\AccountIdentifierType::class),
            new ClassMap('fulfillmentPropertiesType', Type\FulfillmentPropertiesType::class),
            new ClassMap('getFulfillmentPropertiesResponseType', Type\GetFulfillmentPropertiesResponseType::class),
            new ClassMap('rehostFulfillmentDataType', Type\RehostFulfillmentDataType::class),
            new ClassMap('rehostFulfillmentRequestType', Type\RehostFulfillmentRequestType::class),
            new ClassMap('rehostFulfillmentResponseDataType', Type\RehostFulfillmentResponseDataType::class),
            new ClassMap('rehostResponseDataType', Type\RehostResponseDataType::class),
            new ClassMap('failedRehostResponseDataType', Type\FailedRehostResponseDataType::class),
            new ClassMap('failedRehostResponselistDataType', Type\FailedRehostResponselistDataType::class),
            new ClassMap('rehostFulfillmentResponseType', Type\RehostFulfillmentResponseType::class),
            new ClassMap('returnFulfillmentDataType', Type\ReturnFulfillmentDataType::class),
            new ClassMap('returnFulfillmentRequestType', Type\ReturnFulfillmentRequestType::class),
            new ClassMap('returnFulfillmentResponseDataType', Type\ReturnFulfillmentResponseDataType::class),
            new ClassMap('returnResponseDataType', Type\ReturnResponseDataType::class),
            new ClassMap('failedReturnResponseDataType', Type\FailedReturnResponseDataType::class),
            new ClassMap('failedReturnResponselistDataType', Type\FailedReturnResponselistDataType::class),
            new ClassMap('returnFulfillmentResponseType', Type\ReturnFulfillmentResponseType::class),
            new ClassMap('repairFulfillmentDataType', Type\RepairFulfillmentDataType::class),
            new ClassMap('repairFulfillmentRequestType', Type\RepairFulfillmentRequestType::class),
            new ClassMap('repairFulfillmentResponseDataType', Type\RepairFulfillmentResponseDataType::class),
            new ClassMap('repairResponseDataType', Type\RepairResponseDataType::class),
            new ClassMap('failedRepairResponseDataType', Type\FailedRepairResponseDataType::class),
            new ClassMap('failedRepairResponselistDataType', Type\FailedRepairResponselistDataType::class),
            new ClassMap('repairFulfillmentResponseType', Type\RepairFulfillmentResponseType::class),
            new ClassMap('emergencyFulfillmentDataType', Type\EmergencyFulfillmentDataType::class),
            new ClassMap('emergencyFulfillmentRequestType', Type\EmergencyFulfillmentRequestType::class),
            new ClassMap('emergencyFulfillmentResponseDataType', Type\EmergencyFulfillmentResponseDataType::class),
            new ClassMap('emergencyResponseDataType', Type\EmergencyResponseDataType::class),
            new ClassMap('failedEmergencyResponseDataType', Type\FailedEmergencyResponseDataType::class),
            new ClassMap('failedEmergencyResponselistDataType', Type\FailedEmergencyResponselistDataType::class),
            new ClassMap('emergencyFulfillmentResponseType', Type\EmergencyFulfillmentResponseType::class),
            new ClassMap('publisherErrorFulfillmentDataType', Type\PublisherErrorFulfillmentDataType::class),
            new ClassMap('publisherErrorFulfillmentRequestType', Type\PublisherErrorFulfillmentRequestType::class),
            new ClassMap('publisherErrorFulfillmentResponseDataType', Type\PublisherErrorFulfillmentResponseDataType::class),
            new ClassMap('publisherErrorResponseDataType', Type\PublisherErrorResponseDataType::class),
            new ClassMap('failedPublisherErrorResponseDataType', Type\FailedPublisherErrorResponseDataType::class),
            new ClassMap('failedPublisherErrorResponselistDataType', Type\FailedPublisherErrorResponselistDataType::class),
            new ClassMap('publisherErrorFulfillmentResponseType', Type\PublisherErrorFulfillmentResponseType::class),
            new ClassMap('stopGapFulfillmentDataType', Type\StopGapFulfillmentDataType::class),
            new ClassMap('stopGapFulfillmentRequestType', Type\StopGapFulfillmentRequestType::class),
            new ClassMap('stopGapFulfillmentResponseDataType', Type\StopGapFulfillmentResponseDataType::class),
            new ClassMap('stopGapResponseDataType', Type\StopGapResponseDataType::class),
            new ClassMap('failedStopGapResponseDataType', Type\FailedStopGapResponseDataType::class),
            new ClassMap('failedStopGapResponselistDataType', Type\FailedStopGapResponselistDataType::class),
            new ClassMap('stopGapFulfillmentResponseType', Type\StopGapFulfillmentResponseType::class),
            new ClassMap('getFulfillmentAttributesRequestType', Type\GetFulfillmentAttributesRequestType::class),
            new ClassMap('valueType', Type\ValueType::class),
            new ClassMap('attributeMetaDescriptorType', Type\AttributeMetaDescriptorType::class),
            new ClassMap('attributeMetaDescriptorDataType', Type\AttributeMetaDescriptorDataType::class),
            new ClassMap('getFulfillmentAttributesDataType', Type\GetFulfillmentAttributesDataType::class),
            new ClassMap('getFulfillmentAttributesResponseType', Type\GetFulfillmentAttributesResponseType::class),
            new ClassMap('getHostAttributesRequestType', Type\GetHostAttributesRequestType::class),
            new ClassMap('getHostAttributesDataType', Type\GetHostAttributesDataType::class),
            new ClassMap('getHostAttributesResponseType', Type\GetHostAttributesResponseType::class),
            new ClassMap('createFulfillmentDataType', Type\CreateFulfillmentDataType::class),
            new ClassMap('createFulfillmentRequestType', Type\CreateFulfillmentRequestType::class),
            new ClassMap('failedFulfillmentDataType', Type\FailedFulfillmentDataType::class),
            new ClassMap('failedFulfillmentDataListType', Type\FailedFulfillmentDataListType::class),
            new ClassMap('createdFulfillmentDataType', Type\CreatedFulfillmentDataType::class),
            new ClassMap('verifiedFulfillmentDataType', Type\VerifiedFulfillmentDataType::class),
            new ClassMap('createdFulfillmentDataListType', Type\CreatedFulfillmentDataListType::class),
            new ClassMap('createFulfillmentResponseType', Type\CreateFulfillmentResponseType::class),
            new ClassMap('simpleAttributeDataType', Type\SimpleAttributeDataType::class),
            new ClassMap('publisherAttributesListDataType', Type\PublisherAttributesListDataType::class),
            new ClassMap('createShortCodeDataType', Type\CreateShortCodeDataType::class),
            new ClassMap('activateShortCodeRequestType', Type\ActivateShortCodeRequestType::class),
            new ClassMap('duplicateFulfillmentRecordListDataType', Type\DuplicateFulfillmentRecordListDataType::class),
            new ClassMap('failedShortCodeDataType', Type\FailedShortCodeDataType::class),
            new ClassMap('createdShortCodeDataType', Type\CreatedShortCodeDataType::class),
            new ClassMap('activateShortCodeResponseType', Type\ActivateShortCodeResponseType::class),
            new ClassMap('repairShortCodeDataType', Type\RepairShortCodeDataType::class),
            new ClassMap('repairShortCodeRequestType', Type\RepairShortCodeRequestType::class),
            new ClassMap('failedRepairShortCodeDataType', Type\FailedRepairShortCodeDataType::class),
            new ClassMap('repairedShortCodeDataType', Type\RepairedShortCodeDataType::class),
            new ClassMap('repairShortCodeResponseType', Type\RepairShortCodeResponseType::class),
            new ClassMap('returnShortCodeDataType', Type\ReturnShortCodeDataType::class),
            new ClassMap('returnShortCodeRequestType', Type\ReturnShortCodeRequestType::class),
            new ClassMap('failedReturnShortCodeDataType', Type\FailedReturnShortCodeDataType::class),
            new ClassMap('returnedShortCodeDataType', Type\ReturnedShortCodeDataType::class),
            new ClassMap('returnShortCodeResponseType', Type\ReturnShortCodeResponseType::class),
            new ClassMap('emailContactListType', Type\EmailContactListType::class),
            new ClassMap('emailLicenseRequestType', Type\EmailLicenseRequestType::class),
            new ClassMap('emailLicenseResponseType', Type\EmailLicenseResponseType::class),
            new ClassMap('fulfillmentIdentifierListType', Type\FulfillmentIdentifierListType::class),
            new ClassMap('consolidateFulfillmentsRequestType', Type\ConsolidateFulfillmentsRequestType::class),
            new ClassMap('consolidatedLicenseDataType', Type\ConsolidatedLicenseDataType::class),
            new ClassMap('consolidatedResponseDataType', Type\ConsolidatedResponseDataType::class),
            new ClassMap('consolidateFulfillmentsResponseType', Type\ConsolidateFulfillmentsResponseType::class),
            new ClassMap('consolidatedFulfillmentsQPType', Type\ConsolidatedFulfillmentsQPType::class),
            new ClassMap('getConsolidatedFulfillmentCountRequestType', Type\GetConsolidatedFulfillmentCountRequestType::class),
            new ClassMap('getConsolidatedFulfillmentCountResponseDataType', Type\GetConsolidatedFulfillmentCountResponseDataType::class),
            new ClassMap('getConsolidatedFulfillmentCountResponseType', Type\GetConsolidatedFulfillmentCountResponseType::class),
            new ClassMap('getConsolidatedFulfillmentsQueryRequestType', Type\GetConsolidatedFulfillmentsQueryRequestType::class),
            new ClassMap('getConsolidatedFulfillmentsQueryResponseDataType', Type\GetConsolidatedFulfillmentsQueryResponseDataType::class),
            new ClassMap('getConsolidatedFulfillmentsQueryResponseType', Type\GetConsolidatedFulfillmentsQueryResponseType::class),
            new ClassMap('activationIdsListType', Type\ActivationIdsListType::class),
            new ClassMap('getFmtAttributesForBatchActivationRequestType', Type\GetFmtAttributesForBatchActivationRequestType::class),
            new ClassMap('activationIdOverDraftMapType', Type\ActivationIdOverDraftMapType::class),
            new ClassMap('overDraftDataListType', Type\OverDraftDataListType::class),
            new ClassMap('getFmtAttributesForBatchDataType', Type\GetFmtAttributesForBatchDataType::class),
            new ClassMap('getFmtAttributesForBatchActivationResponseType', Type\GetFmtAttributesForBatchActivationResponseType::class),
            new ClassMap('hostIdDataType', Type\HostIdDataType::class),
            new ClassMap('hostIdDataSetType', Type\HostIdDataSetType::class),
            new ClassMap('countForHostsType', Type\CountForHostsType::class),
            new ClassMap('countDataType', Type\CountDataType::class),
            new ClassMap('countDataSetType', Type\CountDataSetType::class),
            new ClassMap('commonBatchDataSetType', Type\CommonBatchDataSetType::class),
            new ClassMap('createLicensesAsBatchRequestType', Type\CreateLicensesAsBatchRequestType::class),
            new ClassMap('createLicensesAsBatchResponseDataType', Type\CreateLicensesAsBatchResponseDataType::class),
            new ClassMap('createLicensesAsBatchResponseType', Type\CreateLicensesAsBatchResponseType::class),
            new ClassMap('consolidatedLicenseIdListType', Type\ConsolidatedLicenseIdListType::class),
            new ClassMap('emailConsolidatedLicensesRequestType', Type\EmailConsolidatedLicensesRequestType::class),
            new ClassMap('emailConsolidatedLicensesResponseType', Type\EmailConsolidatedLicensesResponseType::class),
            new ClassMap('activationDataType', Type\ActivationDataType::class),
            new ClassMap('trustedRequestType', Type\TrustedRequestType::class),
            new ClassMap('trustedResponseType', Type\TrustedResponseType::class),
            new ClassMap('getFulfillmentHistoryRequestType', Type\GetFulfillmentHistoryRequestType::class),
            new ClassMap('fulfillmentHistoryRecordType', Type\FulfillmentHistoryRecordType::class),
            new ClassMap('fulfillmentHistoryDetailsType', Type\FulfillmentHistoryDetailsType::class),
            new ClassMap('fulfillmentHistoryDataType', Type\FulfillmentHistoryDataType::class),
            new ClassMap('getFulfillmentHistoryResponseType', Type\GetFulfillmentHistoryResponseType::class),
            new ClassMap('hostIdDataDetailsType', Type\HostIdDataDetailsType::class),
            new ClassMap('hostIdDetailsType', Type\HostIdDetailsType::class),
            new ClassMap('createChildLineItemFulfillmentDataType', Type\CreateChildLineItemFulfillmentDataType::class),
            new ClassMap('createChildLineItemFulfillmentRequestType', Type\CreateChildLineItemFulfillmentRequestType::class),
            new ClassMap('createdChildLIFulfillmentInfoType', Type\CreatedChildLIFulfillmentInfoType::class),
            new ClassMap('createdChildLIFulfillmentDataType', Type\CreatedChildLIFulfillmentDataType::class),
            new ClassMap('createdChildLIFmtResponseDataType', Type\CreatedChildLIFmtResponseDataType::class),
            new ClassMap('failedChildLIFulfillmentDataType', Type\FailedChildLIFulfillmentDataType::class),
            new ClassMap('failedChildLIFmtResponseDataType', Type\FailedChildLIFmtResponseDataType::class),
            new ClassMap('createChildLineItemFulfillmentResponseType', Type\CreateChildLineItemFulfillmentResponseType::class),
            new ClassMap('advancedFulfillmentLCDataType', Type\AdvancedFulfillmentLCDataType::class),
            new ClassMap('advancedFulfillmentLCListType', Type\AdvancedFulfillmentLCListType::class),
            new ClassMap('advancedFulfillmentLCRequestType', Type\AdvancedFulfillmentLCRequestType::class),
            new ClassMap('advancedFulfillmentLCInfoType', Type\AdvancedFulfillmentLCInfoType::class),
            new ClassMap('advancedFmtLCResponseDataType', Type\AdvancedFmtLCResponseDataType::class),
            new ClassMap('advancedFmtLCResponseDataListType', Type\AdvancedFmtLCResponseDataListType::class),
            new ClassMap('failedAdvancedFmtLCDataType', Type\FailedAdvancedFmtLCDataType::class),
            new ClassMap('failedAdvancedFmtLCResponseDataType', Type\FailedAdvancedFmtLCResponseDataType::class),
            new ClassMap('advancedFulfillmentLCResponseType', Type\AdvancedFulfillmentLCResponseType::class),
            new ClassMap('onHoldFmtLicenseDataType', Type\OnHoldFmtLicenseDataType::class),
            new ClassMap('onholdFulfillmentListType', Type\OnholdFulfillmentListType::class),
            new ClassMap('setLicenseRequestType', Type\SetLicenseRequestType::class),
            new ClassMap('failedSetLicenseOnholdFulfillmentDataType', Type\FailedSetLicenseOnholdFulfillmentDataType::class),
            new ClassMap('failedSetLicenseOnholdFulfillmentListType', Type\FailedSetLicenseOnholdFulfillmentListType::class),
            new ClassMap('setLicenseResponseType', Type\SetLicenseResponseType::class),
            new ClassMap('fulfillmentIdListType', Type\FulfillmentIdListType::class),
            new ClassMap('deleteOnholdFulfillmentsRequestType', Type\DeleteOnholdFulfillmentsRequestType::class),
            new ClassMap('failedOnholdFulfillmentDataType', Type\FailedOnholdFulfillmentDataType::class),
            new ClassMap('failedOnholdFulfillmentListType', Type\FailedOnholdFulfillmentListType::class),
            new ClassMap('deleteOnholdFulfillmentsResponseType', Type\DeleteOnholdFulfillmentsResponseType::class),
            new ClassMap('DictionaryEntry', Type\DictionaryEntry::class),
            new ClassMap('DictionaryEntriesCollection', Type\DictionaryEntriesCollection::class),
            new ClassMap('Dictionary', Type\Dictionary::class),
            new ClassMap('typeLineItem', Type\TypeLineItem::class),
            new ClassMap('activateLicensesRequestType', Type\ActivateLicensesRequestType::class),
            new ClassMap('failedLineItem', Type\FailedLineItem::class),
            new ClassMap('activateLicensesResponseType', Type\ActivateLicensesResponseType::class),
            new ClassMap('transferHostIdDataType', Type\TransferHostIdDataType::class),
            new ClassMap('transferHostList', Type\TransferHostList::class),
            new ClassMap('transferHostRequestType', Type\TransferHostRequestType::class),
            new ClassMap('failedTransferHostDataType', Type\FailedTransferHostDataType::class),
            new ClassMap('failedTransferHostListDataType', Type\FailedTransferHostListDataType::class),
            new ClassMap('transferHostResponseType', Type\TransferHostResponseType::class),
        );
    }
}

