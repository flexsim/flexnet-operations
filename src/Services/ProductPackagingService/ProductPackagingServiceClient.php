<?php

namespace Flexsim\FlexnetOperations\Services\ProductPackagingService;

use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Flexsim\FlexnetOperations\Type;

class ProductPackagingServiceClient
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
     * @param RequestInterface|Type\CreateFeatureRequestType $createFeatureRequest
     * @return ResultInterface|Type\CreateFeatureResponseType
     * @throws SoapException
     */
    public function createFeature(\Flexsim\FlexnetOperations\Type\CreateFeatureRequestType $createFeatureRequest) : \Flexsim\FlexnetOperations\Type\CreateFeatureResponseType
    {
        return ($this->caller)('createFeature', $createFeatureRequest);
    }

    /**
     * @param RequestInterface|Type\UpdateFeatureRequestType $updateFeatureRequest
     * @return ResultInterface|Type\UpdateFeatureResponseType
     * @throws SoapException
     */
    public function updateFeature(\Flexsim\FlexnetOperations\Type\UpdateFeatureRequestType $updateFeatureRequest) : \Flexsim\FlexnetOperations\Type\UpdateFeatureResponseType
    {
        return ($this->caller)('updateFeature', $updateFeatureRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteFeatureRequestType $deleteFeatureRequest
     * @return ResultInterface|Type\DeleteFeatureResponseType
     * @throws SoapException
     */
    public function deleteFeature(\Flexsim\FlexnetOperations\Type\DeleteFeatureRequestType $deleteFeatureRequest) : \Flexsim\FlexnetOperations\Type\DeleteFeatureResponseType
    {
        return ($this->caller)('deleteFeature', $deleteFeatureRequest);
    }

    /**
     * @param RequestInterface|Type\GetFeatureCountRequestType $getFeatureCountRequest
     * @return ResultInterface|Type\GetFeatureCountResponseType
     * @throws SoapException
     */
    public function getFeatureCount(\Flexsim\FlexnetOperations\Type\GetFeatureCountRequestType $getFeatureCountRequest) : \Flexsim\FlexnetOperations\Type\GetFeatureCountResponseType
    {
        return ($this->caller)('getFeatureCount', $getFeatureCountRequest);
    }

    /**
     * @param RequestInterface|Type\GetFeaturesQueryRequestType $getFeaturesQueryRequest
     * @return ResultInterface|Type\GetFeaturesQueryResponseType
     * @throws SoapException
     */
    public function getFeaturesQuery(\Flexsim\FlexnetOperations\Type\GetFeaturesQueryRequestType $getFeaturesQueryRequest) : \Flexsim\FlexnetOperations\Type\GetFeaturesQueryResponseType
    {
        return ($this->caller)('getFeaturesQuery', $getFeaturesQueryRequest);
    }

    /**
     * @param RequestInterface|Type\SetFeatureStateRequestType $setFeatureStateRequest
     * @return ResultInterface|Type\SetFeatureStateResponseType
     * @throws SoapException
     */
    public function setFeatureState(\Flexsim\FlexnetOperations\Type\SetFeatureStateRequestType $setFeatureStateRequest) : \Flexsim\FlexnetOperations\Type\SetFeatureStateResponseType
    {
        return ($this->caller)('setFeatureState', $setFeatureStateRequest);
    }

    /**
     * @param RequestInterface|Type\CreateFeatureBundleRequestType $createFeatureBundleRequest
     * @return ResultInterface|Type\CreateFeatureBundleResponseType
     * @throws SoapException
     */
    public function createFeatureBundle(\Flexsim\FlexnetOperations\Type\CreateFeatureBundleRequestType $createFeatureBundleRequest) : \Flexsim\FlexnetOperations\Type\CreateFeatureBundleResponseType
    {
        return ($this->caller)('createFeatureBundle', $createFeatureBundleRequest);
    }

    /**
     * @param RequestInterface|Type\UpdateFeatureBundleRequestType $updateFeatureBundleRequest
     * @return ResultInterface|Type\UpdateFeatureBundleResponseType
     * @throws SoapException
     */
    public function updateFeatureBundle(\Flexsim\FlexnetOperations\Type\UpdateFeatureBundleRequestType $updateFeatureBundleRequest) : \Flexsim\FlexnetOperations\Type\UpdateFeatureBundleResponseType
    {
        return ($this->caller)('updateFeatureBundle', $updateFeatureBundleRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteFeatureBundleRequestType $deleteFeatureBundleRequest
     * @return ResultInterface|Type\DeleteFeatureBundleResponseType
     * @throws SoapException
     */
    public function deleteFeatureBundle(\Flexsim\FlexnetOperations\Type\DeleteFeatureBundleRequestType $deleteFeatureBundleRequest) : \Flexsim\FlexnetOperations\Type\DeleteFeatureBundleResponseType
    {
        return ($this->caller)('deleteFeatureBundle', $deleteFeatureBundleRequest);
    }

    /**
     * @param RequestInterface|Type\GetFeatureBundleCountRequestType $getFeatureBundleCountRequest
     * @return ResultInterface|Type\GetFeatureBundleCountResponseType
     * @throws SoapException
     */
    public function getFeatureBundleCount(\Flexsim\FlexnetOperations\Type\GetFeatureBundleCountRequestType $getFeatureBundleCountRequest) : \Flexsim\FlexnetOperations\Type\GetFeatureBundleCountResponseType
    {
        return ($this->caller)('getFeatureBundleCount', $getFeatureBundleCountRequest);
    }

    /**
     * @param RequestInterface|Type\GetFeatureBundlesQueryRequestType $getFeatureBundlesQueryRequest
     * @return ResultInterface|Type\GetFeatureBundlesQueryResponseType
     * @throws SoapException
     */
    public function getFeatureBundlesQuery(\Flexsim\FlexnetOperations\Type\GetFeatureBundlesQueryRequestType $getFeatureBundlesQueryRequest) : \Flexsim\FlexnetOperations\Type\GetFeatureBundlesQueryResponseType
    {
        return ($this->caller)('getFeatureBundlesQuery', $getFeatureBundlesQueryRequest);
    }

    /**
     * @param RequestInterface|Type\SetFeatureBundleStateRequestType $setFeatureBundleStateRequest
     * @return ResultInterface|Type\SetFeatureBundleStateResponseType
     * @throws SoapException
     */
    public function setFeatureBundleState(\Flexsim\FlexnetOperations\Type\SetFeatureBundleStateRequestType $setFeatureBundleStateRequest) : \Flexsim\FlexnetOperations\Type\SetFeatureBundleStateResponseType
    {
        return ($this->caller)('setFeatureBundleState', $setFeatureBundleStateRequest);
    }

    /**
     * @param RequestInterface|Type\CreateProductRequestType $createProductRequest
     * @return ResultInterface|Type\CreateProductResponseType
     * @throws SoapException
     */
    public function createProduct(\Flexsim\FlexnetOperations\Type\CreateProductRequestType $createProductRequest) : \Flexsim\FlexnetOperations\Type\CreateProductResponseType
    {
        return ($this->caller)('createProduct', $createProductRequest);
    }

    /**
     * @param RequestInterface|Type\UpdateProductRequestType $updateProductRequest
     * @return ResultInterface|Type\UpdateProductResponseType
     * @throws SoapException
     */
    public function updateProduct(\Flexsim\FlexnetOperations\Type\UpdateProductRequestType $updateProductRequest) : \Flexsim\FlexnetOperations\Type\UpdateProductResponseType
    {
        return ($this->caller)('updateProduct', $updateProductRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteProductRequestType $deleteProductRequest
     * @return ResultInterface|Type\DeleteProductResponseType
     * @throws SoapException
     */
    public function deleteProduct(\Flexsim\FlexnetOperations\Type\DeleteProductRequestType $deleteProductRequest) : \Flexsim\FlexnetOperations\Type\DeleteProductResponseType
    {
        return ($this->caller)('deleteProduct', $deleteProductRequest);
    }

    /**
     * @param RequestInterface|Type\GetProductCountRequestType $getProductCountRequest
     * @return ResultInterface|Type\GetProductCountResponseType
     * @throws SoapException
     */
    public function getProductCount(\Flexsim\FlexnetOperations\Type\GetProductCountRequestType $getProductCountRequest) : \Flexsim\FlexnetOperations\Type\GetProductCountResponseType
    {
        return ($this->caller)('getProductCount', $getProductCountRequest);
    }

    /**
     * @param RequestInterface|Type\GetProductsQueryRequestType $getProductsQueryRequest
     * @return ResultInterface|Type\GetProductsQueryResponseType
     * @throws SoapException
     */
    public function getProductsQuery(\Flexsim\FlexnetOperations\Type\GetProductsQueryRequestType $getProductsQueryRequest) : \Flexsim\FlexnetOperations\Type\GetProductsQueryResponseType
    {
        return ($this->caller)('getProductsQuery', $getProductsQueryRequest);
    }

    /**
     * @param RequestInterface|Type\CreateProductCategoryRequestType $createProductCategoryRequest
     * @return ResultInterface|Type\CreateProductCategoryResponseType
     * @throws SoapException
     */
    public function createProductCategory(\Flexsim\FlexnetOperations\Type\CreateProductCategoryRequestType $createProductCategoryRequest) : \Flexsim\FlexnetOperations\Type\CreateProductCategoryResponseType
    {
        return ($this->caller)('createProductCategory', $createProductCategoryRequest);
    }

    /**
     * @param RequestInterface|Type\GetProductCategoriesRequestType $getProductCategoriesRequest
     * @return ResultInterface|Type\GetProductCategoriesResponseType
     * @throws SoapException
     */
    public function getProductCategories(\Flexsim\FlexnetOperations\Type\GetProductCategoriesRequestType $getProductCategoriesRequest) : \Flexsim\FlexnetOperations\Type\GetProductCategoriesResponseType
    {
        return ($this->caller)('getProductCategories', $getProductCategoriesRequest);
    }

    /**
     * @param RequestInterface|Type\HandleProductCategoriesToUserRequestType $assignProductCategoriesToUserRequest
     * @return ResultInterface|Type\HandleProductCategoriesToUserResponseType
     * @throws SoapException
     */
    public function assignProductCategoriesToUser(\Flexsim\FlexnetOperations\Type\HandleProductCategoriesToUserRequestType $assignProductCategoriesToUserRequest) : \Flexsim\FlexnetOperations\Type\HandleProductCategoriesToUserResponseType
    {
        return ($this->caller)('assignProductCategoriesToUser', $assignProductCategoriesToUserRequest);
    }

    /**
     * @param RequestInterface|Type\HandleProductCategoriesToUserRequestType $removeProductCategoriesFromUserRequest
     * @return ResultInterface|Type\HandleProductCategoriesToUserResponseType
     * @throws SoapException
     */
    public function removeProductCategoriesFromUser(\Flexsim\FlexnetOperations\Type\HandleProductCategoriesToUserRequestType $removeProductCategoriesFromUserRequest) : \Flexsim\FlexnetOperations\Type\HandleProductCategoriesToUserResponseType
    {
        return ($this->caller)('removeProductCategoriesFromUser', $removeProductCategoriesFromUserRequest);
    }

    /**
     * @param RequestInterface|Type\GetUsersForProductCategoryRequestType $getUsersForProductCategoryRequest
     * @return ResultInterface|Type\GetUsersForProductCategoryResponseType
     * @throws SoapException
     */
    public function getUsersForProductCategory(\Flexsim\FlexnetOperations\Type\GetUsersForProductCategoryRequestType $getUsersForProductCategoryRequest) : \Flexsim\FlexnetOperations\Type\GetUsersForProductCategoryResponseType
    {
        return ($this->caller)('getUsersForProductCategory', $getUsersForProductCategoryRequest);
    }

    /**
     * @param RequestInterface|Type\HandleProductCategoryToOrgRequestType $assignProductCategoriesToOrgRequest
     * @return ResultInterface|Type\HandleProductCategoryToOrgResponseType
     * @throws SoapException
     */
    public function assignProductCategoriesToOrg(\Flexsim\FlexnetOperations\Type\HandleProductCategoryToOrgRequestType $assignProductCategoriesToOrgRequest) : \Flexsim\FlexnetOperations\Type\HandleProductCategoryToOrgResponseType
    {
        return ($this->caller)('assignProductCategoriesToOrg', $assignProductCategoriesToOrgRequest);
    }

    /**
     * @param RequestInterface|Type\HandleProductCategoryToOrgRequestType $removeProductCategoriesFromOrgRequest
     * @return ResultInterface|Type\HandleProductCategoryToOrgResponseType
     * @throws SoapException
     */
    public function removeProductCategoriesFromOrg(\Flexsim\FlexnetOperations\Type\HandleProductCategoryToOrgRequestType $removeProductCategoriesFromOrgRequest) : \Flexsim\FlexnetOperations\Type\HandleProductCategoryToOrgResponseType
    {
        return ($this->caller)('removeProductCategoriesFromOrg', $removeProductCategoriesFromOrgRequest);
    }

    /**
     * @param RequestInterface|Type\IsEntitlementVisibleInTargetOrgRequestType $isEntitlementVisibleInTargetOrgRequest
     * @return ResultInterface|Type\IsEntitlementVisibleInTargetOrgResponseType
     * @throws SoapException
     */
    public function isEntitlementVisibleInTargetOrg(\Flexsim\FlexnetOperations\Type\IsEntitlementVisibleInTargetOrgRequestType $isEntitlementVisibleInTargetOrgRequest) : \Flexsim\FlexnetOperations\Type\IsEntitlementVisibleInTargetOrgResponseType
    {
        return ($this->caller)('isEntitlementVisibleInTargetOrg', $isEntitlementVisibleInTargetOrgRequest);
    }

    /**
     * @param RequestInterface|Type\IsFulfillmentVisibleInTargetOrgRequestType $isFulfillmentVisibleInTargetOrgRequest
     * @return ResultInterface|Type\IsFulfillmentVisibleInTargetOrgResponseType
     * @throws SoapException
     */
    public function isFulfillmentVisibleInTargetOrg(\Flexsim\FlexnetOperations\Type\IsFulfillmentVisibleInTargetOrgRequestType $isFulfillmentVisibleInTargetOrgRequest) : \Flexsim\FlexnetOperations\Type\IsFulfillmentVisibleInTargetOrgResponseType
    {
        return ($this->caller)('isFulfillmentVisibleInTargetOrg', $isFulfillmentVisibleInTargetOrgRequest);
    }

    /**
     * @param RequestInterface|Type\SetProductStateRequestType $setProductStateRequest
     * @return ResultInterface|Type\SetProductStateResponseType
     * @throws SoapException
     */
    public function setProductState(\Flexsim\FlexnetOperations\Type\SetProductStateRequestType $setProductStateRequest) : \Flexsim\FlexnetOperations\Type\SetProductStateResponseType
    {
        return ($this->caller)('setProductState', $setProductStateRequest);
    }

    /**
     * @param RequestInterface|Type\CreateMaintenanceRequestType $createMaintenanceRequest
     * @return ResultInterface|Type\CreateMaintenanceResponseType
     * @throws SoapException
     */
    public function createMaintenance(\Flexsim\FlexnetOperations\Type\CreateMaintenanceRequestType $createMaintenanceRequest) : \Flexsim\FlexnetOperations\Type\CreateMaintenanceResponseType
    {
        return ($this->caller)('createMaintenance', $createMaintenanceRequest);
    }

    /**
     * @param RequestInterface|Type\UpdateMaintenanceRequestType $updateMaintenanceRequest
     * @return ResultInterface|Type\UpdateMaintenanceResponseType
     * @throws SoapException
     */
    public function updateMaintenance(\Flexsim\FlexnetOperations\Type\UpdateMaintenanceRequestType $updateMaintenanceRequest) : \Flexsim\FlexnetOperations\Type\UpdateMaintenanceResponseType
    {
        return ($this->caller)('updateMaintenance', $updateMaintenanceRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteMaintenanceRequestType $deleteMaintenanceRequest
     * @return ResultInterface|Type\DeleteMaintenanceResponseType
     * @throws SoapException
     */
    public function deleteMaintenance(\Flexsim\FlexnetOperations\Type\DeleteMaintenanceRequestType $deleteMaintenanceRequest) : \Flexsim\FlexnetOperations\Type\DeleteMaintenanceResponseType
    {
        return ($this->caller)('deleteMaintenance', $deleteMaintenanceRequest);
    }

    /**
     * @param RequestInterface|Type\GetMaintenanceCountRequestType $getMaintenanceCountRequest
     * @return ResultInterface|Type\GetMaintenanceCountResponseType
     * @throws SoapException
     */
    public function getMaintenanceCount(\Flexsim\FlexnetOperations\Type\GetMaintenanceCountRequestType $getMaintenanceCountRequest) : \Flexsim\FlexnetOperations\Type\GetMaintenanceCountResponseType
    {
        return ($this->caller)('getMaintenanceCount', $getMaintenanceCountRequest);
    }

    /**
     * @param RequestInterface|Type\GetMaintenanceQueryRequestType $getMaintenanceQueryRequest
     * @return ResultInterface|Type\GetMaintenanceQueryResponseType
     * @throws SoapException
     */
    public function getMaintenanceQuery(\Flexsim\FlexnetOperations\Type\GetMaintenanceQueryRequestType $getMaintenanceQueryRequest) : \Flexsim\FlexnetOperations\Type\GetMaintenanceQueryResponseType
    {
        return ($this->caller)('getMaintenanceQuery', $getMaintenanceQueryRequest);
    }

    /**
     * @param RequestInterface|Type\SetMaintenanceStateRequestType $setMaintenanceStateRequest
     * @return ResultInterface|Type\SetMaintenanceStateResponseType
     * @throws SoapException
     */
    public function setMaintenanceState(\Flexsim\FlexnetOperations\Type\SetMaintenanceStateRequestType $setMaintenanceStateRequest) : \Flexsim\FlexnetOperations\Type\SetMaintenanceStateResponseType
    {
        return ($this->caller)('setMaintenanceState', $setMaintenanceStateRequest);
    }

    /**
     * @param RequestInterface|Type\CreateUniformSuiteRequestType $createUniformSuiteRequest
     * @return ResultInterface|Type\CreateUniformSuiteResponseType
     * @throws SoapException
     */
    public function createUniformSuite(\Flexsim\FlexnetOperations\Type\CreateUniformSuiteRequestType $createUniformSuiteRequest) : \Flexsim\FlexnetOperations\Type\CreateUniformSuiteResponseType
    {
        return ($this->caller)('createUniformSuite', $createUniformSuiteRequest);
    }

    /**
     * @param RequestInterface|Type\UpdateUniformSuiteRequestType $updateUniformSuiteRequest
     * @return ResultInterface|Type\UpdateUniformSuiteResponseType
     * @throws SoapException
     */
    public function updateUniformSuite(\Flexsim\FlexnetOperations\Type\UpdateUniformSuiteRequestType $updateUniformSuiteRequest) : \Flexsim\FlexnetOperations\Type\UpdateUniformSuiteResponseType
    {
        return ($this->caller)('updateUniformSuite', $updateUniformSuiteRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteUniformSuiteRequestType $deleteUniformSuiteRequest
     * @return ResultInterface|Type\DeleteUniformSuiteResponseType
     * @throws SoapException
     */
    public function deleteUniformSuite(\Flexsim\FlexnetOperations\Type\DeleteUniformSuiteRequestType $deleteUniformSuiteRequest) : \Flexsim\FlexnetOperations\Type\DeleteUniformSuiteResponseType
    {
        return ($this->caller)('deleteUniformSuite', $deleteUniformSuiteRequest);
    }

    /**
     * @param RequestInterface|Type\GetUniformSuiteCountRequestType $getUniformSuiteCountRequest
     * @return ResultInterface|Type\GetUniformSuiteCountResponseType
     * @throws SoapException
     */
    public function getUniformSuiteCount(\Flexsim\FlexnetOperations\Type\GetUniformSuiteCountRequestType $getUniformSuiteCountRequest) : \Flexsim\FlexnetOperations\Type\GetUniformSuiteCountResponseType
    {
        return ($this->caller)('getUniformSuiteCount', $getUniformSuiteCountRequest);
    }

    /**
     * @param RequestInterface|Type\GetUniformSuitesQueryRequestType $getUniformSuitesQueryRequest
     * @return ResultInterface|Type\GetUniformSuitesQueryResponseType
     * @throws SoapException
     */
    public function getUniformSuiteQuery(\Flexsim\FlexnetOperations\Type\GetUniformSuitesQueryRequestType $getUniformSuitesQueryRequest) : \Flexsim\FlexnetOperations\Type\GetUniformSuitesQueryResponseType
    {
        return ($this->caller)('getUniformSuiteQuery', $getUniformSuitesQueryRequest);
    }

    /**
     * @param RequestInterface|Type\SetUniformSuiteStateRequestType $setUniformSuiteStateRequest
     * @return ResultInterface|Type\SetUniformSuiteStateResponseType
     * @throws SoapException
     */
    public function setUniformSuiteState(\Flexsim\FlexnetOperations\Type\SetUniformSuiteStateRequestType $setUniformSuiteStateRequest) : \Flexsim\FlexnetOperations\Type\SetUniformSuiteStateResponseType
    {
        return ($this->caller)('setUniformSuiteState', $setUniformSuiteStateRequest);
    }

    /**
     * @param RequestInterface|Type\CreatePartNumberRequestType $createPartNumberRequest
     * @return ResultInterface|Type\CreatePartNumberResponseType
     * @throws SoapException
     */
    public function createPartNumber(\Flexsim\FlexnetOperations\Type\CreatePartNumberRequestType $createPartNumberRequest) : \Flexsim\FlexnetOperations\Type\CreatePartNumberResponseType
    {
        return ($this->caller)('createPartNumber', $createPartNumberRequest);
    }

    /**
     * @param RequestInterface|Type\DeletePartNumberRequestType $deletePartNumberRequest
     * @return ResultInterface|Type\DeletePartNumberResponseType
     * @throws SoapException
     */
    public function deletePartNumber(\Flexsim\FlexnetOperations\Type\DeletePartNumberRequestType $deletePartNumberRequest) : \Flexsim\FlexnetOperations\Type\DeletePartNumberResponseType
    {
        return ($this->caller)('deletePartNumber', $deletePartNumberRequest);
    }

    /**
     * @param RequestInterface|Type\GetPartNumberCountRequestType $getPartNumberCountRequest
     * @return ResultInterface|Type\GetPartNumberCountResponseType
     * @throws SoapException
     */
    public function getPartNumberCount(\Flexsim\FlexnetOperations\Type\GetPartNumberCountRequestType $getPartNumberCountRequest) : \Flexsim\FlexnetOperations\Type\GetPartNumberCountResponseType
    {
        return ($this->caller)('getPartNumberCount', $getPartNumberCountRequest);
    }

    /**
     * @param RequestInterface|Type\GetPartNumbersQueryRequestType $getPartNumbersQueryRequest
     * @return ResultInterface|Type\GetPartNumbersQueryResponseType
     * @throws SoapException
     */
    public function getPartNumbersQuery(\Flexsim\FlexnetOperations\Type\GetPartNumbersQueryRequestType $getPartNumbersQueryRequest) : \Flexsim\FlexnetOperations\Type\GetPartNumbersQueryResponseType
    {
        return ($this->caller)('getPartNumbersQuery', $getPartNumbersQueryRequest);
    }

    /**
     * @param RequestInterface|Type\CreateProductRelationshipRequestType $createProductRelationshipRequest
     * @return ResultInterface|Type\CreateProductRelationshipResponseType
     * @throws SoapException
     */
    public function createProductRelationship(\Flexsim\FlexnetOperations\Type\CreateProductRelationshipRequestType $createProductRelationshipRequest) : \Flexsim\FlexnetOperations\Type\CreateProductRelationshipResponseType
    {
        return ($this->caller)('createProductRelationship', $createProductRelationshipRequest);
    }

    /**
     * @param RequestInterface|Type\UpdateProductRelationshipRequestType $updateProductRelationshipRequest
     * @return ResultInterface|Type\UpdateProductRelationshipResponseType
     * @throws SoapException
     */
    public function updateProductRelationship(\Flexsim\FlexnetOperations\Type\UpdateProductRelationshipRequestType $updateProductRelationshipRequest) : \Flexsim\FlexnetOperations\Type\UpdateProductRelationshipResponseType
    {
        return ($this->caller)('updateProductRelationship', $updateProductRelationshipRequest);
    }

    /**
     * @param RequestInterface|Type\DeleteProductRelationshipRequestType $deleteProductRelationshipRequest
     * @return ResultInterface|Type\DeleteProductRelationshipResponseType
     * @throws SoapException
     */
    public function deleteProductRelationship(\Flexsim\FlexnetOperations\Type\DeleteProductRelationshipRequestType $deleteProductRelationshipRequest) : \Flexsim\FlexnetOperations\Type\DeleteProductRelationshipResponseType
    {
        return ($this->caller)('deleteProductRelationship', $deleteProductRelationshipRequest);
    }

    /**
     * @param RequestInterface|Type\GetProductRelationshipsRequestType $getProductRelationshipsRequest
     * @return ResultInterface|Type\GetProductRelationshipsResponseType
     * @throws SoapException
     */
    public function getProductRelationships(\Flexsim\FlexnetOperations\Type\GetProductRelationshipsRequestType $getProductRelationshipsRequest) : \Flexsim\FlexnetOperations\Type\GetProductRelationshipsResponseType
    {
        return ($this->caller)('getProductRelationships', $getProductRelationshipsRequest);
    }

    /**
     * @param RequestInterface|Type\GetModelIdentifiersRequestType $getModelIdentifiersRequest
     * @return ResultInterface|Type\GetModelIdentifiersResponseType
     * @throws SoapException
     */
    public function getLicenseModelIdentifiers(\Flexsim\FlexnetOperations\Type\GetModelIdentifiersRequestType $getModelIdentifiersRequest) : \Flexsim\FlexnetOperations\Type\GetModelIdentifiersResponseType
    {
        return ($this->caller)('getLicenseModelIdentifiers', $getModelIdentifiersRequest);
    }

    /**
     * @param RequestInterface|Type\GetTransactionKeyIdentifiersRequestType $getTransactionKeyIdentifiersRequest
     * @return ResultInterface|Type\GetTransactionKeyIdentifiersResponseType
     * @throws SoapException
     */
    public function getTransactionKeyIdentifiers(\Flexsim\FlexnetOperations\Type\GetTransactionKeyIdentifiersRequestType $getTransactionKeyIdentifiersRequest) : \Flexsim\FlexnetOperations\Type\GetTransactionKeyIdentifiersResponseType
    {
        return ($this->caller)('getTransactionKeyIdentifiers', $getTransactionKeyIdentifiersRequest);
    }

    /**
     * @param RequestInterface|Type\CreateOrganizationRequestType $createOrganizationRequest
     * @return ResultInterface|Type\CreateOrganizationResponseType
     * @throws SoapException
     */
    public function createOrganization(\Flexsim\FlexnetOperations\Type\CreateOrganizationRequestType $createOrganizationRequest) : \Flexsim\FlexnetOperations\Type\CreateOrganizationResponseType
    {
        return ($this->caller)('createOrganization', $createOrganizationRequest);
    }

    /**
     * @param RequestInterface|Type\GetLicenseTechnologyQueryRequestType $getLicenseTechnologyQueryRequest
     * @return ResultInterface|Type\GetLicenseTechnologyQueryResponseType
     * @throws SoapException
     */
    public function getLicenseTechnologiesQuery(\Flexsim\FlexnetOperations\Type\GetLicenseTechnologyQueryRequestType $getLicenseTechnologyQueryRequest) : \Flexsim\FlexnetOperations\Type\GetLicenseTechnologyQueryResponseType
    {
        return ($this->caller)('getLicenseTechnologiesQuery', $getLicenseTechnologyQueryRequest);
    }
}

