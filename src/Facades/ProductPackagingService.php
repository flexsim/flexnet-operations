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
 * @method static \Flexsim\FlexnetOperations\Type\CreateFeatureResponseType createFeature(\Flexsim\FlexnetOperations\Type\CreateFeatureRequestType $createFeatureRequest)
 * @method static \Flexsim\FlexnetOperations\Type\UpdateFeatureResponseType updateFeature(\Flexsim\FlexnetOperations\Type\UpdateFeatureRequestType $updateFeatureRequest)
 * @method static \Flexsim\FlexnetOperations\Type\DeleteFeatureResponseType deleteFeature(\Flexsim\FlexnetOperations\Type\DeleteFeatureRequestType $deleteFeatureRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetFeatureCountResponseType getFeatureCount(\Flexsim\FlexnetOperations\Type\GetFeatureCountRequestType $getFeatureCountRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetFeaturesQueryResponseType getFeaturesQuery(\Flexsim\FlexnetOperations\Type\GetFeaturesQueryRequestType $getFeaturesQueryRequest)
 * @method static \Flexsim\FlexnetOperations\Type\SetFeatureStateResponseType setFeatureState(\Flexsim\FlexnetOperations\Type\SetFeatureStateRequestType $setFeatureStateRequest)
 * @method static \Flexsim\FlexnetOperations\Type\CreateFeatureBundleResponseType createFeatureBundle(\Flexsim\FlexnetOperations\Type\CreateFeatureBundleRequestType $createFeatureBundleRequest)
 * @method static \Flexsim\FlexnetOperations\Type\UpdateFeatureBundleResponseType updateFeatureBundle(\Flexsim\FlexnetOperations\Type\UpdateFeatureBundleRequestType $updateFeatureBundleRequest)
 * @method static \Flexsim\FlexnetOperations\Type\DeleteFeatureBundleResponseType deleteFeatureBundle(\Flexsim\FlexnetOperations\Type\DeleteFeatureBundleRequestType $deleteFeatureBundleRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetFeatureBundleCountResponseType getFeatureBundleCount(\Flexsim\FlexnetOperations\Type\GetFeatureBundleCountRequestType $getFeatureBundleCountRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetFeatureBundlesQueryResponseType getFeatureBundlesQuery(\Flexsim\FlexnetOperations\Type\GetFeatureBundlesQueryRequestType $getFeatureBundlesQueryRequest)
 * @method static \Flexsim\FlexnetOperations\Type\SetFeatureBundleStateResponseType setFeatureBundleState(\Flexsim\FlexnetOperations\Type\SetFeatureBundleStateRequestType $setFeatureBundleStateRequest)
 * @method static \Flexsim\FlexnetOperations\Type\CreateProductResponseType createProduct(\Flexsim\FlexnetOperations\Type\CreateProductRequestType $createProductRequest)
 * @method static \Flexsim\FlexnetOperations\Type\UpdateProductResponseType updateProduct(\Flexsim\FlexnetOperations\Type\UpdateProductRequestType $updateProductRequest)
 * @method static \Flexsim\FlexnetOperations\Type\DeleteProductResponseType deleteProduct(\Flexsim\FlexnetOperations\Type\DeleteProductRequestType $deleteProductRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetProductCountResponseType getProductCount(\Flexsim\FlexnetOperations\Type\GetProductCountRequestType $getProductCountRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetProductsQueryResponseType getProductsQuery(\Flexsim\FlexnetOperations\Type\GetProductsQueryRequestType $getProductsQueryRequest)
 * @method static \Flexsim\FlexnetOperations\Type\CreateProductCategoryResponseType createProductCategory(\Flexsim\FlexnetOperations\Type\CreateProductCategoryRequestType $createProductCategoryRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetProductCategoriesResponseType getProductCategories(\Flexsim\FlexnetOperations\Type\GetProductCategoriesRequestType $getProductCategoriesRequest)
 * @method static \Flexsim\FlexnetOperations\Type\HandleProductCategoriesToUserResponseType assignProductCategoriesToUser(\Flexsim\FlexnetOperations\Type\HandleProductCategoriesToUserRequestType $assignProductCategoriesToUserRequest)
 * @method static \Flexsim\FlexnetOperations\Type\HandleProductCategoriesToUserResponseType removeProductCategoriesFromUser(\Flexsim\FlexnetOperations\Type\HandleProductCategoriesToUserRequestType $removeProductCategoriesFromUserRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetUsersForProductCategoryResponseType getUsersForProductCategory(\Flexsim\FlexnetOperations\Type\GetUsersForProductCategoryRequestType $getUsersForProductCategoryRequest)
 * @method static \Flexsim\FlexnetOperations\Type\HandleProductCategoryToAcctResponseType assignProductCategoriesToAcct(\Flexsim\FlexnetOperations\Type\HandleProductCategoryToAcctRequestType $assignProductCategoriesToAcctRequest)
 * @method static \Flexsim\FlexnetOperations\Type\HandleProductCategoryToAcctResponseType removeProductCategoriesFromAcct(\Flexsim\FlexnetOperations\Type\HandleProductCategoryToAcctRequestType $removeProductCategoriesFromAcctRequest)
 * @method static \Flexsim\FlexnetOperations\Type\SetProductStateResponseType setProductState(\Flexsim\FlexnetOperations\Type\SetProductStateRequestType $setProductStateRequest)
 * @method static \Flexsim\FlexnetOperations\Type\CreateMaintenanceResponseType createMaintenance(\Flexsim\FlexnetOperations\Type\CreateMaintenanceRequestType $createMaintenanceRequest)
 * @method static \Flexsim\FlexnetOperations\Type\UpdateMaintenanceResponseType updateMaintenance(\Flexsim\FlexnetOperations\Type\UpdateMaintenanceRequestType $updateMaintenanceRequest)
 * @method static \Flexsim\FlexnetOperations\Type\DeleteMaintenanceResponseType deleteMaintenance(\Flexsim\FlexnetOperations\Type\DeleteMaintenanceRequestType $deleteMaintenanceRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetMaintenanceCountResponseType getMaintenanceCount(\Flexsim\FlexnetOperations\Type\GetMaintenanceCountRequestType $getMaintenanceCountRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetMaintenanceQueryResponseType getMaintenanceQuery(\Flexsim\FlexnetOperations\Type\GetMaintenanceQueryRequestType $getMaintenanceQueryRequest)
 * @method static \Flexsim\FlexnetOperations\Type\SetMaintenanceStateResponseType setMaintenanceState(\Flexsim\FlexnetOperations\Type\SetMaintenanceStateRequestType $setMaintenanceStateRequest)
 * @method static \Flexsim\FlexnetOperations\Type\CreateUniformSuiteResponseType createUniformSuite(\Flexsim\FlexnetOperations\Type\CreateUniformSuiteRequestType $createUniformSuiteRequest)
 * @method static \Flexsim\FlexnetOperations\Type\UpdateUniformSuiteResponseType updateUniformSuite(\Flexsim\FlexnetOperations\Type\UpdateUniformSuiteRequestType $updateUniformSuiteRequest)
 * @method static \Flexsim\FlexnetOperations\Type\DeleteUniformSuiteResponseType deleteUniformSuite(\Flexsim\FlexnetOperations\Type\DeleteUniformSuiteRequestType $deleteUniformSuiteRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetUniformSuiteCountResponseType getUniformSuiteCount(\Flexsim\FlexnetOperations\Type\GetUniformSuiteCountRequestType $getUniformSuiteCountRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetUniformSuitesQueryResponseType getUniformSuiteQuery(\Flexsim\FlexnetOperations\Type\GetUniformSuitesQueryRequestType $getUniformSuitesQueryRequest)
 * @method static \Flexsim\FlexnetOperations\Type\SetUniformSuiteStateResponseType setUniformSuiteState(\Flexsim\FlexnetOperations\Type\SetUniformSuiteStateRequestType $setUniformSuiteStateRequest)
 * @method static \Flexsim\FlexnetOperations\Type\CreatePartNumberResponseType createPartNumber(\Flexsim\FlexnetOperations\Type\CreatePartNumberRequestType $createPartNumberRequest)
 * @method static \Flexsim\FlexnetOperations\Type\DeletePartNumberResponseType deletePartNumber(\Flexsim\FlexnetOperations\Type\DeletePartNumberRequestType $deletePartNumberRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetPartNumberCountResponseType getPartNumberCount(\Flexsim\FlexnetOperations\Type\GetPartNumberCountRequestType $getPartNumberCountRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetPartNumbersQueryResponseType getPartNumbersQuery(\Flexsim\FlexnetOperations\Type\GetPartNumbersQueryRequestType $getPartNumbersQueryRequest)
 * @method static \Flexsim\FlexnetOperations\Type\CreateProductRelationshipResponseType createProductRelationship(\Flexsim\FlexnetOperations\Type\CreateProductRelationshipRequestType $createProductRelationshipRequest)
 * @method static \Flexsim\FlexnetOperations\Type\UpdateProductRelationshipResponseType updateProductRelationship(\Flexsim\FlexnetOperations\Type\UpdateProductRelationshipRequestType $updateProductRelationshipRequest)
 * @method static \Flexsim\FlexnetOperations\Type\DeleteProductRelationshipResponseType deleteProductRelationship(\Flexsim\FlexnetOperations\Type\DeleteProductRelationshipRequestType $deleteProductRelationshipRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetProductRelationshipsResponseType getProductRelationships(\Flexsim\FlexnetOperations\Type\GetProductRelationshipsRequestType $getProductRelationshipsRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetModelIdentifiersResponseType getLicenseModelIdentifiers(\Flexsim\FlexnetOperations\Type\GetModelIdentifiersRequestType $getModelIdentifiersRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetTransactionKeyIdentifiersResponseType getTransactionKeyIdentifiers(\Flexsim\FlexnetOperations\Type\GetTransactionKeyIdentifiersRequestType $getTransactionKeyIdentifiersRequest)
 * @method static \Flexsim\FlexnetOperations\Type\GetLicenseTechnologyQueryResponseType getLicenseTechnologiesQuery(\Flexsim\FlexnetOperations\Type\GetLicenseTechnologyQueryRequestType $getLicenseTechnologyQueryRequest)
 *
 * @see \Flexsim\FlexnetOperations\FlexnetOperationsClientManager
 * @see \Flexsim\FlexnetOperations\Services\ProductPackagingService
 * @see \Flexsim\FlexnetOperations\Services\ProductPackagingService\v1
 * @see \Flexsim\FlexnetOperations\Services\ProductPackagingService\v2
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
        return 'flexnet-operations.product-packaging-service';
    }
}
