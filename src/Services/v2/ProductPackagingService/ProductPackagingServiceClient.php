<?php

namespace Flexsim\FlexnetOperations\Services\v2\ProductPackagingService;

use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Flexsim\FlexnetOperations\Type;

class ProductPackagingServiceClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\CreateFeatureRequestType $createFeatureRequest
     * @return ResultInterface|Type\CreateFeatureResponseType
     * @throws SoapException
     */
    public function createFeature(\Flexsim\FlexnetOperations\Type\CreateFeatureRequestType $createFeatureRequest) : \Flexsim\FlexnetOperations\Type\CreateFeatureResponseType
    {
        return $this->call('createFeature', $createFeatureRequest);
    }

    /**
     * @param RequestInterface|Type\UpdateFeatureRequestType $updateFeatureRequest
     * @return ResultInterface|Type\UpdateFeatureResponseType
     * @throws SoapException
     */
    public function updateFeature(\Flexsim\FlexnetOperations\Type\UpdateFeatureRequestType $updateFeatureRequest) : \Flexsim\FlexnetOperations\Type\UpdateFeatureResponseType
    {
        return $this->call('updateFeature', $updateFeatureRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteFeatureRequestType $deleteFeatureRequest
     * @return ResultInterface|Type\DeleteFeatureResponseType
     * @throws SoapException
     */
    public function deleteFeature(\Flexsim\FlexnetOperations\Type\DeleteFeatureRequestType $deleteFeatureRequest) : \Flexsim\FlexnetOperations\Type\DeleteFeatureResponseType
    {
        return $this->call('deleteFeature', $deleteFeatureRequest);
    }

    /**
     * @param RequestInterface|Type\GetFeatureCountRequestType $getFeatureCountRequest
     * @return ResultInterface|Type\GetFeatureCountResponseType
     * @throws SoapException
     */
    public function getFeatureCount(\Flexsim\FlexnetOperations\Type\GetFeatureCountRequestType $getFeatureCountRequest) : \Flexsim\FlexnetOperations\Type\GetFeatureCountResponseType
    {
        return $this->call('getFeatureCount', $getFeatureCountRequest);
    }

    /**
     * @param RequestInterface|Type\GetFeaturesQueryRequestType $getFeaturesQueryRequest
     * @return ResultInterface|Type\GetFeaturesQueryResponseType
     * @throws SoapException
     */
    public function getFeaturesQuery(\Flexsim\FlexnetOperations\Type\GetFeaturesQueryRequestType $getFeaturesQueryRequest) : \Flexsim\FlexnetOperations\Type\GetFeaturesQueryResponseType
    {
        return $this->call('getFeaturesQuery', $getFeaturesQueryRequest);
    }

    /**
     * @param RequestInterface|Type\SetFeatureStateRequestType $setFeatureStateRequest
     * @return ResultInterface|Type\SetFeatureStateResponseType
     * @throws SoapException
     */
    public function setFeatureState(\Flexsim\FlexnetOperations\Type\SetFeatureStateRequestType $setFeatureStateRequest) : \Flexsim\FlexnetOperations\Type\SetFeatureStateResponseType
    {
        return $this->call('setFeatureState', $setFeatureStateRequest);
    }

    /**
     * @param RequestInterface|Type\CreateFeatureBundleRequestType $createFeatureBundleRequest
     * @return ResultInterface|Type\CreateFeatureBundleResponseType
     * @throws SoapException
     */
    public function createFeatureBundle(\Flexsim\FlexnetOperations\Type\CreateFeatureBundleRequestType $createFeatureBundleRequest) : \Flexsim\FlexnetOperations\Type\CreateFeatureBundleResponseType
    {
        return $this->call('createFeatureBundle', $createFeatureBundleRequest);
    }

    /**
     * @param RequestInterface|Type\UpdateFeatureBundleRequestType $updateFeatureBundleRequest
     * @return ResultInterface|Type\UpdateFeatureBundleResponseType
     * @throws SoapException
     */
    public function updateFeatureBundle(\Flexsim\FlexnetOperations\Type\UpdateFeatureBundleRequestType $updateFeatureBundleRequest) : \Flexsim\FlexnetOperations\Type\UpdateFeatureBundleResponseType
    {
        return $this->call('updateFeatureBundle', $updateFeatureBundleRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteFeatureBundleRequestType $deleteFeatureBundleRequest
     * @return ResultInterface|Type\DeleteFeatureBundleResponseType
     * @throws SoapException
     */
    public function deleteFeatureBundle(\Flexsim\FlexnetOperations\Type\DeleteFeatureBundleRequestType $deleteFeatureBundleRequest) : \Flexsim\FlexnetOperations\Type\DeleteFeatureBundleResponseType
    {
        return $this->call('deleteFeatureBundle', $deleteFeatureBundleRequest);
    }

    /**
     * @param RequestInterface|Type\GetFeatureBundleCountRequestType $getFeatureBundleCountRequest
     * @return ResultInterface|Type\GetFeatureBundleCountResponseType
     * @throws SoapException
     */
    public function getFeatureBundleCount(\Flexsim\FlexnetOperations\Type\GetFeatureBundleCountRequestType $getFeatureBundleCountRequest) : \Flexsim\FlexnetOperations\Type\GetFeatureBundleCountResponseType
    {
        return $this->call('getFeatureBundleCount', $getFeatureBundleCountRequest);
    }

    /**
     * @param RequestInterface|Type\GetFeatureBundlesQueryRequestType $getFeatureBundlesQueryRequest
     * @return ResultInterface|Type\GetFeatureBundlesQueryResponseType
     * @throws SoapException
     */
    public function getFeatureBundlesQuery(\Flexsim\FlexnetOperations\Type\GetFeatureBundlesQueryRequestType $getFeatureBundlesQueryRequest) : \Flexsim\FlexnetOperations\Type\GetFeatureBundlesQueryResponseType
    {
        return $this->call('getFeatureBundlesQuery', $getFeatureBundlesQueryRequest);
    }

    /**
     * @param RequestInterface|Type\SetFeatureBundleStateRequestType $setFeatureBundleStateRequest
     * @return ResultInterface|Type\SetFeatureBundleStateResponseType
     * @throws SoapException
     */
    public function setFeatureBundleState(\Flexsim\FlexnetOperations\Type\SetFeatureBundleStateRequestType $setFeatureBundleStateRequest) : \Flexsim\FlexnetOperations\Type\SetFeatureBundleStateResponseType
    {
        return $this->call('setFeatureBundleState', $setFeatureBundleStateRequest);
    }

    /**
     * @param RequestInterface|Type\CreateProductRequestType $createProductRequest
     * @return ResultInterface|Type\CreateProductResponseType
     * @throws SoapException
     */
    public function createProduct(\Flexsim\FlexnetOperations\Type\CreateProductRequestType $createProductRequest) : \Flexsim\FlexnetOperations\Type\CreateProductResponseType
    {
        return $this->call('createProduct', $createProductRequest);
    }

    /**
     * @param RequestInterface|Type\UpdateProductRequestType $updateProductRequest
     * @return ResultInterface|Type\UpdateProductResponseType
     * @throws SoapException
     */
    public function updateProduct(\Flexsim\FlexnetOperations\Type\UpdateProductRequestType $updateProductRequest) : \Flexsim\FlexnetOperations\Type\UpdateProductResponseType
    {
        return $this->call('updateProduct', $updateProductRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteProductRequestType $deleteProductRequest
     * @return ResultInterface|Type\DeleteProductResponseType
     * @throws SoapException
     */
    public function deleteProduct(\Flexsim\FlexnetOperations\Type\DeleteProductRequestType $deleteProductRequest) : \Flexsim\FlexnetOperations\Type\DeleteProductResponseType
    {
        return $this->call('deleteProduct', $deleteProductRequest);
    }

    /**
     * @param RequestInterface|Type\GetProductCountRequestType $getProductCountRequest
     * @return ResultInterface|Type\GetProductCountResponseType
     * @throws SoapException
     */
    public function getProductCount(\Flexsim\FlexnetOperations\Type\GetProductCountRequestType $getProductCountRequest) : \Flexsim\FlexnetOperations\Type\GetProductCountResponseType
    {
        return $this->call('getProductCount', $getProductCountRequest);
    }

    /**
     * @param RequestInterface|Type\GetProductsQueryRequestType $getProductsQueryRequest
     * @return ResultInterface|Type\GetProductsQueryResponseType
     * @throws SoapException
     */
    public function getProductsQuery(\Flexsim\FlexnetOperations\Type\GetProductsQueryRequestType $getProductsQueryRequest) : \Flexsim\FlexnetOperations\Type\GetProductsQueryResponseType
    {
        return $this->call('getProductsQuery', $getProductsQueryRequest);
    }

    /**
     * @param RequestInterface|Type\CreateProductCategoryRequestType $createProductCategoryRequest
     * @return ResultInterface|Type\CreateProductCategoryResponseType
     * @throws SoapException
     */
    public function createProductCategory(\Flexsim\FlexnetOperations\Type\CreateProductCategoryRequestType $createProductCategoryRequest) : \Flexsim\FlexnetOperations\Type\CreateProductCategoryResponseType
    {
        return $this->call('createProductCategory', $createProductCategoryRequest);
    }

    /**
     * @param RequestInterface|Type\GetProductCategoriesRequestType $getProductCategoriesRequest
     * @return ResultInterface|Type\GetProductCategoriesResponseType
     * @throws SoapException
     */
    public function getProductCategories(\Flexsim\FlexnetOperations\Type\GetProductCategoriesRequestType $getProductCategoriesRequest) : \Flexsim\FlexnetOperations\Type\GetProductCategoriesResponseType
    {
        return $this->call('getProductCategories', $getProductCategoriesRequest);
    }

    /**
     * @param RequestInterface|Type\HandleProductCategoriesToUserRequestType $assignProductCategoriesToUserRequest
     * @return ResultInterface|Type\HandleProductCategoriesToUserResponseType
     * @throws SoapException
     */
    public function assignProductCategoriesToUser(\Flexsim\FlexnetOperations\Type\HandleProductCategoriesToUserRequestType $assignProductCategoriesToUserRequest) : \Flexsim\FlexnetOperations\Type\HandleProductCategoriesToUserResponseType
    {
        return $this->call('assignProductCategoriesToUser', $assignProductCategoriesToUserRequest);
    }

    /**
     * @param RequestInterface|Type\HandleProductCategoriesToUserRequestType $removeProductCategoriesFromUserRequest
     * @return ResultInterface|Type\HandleProductCategoriesToUserResponseType
     * @throws SoapException
     */
    public function removeProductCategoriesFromUser(\Flexsim\FlexnetOperations\Type\HandleProductCategoriesToUserRequestType $removeProductCategoriesFromUserRequest) : \Flexsim\FlexnetOperations\Type\HandleProductCategoriesToUserResponseType
    {
        return $this->call('removeProductCategoriesFromUser', $removeProductCategoriesFromUserRequest);
    }

    /**
     * @param RequestInterface|Type\GetUsersForProductCategoryRequestType $getUsersForProductCategoryRequest
     * @return ResultInterface|Type\GetUsersForProductCategoryResponseType
     * @throws SoapException
     */
    public function getUsersForProductCategory(\Flexsim\FlexnetOperations\Type\GetUsersForProductCategoryRequestType $getUsersForProductCategoryRequest) : \Flexsim\FlexnetOperations\Type\GetUsersForProductCategoryResponseType
    {
        return $this->call('getUsersForProductCategory', $getUsersForProductCategoryRequest);
    }

    /**
     * @param RequestInterface|Type\HandleProductCategoryToAcctRequestType $assignProductCategoriesToAcctRequest
     * @return ResultInterface|Type\HandleProductCategoryToAcctResponseType
     * @throws SoapException
     */
    public function assignProductCategoriesToAcct(\Flexsim\FlexnetOperations\Type\HandleProductCategoryToAcctRequestType $assignProductCategoriesToAcctRequest) : \Flexsim\FlexnetOperations\Type\HandleProductCategoryToAcctResponseType
    {
        return $this->call('assignProductCategoriesToAcct', $assignProductCategoriesToAcctRequest);
    }

    /**
     * @param RequestInterface|Type\HandleProductCategoryToAcctRequestType $removeProductCategoriesFromAcctRequest
     * @return ResultInterface|Type\HandleProductCategoryToAcctResponseType
     * @throws SoapException
     */
    public function removeProductCategoriesFromAcct(\Flexsim\FlexnetOperations\Type\HandleProductCategoryToAcctRequestType $removeProductCategoriesFromAcctRequest) : \Flexsim\FlexnetOperations\Type\HandleProductCategoryToAcctResponseType
    {
        return $this->call('removeProductCategoriesFromAcct', $removeProductCategoriesFromAcctRequest);
    }

    /**
     * @param RequestInterface|Type\SetProductStateRequestType $setProductStateRequest
     * @return ResultInterface|Type\SetProductStateResponseType
     * @throws SoapException
     */
    public function setProductState(\Flexsim\FlexnetOperations\Type\SetProductStateRequestType $setProductStateRequest) : \Flexsim\FlexnetOperations\Type\SetProductStateResponseType
    {
        return $this->call('setProductState', $setProductStateRequest);
    }

    /**
     * @param RequestInterface|Type\CreateMaintenanceRequestType $createMaintenanceRequest
     * @return ResultInterface|Type\CreateMaintenanceResponseType
     * @throws SoapException
     */
    public function createMaintenance(\Flexsim\FlexnetOperations\Type\CreateMaintenanceRequestType $createMaintenanceRequest) : \Flexsim\FlexnetOperations\Type\CreateMaintenanceResponseType
    {
        return $this->call('createMaintenance', $createMaintenanceRequest);
    }

    /**
     * @param RequestInterface|Type\UpdateMaintenanceRequestType $updateMaintenanceRequest
     * @return ResultInterface|Type\UpdateMaintenanceResponseType
     * @throws SoapException
     */
    public function updateMaintenance(\Flexsim\FlexnetOperations\Type\UpdateMaintenanceRequestType $updateMaintenanceRequest) : \Flexsim\FlexnetOperations\Type\UpdateMaintenanceResponseType
    {
        return $this->call('updateMaintenance', $updateMaintenanceRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteMaintenanceRequestType $deleteMaintenanceRequest
     * @return ResultInterface|Type\DeleteMaintenanceResponseType
     * @throws SoapException
     */
    public function deleteMaintenance(\Flexsim\FlexnetOperations\Type\DeleteMaintenanceRequestType $deleteMaintenanceRequest) : \Flexsim\FlexnetOperations\Type\DeleteMaintenanceResponseType
    {
        return $this->call('deleteMaintenance', $deleteMaintenanceRequest);
    }

    /**
     * @param RequestInterface|Type\GetMaintenanceCountRequestType $getMaintenanceCountRequest
     * @return ResultInterface|Type\GetMaintenanceCountResponseType
     * @throws SoapException
     */
    public function getMaintenanceCount(\Flexsim\FlexnetOperations\Type\GetMaintenanceCountRequestType $getMaintenanceCountRequest) : \Flexsim\FlexnetOperations\Type\GetMaintenanceCountResponseType
    {
        return $this->call('getMaintenanceCount', $getMaintenanceCountRequest);
    }

    /**
     * @param RequestInterface|Type\GetMaintenanceQueryRequestType $getMaintenanceQueryRequest
     * @return ResultInterface|Type\GetMaintenanceQueryResponseType
     * @throws SoapException
     */
    public function getMaintenanceQuery(\Flexsim\FlexnetOperations\Type\GetMaintenanceQueryRequestType $getMaintenanceQueryRequest) : \Flexsim\FlexnetOperations\Type\GetMaintenanceQueryResponseType
    {
        return $this->call('getMaintenanceQuery', $getMaintenanceQueryRequest);
    }

    /**
     * @param RequestInterface|Type\SetMaintenanceStateRequestType $setMaintenanceStateRequest
     * @return ResultInterface|Type\SetMaintenanceStateResponseType
     * @throws SoapException
     */
    public function setMaintenanceState(\Flexsim\FlexnetOperations\Type\SetMaintenanceStateRequestType $setMaintenanceStateRequest) : \Flexsim\FlexnetOperations\Type\SetMaintenanceStateResponseType
    {
        return $this->call('setMaintenanceState', $setMaintenanceStateRequest);
    }

    /**
     * @param RequestInterface|Type\CreateUniformSuiteRequestType $createUniformSuiteRequest
     * @return ResultInterface|Type\CreateUniformSuiteResponseType
     * @throws SoapException
     */
    public function createUniformSuite(\Flexsim\FlexnetOperations\Type\CreateUniformSuiteRequestType $createUniformSuiteRequest) : \Flexsim\FlexnetOperations\Type\CreateUniformSuiteResponseType
    {
        return $this->call('createUniformSuite', $createUniformSuiteRequest);
    }

    /**
     * @param RequestInterface|Type\UpdateUniformSuiteRequestType $updateUniformSuiteRequest
     * @return ResultInterface|Type\UpdateUniformSuiteResponseType
     * @throws SoapException
     */
    public function updateUniformSuite(\Flexsim\FlexnetOperations\Type\UpdateUniformSuiteRequestType $updateUniformSuiteRequest) : \Flexsim\FlexnetOperations\Type\UpdateUniformSuiteResponseType
    {
        return $this->call('updateUniformSuite', $updateUniformSuiteRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteUniformSuiteRequestType $deleteUniformSuiteRequest
     * @return ResultInterface|Type\DeleteUniformSuiteResponseType
     * @throws SoapException
     */
    public function deleteUniformSuite(\Flexsim\FlexnetOperations\Type\DeleteUniformSuiteRequestType $deleteUniformSuiteRequest) : \Flexsim\FlexnetOperations\Type\DeleteUniformSuiteResponseType
    {
        return $this->call('deleteUniformSuite', $deleteUniformSuiteRequest);
    }

    /**
     * @param RequestInterface|Type\GetUniformSuiteCountRequestType $getUniformSuiteCountRequest
     * @return ResultInterface|Type\GetUniformSuiteCountResponseType
     * @throws SoapException
     */
    public function getUniformSuiteCount(\Flexsim\FlexnetOperations\Type\GetUniformSuiteCountRequestType $getUniformSuiteCountRequest) : \Flexsim\FlexnetOperations\Type\GetUniformSuiteCountResponseType
    {
        return $this->call('getUniformSuiteCount', $getUniformSuiteCountRequest);
    }

    /**
     * @param RequestInterface|Type\GetUniformSuitesQueryRequestType $getUniformSuitesQueryRequest
     * @return ResultInterface|Type\GetUniformSuitesQueryResponseType
     * @throws SoapException
     */
    public function getUniformSuiteQuery(\Flexsim\FlexnetOperations\Type\GetUniformSuitesQueryRequestType $getUniformSuitesQueryRequest) : \Flexsim\FlexnetOperations\Type\GetUniformSuitesQueryResponseType
    {
        return $this->call('getUniformSuiteQuery', $getUniformSuitesQueryRequest);
    }

    /**
     * @param RequestInterface|Type\SetUniformSuiteStateRequestType $setUniformSuiteStateRequest
     * @return ResultInterface|Type\SetUniformSuiteStateResponseType
     * @throws SoapException
     */
    public function setUniformSuiteState(\Flexsim\FlexnetOperations\Type\SetUniformSuiteStateRequestType $setUniformSuiteStateRequest) : \Flexsim\FlexnetOperations\Type\SetUniformSuiteStateResponseType
    {
        return $this->call('setUniformSuiteState', $setUniformSuiteStateRequest);
    }

    /**
     * @param RequestInterface|Type\CreatePartNumberRequestType $createPartNumberRequest
     * @return ResultInterface|Type\CreatePartNumberResponseType
     * @throws SoapException
     */
    public function createPartNumber(\Flexsim\FlexnetOperations\Type\CreatePartNumberRequestType $createPartNumberRequest) : \Flexsim\FlexnetOperations\Type\CreatePartNumberResponseType
    {
        return $this->call('createPartNumber', $createPartNumberRequest);
    }

    /**
     * @param RequestInterface|Type\DeletePartNumberRequestType $deletePartNumberRequest
     * @return ResultInterface|Type\DeletePartNumberResponseType
     * @throws SoapException
     */
    public function deletePartNumber(\Flexsim\FlexnetOperations\Type\DeletePartNumberRequestType $deletePartNumberRequest) : \Flexsim\FlexnetOperations\Type\DeletePartNumberResponseType
    {
        return $this->call('deletePartNumber', $deletePartNumberRequest);
    }

    /**
     * @param RequestInterface|Type\GetPartNumberCountRequestType $getPartNumberCountRequest
     * @return ResultInterface|Type\GetPartNumberCountResponseType
     * @throws SoapException
     */
    public function getPartNumberCount(\Flexsim\FlexnetOperations\Type\GetPartNumberCountRequestType $getPartNumberCountRequest) : \Flexsim\FlexnetOperations\Type\GetPartNumberCountResponseType
    {
        return $this->call('getPartNumberCount', $getPartNumberCountRequest);
    }

    /**
     * @param RequestInterface|Type\GetPartNumbersQueryRequestType $getPartNumbersQueryRequest
     * @return ResultInterface|Type\GetPartNumbersQueryResponseType
     * @throws SoapException
     */
    public function getPartNumbersQuery(\Flexsim\FlexnetOperations\Type\GetPartNumbersQueryRequestType $getPartNumbersQueryRequest) : \Flexsim\FlexnetOperations\Type\GetPartNumbersQueryResponseType
    {
        return $this->call('getPartNumbersQuery', $getPartNumbersQueryRequest);
    }

    /**
     * @param RequestInterface|Type\CreateProductRelationshipRequestType $createProductRelationshipRequest
     * @return ResultInterface|Type\CreateProductRelationshipResponseType
     * @throws SoapException
     */
    public function createProductRelationship(\Flexsim\FlexnetOperations\Type\CreateProductRelationshipRequestType $createProductRelationshipRequest) : \Flexsim\FlexnetOperations\Type\CreateProductRelationshipResponseType
    {
        return $this->call('createProductRelationship', $createProductRelationshipRequest);
    }

    /**
     * @param RequestInterface|Type\UpdateProductRelationshipRequestType $updateProductRelationshipRequest
     * @return ResultInterface|Type\UpdateProductRelationshipResponseType
     * @throws SoapException
     */
    public function updateProductRelationship(\Flexsim\FlexnetOperations\Type\UpdateProductRelationshipRequestType $updateProductRelationshipRequest) : \Flexsim\FlexnetOperations\Type\UpdateProductRelationshipResponseType
    {
        return $this->call('updateProductRelationship', $updateProductRelationshipRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteProductRelationshipRequestType $deleteProductRelationshipRequest
     * @return ResultInterface|Type\DeleteProductRelationshipResponseType
     * @throws SoapException
     */
    public function deleteProductRelationship(\Flexsim\FlexnetOperations\Type\DeleteProductRelationshipRequestType $deleteProductRelationshipRequest) : \Flexsim\FlexnetOperations\Type\DeleteProductRelationshipResponseType
    {
        return $this->call('deleteProductRelationship', $deleteProductRelationshipRequest);
    }

    /**
     * @param RequestInterface|Type\GetProductRelationshipsRequestType $getProductRelationshipsRequest
     * @return ResultInterface|Type\GetProductRelationshipsResponseType
     * @throws SoapException
     */
    public function getProductRelationships(\Flexsim\FlexnetOperations\Type\GetProductRelationshipsRequestType $getProductRelationshipsRequest) : \Flexsim\FlexnetOperations\Type\GetProductRelationshipsResponseType
    {
        return $this->call('getProductRelationships', $getProductRelationshipsRequest);
    }

    /**
     * @param RequestInterface|Type\GetModelIdentifiersRequestType $getModelIdentifiersRequest
     * @return ResultInterface|Type\GetModelIdentifiersResponseType
     * @throws SoapException
     */
    public function getLicenseModelIdentifiers(\Flexsim\FlexnetOperations\Type\GetModelIdentifiersRequestType $getModelIdentifiersRequest) : \Flexsim\FlexnetOperations\Type\GetModelIdentifiersResponseType
    {
        return $this->call('getLicenseModelIdentifiers', $getModelIdentifiersRequest);
    }

    /**
     * @param RequestInterface|Type\GetTransactionKeyIdentifiersRequestType $getTransactionKeyIdentifiersRequest
     * @return ResultInterface|Type\GetTransactionKeyIdentifiersResponseType
     * @throws SoapException
     */
    public function getTransactionKeyIdentifiers(\Flexsim\FlexnetOperations\Type\GetTransactionKeyIdentifiersRequestType $getTransactionKeyIdentifiersRequest) : \Flexsim\FlexnetOperations\Type\GetTransactionKeyIdentifiersResponseType
    {
        return $this->call('getTransactionKeyIdentifiers', $getTransactionKeyIdentifiersRequest);
    }

    /**
     * @param RequestInterface|Type\GetLicenseTechnologyQueryRequestType $getLicenseTechnologyQueryRequest
     * @return ResultInterface|Type\GetLicenseTechnologyQueryResponseType
     * @throws SoapException
     */
    public function getLicenseTechnologiesQuery(\Flexsim\FlexnetOperations\Type\GetLicenseTechnologyQueryRequestType $getLicenseTechnologyQueryRequest) : \Flexsim\FlexnetOperations\Type\GetLicenseTechnologyQueryResponseType
    {
        return $this->call('getLicenseTechnologiesQuery', $getLicenseTechnologyQueryRequest);
    }


}

