<?php

namespace Flexnet\LicenseService;

use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class LicenseServiceClient
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
     * @param  RequestInterface|Type\GetFulfillmentCountRequestType  $getFulfillmentCountRequest
     * @return ResultInterface|Type\GetFulfillmentCountResponseType
     *
     * @throws SoapException
     */
    public function getFulfillmentCount(Type\GetFulfillmentCountRequestType $getFulfillmentCountRequest): Type\GetFulfillmentCountResponseType
    {
        return ($this->caller)('getFulfillmentCount', $getFulfillmentCountRequest);
    }

    /**
     * @param  RequestInterface|Type\GetFulfillmentsQueryRequestType  $getFulfillmentsQueryRequest
     * @return ResultInterface|Type\GetFulfillmentsQueryResponseType
     *
     * @throws SoapException
     */
    public function getFulfillmentsQuery(Type\GetFulfillmentsQueryRequestType $getFulfillmentsQueryRequest): Type\GetFulfillmentsQueryResponseType
    {
        return ($this->caller)('getFulfillmentsQuery', $getFulfillmentsQueryRequest);
    }

    /**
     * @param  RequestInterface|Type\GetFulfillmentPropertiesRequestType  $getFulfillmentPropertiesRequest
     * @return ResultInterface|Type\GetFulfillmentPropertiesResponseType
     *
     * @throws SoapException
     */
    public function getFulfillmentPropertiesQuery(Type\GetFulfillmentPropertiesRequestType $getFulfillmentPropertiesRequest): Type\GetFulfillmentPropertiesResponseType
    {
        return ($this->caller)('getFulfillmentPropertiesQuery', $getFulfillmentPropertiesRequest);
    }

    /**
     * @param  RequestInterface|Type\RehostFulfillmentRequestType  $rehostLicenseRequest
     * @return ResultInterface|Type\RehostFulfillmentResponseType
     *
     * @throws SoapException
     */
    public function rehostLicense(Type\RehostFulfillmentRequestType $rehostLicenseRequest): Type\RehostFulfillmentResponseType
    {
        return ($this->caller)('rehostLicense', $rehostLicenseRequest);
    }

    /**
     * @param  RequestInterface|Type\ReturnFulfillmentRequestType  $returnLicenseRequest
     * @return ResultInterface|Type\ReturnFulfillmentResponseType
     *
     * @throws SoapException
     */
    public function returnLicense(Type\ReturnFulfillmentRequestType $returnLicenseRequest): Type\ReturnFulfillmentResponseType
    {
        return ($this->caller)('returnLicense', $returnLicenseRequest);
    }

    /**
     * @param  RequestInterface|Type\RepairFulfillmentRequestType  $repairLicenseRequest
     * @return ResultInterface|Type\RepairFulfillmentResponseType
     *
     * @throws SoapException
     */
    public function repairLicense(Type\RepairFulfillmentRequestType $repairLicenseRequest): Type\RepairFulfillmentResponseType
    {
        return ($this->caller)('repairLicense', $repairLicenseRequest);
    }

    /**
     * @param  RequestInterface|Type\EmergencyFulfillmentRequestType  $emergencyLicenseRequest
     * @return ResultInterface|Type\EmergencyFulfillmentResponseType
     *
     * @throws SoapException
     */
    public function emergencyLicense(Type\EmergencyFulfillmentRequestType $emergencyLicenseRequest): Type\EmergencyFulfillmentResponseType
    {
        return ($this->caller)('emergencyLicense', $emergencyLicenseRequest);
    }

    /**
     * @param  RequestInterface|Type\PublisherErrorFulfillmentRequestType  $publisherErrorLicenseRequest
     * @return ResultInterface|Type\PublisherErrorFulfillmentResponseType
     *
     * @throws SoapException
     */
    public function publisherErrorLicense(Type\PublisherErrorFulfillmentRequestType $publisherErrorLicenseRequest): Type\PublisherErrorFulfillmentResponseType
    {
        return ($this->caller)('publisherErrorLicense', $publisherErrorLicenseRequest);
    }

    /**
     * @param  RequestInterface|Type\StopGapFulfillmentRequestType  $stopGapLicenseRequest
     * @return ResultInterface|Type\StopGapFulfillmentResponseType
     *
     * @throws SoapException
     */
    public function stopGapLicense(Type\StopGapFulfillmentRequestType $stopGapLicenseRequest): Type\StopGapFulfillmentResponseType
    {
        return ($this->caller)('stopGapLicense', $stopGapLicenseRequest);
    }

    /**
     * @param  RequestInterface|Type\GetFulfillmentAttributesRequestType  $getFulfillmentAttributesRequest
     * @return ResultInterface|Type\GetFulfillmentAttributesResponseType
     *
     * @throws SoapException
     */
    public function getFulfillmentAttributesFromModel(Type\GetFulfillmentAttributesRequestType $getFulfillmentAttributesRequest): Type\GetFulfillmentAttributesResponseType
    {
        return ($this->caller)('getFulfillmentAttributesFromModel', $getFulfillmentAttributesRequest);
    }

    /**
     * @param  RequestInterface|Type\GetHostAttributesRequestType  $getHostAttributesRequest
     * @return ResultInterface|Type\GetHostAttributesResponseType
     *
     * @throws SoapException
     */
    public function getHostAttributesFromLicenseTechnology(Type\GetHostAttributesRequestType $getHostAttributesRequest): Type\GetHostAttributesResponseType
    {
        return ($this->caller)('getHostAttributesFromLicenseTechnology', $getHostAttributesRequest);
    }

    /**
     * @param  RequestInterface|Type\CreateFulfillmentRequestType  $verifyCreateLicenseRequest
     * @return ResultInterface|Type\CreateFulfillmentResponseType
     *
     * @throws SoapException
     */
    public function verifyCreateLicense(Type\CreateFulfillmentRequestType $verifyCreateLicenseRequest): Type\CreateFulfillmentResponseType
    {
        return ($this->caller)('verifyCreateLicense', $verifyCreateLicenseRequest);
    }

    /**
     * @param  RequestInterface|Type\CreateFulfillmentRequestType  $createLicenseRequest
     * @return ResultInterface|Type\CreateFulfillmentResponseType
     *
     * @throws SoapException
     */
    public function createLicense(Type\CreateFulfillmentRequestType $createLicenseRequest): Type\CreateFulfillmentResponseType
    {
        return ($this->caller)('createLicense', $createLicenseRequest);
    }

    /**
     * @param  RequestInterface|Type\ActivateShortCodeRequestType  $activateShortCodeRequest
     * @return ResultInterface|Type\ActivateShortCodeResponseType
     *
     * @throws SoapException
     */
    public function activateShortCode(Type\ActivateShortCodeRequestType $activateShortCodeRequest): Type\ActivateShortCodeResponseType
    {
        return ($this->caller)('activateShortCode', $activateShortCodeRequest);
    }

    /**
     * @param  RequestInterface|Type\RepairShortCodeRequestType  $repairShortCodeRequest
     * @return ResultInterface|Type\RepairShortCodeResponseType
     *
     * @throws SoapException
     */
    public function repairShortCode(Type\RepairShortCodeRequestType $repairShortCodeRequest): Type\RepairShortCodeResponseType
    {
        return ($this->caller)('repairShortCode', $repairShortCodeRequest);
    }

    /**
     * @param  RequestInterface|Type\ReturnShortCodeRequestType  $returnShortCodeRequest
     * @return ResultInterface|Type\ReturnShortCodeResponseType
     *
     * @throws SoapException
     */
    public function returnShortCode(Type\ReturnShortCodeRequestType $returnShortCodeRequest): Type\ReturnShortCodeResponseType
    {
        return ($this->caller)('returnShortCode', $returnShortCodeRequest);
    }

    /**
     * @param  RequestInterface|Type\EmailLicenseRequestType  $emailLicenseRequest
     * @return ResultInterface|Type\EmailLicenseResponseType
     *
     * @throws SoapException
     */
    public function emailLicense(Type\EmailLicenseRequestType $emailLicenseRequest): Type\EmailLicenseResponseType
    {
        return ($this->caller)('emailLicense', $emailLicenseRequest);
    }

    /**
     * @param  RequestInterface|Type\ConsolidateFulfillmentsRequestType  $consolidateFulfillmentsRequest
     * @return ResultInterface|Type\ConsolidateFulfillmentsResponseType
     *
     * @throws SoapException
     */
    public function consolidateFulfillments(Type\ConsolidateFulfillmentsRequestType $consolidateFulfillmentsRequest): Type\ConsolidateFulfillmentsResponseType
    {
        return ($this->caller)('consolidateFulfillments', $consolidateFulfillmentsRequest);
    }

    /**
     * @param  RequestInterface|Type\GetConsolidatedFulfillmentCountRequestType  $getConsolidatedFulfillmentCountRequest
     * @return ResultInterface|Type\GetConsolidatedFulfillmentCountResponseType
     *
     * @throws SoapException
     */
    public function getConsolidatedFulfillmentCount(Type\GetConsolidatedFulfillmentCountRequestType $getConsolidatedFulfillmentCountRequest): Type\GetConsolidatedFulfillmentCountResponseType
    {
        return ($this->caller)('getConsolidatedFulfillmentCount', $getConsolidatedFulfillmentCountRequest);
    }

    /**
     * @param  RequestInterface|Type\GetConsolidatedFulfillmentsQueryRequestType  $getConsolidatedFulfillmentsQueryRequest
     * @return ResultInterface|Type\GetConsolidatedFulfillmentsQueryResponseType
     *
     * @throws SoapException
     */
    public function getConsolidatedFulfillmentsQuery(Type\GetConsolidatedFulfillmentsQueryRequestType $getConsolidatedFulfillmentsQueryRequest): Type\GetConsolidatedFulfillmentsQueryResponseType
    {
        return ($this->caller)('getConsolidatedFulfillmentsQuery', $getConsolidatedFulfillmentsQueryRequest);
    }

    /**
     * @param  RequestInterface|Type\GetFmtAttributesForBatchActivationRequestType  $getFmtAttributesForBatchActivationRequest
     * @return ResultInterface|Type\GetFmtAttributesForBatchActivationResponseType
     *
     * @throws SoapException
     */
    public function getFulfillmentAttributesForBatchActivation(Type\GetFmtAttributesForBatchActivationRequestType $getFmtAttributesForBatchActivationRequest): Type\GetFmtAttributesForBatchActivationResponseType
    {
        return ($this->caller)('getFulfillmentAttributesForBatchActivation', $getFmtAttributesForBatchActivationRequest);
    }

    /**
     * @param  RequestInterface|Type\CreateLicensesAsBatchRequestType  $createLicensesAsBatchRequest
     * @return ResultInterface|Type\CreateLicensesAsBatchResponseType
     *
     * @throws SoapException
     */
    public function createLicensesAsBatch(Type\CreateLicensesAsBatchRequestType $createLicensesAsBatchRequest): Type\CreateLicensesAsBatchResponseType
    {
        return ($this->caller)('createLicensesAsBatch', $createLicensesAsBatchRequest);
    }

    /**
     * @param  RequestInterface|Type\CreateLicensesAsBatchRequestType  $createLicensesAsBatchAndConsolidateRequest
     * @return ResultInterface|Type\ConsolidateFulfillmentsResponseType
     *
     * @throws SoapException
     */
    public function createLicensesAsBatchAndConsolidate(Type\CreateLicensesAsBatchRequestType $createLicensesAsBatchAndConsolidateRequest): Type\ConsolidateFulfillmentsResponseType
    {
        return ($this->caller)('createLicensesAsBatchAndConsolidate', $createLicensesAsBatchAndConsolidateRequest);
    }

    /**
     * @param  RequestInterface|Type\EmailConsolidatedLicensesRequestType  $emailConsolidatedLicensesRequest
     * @return ResultInterface|Type\EmailConsolidatedLicensesResponseType
     *
     * @throws SoapException
     */
    public function emailConsolidatedLicenses(Type\EmailConsolidatedLicensesRequestType $emailConsolidatedLicensesRequest): Type\EmailConsolidatedLicensesResponseType
    {
        return ($this->caller)('emailConsolidatedLicenses', $emailConsolidatedLicensesRequest);
    }

    /**
     * @param  RequestInterface|Type\TrustedRequestType  $manualActivationRequest
     * @return ResultInterface|Type\TrustedResponseType
     *
     * @throws SoapException
     */
    public function manualActivation(Type\TrustedRequestType $manualActivationRequest): Type\TrustedResponseType
    {
        return ($this->caller)('manualActivation', $manualActivationRequest);
    }

    /**
     * @param  RequestInterface|Type\TrustedRequestType  $manualRepairRequest
     * @return ResultInterface|Type\TrustedResponseType
     *
     * @throws SoapException
     */
    public function manualRepair(Type\TrustedRequestType $manualRepairRequest): Type\TrustedResponseType
    {
        return ($this->caller)('manualRepair', $manualRepairRequest);
    }

    /**
     * @param  RequestInterface|Type\TrustedRequestType  $manualReturnRequest
     * @return ResultInterface|Type\TrustedResponseType
     *
     * @throws SoapException
     */
    public function manualReturn(Type\TrustedRequestType $manualReturnRequest): Type\TrustedResponseType
    {
        return ($this->caller)('manualReturn', $manualReturnRequest);
    }

    /**
     * @param  RequestInterface|Type\GetFulfillmentHistoryRequestType  $getFulfillmentHistoryRequest
     * @return ResultInterface|Type\GetFulfillmentHistoryResponseType
     *
     * @throws SoapException
     */
    public function getFulfillmentHistory(Type\GetFulfillmentHistoryRequestType $getFulfillmentHistoryRequest): Type\GetFulfillmentHistoryResponseType
    {
        return ($this->caller)('getFulfillmentHistory', $getFulfillmentHistoryRequest);
    }

    /**
     * @param  RequestInterface|Type\CreateChildLineItemFulfillmentRequestType  $createChildLineItemFulfillmentRequest
     * @return ResultInterface|Type\CreateChildLineItemFulfillmentResponseType
     *
     * @throws SoapException
     */
    public function createChildLineItemFulfillment(Type\CreateChildLineItemFulfillmentRequestType $createChildLineItemFulfillmentRequest): Type\CreateChildLineItemFulfillmentResponseType
    {
        return ($this->caller)('createChildLineItemFulfillment', $createChildLineItemFulfillmentRequest);
    }

    /**
     * @param  RequestInterface|Type\AdvancedFulfillmentLCRequestType  $upgradeFulfillmentRequest
     * @return ResultInterface|Type\AdvancedFulfillmentLCResponseType
     *
     * @throws SoapException
     */
    public function upgradeFulfillment(Type\AdvancedFulfillmentLCRequestType $upgradeFulfillmentRequest): Type\AdvancedFulfillmentLCResponseType
    {
        return ($this->caller)('upgradeFulfillment', $upgradeFulfillmentRequest);
    }

    /**
     * @param  RequestInterface|Type\AdvancedFulfillmentLCRequestType  $upsellFulfillmentRequest
     * @return ResultInterface|Type\AdvancedFulfillmentLCResponseType
     *
     * @throws SoapException
     */
    public function upsellFulfillment(Type\AdvancedFulfillmentLCRequestType $upsellFulfillmentRequest): Type\AdvancedFulfillmentLCResponseType
    {
        return ($this->caller)('upsellFulfillment', $upsellFulfillmentRequest);
    }

    /**
     * @param  RequestInterface|Type\AdvancedFulfillmentLCRequestType  $renewFulfillmentRequest
     * @return ResultInterface|Type\AdvancedFulfillmentLCResponseType
     *
     * @throws SoapException
     */
    public function renewFulfillment(Type\AdvancedFulfillmentLCRequestType $renewFulfillmentRequest): Type\AdvancedFulfillmentLCResponseType
    {
        return ($this->caller)('renewFulfillment', $renewFulfillmentRequest);
    }

    /**
     * @param  RequestInterface|Type\SetLicenseRequestType  $setLicenseRequest
     * @return ResultInterface|Type\SetLicenseResponseType
     *
     * @throws SoapException
     */
    public function setLicense(Type\SetLicenseRequestType $setLicenseRequest): Type\SetLicenseResponseType
    {
        return ($this->caller)('setLicense', $setLicenseRequest);
    }

    /**
     * @param  RequestInterface|Type\DeleteOnholdFulfillmentsRequestType  $deleteOnholdFulfillmentsRequest
     * @return ResultInterface|Type\DeleteOnholdFulfillmentsResponseType
     *
     * @throws SoapException
     */
    public function deleteOnholdFulfillments(Type\DeleteOnholdFulfillmentsRequestType $deleteOnholdFulfillmentsRequest): Type\DeleteOnholdFulfillmentsResponseType
    {
        return ($this->caller)('deleteOnholdFulfillments', $deleteOnholdFulfillmentsRequest);
    }

    /**
     * @param  RequestInterface|Type\ActivateLicensesRequestType  $activateLicensesRequest
     * @return ResultInterface|Type\ActivateLicensesResponseType
     *
     * @throws SoapException
     */
    public function offlineFNPTrustedStorageActivation(Type\ActivateLicensesRequestType $activateLicensesRequest): Type\ActivateLicensesResponseType
    {
        return ($this->caller)('offlineFNPTrustedStorageActivation', $activateLicensesRequest);
    }

    /**
     * @param  RequestInterface|Type\TransferHostRequestType  $transferHostRequest
     * @return ResultInterface|Type\TransferHostResponseType
     *
     * @throws SoapException
     */
    public function transferHost(Type\TransferHostRequestType $transferHostRequest): Type\TransferHostResponseType
    {
        return ($this->caller)('transferHost', $transferHostRequest);
    }
}
