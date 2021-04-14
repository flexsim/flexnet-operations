<?php

namespace Flexsim\FlexnetOperations\Services\LicenseService\v1;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Flexsim\FlexnetOperations\Type;

class LicenseServiceClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\GetFulfillmentCountRequestType $getFulfillmentCountRequest
     * @return ResultInterface|Type\GetFulfillmentCountResponseType
     * @throws SoapException
     */
    public function getFulfillmentCount(\Flexsim\FlexnetOperations\Type\GetFulfillmentCountRequestType $getFulfillmentCountRequest): \Flexsim\FlexnetOperations\Type\GetFulfillmentCountResponseType
    {
        return $this->call('getFulfillmentCount', $getFulfillmentCountRequest);
    }

    /**
     * @param RequestInterface|Type\GetFulfillmentsQueryRequestType $getFulfillmentsQueryRequest
     * @return ResultInterface|Type\GetFulfillmentsQueryResponseType
     * @throws SoapException
     */
    public function getFulfillmentsQuery(\Flexsim\FlexnetOperations\Type\GetFulfillmentsQueryRequestType $getFulfillmentsQueryRequest): \Flexsim\FlexnetOperations\Type\GetFulfillmentsQueryResponseType
    {
        return $this->call('getFulfillmentsQuery', $getFulfillmentsQueryRequest);
    }

    /**
     * @param RequestInterface|Type\GetFulfillmentPropertiesRequestType $getFulfillmentPropertiesRequest
     * @return ResultInterface|Type\GetFulfillmentPropertiesResponseType
     * @throws SoapException
     */
    public function getFulfillmentPropertiesQuery(\Flexsim\FlexnetOperations\Type\GetFulfillmentPropertiesRequestType $getFulfillmentPropertiesRequest): \Flexsim\FlexnetOperations\Type\GetFulfillmentPropertiesResponseType
    {
        return $this->call('getFulfillmentPropertiesQuery', $getFulfillmentPropertiesRequest);
    }

    /**
     * @param RequestInterface|Type\RehostFulfillmentRequestType $rehostLicenseRequest
     * @return ResultInterface|Type\RehostFulfillmentResponseType
     * @throws SoapException
     */
    public function rehostLicense(\Flexsim\FlexnetOperations\Type\RehostFulfillmentRequestType $rehostLicenseRequest): \Flexsim\FlexnetOperations\Type\RehostFulfillmentResponseType
    {
        return $this->call('rehostLicense', $rehostLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\ReturnFulfillmentRequestType $returnLicenseRequest
     * @return ResultInterface|Type\ReturnFulfillmentResponseType
     * @throws SoapException
     */
    public function returnLicense(\Flexsim\FlexnetOperations\Type\ReturnFulfillmentRequestType $returnLicenseRequest): \Flexsim\FlexnetOperations\Type\ReturnFulfillmentResponseType
    {
        return $this->call('returnLicense', $returnLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\RepairFulfillmentRequestType $repairLicenseRequest
     * @return ResultInterface|Type\RepairFulfillmentResponseType
     * @throws SoapException
     */
    public function repairLicense(\Flexsim\FlexnetOperations\Type\RepairFulfillmentRequestType $repairLicenseRequest): \Flexsim\FlexnetOperations\Type\RepairFulfillmentResponseType
    {
        return $this->call('repairLicense', $repairLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\EmergencyFulfillmentRequestType $emergencyLicenseRequest
     * @return ResultInterface|Type\EmergencyFulfillmentResponseType
     * @throws SoapException
     */
    public function emergencyLicense(\Flexsim\FlexnetOperations\Type\EmergencyFulfillmentRequestType $emergencyLicenseRequest): \Flexsim\FlexnetOperations\Type\EmergencyFulfillmentResponseType
    {
        return $this->call('emergencyLicense', $emergencyLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\PublisherErrorFulfillmentRequestType $publisherErrorLicenseRequest
     * @return ResultInterface|Type\PublisherErrorFulfillmentResponseType
     * @throws SoapException
     */
    public function publisherErrorLicense(\Flexsim\FlexnetOperations\Type\PublisherErrorFulfillmentRequestType $publisherErrorLicenseRequest): \Flexsim\FlexnetOperations\Type\PublisherErrorFulfillmentResponseType
    {
        return $this->call('publisherErrorLicense', $publisherErrorLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\StopGapFulfillmentRequestType $stopGapLicenseRequest
     * @return ResultInterface|Type\StopGapFulfillmentResponseType
     * @throws SoapException
     */
    public function stopGapLicense(\Flexsim\FlexnetOperations\Type\StopGapFulfillmentRequestType $stopGapLicenseRequest): \Flexsim\FlexnetOperations\Type\StopGapFulfillmentResponseType
    {
        return $this->call('stopGapLicense', $stopGapLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\GetFulfillmentAttributesRequestType $getFulfillmentAttributesRequest
     * @return ResultInterface|Type\GetFulfillmentAttributesResponseType
     * @throws SoapException
     */
    public function getFulfillmentAttributesFromModel(\Flexsim\FlexnetOperations\Type\GetFulfillmentAttributesRequestType $getFulfillmentAttributesRequest): \Flexsim\FlexnetOperations\Type\GetFulfillmentAttributesResponseType
    {
        return $this->call('getFulfillmentAttributesFromModel', $getFulfillmentAttributesRequest);
    }

    /**
     * @param RequestInterface|Type\GetHostAttributesRequestType $getHostAttributesRequest
     * @return ResultInterface|Type\GetHostAttributesResponseType
     * @throws SoapException
     */
    public function getHostAttributesFromLicenseTechnology(\Flexsim\FlexnetOperations\Type\GetHostAttributesRequestType $getHostAttributesRequest): \Flexsim\FlexnetOperations\Type\GetHostAttributesResponseType
    {
        return $this->call('getHostAttributesFromLicenseTechnology', $getHostAttributesRequest);
    }

    /**
     * @param RequestInterface|Type\CreateFulfillmentRequestType $verifyCreateLicenseRequest
     * @return ResultInterface|Type\CreateFulfillmentResponseType
     * @throws SoapException
     */
    public function verifyCreateLicense(\Flexsim\FlexnetOperations\Type\CreateFulfillmentRequestType $verifyCreateLicenseRequest): \Flexsim\FlexnetOperations\Type\CreateFulfillmentResponseType
    {
        return $this->call('verifyCreateLicense', $verifyCreateLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\CreateFulfillmentRequestType $createLicenseRequest
     * @return ResultInterface|Type\CreateFulfillmentResponseType
     * @throws SoapException
     */
    public function createLicense(\Flexsim\FlexnetOperations\Type\CreateFulfillmentRequestType $createLicenseRequest): \Flexsim\FlexnetOperations\Type\CreateFulfillmentResponseType
    {
        return $this->call('createLicense', $createLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\ActivateShortCodeRequestType $activateShortCodeRequest
     * @return ResultInterface|Type\ActivateShortCodeResponseType
     * @throws SoapException
     */
    public function activateShortCode(\Flexsim\FlexnetOperations\Type\ActivateShortCodeRequestType $activateShortCodeRequest): \Flexsim\FlexnetOperations\Type\ActivateShortCodeResponseType
    {
        return $this->call('activateShortCode', $activateShortCodeRequest);
    }

    /**
     * @param RequestInterface|Type\RepairShortCodeRequestType $repairShortCodeRequest
     * @return ResultInterface|Type\RepairShortCodeResponseType
     * @throws SoapException
     */
    public function repairShortCode(\Flexsim\FlexnetOperations\Type\RepairShortCodeRequestType $repairShortCodeRequest): \Flexsim\FlexnetOperations\Type\RepairShortCodeResponseType
    {
        return $this->call('repairShortCode', $repairShortCodeRequest);
    }

    /**
     * @param RequestInterface|Type\ReturnShortCodeRequestType $returnShortCodeRequest
     * @return ResultInterface|Type\ReturnShortCodeResponseType
     * @throws SoapException
     */
    public function returnShortCode(\Flexsim\FlexnetOperations\Type\ReturnShortCodeRequestType $returnShortCodeRequest): \Flexsim\FlexnetOperations\Type\ReturnShortCodeResponseType
    {
        return $this->call('returnShortCode', $returnShortCodeRequest);
    }

    /**
     * @param RequestInterface|Type\EmailLicenseRequestType $emailLicenseRequest
     * @return ResultInterface|Type\EmailLicenseResponseType
     * @throws SoapException
     */
    public function emailLicense(\Flexsim\FlexnetOperations\Type\EmailLicenseRequestType $emailLicenseRequest): \Flexsim\FlexnetOperations\Type\EmailLicenseResponseType
    {
        return $this->call('emailLicense', $emailLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\ConsolidateFulfillmentsRequestType $consolidateFulfillmentsRequest
     * @return ResultInterface|Type\ConsolidateFulfillmentsResponseType
     * @throws SoapException
     */
    public function consolidateFulfillments(\Flexsim\FlexnetOperations\Type\ConsolidateFulfillmentsRequestType $consolidateFulfillmentsRequest): \Flexsim\FlexnetOperations\Type\ConsolidateFulfillmentsResponseType
    {
        return $this->call('consolidateFulfillments', $consolidateFulfillmentsRequest);
    }

    /**
     * @param RequestInterface|Type\GetConsolidatedFulfillmentCountRequestType $getConsolidatedFulfillmentCountRequest
     * @return ResultInterface|Type\GetConsolidatedFulfillmentCountResponseType
     * @throws SoapException
     */
    public function getConsolidatedFulfillmentCount(\Flexsim\FlexnetOperations\Type\GetConsolidatedFulfillmentCountRequestType $getConsolidatedFulfillmentCountRequest): \Flexsim\FlexnetOperations\Type\GetConsolidatedFulfillmentCountResponseType
    {
        return $this->call('getConsolidatedFulfillmentCount', $getConsolidatedFulfillmentCountRequest);
    }

    /**
     * @param RequestInterface|Type\GetConsolidatedFulfillmentsQueryRequestType $getConsolidatedFulfillmentsQueryRequest
     * @return ResultInterface|Type\GetConsolidatedFulfillmentsQueryResponseType
     * @throws SoapException
     */
    public function getConsolidatedFulfillmentsQuery(\Flexsim\FlexnetOperations\Type\GetConsolidatedFulfillmentsQueryRequestType $getConsolidatedFulfillmentsQueryRequest): \Flexsim\FlexnetOperations\Type\GetConsolidatedFulfillmentsQueryResponseType
    {
        return $this->call('getConsolidatedFulfillmentsQuery', $getConsolidatedFulfillmentsQueryRequest);
    }

    /**
     * @param RequestInterface|Type\GetFmtAttributesForBatchActivationRequestType $getFmtAttributesForBatchActivationRequest
     * @return ResultInterface|Type\GetFmtAttributesForBatchActivationResponseType
     * @throws SoapException
     */
    public function getFulfillmentAttributesForBatchActivation(\Flexsim\FlexnetOperations\Type\GetFmtAttributesForBatchActivationRequestType $getFmtAttributesForBatchActivationRequest): \Flexsim\FlexnetOperations\Type\GetFmtAttributesForBatchActivationResponseType
    {
        return $this->call('getFulfillmentAttributesForBatchActivation', $getFmtAttributesForBatchActivationRequest);
    }

    /**
     * @param RequestInterface|Type\CreateLicensesAsBatchRequestType $createLicensesAsBatchRequest
     * @return ResultInterface|Type\CreateLicensesAsBatchResponseType
     * @throws SoapException
     */
    public function createLicensesAsBatch(\Flexsim\FlexnetOperations\Type\CreateLicensesAsBatchRequestType $createLicensesAsBatchRequest): \Flexsim\FlexnetOperations\Type\CreateLicensesAsBatchResponseType
    {
        return $this->call('createLicensesAsBatch', $createLicensesAsBatchRequest);
    }

    /**
     * @param RequestInterface|Type\CreateLicensesAsBatchRequestType $createLicensesAsBatchAndConsolidateRequest
     * @return ResultInterface|Type\ConsolidateFulfillmentsResponseType
     * @throws SoapException
     */
    public function createLicensesAsBatchAndConsolidate(\Flexsim\FlexnetOperations\Type\CreateLicensesAsBatchRequestType $createLicensesAsBatchAndConsolidateRequest): \Flexsim\FlexnetOperations\Type\ConsolidateFulfillmentsResponseType
    {
        return $this->call('createLicensesAsBatchAndConsolidate', $createLicensesAsBatchAndConsolidateRequest);
    }

    /**
     * @param RequestInterface|Type\EmailConsolidatedLicensesRequestType $emailConsolidatedLicensesRequest
     * @return ResultInterface|Type\EmailConsolidatedLicensesResponseType
     * @throws SoapException
     */
    public function emailConsolidatedLicenses(\Flexsim\FlexnetOperations\Type\EmailConsolidatedLicensesRequestType $emailConsolidatedLicensesRequest): \Flexsim\FlexnetOperations\Type\EmailConsolidatedLicensesResponseType
    {
        return $this->call('emailConsolidatedLicenses', $emailConsolidatedLicensesRequest);
    }

    /**
     * @param RequestInterface|Type\TrustedRequestType $manualActivationRequest
     * @return ResultInterface|Type\TrustedResponseType
     * @throws SoapException
     */
    public function manualActivation(\Flexsim\FlexnetOperations\Type\TrustedRequestType $manualActivationRequest): \Flexsim\FlexnetOperations\Type\TrustedResponseType
    {
        return $this->call('manualActivation', $manualActivationRequest);
    }

    /**
     * @param RequestInterface|Type\TrustedRequestType $manualRepairRequest
     * @return ResultInterface|Type\TrustedResponseType
     * @throws SoapException
     */
    public function manualRepair(\Flexsim\FlexnetOperations\Type\TrustedRequestType $manualRepairRequest): \Flexsim\FlexnetOperations\Type\TrustedResponseType
    {
        return $this->call('manualRepair', $manualRepairRequest);
    }

    /**
     * @param RequestInterface|Type\TrustedRequestType $manualReturnRequest
     * @return ResultInterface|Type\TrustedResponseType
     * @throws SoapException
     */
    public function manualReturn(\Flexsim\FlexnetOperations\Type\TrustedRequestType $manualReturnRequest): \Flexsim\FlexnetOperations\Type\TrustedResponseType
    {
        return $this->call('manualReturn', $manualReturnRequest);
    }

    /**
     * @param RequestInterface|Type\GetFulfillmentHistoryRequestType $getFulfillmentHistoryRequest
     * @return ResultInterface|Type\GetFulfillmentHistoryResponseType
     * @throws SoapException
     */
    public function getFulfillmentHistory(\Flexsim\FlexnetOperations\Type\GetFulfillmentHistoryRequestType $getFulfillmentHistoryRequest): \Flexsim\FlexnetOperations\Type\GetFulfillmentHistoryResponseType
    {
        return $this->call('getFulfillmentHistory', $getFulfillmentHistoryRequest);
    }

    /**
     * @param RequestInterface|Type\CreateChildLineItemFulfillmentRequestType $createChildLineItemFulfillmentRequest
     * @return ResultInterface|Type\CreateChildLineItemFulfillmentResponseType
     * @throws SoapException
     */
    public function createChildLineItemFulfillment(\Flexsim\FlexnetOperations\Type\CreateChildLineItemFulfillmentRequestType $createChildLineItemFulfillmentRequest): \Flexsim\FlexnetOperations\Type\CreateChildLineItemFulfillmentResponseType
    {
        return $this->call('createChildLineItemFulfillment', $createChildLineItemFulfillmentRequest);
    }

    /**
     * @param RequestInterface|Type\AdvancedFulfillmentLCRequestType $upgradeFulfillmentRequest
     * @return ResultInterface|Type\AdvancedFulfillmentLCResponseType
     * @throws SoapException
     */
    public function upgradeFulfillment(\Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCRequestType $upgradeFulfillmentRequest): \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCResponseType
    {
        return $this->call('upgradeFulfillment', $upgradeFulfillmentRequest);
    }

    /**
     * @param RequestInterface|Type\AdvancedFulfillmentLCRequestType $upsellFulfillmentRequest
     * @return ResultInterface|Type\AdvancedFulfillmentLCResponseType
     * @throws SoapException
     */
    public function upsellFulfillment(\Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCRequestType $upsellFulfillmentRequest): \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCResponseType
    {
        return $this->call('upsellFulfillment', $upsellFulfillmentRequest);
    }

    /**
     * @param RequestInterface|Type\AdvancedFulfillmentLCRequestType $renewFulfillmentRequest
     * @return ResultInterface|Type\AdvancedFulfillmentLCResponseType
     * @throws SoapException
     */
    public function renewFulfillment(\Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCRequestType $renewFulfillmentRequest): \Flexsim\FlexnetOperations\Type\AdvancedFulfillmentLCResponseType
    {
        return $this->call('renewFulfillment', $renewFulfillmentRequest);
    }

    /**
     * @param RequestInterface|Type\SetLicenseRequestType $setLicenseRequest
     * @return ResultInterface|Type\SetLicenseResponseType
     * @throws SoapException
     */
    public function setLicense(\Flexsim\FlexnetOperations\Type\SetLicenseRequestType $setLicenseRequest): \Flexsim\FlexnetOperations\Type\SetLicenseResponseType
    {
        return $this->call('setLicense', $setLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteOnholdFulfillmentsRequestType $deleteOnholdFulfillmentsRequest
     * @return ResultInterface|Type\DeleteOnholdFulfillmentsResponseType
     * @throws SoapException
     */
    public function deleteOnholdFulfillments(\Flexsim\FlexnetOperations\Type\DeleteOnholdFulfillmentsRequestType $deleteOnholdFulfillmentsRequest): \Flexsim\FlexnetOperations\Type\DeleteOnholdFulfillmentsResponseType
    {
        return $this->call('deleteOnholdFulfillments', $deleteOnholdFulfillmentsRequest);
    }

    /**
     * @param RequestInterface|Type\ActivateLicensesRequestType $activateLicensesRequest
     * @return ResultInterface|Type\ActivateLicensesResponseType
     * @throws SoapException
     */
    public function offlineFNPTrustedStorageActivation(\Flexsim\FlexnetOperations\Type\ActivateLicensesRequestType $activateLicensesRequest): \Flexsim\FlexnetOperations\Type\ActivateLicensesResponseType
    {
        return $this->call('offlineFNPTrustedStorageActivation', $activateLicensesRequest);
    }

    /**
     * @param RequestInterface|Type\TransferHostRequestType $transferHostRequest
     * @return ResultInterface|Type\TransferHostResponseType
     * @throws SoapException
     */
    public function transferHost(\Flexsim\FlexnetOperations\Type\TransferHostRequestType $transferHostRequest): \Flexsim\FlexnetOperations\Type\TransferHostResponseType
    {
        return $this->call('transferHost', $transferHostRequest);
    }
}