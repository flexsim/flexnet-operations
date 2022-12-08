<?php

namespace Flexnet\LicenseService;

use Illuminate\Support\Facades\Facade;

/**
 *
 * @method static \Flexnet\LicenseService\Type\GetFulfillmentCountResponseType getFulfillmentCount(\Flexnet\LicenseService\Type\GetFulfillmentCountRequestType $getFulfillmentCountRequest)
 * @method static \Flexnet\LicenseService\Type\GetFulfillmentsQueryResponseType getFulfillmentsQuery(\Flexnet\LicenseService\Type\GetFulfillmentsQueryRequestType $getFulfillmentsQueryRequest)
 * @method static \Flexnet\LicenseService\Type\GetFulfillmentPropertiesResponseType getFulfillmentPropertiesQuery(\Flexnet\LicenseService\Type\GetFulfillmentPropertiesRequestType $getFulfillmentPropertiesRequest)
 * @method static \Flexnet\LicenseService\Type\RehostFulfillmentResponseType rehostLicense(\Flexnet\LicenseService\Type\RehostFulfillmentRequestType $rehostLicenseRequest)
 * @method static \Flexnet\LicenseService\Type\ReturnFulfillmentResponseType returnLicense(\Flexnet\LicenseService\Type\ReturnFulfillmentRequestType $returnLicenseRequest)
 * @method static \Flexnet\LicenseService\Type\RepairFulfillmentResponseType repairLicense(\Flexnet\LicenseService\Type\RepairFulfillmentRequestType $repairLicenseRequest)
 * @method static \Flexnet\LicenseService\Type\EmergencyFulfillmentResponseType emergencyLicense(\Flexnet\LicenseService\Type\EmergencyFulfillmentRequestType $emergencyLicenseRequest)
 * @method static \Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseType publisherErrorLicense(\Flexnet\LicenseService\Type\PublisherErrorFulfillmentRequestType $publisherErrorLicenseRequest)
 * @method static \Flexnet\LicenseService\Type\StopGapFulfillmentResponseType stopGapLicense(\Flexnet\LicenseService\Type\StopGapFulfillmentRequestType $stopGapLicenseRequest)
 * @method static \Flexnet\LicenseService\Type\GetFulfillmentAttributesResponseType getFulfillmentAttributesFromModel(\Flexnet\LicenseService\Type\GetFulfillmentAttributesRequestType $getFulfillmentAttributesRequest)
 * @method static \Flexnet\LicenseService\Type\GetHostAttributesResponseType getHostAttributesFromLicenseTechnology(\Flexnet\LicenseService\Type\GetHostAttributesRequestType $getHostAttributesRequest)
 * @method static \Flexnet\LicenseService\Type\CreateFulfillmentResponseType verifyCreateLicense(\Flexnet\LicenseService\Type\CreateFulfillmentRequestType $verifyCreateLicenseRequest)
 * @method static \Flexnet\LicenseService\Type\CreateFulfillmentResponseType createLicense(\Flexnet\LicenseService\Type\CreateFulfillmentRequestType $createLicenseRequest)
 * @method static \Flexnet\LicenseService\Type\ActivateShortCodeResponseType activateShortCode(\Flexnet\LicenseService\Type\ActivateShortCodeRequestType $activateShortCodeRequest)
 * @method static \Flexnet\LicenseService\Type\RepairShortCodeResponseType repairShortCode(\Flexnet\LicenseService\Type\RepairShortCodeRequestType $repairShortCodeRequest)
 * @method static \Flexnet\LicenseService\Type\ReturnShortCodeResponseType returnShortCode(\Flexnet\LicenseService\Type\ReturnShortCodeRequestType $returnShortCodeRequest)
 * @method static \Flexnet\LicenseService\Type\EmailLicenseResponseType emailLicense(\Flexnet\LicenseService\Type\EmailLicenseRequestType $emailLicenseRequest)
 * @method static \Flexnet\LicenseService\Type\ConsolidateFulfillmentsResponseType consolidateFulfillments(\Flexnet\LicenseService\Type\ConsolidateFulfillmentsRequestType $consolidateFulfillmentsRequest)
 * @method static \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseType getConsolidatedFulfillmentCount(\Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountRequestType $getConsolidatedFulfillmentCountRequest)
 * @method static \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryResponseType getConsolidatedFulfillmentsQuery(\Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryRequestType $getConsolidatedFulfillmentsQueryRequest)
 * @method static \Flexnet\LicenseService\Type\GetFmtAttributesForBatchActivationResponseType getFulfillmentAttributesForBatchActivation(\Flexnet\LicenseService\Type\GetFmtAttributesForBatchActivationRequestType $getFmtAttributesForBatchActivationRequest)
 * @method static \Flexnet\LicenseService\Type\CreateLicensesAsBatchResponseType createLicensesAsBatch(\Flexnet\LicenseService\Type\CreateLicensesAsBatchRequestType $createLicensesAsBatchRequest)
 * @method static \Flexnet\LicenseService\Type\ConsolidateFulfillmentsResponseType createLicensesAsBatchAndConsolidate(\Flexnet\LicenseService\Type\CreateLicensesAsBatchRequestType $createLicensesAsBatchAndConsolidateRequest)
 * @method static \Flexnet\LicenseService\Type\EmailConsolidatedLicensesResponseType emailConsolidatedLicenses(\Flexnet\LicenseService\Type\EmailConsolidatedLicensesRequestType $emailConsolidatedLicensesRequest)
 * @method static \Flexnet\LicenseService\Type\TrustedResponseType manualActivation(\Flexnet\LicenseService\Type\TrustedRequestType $manualActivationRequest)
 * @method static \Flexnet\LicenseService\Type\TrustedResponseType manualRepair(\Flexnet\LicenseService\Type\TrustedRequestType $manualRepairRequest)
 * @method static \Flexnet\LicenseService\Type\TrustedResponseType manualReturn(\Flexnet\LicenseService\Type\TrustedRequestType $manualReturnRequest)
 * @method static \Flexnet\LicenseService\Type\GetFulfillmentHistoryResponseType getFulfillmentHistory(\Flexnet\LicenseService\Type\GetFulfillmentHistoryRequestType $getFulfillmentHistoryRequest)
 * @method static \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentResponseType createChildLineItemFulfillment(\Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentRequestType $createChildLineItemFulfillmentRequest)
 * @method static \Flexnet\LicenseService\Type\AdvancedFulfillmentLCResponseType upgradeFulfillment(\Flexnet\LicenseService\Type\AdvancedFulfillmentLCRequestType $upgradeFulfillmentRequest)
 * @method static \Flexnet\LicenseService\Type\AdvancedFulfillmentLCResponseType upsellFulfillment(\Flexnet\LicenseService\Type\AdvancedFulfillmentLCRequestType $upsellFulfillmentRequest)
 * @method static \Flexnet\LicenseService\Type\AdvancedFulfillmentLCResponseType renewFulfillment(\Flexnet\LicenseService\Type\AdvancedFulfillmentLCRequestType $renewFulfillmentRequest)
 * @method static \Flexnet\LicenseService\Type\SetLicenseResponseType setLicense(\Flexnet\LicenseService\Type\SetLicenseRequestType $setLicenseRequest)
 * @method static \Flexnet\LicenseService\Type\DeleteOnholdFulfillmentsResponseType deleteOnholdFulfillments(\Flexnet\LicenseService\Type\DeleteOnholdFulfillmentsRequestType $deleteOnholdFulfillmentsRequest)
 * @method static \Flexnet\LicenseService\Type\ActivateLicensesResponseType offlineFNPTrustedStorageActivation(\Flexnet\LicenseService\Type\ActivateLicensesRequestType $activateLicensesRequest)
 * @method static \Flexnet\LicenseService\Type\TransferHostResponseType transferHost(\Flexnet\LicenseService\Type\TransferHostRequestType $transferHostRequest)
 *
 * @see \Flexnet\LicenseService\LicenseServiceClient
 */
class LicenseService extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return LicenseServiceClient::class;
    }
}
