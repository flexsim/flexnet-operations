<?php

namespace Flexnet\LicenseService;

use Phpro\SoapClient\Caller\Caller;
use Flexnet\LicenseService\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class LicenseServiceClient
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
     * @param RequestInterface|Type\GetFulfillmentCountRequestType $getFulfillmentCountRequest
     * @return ResultInterface|Type\GetFulfillmentCountResponseType
     * @throws SoapException
     */
    public function getFulfillmentCount(\Flexnet\LicenseService\Type\GetFulfillmentCountRequestType $getFulfillmentCountRequest) : \Flexnet\LicenseService\Type\GetFulfillmentCountResponseType
    {
        return ($this->caller)('getFulfillmentCount', $getFulfillmentCountRequest);
    }

    /**
     * @param RequestInterface|Type\GetFulfillmentsQueryRequestType $getFulfillmentsQueryRequest
     * @return ResultInterface|Type\GetFulfillmentsQueryResponseType
     * @throws SoapException
     */
    public function getFulfillmentsQuery(\Flexnet\LicenseService\Type\GetFulfillmentsQueryRequestType $getFulfillmentsQueryRequest) : \Flexnet\LicenseService\Type\GetFulfillmentsQueryResponseType
    {
        return ($this->caller)('getFulfillmentsQuery', $getFulfillmentsQueryRequest);
    }

    /**
     * @param RequestInterface|Type\GetFulfillmentPropertiesRequestType $getFulfillmentPropertiesRequest
     * @return ResultInterface|Type\GetFulfillmentPropertiesResponseType
     * @throws SoapException
     */
    public function getFulfillmentPropertiesQuery(\Flexnet\LicenseService\Type\GetFulfillmentPropertiesRequestType $getFulfillmentPropertiesRequest) : \Flexnet\LicenseService\Type\GetFulfillmentPropertiesResponseType
    {
        return ($this->caller)('getFulfillmentPropertiesQuery', $getFulfillmentPropertiesRequest);
    }

    /**
     * @param RequestInterface|Type\RehostFulfillmentRequestType $rehostLicenseRequest
     * @return ResultInterface|Type\RehostFulfillmentResponseType
     * @throws SoapException
     */
    public function rehostLicense(\Flexnet\LicenseService\Type\RehostFulfillmentRequestType $rehostLicenseRequest) : \Flexnet\LicenseService\Type\RehostFulfillmentResponseType
    {
        return ($this->caller)('rehostLicense', $rehostLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\ReturnFulfillmentRequestType $returnLicenseRequest
     * @return ResultInterface|Type\ReturnFulfillmentResponseType
     * @throws SoapException
     */
    public function returnLicense(\Flexnet\LicenseService\Type\ReturnFulfillmentRequestType $returnLicenseRequest) : \Flexnet\LicenseService\Type\ReturnFulfillmentResponseType
    {
        return ($this->caller)('returnLicense', $returnLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\RepairFulfillmentRequestType $repairLicenseRequest
     * @return ResultInterface|Type\RepairFulfillmentResponseType
     * @throws SoapException
     */
    public function repairLicense(\Flexnet\LicenseService\Type\RepairFulfillmentRequestType $repairLicenseRequest) : \Flexnet\LicenseService\Type\RepairFulfillmentResponseType
    {
        return ($this->caller)('repairLicense', $repairLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\EmergencyFulfillmentRequestType $emergencyLicenseRequest
     * @return ResultInterface|Type\EmergencyFulfillmentResponseType
     * @throws SoapException
     */
    public function emergencyLicense(\Flexnet\LicenseService\Type\EmergencyFulfillmentRequestType $emergencyLicenseRequest) : \Flexnet\LicenseService\Type\EmergencyFulfillmentResponseType
    {
        return ($this->caller)('emergencyLicense', $emergencyLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\PublisherErrorFulfillmentRequestType $publisherErrorLicenseRequest
     * @return ResultInterface|Type\PublisherErrorFulfillmentResponseType
     * @throws SoapException
     */
    public function publisherErrorLicense(\Flexnet\LicenseService\Type\PublisherErrorFulfillmentRequestType $publisherErrorLicenseRequest) : \Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseType
    {
        return ($this->caller)('publisherErrorLicense', $publisherErrorLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\StopGapFulfillmentRequestType $stopGapLicenseRequest
     * @return ResultInterface|Type\StopGapFulfillmentResponseType
     * @throws SoapException
     */
    public function stopGapLicense(\Flexnet\LicenseService\Type\StopGapFulfillmentRequestType $stopGapLicenseRequest) : \Flexnet\LicenseService\Type\StopGapFulfillmentResponseType
    {
        return ($this->caller)('stopGapLicense', $stopGapLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\GetFulfillmentAttributesRequestType $getFulfillmentAttributesRequest
     * @return ResultInterface|Type\GetFulfillmentAttributesResponseType
     * @throws SoapException
     */
    public function getFulfillmentAttributesFromModel(\Flexnet\LicenseService\Type\GetFulfillmentAttributesRequestType $getFulfillmentAttributesRequest) : \Flexnet\LicenseService\Type\GetFulfillmentAttributesResponseType
    {
        return ($this->caller)('getFulfillmentAttributesFromModel', $getFulfillmentAttributesRequest);
    }

    /**
     * @param RequestInterface|Type\GetHostAttributesRequestType $getHostAttributesRequest
     * @return ResultInterface|Type\GetHostAttributesResponseType
     * @throws SoapException
     */
    public function getHostAttributesFromLicenseTechnology(\Flexnet\LicenseService\Type\GetHostAttributesRequestType $getHostAttributesRequest) : \Flexnet\LicenseService\Type\GetHostAttributesResponseType
    {
        return ($this->caller)('getHostAttributesFromLicenseTechnology', $getHostAttributesRequest);
    }

    /**
     * @param RequestInterface|Type\CreateFulfillmentRequestType $verifyCreateLicenseRequest
     * @return ResultInterface|Type\CreateFulfillmentResponseType
     * @throws SoapException
     */
    public function verifyCreateLicense(\Flexnet\LicenseService\Type\CreateFulfillmentRequestType $verifyCreateLicenseRequest) : \Flexnet\LicenseService\Type\CreateFulfillmentResponseType
    {
        return ($this->caller)('verifyCreateLicense', $verifyCreateLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\CreateFulfillmentRequestType $createLicenseRequest
     * @return ResultInterface|Type\CreateFulfillmentResponseType
     * @throws SoapException
     */
    public function createLicense(\Flexnet\LicenseService\Type\CreateFulfillmentRequestType $createLicenseRequest) : \Flexnet\LicenseService\Type\CreateFulfillmentResponseType
    {
        return ($this->caller)('createLicense', $createLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\ActivateShortCodeRequestType $activateShortCodeRequest
     * @return ResultInterface|Type\ActivateShortCodeResponseType
     * @throws SoapException
     */
    public function activateShortCode(\Flexnet\LicenseService\Type\ActivateShortCodeRequestType $activateShortCodeRequest) : \Flexnet\LicenseService\Type\ActivateShortCodeResponseType
    {
        return ($this->caller)('activateShortCode', $activateShortCodeRequest);
    }

    /**
     * @param RequestInterface|Type\RepairShortCodeRequestType $repairShortCodeRequest
     * @return ResultInterface|Type\RepairShortCodeResponseType
     * @throws SoapException
     */
    public function repairShortCode(\Flexnet\LicenseService\Type\RepairShortCodeRequestType $repairShortCodeRequest) : \Flexnet\LicenseService\Type\RepairShortCodeResponseType
    {
        return ($this->caller)('repairShortCode', $repairShortCodeRequest);
    }

    /**
     * @param RequestInterface|Type\ReturnShortCodeRequestType $returnShortCodeRequest
     * @return ResultInterface|Type\ReturnShortCodeResponseType
     * @throws SoapException
     */
    public function returnShortCode(\Flexnet\LicenseService\Type\ReturnShortCodeRequestType $returnShortCodeRequest) : \Flexnet\LicenseService\Type\ReturnShortCodeResponseType
    {
        return ($this->caller)('returnShortCode', $returnShortCodeRequest);
    }

    /**
     * @param RequestInterface|Type\EmailLicenseRequestType $emailLicenseRequest
     * @return ResultInterface|Type\EmailLicenseResponseType
     * @throws SoapException
     */
    public function emailLicense(\Flexnet\LicenseService\Type\EmailLicenseRequestType $emailLicenseRequest) : \Flexnet\LicenseService\Type\EmailLicenseResponseType
    {
        return ($this->caller)('emailLicense', $emailLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\ConsolidateFulfillmentsRequestType $consolidateFulfillmentsRequest
     * @return ResultInterface|Type\ConsolidateFulfillmentsResponseType
     * @throws SoapException
     */
    public function consolidateFulfillments(\Flexnet\LicenseService\Type\ConsolidateFulfillmentsRequestType $consolidateFulfillmentsRequest) : \Flexnet\LicenseService\Type\ConsolidateFulfillmentsResponseType
    {
        return ($this->caller)('consolidateFulfillments', $consolidateFulfillmentsRequest);
    }

    /**
     * @param RequestInterface|Type\GetConsolidatedFulfillmentCountRequestType $getConsolidatedFulfillmentCountRequest
     * @return ResultInterface|Type\GetConsolidatedFulfillmentCountResponseType
     * @throws SoapException
     */
    public function getConsolidatedFulfillmentCount(\Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountRequestType $getConsolidatedFulfillmentCountRequest) : \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseType
    {
        return ($this->caller)('getConsolidatedFulfillmentCount', $getConsolidatedFulfillmentCountRequest);
    }

    /**
     * @param RequestInterface|Type\GetConsolidatedFulfillmentsQueryRequestType $getConsolidatedFulfillmentsQueryRequest
     * @return ResultInterface|Type\GetConsolidatedFulfillmentsQueryResponseType
     * @throws SoapException
     */
    public function getConsolidatedFulfillmentsQuery(\Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryRequestType $getConsolidatedFulfillmentsQueryRequest) : \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryResponseType
    {
        return ($this->caller)('getConsolidatedFulfillmentsQuery', $getConsolidatedFulfillmentsQueryRequest);
    }

    /**
     * @param RequestInterface|Type\GetFmtAttributesForBatchActivationRequestType $getFmtAttributesForBatchActivationRequest
     * @return ResultInterface|Type\GetFmtAttributesForBatchActivationResponseType
     * @throws SoapException
     */
    public function getFulfillmentAttributesForBatchActivation(\Flexnet\LicenseService\Type\GetFmtAttributesForBatchActivationRequestType $getFmtAttributesForBatchActivationRequest) : \Flexnet\LicenseService\Type\GetFmtAttributesForBatchActivationResponseType
    {
        return ($this->caller)('getFulfillmentAttributesForBatchActivation', $getFmtAttributesForBatchActivationRequest);
    }

    /**
     * @param RequestInterface|Type\CreateLicensesAsBatchRequestType $createLicensesAsBatchRequest
     * @return ResultInterface|Type\CreateLicensesAsBatchResponseType
     * @throws SoapException
     */
    public function createLicensesAsBatch(\Flexnet\LicenseService\Type\CreateLicensesAsBatchRequestType $createLicensesAsBatchRequest) : \Flexnet\LicenseService\Type\CreateLicensesAsBatchResponseType
    {
        return ($this->caller)('createLicensesAsBatch', $createLicensesAsBatchRequest);
    }

    /**
     * @param RequestInterface|Type\CreateLicensesAsBatchRequestType $createLicensesAsBatchAndConsolidateRequest
     * @return ResultInterface|Type\ConsolidateFulfillmentsResponseType
     * @throws SoapException
     */
    public function createLicensesAsBatchAndConsolidate(\Flexnet\LicenseService\Type\CreateLicensesAsBatchRequestType $createLicensesAsBatchAndConsolidateRequest) : \Flexnet\LicenseService\Type\ConsolidateFulfillmentsResponseType
    {
        return ($this->caller)('createLicensesAsBatchAndConsolidate', $createLicensesAsBatchAndConsolidateRequest);
    }

    /**
     * @param RequestInterface|Type\EmailConsolidatedLicensesRequestType $emailConsolidatedLicensesRequest
     * @return ResultInterface|Type\EmailConsolidatedLicensesResponseType
     * @throws SoapException
     */
    public function emailConsolidatedLicenses(\Flexnet\LicenseService\Type\EmailConsolidatedLicensesRequestType $emailConsolidatedLicensesRequest) : \Flexnet\LicenseService\Type\EmailConsolidatedLicensesResponseType
    {
        return ($this->caller)('emailConsolidatedLicenses', $emailConsolidatedLicensesRequest);
    }

    /**
     * @param RequestInterface|Type\TrustedRequestType $manualActivationRequest
     * @return ResultInterface|Type\TrustedResponseType
     * @throws SoapException
     */
    public function manualActivation(\Flexnet\LicenseService\Type\TrustedRequestType $manualActivationRequest) : \Flexnet\LicenseService\Type\TrustedResponseType
    {
        return ($this->caller)('manualActivation', $manualActivationRequest);
    }

    /**
     * @param RequestInterface|Type\TrustedRequestType $manualRepairRequest
     * @return ResultInterface|Type\TrustedResponseType
     * @throws SoapException
     */
    public function manualRepair(\Flexnet\LicenseService\Type\TrustedRequestType $manualRepairRequest) : \Flexnet\LicenseService\Type\TrustedResponseType
    {
        return ($this->caller)('manualRepair', $manualRepairRequest);
    }

    /**
     * @param RequestInterface|Type\TrustedRequestType $manualReturnRequest
     * @return ResultInterface|Type\TrustedResponseType
     * @throws SoapException
     */
    public function manualReturn(\Flexnet\LicenseService\Type\TrustedRequestType $manualReturnRequest) : \Flexnet\LicenseService\Type\TrustedResponseType
    {
        return ($this->caller)('manualReturn', $manualReturnRequest);
    }

    /**
     * @param RequestInterface|Type\GetFulfillmentHistoryRequestType $getFulfillmentHistoryRequest
     * @return ResultInterface|Type\GetFulfillmentHistoryResponseType
     * @throws SoapException
     */
    public function getFulfillmentHistory(\Flexnet\LicenseService\Type\GetFulfillmentHistoryRequestType $getFulfillmentHistoryRequest) : \Flexnet\LicenseService\Type\GetFulfillmentHistoryResponseType
    {
        return ($this->caller)('getFulfillmentHistory', $getFulfillmentHistoryRequest);
    }

    /**
     * @param RequestInterface|Type\CreateChildLineItemFulfillmentRequestType $createChildLineItemFulfillmentRequest
     * @return ResultInterface|Type\CreateChildLineItemFulfillmentResponseType
     * @throws SoapException
     */
    public function createChildLineItemFulfillment(\Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentRequestType $createChildLineItemFulfillmentRequest) : \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentResponseType
    {
        return ($this->caller)('createChildLineItemFulfillment', $createChildLineItemFulfillmentRequest);
    }

    /**
     * @param RequestInterface|Type\AdvancedFulfillmentLCRequestType $upgradeFulfillmentRequest
     * @return ResultInterface|Type\AdvancedFulfillmentLCResponseType
     * @throws SoapException
     */
    public function upgradeFulfillment(\Flexnet\LicenseService\Type\AdvancedFulfillmentLCRequestType $upgradeFulfillmentRequest) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCResponseType
    {
        return ($this->caller)('upgradeFulfillment', $upgradeFulfillmentRequest);
    }

    /**
     * @param RequestInterface|Type\AdvancedFulfillmentLCRequestType $upsellFulfillmentRequest
     * @return ResultInterface|Type\AdvancedFulfillmentLCResponseType
     * @throws SoapException
     */
    public function upsellFulfillment(\Flexnet\LicenseService\Type\AdvancedFulfillmentLCRequestType $upsellFulfillmentRequest) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCResponseType
    {
        return ($this->caller)('upsellFulfillment', $upsellFulfillmentRequest);
    }

    /**
     * @param RequestInterface|Type\AdvancedFulfillmentLCRequestType $renewFulfillmentRequest
     * @return ResultInterface|Type\AdvancedFulfillmentLCResponseType
     * @throws SoapException
     */
    public function renewFulfillment(\Flexnet\LicenseService\Type\AdvancedFulfillmentLCRequestType $renewFulfillmentRequest) : \Flexnet\LicenseService\Type\AdvancedFulfillmentLCResponseType
    {
        return ($this->caller)('renewFulfillment', $renewFulfillmentRequest);
    }

    /**
     * @param RequestInterface|Type\SetLicenseRequestType $setLicenseRequest
     * @return ResultInterface|Type\SetLicenseResponseType
     * @throws SoapException
     */
    public function setLicense(\Flexnet\LicenseService\Type\SetLicenseRequestType $setLicenseRequest) : \Flexnet\LicenseService\Type\SetLicenseResponseType
    {
        return ($this->caller)('setLicense', $setLicenseRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteOnholdFulfillmentsRequestType $deleteOnholdFulfillmentsRequest
     * @return ResultInterface|Type\DeleteOnholdFulfillmentsResponseType
     * @throws SoapException
     */
    public function deleteOnholdFulfillments(\Flexnet\LicenseService\Type\DeleteOnholdFulfillmentsRequestType $deleteOnholdFulfillmentsRequest) : \Flexnet\LicenseService\Type\DeleteOnholdFulfillmentsResponseType
    {
        return ($this->caller)('deleteOnholdFulfillments', $deleteOnholdFulfillmentsRequest);
    }

    /**
     * @param RequestInterface|Type\ActivateLicensesRequestType $activateLicensesRequest
     * @return ResultInterface|Type\ActivateLicensesResponseType
     * @throws SoapException
     */
    public function offlineFNPTrustedStorageActivation(\Flexnet\LicenseService\Type\ActivateLicensesRequestType $activateLicensesRequest) : \Flexnet\LicenseService\Type\ActivateLicensesResponseType
    {
        return ($this->caller)('offlineFNPTrustedStorageActivation', $activateLicensesRequest);
    }

    /**
     * @param RequestInterface|Type\TransferHostRequestType $transferHostRequest
     * @return ResultInterface|Type\TransferHostResponseType
     * @throws SoapException
     */
    public function transferHost(\Flexnet\LicenseService\Type\TransferHostRequestType $transferHostRequest) : \Flexnet\LicenseService\Type\TransferHostResponseType
    {
        return ($this->caller)('transferHost', $transferHostRequest);
    }
}

