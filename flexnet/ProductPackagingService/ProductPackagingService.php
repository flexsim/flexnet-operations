<?php

namespace Flexnet\ProductPackagingService;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Flexnet\ProductPackagingService\Type\CreateFeatureResponseType createFeature(\Flexnet\ProductPackagingService\Type\CreateFeatureRequestType $createFeatureRequest)
 * @method static \Flexnet\ProductPackagingService\Type\UpdateFeatureResponseType updateFeature(\Flexnet\ProductPackagingService\Type\UpdateFeatureRequestType $updateFeatureRequest)
 * @method static \Flexnet\ProductPackagingService\Type\DeleteFeatureResponseType deleteFeature(\Flexnet\ProductPackagingService\Type\DeleteFeatureRequestType $deleteFeatureRequest)
 * @method static \Flexnet\ProductPackagingService\Type\GetFeatureCountResponseType getFeatureCount(\Flexnet\ProductPackagingService\Type\GetFeatureCountRequestType $getFeatureCountRequest)
 * @method static \Flexnet\ProductPackagingService\Type\GetFeaturesQueryResponseType getFeaturesQuery(\Flexnet\ProductPackagingService\Type\GetFeaturesQueryRequestType $getFeaturesQueryRequest)
 * @method static \Flexnet\ProductPackagingService\Type\SetFeatureStateResponseType setFeatureState(\Flexnet\ProductPackagingService\Type\SetFeatureStateRequestType $setFeatureStateRequest)
 * @method static \Flexnet\ProductPackagingService\Type\CreateFeatureBundleResponseType createFeatureBundle(\Flexnet\ProductPackagingService\Type\CreateFeatureBundleRequestType $createFeatureBundleRequest)
 * @method static \Flexnet\ProductPackagingService\Type\UpdateFeatureBundleResponseType updateFeatureBundle(\Flexnet\ProductPackagingService\Type\UpdateFeatureBundleRequestType $updateFeatureBundleRequest)
 * @method static \Flexnet\ProductPackagingService\Type\DeleteFeatureBundleResponseType deleteFeatureBundle(\Flexnet\ProductPackagingService\Type\DeleteFeatureBundleRequestType $deleteFeatureBundleRequest)
 * @method static \Flexnet\ProductPackagingService\Type\GetFeatureBundleCountResponseType getFeatureBundleCount(\Flexnet\ProductPackagingService\Type\GetFeatureBundleCountRequestType $getFeatureBundleCountRequest)
 * @method static \Flexnet\ProductPackagingService\Type\GetFeatureBundlesQueryResponseType getFeatureBundlesQuery(\Flexnet\ProductPackagingService\Type\GetFeatureBundlesQueryRequestType $getFeatureBundlesQueryRequest)
 * @method static \Flexnet\ProductPackagingService\Type\SetFeatureBundleStateResponseType setFeatureBundleState(\Flexnet\ProductPackagingService\Type\SetFeatureBundleStateRequestType $setFeatureBundleStateRequest)
 * @method static \Flexnet\ProductPackagingService\Type\CreateProductResponseType createProduct(\Flexnet\ProductPackagingService\Type\CreateProductRequestType $createProductRequest)
 * @method static \Flexnet\ProductPackagingService\Type\UpdateProductResponseType updateProduct(\Flexnet\ProductPackagingService\Type\UpdateProductRequestType $updateProductRequest)
 * @method static \Flexnet\ProductPackagingService\Type\DeleteProductResponseType deleteProduct(\Flexnet\ProductPackagingService\Type\DeleteProductRequestType $deleteProductRequest)
 * @method static \Flexnet\ProductPackagingService\Type\GetProductCountResponseType getProductCount(\Flexnet\ProductPackagingService\Type\GetProductCountRequestType $getProductCountRequest)
 * @method static \Flexnet\ProductPackagingService\Type\GetProductsQueryResponseType getProductsQuery(\Flexnet\ProductPackagingService\Type\GetProductsQueryRequestType $getProductsQueryRequest)
 * @method static \Flexnet\ProductPackagingService\Type\CreateProductCategoryResponseType createProductCategory(\Flexnet\ProductPackagingService\Type\CreateProductCategoryRequestType $createProductCategoryRequest)
 * @method static \Flexnet\ProductPackagingService\Type\GetProductCategoriesResponseType getProductCategories(\Flexnet\ProductPackagingService\Type\GetProductCategoriesRequestType $getProductCategoriesRequest)
 * @method static \Flexnet\ProductPackagingService\Type\HandleProductCategoriesToUserResponseType assignProductCategoriesToUser(\Flexnet\ProductPackagingService\Type\HandleProductCategoriesToUserRequestType $assignProductCategoriesToUserRequest)
 * @method static \Flexnet\ProductPackagingService\Type\HandleProductCategoriesToUserResponseType removeProductCategoriesFromUser(\Flexnet\ProductPackagingService\Type\HandleProductCategoriesToUserRequestType $removeProductCategoriesFromUserRequest)
 * @method static \Flexnet\ProductPackagingService\Type\GetUsersForProductCategoryResponseType getUsersForProductCategory(\Flexnet\ProductPackagingService\Type\GetUsersForProductCategoryRequestType $getUsersForProductCategoryRequest)
 * @method static \Flexnet\ProductPackagingService\Type\HandleProductCategoryToAcctResponseType assignProductCategoriesToAcct(\Flexnet\ProductPackagingService\Type\HandleProductCategoryToAcctRequestType $assignProductCategoriesToAcctRequest)
 * @method static \Flexnet\ProductPackagingService\Type\HandleProductCategoryToAcctResponseType removeProductCategoriesFromAcct(\Flexnet\ProductPackagingService\Type\HandleProductCategoryToAcctRequestType $removeProductCategoriesFromAcctRequest)
 * @method static \Flexnet\ProductPackagingService\Type\SetProductStateResponseType setProductState(\Flexnet\ProductPackagingService\Type\SetProductStateRequestType $setProductStateRequest)
 * @method static \Flexnet\ProductPackagingService\Type\CreateMaintenanceResponseType createMaintenance(\Flexnet\ProductPackagingService\Type\CreateMaintenanceRequestType $createMaintenanceRequest)
 * @method static \Flexnet\ProductPackagingService\Type\UpdateMaintenanceResponseType updateMaintenance(\Flexnet\ProductPackagingService\Type\UpdateMaintenanceRequestType $updateMaintenanceRequest)
 * @method static \Flexnet\ProductPackagingService\Type\DeleteMaintenanceResponseType deleteMaintenance(\Flexnet\ProductPackagingService\Type\DeleteMaintenanceRequestType $deleteMaintenanceRequest)
 * @method static \Flexnet\ProductPackagingService\Type\GetMaintenanceCountResponseType getMaintenanceCount(\Flexnet\ProductPackagingService\Type\GetMaintenanceCountRequestType $getMaintenanceCountRequest)
 * @method static \Flexnet\ProductPackagingService\Type\GetMaintenanceQueryResponseType getMaintenanceQuery(\Flexnet\ProductPackagingService\Type\GetMaintenanceQueryRequestType $getMaintenanceQueryRequest)
 * @method static \Flexnet\ProductPackagingService\Type\SetMaintenanceStateResponseType setMaintenanceState(\Flexnet\ProductPackagingService\Type\SetMaintenanceStateRequestType $setMaintenanceStateRequest)
 * @method static \Flexnet\ProductPackagingService\Type\CreateUniformSuiteResponseType createUniformSuite(\Flexnet\ProductPackagingService\Type\CreateUniformSuiteRequestType $createUniformSuiteRequest)
 * @method static \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteResponseType updateUniformSuite(\Flexnet\ProductPackagingService\Type\UpdateUniformSuiteRequestType $updateUniformSuiteRequest)
 * @method static \Flexnet\ProductPackagingService\Type\DeleteUniformSuiteResponseType deleteUniformSuite(\Flexnet\ProductPackagingService\Type\DeleteUniformSuiteRequestType $deleteUniformSuiteRequest)
 * @method static \Flexnet\ProductPackagingService\Type\GetUniformSuiteCountResponseType getUniformSuiteCount(\Flexnet\ProductPackagingService\Type\GetUniformSuiteCountRequestType $getUniformSuiteCountRequest)
 * @method static \Flexnet\ProductPackagingService\Type\GetUniformSuitesQueryResponseType getUniformSuiteQuery(\Flexnet\ProductPackagingService\Type\GetUniformSuitesQueryRequestType $getUniformSuitesQueryRequest)
 * @method static \Flexnet\ProductPackagingService\Type\SetUniformSuiteStateResponseType setUniformSuiteState(\Flexnet\ProductPackagingService\Type\SetUniformSuiteStateRequestType $setUniformSuiteStateRequest)
 * @method static \Flexnet\ProductPackagingService\Type\CreatePartNumberResponseType createPartNumber(\Flexnet\ProductPackagingService\Type\CreatePartNumberRequestType $createPartNumberRequest)
 * @method static \Flexnet\ProductPackagingService\Type\DeletePartNumberResponseType deletePartNumber(\Flexnet\ProductPackagingService\Type\DeletePartNumberRequestType $deletePartNumberRequest)
 * @method static \Flexnet\ProductPackagingService\Type\GetPartNumberCountResponseType getPartNumberCount(\Flexnet\ProductPackagingService\Type\GetPartNumberCountRequestType $getPartNumberCountRequest)
 * @method static \Flexnet\ProductPackagingService\Type\GetPartNumbersQueryResponseType getPartNumbersQuery(\Flexnet\ProductPackagingService\Type\GetPartNumbersQueryRequestType $getPartNumbersQueryRequest)
 * @method static \Flexnet\ProductPackagingService\Type\CreateProductRelationshipResponseType createProductRelationship(\Flexnet\ProductPackagingService\Type\CreateProductRelationshipRequestType $createProductRelationshipRequest)
 * @method static \Flexnet\ProductPackagingService\Type\UpdateProductRelationshipResponseType updateProductRelationship(\Flexnet\ProductPackagingService\Type\UpdateProductRelationshipRequestType $updateProductRelationshipRequest)
 * @method static \Flexnet\ProductPackagingService\Type\DeleteProductRelationshipResponseType deleteProductRelationship(\Flexnet\ProductPackagingService\Type\DeleteProductRelationshipRequestType $deleteProductRelationshipRequest)
 * @method static \Flexnet\ProductPackagingService\Type\GetProductRelationshipsResponseType getProductRelationships(\Flexnet\ProductPackagingService\Type\GetProductRelationshipsRequestType $getProductRelationshipsRequest)
 * @method static \Flexnet\ProductPackagingService\Type\GetModelIdentifiersResponseType getLicenseModelIdentifiers(\Flexnet\ProductPackagingService\Type\GetModelIdentifiersRequestType $getModelIdentifiersRequest)
 * @method static \Flexnet\ProductPackagingService\Type\GetTransactionKeyIdentifiersResponseType getTransactionKeyIdentifiers(\Flexnet\ProductPackagingService\Type\GetTransactionKeyIdentifiersRequestType $getTransactionKeyIdentifiersRequest)
 * @method static \Flexnet\ProductPackagingService\Type\GetLicenseTechnologyQueryResponseType getLicenseTechnologiesQuery(\Flexnet\ProductPackagingService\Type\GetLicenseTechnologyQueryRequestType $getLicenseTechnologyQueryRequest)
 *
 * @see \Flexnet\ProductPackagingService\ProductPackagingServiceClient
 */
class ProductPackagingService extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ProductPackagingServiceClient::class;
    }
}
