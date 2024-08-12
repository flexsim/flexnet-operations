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

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param  RequestInterface & Type\GetFulfillmentCountRequestType  $getFulfillmentCountRequest
     * @return ResultInterface & Type\GetFulfillmentCountResponseType
     *
     * @throws SoapException
     */
    public function getFulfillmentCount(\Flexnet\LicenseService\Type\GetFulfillmentCountRequestType $getFulfillmentCountRequest): \Flexnet\LicenseService\Type\GetFulfillmentCountResponseType
    {
        $response = ($this->caller)('getFulfillmentCount', $getFulfillmentCountRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\GetFulfillmentCountResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetFulfillmentsQueryRequestType  $getFulfillmentsQueryRequest
     * @return ResultInterface & Type\GetFulfillmentsQueryResponseType
     *
     * @throws SoapException
     */
    public function getFulfillmentsQuery(\Flexnet\LicenseService\Type\GetFulfillmentsQueryRequestType $getFulfillmentsQueryRequest): \Flexnet\LicenseService\Type\GetFulfillmentsQueryResponseType
    {
        $response = ($this->caller)('getFulfillmentsQuery', $getFulfillmentsQueryRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\GetFulfillmentsQueryResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetFulfillmentPropertiesRequestType  $getFulfillmentPropertiesRequest
     * @return ResultInterface & Type\GetFulfillmentPropertiesResponseType
     *
     * @throws SoapException
     */
    public function getFulfillmentPropertiesQuery(\Flexnet\LicenseService\Type\GetFulfillmentPropertiesRequestType $getFulfillmentPropertiesRequest): \Flexnet\LicenseService\Type\GetFulfillmentPropertiesResponseType
    {
        $response = ($this->caller)('getFulfillmentPropertiesQuery', $getFulfillmentPropertiesRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\GetFulfillmentPropertiesResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\RehostFulfillmentRequestType  $rehostLicenseRequest
     * @return ResultInterface & Type\RehostFulfillmentResponseType
     *
     * @throws SoapException
     */
    public function rehostLicense(\Flexnet\LicenseService\Type\RehostFulfillmentRequestType $rehostLicenseRequest): \Flexnet\LicenseService\Type\RehostFulfillmentResponseType
    {
        $response = ($this->caller)('rehostLicense', $rehostLicenseRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\RehostFulfillmentResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\ReturnFulfillmentRequestType  $returnLicenseRequest
     * @return ResultInterface & Type\ReturnFulfillmentResponseType
     *
     * @throws SoapException
     */
    public function returnLicense(\Flexnet\LicenseService\Type\ReturnFulfillmentRequestType $returnLicenseRequest): \Flexnet\LicenseService\Type\ReturnFulfillmentResponseType
    {
        $response = ($this->caller)('returnLicense', $returnLicenseRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\ReturnFulfillmentResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\RepairFulfillmentRequestType  $repairLicenseRequest
     * @return ResultInterface & Type\RepairFulfillmentResponseType
     *
     * @throws SoapException
     */
    public function repairLicense(\Flexnet\LicenseService\Type\RepairFulfillmentRequestType $repairLicenseRequest): \Flexnet\LicenseService\Type\RepairFulfillmentResponseType
    {
        $response = ($this->caller)('repairLicense', $repairLicenseRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\RepairFulfillmentResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\EmergencyFulfillmentRequestType  $emergencyLicenseRequest
     * @return ResultInterface & Type\EmergencyFulfillmentResponseType
     *
     * @throws SoapException
     */
    public function emergencyLicense(\Flexnet\LicenseService\Type\EmergencyFulfillmentRequestType $emergencyLicenseRequest): \Flexnet\LicenseService\Type\EmergencyFulfillmentResponseType
    {
        $response = ($this->caller)('emergencyLicense', $emergencyLicenseRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\EmergencyFulfillmentResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\PublisherErrorFulfillmentRequestType  $publisherErrorLicenseRequest
     * @return ResultInterface & Type\PublisherErrorFulfillmentResponseType
     *
     * @throws SoapException
     */
    public function publisherErrorLicense(\Flexnet\LicenseService\Type\PublisherErrorFulfillmentRequestType $publisherErrorLicenseRequest): \Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseType
    {
        $response = ($this->caller)('publisherErrorLicense', $publisherErrorLicenseRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\PublisherErrorFulfillmentResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\StopGapFulfillmentRequestType  $stopGapLicenseRequest
     * @return ResultInterface & Type\StopGapFulfillmentResponseType
     *
     * @throws SoapException
     */
    public function stopGapLicense(\Flexnet\LicenseService\Type\StopGapFulfillmentRequestType $stopGapLicenseRequest): \Flexnet\LicenseService\Type\StopGapFulfillmentResponseType
    {
        $response = ($this->caller)('stopGapLicense', $stopGapLicenseRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\StopGapFulfillmentResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetFulfillmentAttributesRequestType  $getFulfillmentAttributesRequest
     * @return ResultInterface & Type\GetFulfillmentAttributesResponseType
     *
     * @throws SoapException
     */
    public function getFulfillmentAttributesFromModel(\Flexnet\LicenseService\Type\GetFulfillmentAttributesRequestType $getFulfillmentAttributesRequest): \Flexnet\LicenseService\Type\GetFulfillmentAttributesResponseType
    {
        $response = ($this->caller)('getFulfillmentAttributesFromModel', $getFulfillmentAttributesRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\GetFulfillmentAttributesResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetHostAttributesRequestType  $getHostAttributesRequest
     * @return ResultInterface & Type\GetHostAttributesResponseType
     *
     * @throws SoapException
     */
    public function getHostAttributesFromLicenseTechnology(\Flexnet\LicenseService\Type\GetHostAttributesRequestType $getHostAttributesRequest): \Flexnet\LicenseService\Type\GetHostAttributesResponseType
    {
        $response = ($this->caller)('getHostAttributesFromLicenseTechnology', $getHostAttributesRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\GetHostAttributesResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\CreateFulfillmentRequestType  $verifyCreateLicenseRequest
     * @return ResultInterface & Type\CreateFulfillmentResponseType
     *
     * @throws SoapException
     */
    public function verifyCreateLicense(\Flexnet\LicenseService\Type\CreateFulfillmentRequestType $verifyCreateLicenseRequest): \Flexnet\LicenseService\Type\CreateFulfillmentResponseType
    {
        $response = ($this->caller)('verifyCreateLicense', $verifyCreateLicenseRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\CreateFulfillmentResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\CreateFulfillmentRequestType  $createLicenseRequest
     * @return ResultInterface & Type\CreateFulfillmentResponseType
     *
     * @throws SoapException
     */
    public function createLicense(\Flexnet\LicenseService\Type\CreateFulfillmentRequestType $createLicenseRequest): \Flexnet\LicenseService\Type\CreateFulfillmentResponseType
    {
        $response = ($this->caller)('createLicense', $createLicenseRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\CreateFulfillmentResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\ActivateShortCodeRequestType  $activateShortCodeRequest
     * @return ResultInterface & Type\ActivateShortCodeResponseType
     *
     * @throws SoapException
     */
    public function activateShortCode(\Flexnet\LicenseService\Type\ActivateShortCodeRequestType $activateShortCodeRequest): \Flexnet\LicenseService\Type\ActivateShortCodeResponseType
    {
        $response = ($this->caller)('activateShortCode', $activateShortCodeRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\ActivateShortCodeResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\RepairShortCodeRequestType  $repairShortCodeRequest
     * @return ResultInterface & Type\RepairShortCodeResponseType
     *
     * @throws SoapException
     */
    public function repairShortCode(\Flexnet\LicenseService\Type\RepairShortCodeRequestType $repairShortCodeRequest): \Flexnet\LicenseService\Type\RepairShortCodeResponseType
    {
        $response = ($this->caller)('repairShortCode', $repairShortCodeRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\RepairShortCodeResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\ReturnShortCodeRequestType  $returnShortCodeRequest
     * @return ResultInterface & Type\ReturnShortCodeResponseType
     *
     * @throws SoapException
     */
    public function returnShortCode(\Flexnet\LicenseService\Type\ReturnShortCodeRequestType $returnShortCodeRequest): \Flexnet\LicenseService\Type\ReturnShortCodeResponseType
    {
        $response = ($this->caller)('returnShortCode', $returnShortCodeRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\ReturnShortCodeResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\EmailLicenseRequestType  $emailLicenseRequest
     * @return ResultInterface & Type\EmailLicenseResponseType
     *
     * @throws SoapException
     */
    public function emailLicense(\Flexnet\LicenseService\Type\EmailLicenseRequestType $emailLicenseRequest): \Flexnet\LicenseService\Type\EmailLicenseResponseType
    {
        $response = ($this->caller)('emailLicense', $emailLicenseRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\EmailLicenseResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\ConsolidateFulfillmentsRequestType  $consolidateFulfillmentsRequest
     * @return ResultInterface & Type\ConsolidateFulfillmentsResponseType
     *
     * @throws SoapException
     */
    public function consolidateFulfillments(\Flexnet\LicenseService\Type\ConsolidateFulfillmentsRequestType $consolidateFulfillmentsRequest): \Flexnet\LicenseService\Type\ConsolidateFulfillmentsResponseType
    {
        $response = ($this->caller)('consolidateFulfillments', $consolidateFulfillmentsRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\ConsolidateFulfillmentsResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetConsolidatedFulfillmentCountRequestType  $getConsolidatedFulfillmentCountRequest
     * @return ResultInterface & Type\GetConsolidatedFulfillmentCountResponseType
     *
     * @throws SoapException
     */
    public function getConsolidatedFulfillmentCount(\Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountRequestType $getConsolidatedFulfillmentCountRequest): \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseType
    {
        $response = ($this->caller)('getConsolidatedFulfillmentCount', $getConsolidatedFulfillmentCountRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\GetConsolidatedFulfillmentCountResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetConsolidatedFulfillmentsQueryRequestType  $getConsolidatedFulfillmentsQueryRequest
     * @return ResultInterface & Type\GetConsolidatedFulfillmentsQueryResponseType
     *
     * @throws SoapException
     */
    public function getConsolidatedFulfillmentsQuery(\Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryRequestType $getConsolidatedFulfillmentsQueryRequest): \Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryResponseType
    {
        $response = ($this->caller)('getConsolidatedFulfillmentsQuery', $getConsolidatedFulfillmentsQueryRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\GetConsolidatedFulfillmentsQueryResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetFmtAttributesForBatchActivationRequestType  $getFmtAttributesForBatchActivationRequest
     * @return ResultInterface & Type\GetFmtAttributesForBatchActivationResponseType
     *
     * @throws SoapException
     */
    public function getFulfillmentAttributesForBatchActivation(\Flexnet\LicenseService\Type\GetFmtAttributesForBatchActivationRequestType $getFmtAttributesForBatchActivationRequest): \Flexnet\LicenseService\Type\GetFmtAttributesForBatchActivationResponseType
    {
        $response = ($this->caller)('getFulfillmentAttributesForBatchActivation', $getFmtAttributesForBatchActivationRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\GetFmtAttributesForBatchActivationResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\CreateLicensesAsBatchRequestType  $createLicensesAsBatchRequest
     * @return ResultInterface & Type\CreateLicensesAsBatchResponseType
     *
     * @throws SoapException
     */
    public function createLicensesAsBatch(\Flexnet\LicenseService\Type\CreateLicensesAsBatchRequestType $createLicensesAsBatchRequest): \Flexnet\LicenseService\Type\CreateLicensesAsBatchResponseType
    {
        $response = ($this->caller)('createLicensesAsBatch', $createLicensesAsBatchRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\CreateLicensesAsBatchResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\CreateLicensesAsBatchRequestType  $createLicensesAsBatchAndConsolidateRequest
     * @return ResultInterface & Type\ConsolidateFulfillmentsResponseType
     *
     * @throws SoapException
     */
    public function createLicensesAsBatchAndConsolidate(\Flexnet\LicenseService\Type\CreateLicensesAsBatchRequestType $createLicensesAsBatchAndConsolidateRequest): \Flexnet\LicenseService\Type\ConsolidateFulfillmentsResponseType
    {
        $response = ($this->caller)('createLicensesAsBatchAndConsolidate', $createLicensesAsBatchAndConsolidateRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\ConsolidateFulfillmentsResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\EmailConsolidatedLicensesRequestType  $emailConsolidatedLicensesRequest
     * @return ResultInterface & Type\EmailConsolidatedLicensesResponseType
     *
     * @throws SoapException
     */
    public function emailConsolidatedLicenses(\Flexnet\LicenseService\Type\EmailConsolidatedLicensesRequestType $emailConsolidatedLicensesRequest): \Flexnet\LicenseService\Type\EmailConsolidatedLicensesResponseType
    {
        $response = ($this->caller)('emailConsolidatedLicenses', $emailConsolidatedLicensesRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\EmailConsolidatedLicensesResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\TrustedRequestType  $manualActivationRequest
     * @return ResultInterface & Type\TrustedResponseType
     *
     * @throws SoapException
     */
    public function manualActivation(\Flexnet\LicenseService\Type\TrustedRequestType $manualActivationRequest): \Flexnet\LicenseService\Type\TrustedResponseType
    {
        $response = ($this->caller)('manualActivation', $manualActivationRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\TrustedResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\TrustedRequestType  $manualRepairRequest
     * @return ResultInterface & Type\TrustedResponseType
     *
     * @throws SoapException
     */
    public function manualRepair(\Flexnet\LicenseService\Type\TrustedRequestType $manualRepairRequest): \Flexnet\LicenseService\Type\TrustedResponseType
    {
        $response = ($this->caller)('manualRepair', $manualRepairRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\TrustedResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\TrustedRequestType  $manualReturnRequest
     * @return ResultInterface & Type\TrustedResponseType
     *
     * @throws SoapException
     */
    public function manualReturn(\Flexnet\LicenseService\Type\TrustedRequestType $manualReturnRequest): \Flexnet\LicenseService\Type\TrustedResponseType
    {
        $response = ($this->caller)('manualReturn', $manualReturnRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\TrustedResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetFulfillmentHistoryRequestType  $getFulfillmentHistoryRequest
     * @return ResultInterface & Type\GetFulfillmentHistoryResponseType
     *
     * @throws SoapException
     */
    public function getFulfillmentHistory(\Flexnet\LicenseService\Type\GetFulfillmentHistoryRequestType $getFulfillmentHistoryRequest): \Flexnet\LicenseService\Type\GetFulfillmentHistoryResponseType
    {
        $response = ($this->caller)('getFulfillmentHistory', $getFulfillmentHistoryRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\GetFulfillmentHistoryResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\CreateChildLineItemFulfillmentRequestType  $createChildLineItemFulfillmentRequest
     * @return ResultInterface & Type\CreateChildLineItemFulfillmentResponseType
     *
     * @throws SoapException
     */
    public function createChildLineItemFulfillment(\Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentRequestType $createChildLineItemFulfillmentRequest): \Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentResponseType
    {
        $response = ($this->caller)('createChildLineItemFulfillment', $createChildLineItemFulfillmentRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\CreateChildLineItemFulfillmentResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\AdvancedFulfillmentLCRequestType  $upgradeFulfillmentRequest
     * @return ResultInterface & Type\AdvancedFulfillmentLCResponseType
     *
     * @throws SoapException
     */
    public function upgradeFulfillment(\Flexnet\LicenseService\Type\AdvancedFulfillmentLCRequestType $upgradeFulfillmentRequest): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCResponseType
    {
        $response = ($this->caller)('upgradeFulfillment', $upgradeFulfillmentRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\AdvancedFulfillmentLCResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\AdvancedFulfillmentLCRequestType  $upsellFulfillmentRequest
     * @return ResultInterface & Type\AdvancedFulfillmentLCResponseType
     *
     * @throws SoapException
     */
    public function upsellFulfillment(\Flexnet\LicenseService\Type\AdvancedFulfillmentLCRequestType $upsellFulfillmentRequest): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCResponseType
    {
        $response = ($this->caller)('upsellFulfillment', $upsellFulfillmentRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\AdvancedFulfillmentLCResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\AdvancedFulfillmentLCRequestType  $renewFulfillmentRequest
     * @return ResultInterface & Type\AdvancedFulfillmentLCResponseType
     *
     * @throws SoapException
     */
    public function renewFulfillment(\Flexnet\LicenseService\Type\AdvancedFulfillmentLCRequestType $renewFulfillmentRequest): \Flexnet\LicenseService\Type\AdvancedFulfillmentLCResponseType
    {
        $response = ($this->caller)('renewFulfillment', $renewFulfillmentRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\AdvancedFulfillmentLCResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\SetLicenseRequestType  $setLicenseRequest
     * @return ResultInterface & Type\SetLicenseResponseType
     *
     * @throws SoapException
     */
    public function setLicense(\Flexnet\LicenseService\Type\SetLicenseRequestType $setLicenseRequest): \Flexnet\LicenseService\Type\SetLicenseResponseType
    {
        $response = ($this->caller)('setLicense', $setLicenseRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\SetLicenseResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\DeleteOnholdFulfillmentsRequestType  $deleteOnholdFulfillmentsRequest
     * @return ResultInterface & Type\DeleteOnholdFulfillmentsResponseType
     *
     * @throws SoapException
     */
    public function deleteOnholdFulfillments(\Flexnet\LicenseService\Type\DeleteOnholdFulfillmentsRequestType $deleteOnholdFulfillmentsRequest): \Flexnet\LicenseService\Type\DeleteOnholdFulfillmentsResponseType
    {
        $response = ($this->caller)('deleteOnholdFulfillments', $deleteOnholdFulfillmentsRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\DeleteOnholdFulfillmentsResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\ActivateLicensesRequestType  $activateLicensesRequest
     * @return ResultInterface & Type\ActivateLicensesResponseType
     *
     * @throws SoapException
     */
    public function offlineFNPTrustedStorageActivation(\Flexnet\LicenseService\Type\ActivateLicensesRequestType $activateLicensesRequest): \Flexnet\LicenseService\Type\ActivateLicensesResponseType
    {
        $response = ($this->caller)('offlineFNPTrustedStorageActivation', $activateLicensesRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\ActivateLicensesResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\TransferHostRequestType  $transferHostRequest
     * @return ResultInterface & Type\TransferHostResponseType
     *
     * @throws SoapException
     */
    public function transferHost(\Flexnet\LicenseService\Type\TransferHostRequestType $transferHostRequest): \Flexnet\LicenseService\Type\TransferHostResponseType
    {
        $response = ($this->caller)('transferHost', $transferHostRequest);

        \Psl\Type\instance_of(\Flexnet\LicenseService\Type\TransferHostResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}
