<?php

namespace Flexnet\ProductPackagingService;

use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ProductPackagingServiceClient
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
     * @param  RequestInterface|Type\CreateFeatureRequestType  $createFeatureRequest
     * @return ResultInterface|Type\CreateFeatureResponseType
     *
     * @throws SoapException
     */
    public function createFeature(Type\CreateFeatureRequestType $createFeatureRequest): Type\CreateFeatureResponseType
    {
        return ($this->caller)('createFeature', $createFeatureRequest);
    }

    /**
     * @param  RequestInterface|Type\UpdateFeatureRequestType  $updateFeatureRequest
     * @return ResultInterface|Type\UpdateFeatureResponseType
     *
     * @throws SoapException
     */
    public function updateFeature(Type\UpdateFeatureRequestType $updateFeatureRequest): Type\UpdateFeatureResponseType
    {
        return ($this->caller)('updateFeature', $updateFeatureRequest);
    }

    /**
     * @param  RequestInterface|Type\DeleteFeatureRequestType  $deleteFeatureRequest
     * @return ResultInterface|Type\DeleteFeatureResponseType
     *
     * @throws SoapException
     */
    public function deleteFeature(Type\DeleteFeatureRequestType $deleteFeatureRequest): Type\DeleteFeatureResponseType
    {
        return ($this->caller)('deleteFeature', $deleteFeatureRequest);
    }

    /**
     * @param  RequestInterface|Type\GetFeatureCountRequestType  $getFeatureCountRequest
     * @return ResultInterface|Type\GetFeatureCountResponseType
     *
     * @throws SoapException
     */
    public function getFeatureCount(Type\GetFeatureCountRequestType $getFeatureCountRequest): Type\GetFeatureCountResponseType
    {
        return ($this->caller)('getFeatureCount', $getFeatureCountRequest);
    }

    /**
     * @param  RequestInterface|Type\GetFeaturesQueryRequestType  $getFeaturesQueryRequest
     * @return ResultInterface|Type\GetFeaturesQueryResponseType
     *
     * @throws SoapException
     */
    public function getFeaturesQuery(Type\GetFeaturesQueryRequestType $getFeaturesQueryRequest): Type\GetFeaturesQueryResponseType
    {
        return ($this->caller)('getFeaturesQuery', $getFeaturesQueryRequest);
    }

    /**
     * @param  RequestInterface|Type\SetFeatureStateRequestType  $setFeatureStateRequest
     * @return ResultInterface|Type\SetFeatureStateResponseType
     *
     * @throws SoapException
     */
    public function setFeatureState(Type\SetFeatureStateRequestType $setFeatureStateRequest): Type\SetFeatureStateResponseType
    {
        return ($this->caller)('setFeatureState', $setFeatureStateRequest);
    }

    /**
     * @param  RequestInterface|Type\CreateFeatureBundleRequestType  $createFeatureBundleRequest
     * @return ResultInterface|Type\CreateFeatureBundleResponseType
     *
     * @throws SoapException
     */
    public function createFeatureBundle(Type\CreateFeatureBundleRequestType $createFeatureBundleRequest): Type\CreateFeatureBundleResponseType
    {
        return ($this->caller)('createFeatureBundle', $createFeatureBundleRequest);
    }

    /**
     * @param  RequestInterface|Type\UpdateFeatureBundleRequestType  $updateFeatureBundleRequest
     * @return ResultInterface|Type\UpdateFeatureBundleResponseType
     *
     * @throws SoapException
     */
    public function updateFeatureBundle(Type\UpdateFeatureBundleRequestType $updateFeatureBundleRequest): Type\UpdateFeatureBundleResponseType
    {
        return ($this->caller)('updateFeatureBundle', $updateFeatureBundleRequest);
    }

    /**
     * @param  RequestInterface|Type\DeleteFeatureBundleRequestType  $deleteFeatureBundleRequest
     * @return ResultInterface|Type\DeleteFeatureBundleResponseType
     *
     * @throws SoapException
     */
    public function deleteFeatureBundle(Type\DeleteFeatureBundleRequestType $deleteFeatureBundleRequest): Type\DeleteFeatureBundleResponseType
    {
        return ($this->caller)('deleteFeatureBundle', $deleteFeatureBundleRequest);
    }

    /**
     * @param  RequestInterface|Type\GetFeatureBundleCountRequestType  $getFeatureBundleCountRequest
     * @return ResultInterface|Type\GetFeatureBundleCountResponseType
     *
     * @throws SoapException
     */
    public function getFeatureBundleCount(Type\GetFeatureBundleCountRequestType $getFeatureBundleCountRequest): Type\GetFeatureBundleCountResponseType
    {
        return ($this->caller)('getFeatureBundleCount', $getFeatureBundleCountRequest);
    }

    /**
     * @param  RequestInterface|Type\GetFeatureBundlesQueryRequestType  $getFeatureBundlesQueryRequest
     * @return ResultInterface|Type\GetFeatureBundlesQueryResponseType
     *
     * @throws SoapException
     */
    public function getFeatureBundlesQuery(Type\GetFeatureBundlesQueryRequestType $getFeatureBundlesQueryRequest): Type\GetFeatureBundlesQueryResponseType
    {
        return ($this->caller)('getFeatureBundlesQuery', $getFeatureBundlesQueryRequest);
    }

    /**
     * @param  RequestInterface|Type\SetFeatureBundleStateRequestType  $setFeatureBundleStateRequest
     * @return ResultInterface|Type\SetFeatureBundleStateResponseType
     *
     * @throws SoapException
     */
    public function setFeatureBundleState(Type\SetFeatureBundleStateRequestType $setFeatureBundleStateRequest): Type\SetFeatureBundleStateResponseType
    {
        return ($this->caller)('setFeatureBundleState', $setFeatureBundleStateRequest);
    }

    /**
     * @param  RequestInterface|Type\CreateProductRequestType  $createProductRequest
     * @return ResultInterface|Type\CreateProductResponseType
     *
     * @throws SoapException
     */
    public function createProduct(Type\CreateProductRequestType $createProductRequest): Type\CreateProductResponseType
    {
        return ($this->caller)('createProduct', $createProductRequest);
    }

    /**
     * @param  RequestInterface|Type\UpdateProductRequestType  $updateProductRequest
     * @return ResultInterface|Type\UpdateProductResponseType
     *
     * @throws SoapException
     */
    public function updateProduct(Type\UpdateProductRequestType $updateProductRequest): Type\UpdateProductResponseType
    {
        return ($this->caller)('updateProduct', $updateProductRequest);
    }

    /**
     * @param  RequestInterface|Type\DeleteProductRequestType  $deleteProductRequest
     * @return ResultInterface|Type\DeleteProductResponseType
     *
     * @throws SoapException
     */
    public function deleteProduct(Type\DeleteProductRequestType $deleteProductRequest): Type\DeleteProductResponseType
    {
        return ($this->caller)('deleteProduct', $deleteProductRequest);
    }

    /**
     * @param  RequestInterface|Type\GetProductCountRequestType  $getProductCountRequest
     * @return ResultInterface|Type\GetProductCountResponseType
     *
     * @throws SoapException
     */
    public function getProductCount(Type\GetProductCountRequestType $getProductCountRequest): Type\GetProductCountResponseType
    {
        return ($this->caller)('getProductCount', $getProductCountRequest);
    }

    /**
     * @param  RequestInterface|Type\GetProductsQueryRequestType  $getProductsQueryRequest
     * @return ResultInterface|Type\GetProductsQueryResponseType
     *
     * @throws SoapException
     */
    public function getProductsQuery(Type\GetProductsQueryRequestType $getProductsQueryRequest): Type\GetProductsQueryResponseType
    {
        return ($this->caller)('getProductsQuery', $getProductsQueryRequest);
    }

    /**
     * @param  RequestInterface|Type\CreateProductCategoryRequestType  $createProductCategoryRequest
     * @return ResultInterface|Type\CreateProductCategoryResponseType
     *
     * @throws SoapException
     */
    public function createProductCategory(Type\CreateProductCategoryRequestType $createProductCategoryRequest): Type\CreateProductCategoryResponseType
    {
        return ($this->caller)('createProductCategory', $createProductCategoryRequest);
    }

    /**
     * @param  RequestInterface|Type\GetProductCategoriesRequestType  $getProductCategoriesRequest
     * @return ResultInterface|Type\GetProductCategoriesResponseType
     *
     * @throws SoapException
     */
    public function getProductCategories(Type\GetProductCategoriesRequestType $getProductCategoriesRequest): Type\GetProductCategoriesResponseType
    {
        return ($this->caller)('getProductCategories', $getProductCategoriesRequest);
    }

    /**
     * @param  RequestInterface|Type\HandleProductCategoriesToUserRequestType  $assignProductCategoriesToUserRequest
     * @return ResultInterface|Type\HandleProductCategoriesToUserResponseType
     *
     * @throws SoapException
     */
    public function assignProductCategoriesToUser(Type\HandleProductCategoriesToUserRequestType $assignProductCategoriesToUserRequest): Type\HandleProductCategoriesToUserResponseType
    {
        return ($this->caller)('assignProductCategoriesToUser', $assignProductCategoriesToUserRequest);
    }

    /**
     * @param  RequestInterface|Type\HandleProductCategoriesToUserRequestType  $removeProductCategoriesFromUserRequest
     * @return ResultInterface|Type\HandleProductCategoriesToUserResponseType
     *
     * @throws SoapException
     */
    public function removeProductCategoriesFromUser(Type\HandleProductCategoriesToUserRequestType $removeProductCategoriesFromUserRequest): Type\HandleProductCategoriesToUserResponseType
    {
        return ($this->caller)('removeProductCategoriesFromUser', $removeProductCategoriesFromUserRequest);
    }

    /**
     * @param  RequestInterface|Type\GetUsersForProductCategoryRequestType  $getUsersForProductCategoryRequest
     * @return ResultInterface|Type\GetUsersForProductCategoryResponseType
     *
     * @throws SoapException
     */
    public function getUsersForProductCategory(Type\GetUsersForProductCategoryRequestType $getUsersForProductCategoryRequest): Type\GetUsersForProductCategoryResponseType
    {
        return ($this->caller)('getUsersForProductCategory', $getUsersForProductCategoryRequest);
    }

    /**
     * @param  RequestInterface|Type\HandleProductCategoryToAcctRequestType  $assignProductCategoriesToAcctRequest
     * @return ResultInterface|Type\HandleProductCategoryToAcctResponseType
     *
     * @throws SoapException
     */
    public function assignProductCategoriesToAcct(Type\HandleProductCategoryToAcctRequestType $assignProductCategoriesToAcctRequest): Type\HandleProductCategoryToAcctResponseType
    {
        return ($this->caller)('assignProductCategoriesToAcct', $assignProductCategoriesToAcctRequest);
    }

    /**
     * @param  RequestInterface|Type\HandleProductCategoryToAcctRequestType  $removeProductCategoriesFromAcctRequest
     * @return ResultInterface|Type\HandleProductCategoryToAcctResponseType
     *
     * @throws SoapException
     */
    public function removeProductCategoriesFromAcct(Type\HandleProductCategoryToAcctRequestType $removeProductCategoriesFromAcctRequest): Type\HandleProductCategoryToAcctResponseType
    {
        return ($this->caller)('removeProductCategoriesFromAcct', $removeProductCategoriesFromAcctRequest);
    }

    /**
     * @param  RequestInterface|Type\SetProductStateRequestType  $setProductStateRequest
     * @return ResultInterface|Type\SetProductStateResponseType
     *
     * @throws SoapException
     */
    public function setProductState(Type\SetProductStateRequestType $setProductStateRequest): Type\SetProductStateResponseType
    {
        return ($this->caller)('setProductState', $setProductStateRequest);
    }

    /**
     * @param  RequestInterface|Type\CreateMaintenanceRequestType  $createMaintenanceRequest
     * @return ResultInterface|Type\CreateMaintenanceResponseType
     *
     * @throws SoapException
     */
    public function createMaintenance(Type\CreateMaintenanceRequestType $createMaintenanceRequest): Type\CreateMaintenanceResponseType
    {
        return ($this->caller)('createMaintenance', $createMaintenanceRequest);
    }

    /**
     * @param  RequestInterface|Type\UpdateMaintenanceRequestType  $updateMaintenanceRequest
     * @return ResultInterface|Type\UpdateMaintenanceResponseType
     *
     * @throws SoapException
     */
    public function updateMaintenance(Type\UpdateMaintenanceRequestType $updateMaintenanceRequest): Type\UpdateMaintenanceResponseType
    {
        return ($this->caller)('updateMaintenance', $updateMaintenanceRequest);
    }

    /**
     * @param  RequestInterface|Type\DeleteMaintenanceRequestType  $deleteMaintenanceRequest
     * @return ResultInterface|Type\DeleteMaintenanceResponseType
     *
     * @throws SoapException
     */
    public function deleteMaintenance(Type\DeleteMaintenanceRequestType $deleteMaintenanceRequest): Type\DeleteMaintenanceResponseType
    {
        return ($this->caller)('deleteMaintenance', $deleteMaintenanceRequest);
    }

    /**
     * @param  RequestInterface|Type\GetMaintenanceCountRequestType  $getMaintenanceCountRequest
     * @return ResultInterface|Type\GetMaintenanceCountResponseType
     *
     * @throws SoapException
     */
    public function getMaintenanceCount(Type\GetMaintenanceCountRequestType $getMaintenanceCountRequest): Type\GetMaintenanceCountResponseType
    {
        return ($this->caller)('getMaintenanceCount', $getMaintenanceCountRequest);
    }

    /**
     * @param  RequestInterface|Type\GetMaintenanceQueryRequestType  $getMaintenanceQueryRequest
     * @return ResultInterface|Type\GetMaintenanceQueryResponseType
     *
     * @throws SoapException
     */
    public function getMaintenanceQuery(Type\GetMaintenanceQueryRequestType $getMaintenanceQueryRequest): Type\GetMaintenanceQueryResponseType
    {
        return ($this->caller)('getMaintenanceQuery', $getMaintenanceQueryRequest);
    }

    /**
     * @param  RequestInterface|Type\SetMaintenanceStateRequestType  $setMaintenanceStateRequest
     * @return ResultInterface|Type\SetMaintenanceStateResponseType
     *
     * @throws SoapException
     */
    public function setMaintenanceState(Type\SetMaintenanceStateRequestType $setMaintenanceStateRequest): Type\SetMaintenanceStateResponseType
    {
        return ($this->caller)('setMaintenanceState', $setMaintenanceStateRequest);
    }

    /**
     * @param  RequestInterface|Type\CreateUniformSuiteRequestType  $createUniformSuiteRequest
     * @return ResultInterface|Type\CreateUniformSuiteResponseType
     *
     * @throws SoapException
     */
    public function createUniformSuite(Type\CreateUniformSuiteRequestType $createUniformSuiteRequest): Type\CreateUniformSuiteResponseType
    {
        return ($this->caller)('createUniformSuite', $createUniformSuiteRequest);
    }

    /**
     * @param  RequestInterface|Type\UpdateUniformSuiteRequestType  $updateUniformSuiteRequest
     * @return ResultInterface|Type\UpdateUniformSuiteResponseType
     *
     * @throws SoapException
     */
    public function updateUniformSuite(Type\UpdateUniformSuiteRequestType $updateUniformSuiteRequest): Type\UpdateUniformSuiteResponseType
    {
        return ($this->caller)('updateUniformSuite', $updateUniformSuiteRequest);
    }

    /**
     * @param  RequestInterface|Type\DeleteUniformSuiteRequestType  $deleteUniformSuiteRequest
     * @return ResultInterface|Type\DeleteUniformSuiteResponseType
     *
     * @throws SoapException
     */
    public function deleteUniformSuite(Type\DeleteUniformSuiteRequestType $deleteUniformSuiteRequest): Type\DeleteUniformSuiteResponseType
    {
        return ($this->caller)('deleteUniformSuite', $deleteUniformSuiteRequest);
    }

    /**
     * @param  RequestInterface|Type\GetUniformSuiteCountRequestType  $getUniformSuiteCountRequest
     * @return ResultInterface|Type\GetUniformSuiteCountResponseType
     *
     * @throws SoapException
     */
    public function getUniformSuiteCount(Type\GetUniformSuiteCountRequestType $getUniformSuiteCountRequest): Type\GetUniformSuiteCountResponseType
    {
        return ($this->caller)('getUniformSuiteCount', $getUniformSuiteCountRequest);
    }

    /**
     * @param  RequestInterface|Type\GetUniformSuitesQueryRequestType  $getUniformSuitesQueryRequest
     * @return ResultInterface|Type\GetUniformSuitesQueryResponseType
     *
     * @throws SoapException
     */
    public function getUniformSuiteQuery(Type\GetUniformSuitesQueryRequestType $getUniformSuitesQueryRequest): Type\GetUniformSuitesQueryResponseType
    {
        return ($this->caller)('getUniformSuiteQuery', $getUniformSuitesQueryRequest);
    }

    /**
     * @param  RequestInterface|Type\SetUniformSuiteStateRequestType  $setUniformSuiteStateRequest
     * @return ResultInterface|Type\SetUniformSuiteStateResponseType
     *
     * @throws SoapException
     */
    public function setUniformSuiteState(Type\SetUniformSuiteStateRequestType $setUniformSuiteStateRequest): Type\SetUniformSuiteStateResponseType
    {
        return ($this->caller)('setUniformSuiteState', $setUniformSuiteStateRequest);
    }

    /**
     * @param  RequestInterface|Type\CreatePartNumberRequestType  $createPartNumberRequest
     * @return ResultInterface|Type\CreatePartNumberResponseType
     *
     * @throws SoapException
     */
    public function createPartNumber(Type\CreatePartNumberRequestType $createPartNumberRequest): Type\CreatePartNumberResponseType
    {
        return ($this->caller)('createPartNumber', $createPartNumberRequest);
    }

    /**
     * @param  RequestInterface|Type\DeletePartNumberRequestType  $deletePartNumberRequest
     * @return ResultInterface|Type\DeletePartNumberResponseType
     *
     * @throws SoapException
     */
    public function deletePartNumber(Type\DeletePartNumberRequestType $deletePartNumberRequest): Type\DeletePartNumberResponseType
    {
        return ($this->caller)('deletePartNumber', $deletePartNumberRequest);
    }

    /**
     * @param  RequestInterface|Type\GetPartNumberCountRequestType  $getPartNumberCountRequest
     * @return ResultInterface|Type\GetPartNumberCountResponseType
     *
     * @throws SoapException
     */
    public function getPartNumberCount(Type\GetPartNumberCountRequestType $getPartNumberCountRequest): Type\GetPartNumberCountResponseType
    {
        return ($this->caller)('getPartNumberCount', $getPartNumberCountRequest);
    }

    /**
     * @param  RequestInterface|Type\GetPartNumbersQueryRequestType  $getPartNumbersQueryRequest
     * @return ResultInterface|Type\GetPartNumbersQueryResponseType
     *
     * @throws SoapException
     */
    public function getPartNumbersQuery(Type\GetPartNumbersQueryRequestType $getPartNumbersQueryRequest): Type\GetPartNumbersQueryResponseType
    {
        return ($this->caller)('getPartNumbersQuery', $getPartNumbersQueryRequest);
    }

    /**
     * @param  RequestInterface|Type\CreateProductRelationshipRequestType  $createProductRelationshipRequest
     * @return ResultInterface|Type\CreateProductRelationshipResponseType
     *
     * @throws SoapException
     */
    public function createProductRelationship(Type\CreateProductRelationshipRequestType $createProductRelationshipRequest): Type\CreateProductRelationshipResponseType
    {
        return ($this->caller)('createProductRelationship', $createProductRelationshipRequest);
    }

    /**
     * @param  RequestInterface|Type\UpdateProductRelationshipRequestType  $updateProductRelationshipRequest
     * @return ResultInterface|Type\UpdateProductRelationshipResponseType
     *
     * @throws SoapException
     */
    public function updateProductRelationship(Type\UpdateProductRelationshipRequestType $updateProductRelationshipRequest): Type\UpdateProductRelationshipResponseType
    {
        return ($this->caller)('updateProductRelationship', $updateProductRelationshipRequest);
    }

    /**
     * @param  RequestInterface|Type\DeleteProductRelationshipRequestType  $deleteProductRelationshipRequest
     * @return ResultInterface|Type\DeleteProductRelationshipResponseType
     *
     * @throws SoapException
     */
    public function deleteProductRelationship(Type\DeleteProductRelationshipRequestType $deleteProductRelationshipRequest): Type\DeleteProductRelationshipResponseType
    {
        return ($this->caller)('deleteProductRelationship', $deleteProductRelationshipRequest);
    }

    /**
     * @param  RequestInterface|Type\GetProductRelationshipsRequestType  $getProductRelationshipsRequest
     * @return ResultInterface|Type\GetProductRelationshipsResponseType
     *
     * @throws SoapException
     */
    public function getProductRelationships(Type\GetProductRelationshipsRequestType $getProductRelationshipsRequest): Type\GetProductRelationshipsResponseType
    {
        return ($this->caller)('getProductRelationships', $getProductRelationshipsRequest);
    }

    /**
     * @param  RequestInterface|Type\GetModelIdentifiersRequestType  $getModelIdentifiersRequest
     * @return ResultInterface|Type\GetModelIdentifiersResponseType
     *
     * @throws SoapException
     */
    public function getLicenseModelIdentifiers(Type\GetModelIdentifiersRequestType $getModelIdentifiersRequest): Type\GetModelIdentifiersResponseType
    {
        return ($this->caller)('getLicenseModelIdentifiers', $getModelIdentifiersRequest);
    }

    /**
     * @param  RequestInterface|Type\GetTransactionKeyIdentifiersRequestType  $getTransactionKeyIdentifiersRequest
     * @return ResultInterface|Type\GetTransactionKeyIdentifiersResponseType
     *
     * @throws SoapException
     */
    public function getTransactionKeyIdentifiers(Type\GetTransactionKeyIdentifiersRequestType $getTransactionKeyIdentifiersRequest): Type\GetTransactionKeyIdentifiersResponseType
    {
        return ($this->caller)('getTransactionKeyIdentifiers', $getTransactionKeyIdentifiersRequest);
    }

    /**
     * @param  RequestInterface|Type\GetLicenseTechnologyQueryRequestType  $getLicenseTechnologyQueryRequest
     * @return ResultInterface|Type\GetLicenseTechnologyQueryResponseType
     *
     * @throws SoapException
     */
    public function getLicenseTechnologiesQuery(Type\GetLicenseTechnologyQueryRequestType $getLicenseTechnologyQueryRequest): Type\GetLicenseTechnologyQueryResponseType
    {
        return ($this->caller)('getLicenseTechnologiesQuery', $getLicenseTechnologyQueryRequest);
    }
}
