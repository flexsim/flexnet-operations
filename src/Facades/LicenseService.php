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
 * @method static \Flexsim\FlexnetOperations\Type\GetFulfillmentCountResponseType getFulfillmentCount(\Flexsim\FlexnetOperations\Type\GetFulfillmentCountRequestType $getFulfillmentCountRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetFulfillmentsQueryResponseType getFulfillmentsQuery(\Flexsim\FlexnetOperations\Type\GetFulfillmentsQueryRequestType $getFulfillmentsQueryRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetFulfillmentPropertiesResponseType getFulfillmentPropertiesQuery(\Flexsim\FlexnetOperations\Type\GetFulfillmentPropertiesRequestType $getFulfillmentPropertiesRequest)
 * @method static \Flexsim\FlexnetOperations\Type\RehostFulfillmentResponseType rehostLicense(\Flexsim\FlexnetOperations\Type\RehostFulfillmentRequestType $rehostLicenseRequest)
 * @method static \Flexsim\FlexnetOperations\Type\ReturnFulfillmentResponseType returnLicense(\Flexsim\FlexnetOperations\Type\ReturnFulfillmentRequestType $returnLicenseRequest)
 * @method static \Flexsim\FlexnetOperations\Type\RepairFulfillmentResponseType repairLicense(\Flexsim\FlexnetOperations\Type\RepairFulfillmentRequestType $repairLicenseRequest)
 * @method static \Flexsim\FlexnetOperations\Type\EmergencyFulfillmentResponseType emergencyLicense(\Flexsim\FlexnetOperations\Type\EmergencyFulfillmentRequestType $emergencyLicenseRequest)
 * @method static \Flexsim\FlexnetOperations\Type\PublisherErrorFulfillmentResponseType publisherErrorLicense(\Flexsim\FlexnetOperations\Type\PublisherErrorFulfillmentRequestType $publisherErrorLicenseRequest)
 * @method static \Flexsim\FlexnetOperations\Type\StopGapFulfillmentResponseType stopGapLicense(\Flexsim\FlexnetOperations\Type\StopGapFulfillmentRequestType $stopGapLicenseRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetFulfillmentAttributesResponseType getFulfillmentAttributesFromModel(\Flexsim\FlexnetOperations\Type\GetFulfillmentAttributesRequestType $getFulfillmentAttributesRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetHostAttributesResponseType getHostAttributesFromLicenseTechnology(\Flexsim\FlexnetOperations\Type\GetHostAttributesRequestType $getHostAttributesRequest)
 * @method static \Flexsim\FlexnetOperations\Type\CreateFulfillmentResponseType verifyCreateLicense(\Flexsim\FlexnetOperations\Type\CreateFulfillmentRequestType $verifyCreateLicenseRequest)
 * @method static \Flexsim\FlexnetOperations\Type\CreateFulfillmentResponseType createLicense(\Flexsim\FlexnetOperations\Type\CreateFulfillmentRequestType $createLicenseRequest)
 * @method static \Flexsim\FlexnetOperations\Type\ActivateShortCodeResponseType activateShortCode(\Flexsim\FlexnetOperations\Type\ActivateShortCodeRequestType $activateShortCodeRequest)
 * @method static \Flexsim\FlexnetOperations\Type\RepairShortCodeResponseType repairShortCode(\Flexsim\FlexnetOperations\Type\RepairShortCodeRequestType $repairShortCodeRequest)
 * @method static \Flexsim\FlexnetOperations\Type\ReturnShortCodeResponseType returnShortCode(\Flexsim\FlexnetOperations\Type\ReturnShortCodeRequestType $returnShortCodeRequest)
 * @method static \Flexsim\FlexnetOperations\Type\EmailLicenseResponseType emailLicense(\Flexsim\FlexnetOperations\Type\EmailLicenseRequestType $emailLicenseRequest)
 * @method static \Flexsim\FlexnetOperations\Type\ConsolidateFulfillmentsResponseType consolidateFulfillments(\Flexsim\FlexnetOperations\Type\ConsolidateFulfillmentsRequestType $consolidateFulfillmentsRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetConsolidatedFulfillmentCountResponseType getConsolidatedFulfillmentCount(\Flexsim\FlexnetOperations\Type\GetConsolidatedFulfillmentCountRequestType $getConsolidatedFulfillmentCountRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetConsolidatedFulfillmentsQueryResponseType getConsolidatedFulfillmentsQuery(\Flexsim\FlexnetOperations\Type\GetConsolidatedFulfillmentsQueryRequestType $getConsolidatedFulfillmentsQueryRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetFmtAttributesForBatchActivationResponseType getFulfillmentAttributesForBatchActivation(\Flexsim\FlexnetOperations\Type\GetFmtAttributesForBatchActivationRequestType $getFmtAttributesForBatchActivationRequest)
 * @method static \Flexsim\FlexnetOperations\Type\CreateLicensesAsBatchResponseType createLicensesAsBatch(\Flexsim\FlexnetOperations\Type\CreateLicensesAsBatchRequestType $createLicensesAsBatchRequest)
 * @method static \Flexsim\FlexnetOperations\Type\ConsolidateFulfillmentsResponseType createLicensesAsBatchAndConsolidate(\Flexsim\FlexnetOperations\Type\CreateLicensesAsBatchRequestType $createLicensesAsBatchAndConsolidateRequest)
 * @method static \Flexsim\FlexnetOperations\Type\EmailConsolidatedLicensesResponseType emailConsolidatedLicenses(\Flexsim\FlexnetOperations\Type\EmailConsolidatedLicensesRequestType $emailConsolidatedLicensesRequest)
 * @method static \Flexsim\FlexnetOperations\Type\TrustedResponseType manualActivation(\Flexsim\FlexnetOperations\Type\TrustedRequestType $manualActivationRequest)
 * @method static \Flexsim\FlexnetOperations\Type\TrustedResponseType manualRepair(\Flexsim\FlexnetOperations\Type\TrustedRequestType $manualRepairRequest)
 * @method static \Flexsim\FlexnetOperations\Type\TrustedResponseType manualReturn(\Flexsim\FlexnetOperations\Type\TrustedRequestType $manualReturnRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetFulfillmentHistoryResponseType getFulfillmentHistory(\Flexsim\FlexnetOperations\Type\GetFulfillmentHistoryRequestType $getFulfillmentHistoryRequest)
 * @method static \Flexsim\FlexnetOperations\Type\CreateChildLineItemFulfillmentResponseType createChildLineItemFulfillment(\Flexsim\FlexnetOperations\Type\CreateChildLineItemFulfillmentRequestType $createChildLineItemFulfillmentRequest)
 * @method static \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCResponseType upgradeFulfillment(\Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCRequestType $upgradeFulfillmentRequest)
 * @method static \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCResponseType upsellFulfillment(\Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCRequestType $upsellFulfillmentRequest)
 * @method static \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCResponseType renewFulfillment(\Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCRequestType $renewFulfillmentRequest)
 * @method static \Flexsim\FlexnetOperations\Type\SetLicenseResponseType setLicense(\Flexsim\FlexnetOperations\Type\SetLicenseRequestType $setLicenseRequest)
 * @method static \Flexsim\FlexnetOperations\Type\DeleteOnholdFulfillmentsResponseType deleteOnholdFulfillments(\Flexsim\FlexnetOperations\Type\DeleteOnholdFulfillmentsRequestType $deleteOnholdFulfillmentsRequest)
 * @method static \Flexsim\FlexnetOperations\Type\ActivateLicensesResponseType offlineFNPTrustedStorageActivation(\Flexsim\FlexnetOperations\Type\ActivateLicensesRequestType $activateLicensesRequest)
 * @method static \Flexsim\FlexnetOperations\Type\TransferHostResponseType transferHost(\Flexsim\FlexnetOperations\Type\TransferHostRequestType $transferHostRequest)
 *
 * @see \Flexsim\FlexnetOperations\FlexnetOperationsClientManager
 * @see \Flexsim\FlexnetOperations\Services\LicenseServiceService
 * @see \Flexsim\FlexnetOperations\Services\LicenseServiceService\v1
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
        return 'flexnet-operations.license-service';
    }
}
