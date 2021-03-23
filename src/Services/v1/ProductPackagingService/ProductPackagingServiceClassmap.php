<?php

namespace Flexsim\FlexnetOperations\Services\v1\ProductPackagingService;

use Flexsim\FlexnetOperations\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class ProductPackagingServiceClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('groupMaskDataType', Type\GroupMaskDataType::class),
            new ClassMap('dupGroupDataType', Type\DupGroupDataType::class),
            new ClassMap('featureOverrideParamsType', Type\FeatureOverrideParamsType::class),
            new ClassMap('featureDataType', Type\FeatureDataType::class),
            new ClassMap('createFeatureRequestType', Type\CreateFeatureRequestType::class),
            new ClassMap('StatusInfoType', Type\StatusInfoType::class),
            new ClassMap('failedFeatureDataType', Type\FailedFeatureDataType::class),
            new ClassMap('failedFeatureDataListType', Type\FailedFeatureDataListType::class),
            new ClassMap('createdFeatureDataType', Type\CreatedFeatureDataType::class),
            new ClassMap('createdFeatureDataListType', Type\CreatedFeatureDataListType::class),
            new ClassMap('createFeatureResponseType', Type\CreateFeatureResponseType::class),
            new ClassMap('featurePKType', Type\FeaturePKType::class),
            new ClassMap('featureIdentifierType', Type\FeatureIdentifierType::class),
            new ClassMap('updateFeatureDataType', Type\UpdateFeatureDataType::class),
            new ClassMap('updateFeatureRequestType', Type\UpdateFeatureRequestType::class),
            new ClassMap('failedUpdateFeatureDataType', Type\FailedUpdateFeatureDataType::class),
            new ClassMap('failedUpdateFeatureDataListType', Type\FailedUpdateFeatureDataListType::class),
            new ClassMap('updateFeatureResponseType', Type\UpdateFeatureResponseType::class),
            new ClassMap('deleteFeatureDataType', Type\DeleteFeatureDataType::class),
            new ClassMap('deleteFeatureRequestType', Type\DeleteFeatureRequestType::class),
            new ClassMap('failedDeleteFeatureDataType', Type\FailedDeleteFeatureDataType::class),
            new ClassMap('failedDeleteFeatureDataListType', Type\FailedDeleteFeatureDataListType::class),
            new ClassMap('deleteFeatureResponseType', Type\DeleteFeatureResponseType::class),
            new ClassMap('SimpleQueryType', Type\SimpleQueryType::class),
            new ClassMap('VersionFormatQueryType', Type\VersionFormatQueryType::class),
            new ClassMap('StateQueryType', Type\StateQueryType::class),
            new ClassMap('DateQueryType', Type\DateQueryType::class),
            new ClassMap('featureQueryParametersType', Type\FeatureQueryParametersType::class),
            new ClassMap('getFeatureCountRequestType', Type\GetFeatureCountRequestType::class),
            new ClassMap('getCountResponseDataType', Type\GetCountResponseDataType::class),
            new ClassMap('getFeatureCountResponseType', Type\GetFeatureCountResponseType::class),
            new ClassMap('getFeaturesQueryRequestType', Type\GetFeaturesQueryRequestType::class),
            new ClassMap('featureQueryDataType', Type\FeatureQueryDataType::class),
            new ClassMap('getFeaturesQueryResponseDataType', Type\GetFeaturesQueryResponseDataType::class),
            new ClassMap('getFeaturesQueryResponseType', Type\GetFeaturesQueryResponseType::class),
            new ClassMap('featureStateDataType', Type\FeatureStateDataType::class),
            new ClassMap('setFeatureStateRequestType', Type\SetFeatureStateRequestType::class),
            new ClassMap('failedFeatureStateDataType', Type\FailedFeatureStateDataType::class),
            new ClassMap('failedFeatureStateDataListType', Type\FailedFeatureStateDataListType::class),
            new ClassMap('setFeatureStateResponseType', Type\SetFeatureStateResponseType::class),
            new ClassMap('featureIdentifierWithCountDataType', Type\FeatureIdentifierWithCountDataType::class),
            new ClassMap('featuresListType', Type\FeaturesListType::class),
            new ClassMap('createFeatureBundleDataType', Type\CreateFeatureBundleDataType::class),
            new ClassMap('createFeatureBundleRequestType', Type\CreateFeatureBundleRequestType::class),
            new ClassMap('failedFeatureBundleDataType', Type\FailedFeatureBundleDataType::class),
            new ClassMap('failedFeatureBundleDataListType', Type\FailedFeatureBundleDataListType::class),
            new ClassMap('correlationDataType', Type\CorrelationDataType::class),
            new ClassMap('createdFeatureBundleDataListType', Type\CreatedFeatureBundleDataListType::class),
            new ClassMap('createFeatureBundleResponseType', Type\CreateFeatureBundleResponseType::class),
            new ClassMap('featureBundlePKType', Type\FeatureBundlePKType::class),
            new ClassMap('featureBundleIdentifierType', Type\FeatureBundleIdentifierType::class),
            new ClassMap('updateFeaturesListType', Type\UpdateFeaturesListType::class),
            new ClassMap('updateFeatureBundleDataType', Type\UpdateFeatureBundleDataType::class),
            new ClassMap('updateFeatureBundleRequestType', Type\UpdateFeatureBundleRequestType::class),
            new ClassMap('failedUpdateFeatureBundleDataType', Type\FailedUpdateFeatureBundleDataType::class),
            new ClassMap('failedUpdateFeatureBundleDataListType', Type\FailedUpdateFeatureBundleDataListType::class),
            new ClassMap('updateFeatureBundleResponseType', Type\UpdateFeatureBundleResponseType::class),
            new ClassMap('deleteFeatureBundleDataType', Type\DeleteFeatureBundleDataType::class),
            new ClassMap('deleteFeatureBundleRequestType', Type\DeleteFeatureBundleRequestType::class),
            new ClassMap('failedDeleteFeatureBundleDataType', Type\FailedDeleteFeatureBundleDataType::class),
            new ClassMap('failedDeleteFeatureBundleDataListType', Type\FailedDeleteFeatureBundleDataListType::class),
            new ClassMap('deleteFeatureBundleResponseType', Type\DeleteFeatureBundleResponseType::class),
            new ClassMap('featureBundleQueryParametersType', Type\FeatureBundleQueryParametersType::class),
            new ClassMap('getFeatureBundleCountRequestType', Type\GetFeatureBundleCountRequestType::class),
            new ClassMap('getFeatureBundleCountResponseType', Type\GetFeatureBundleCountResponseType::class),
            new ClassMap('getFeatureBundlesQueryRequestType', Type\GetFeatureBundlesQueryRequestType::class),
            new ClassMap('featureBundleQueryDataType', Type\FeatureBundleQueryDataType::class),
            new ClassMap('getFeatureBundlesQueryResponseDataType', Type\GetFeatureBundlesQueryResponseDataType::class),
            new ClassMap('getFeatureBundlesQueryResponseType', Type\GetFeatureBundlesQueryResponseType::class),
            new ClassMap('featureBundleStateDataType', Type\FeatureBundleStateDataType::class),
            new ClassMap('setFeatureBundleStateRequestType', Type\SetFeatureBundleStateRequestType::class),
            new ClassMap('failedFeatureBundleStateDataType', Type\FailedFeatureBundleStateDataType::class),
            new ClassMap('failedFeatureBundleStateDataListType', Type\FailedFeatureBundleStateDataListType::class),
            new ClassMap('setFeatureBundleStateResponseType', Type\SetFeatureBundleStateResponseType::class),
            new ClassMap('licenseTechnologyPKType', Type\LicenseTechnologyPKType::class),
            new ClassMap('licenseTechnologyIdentifierType', Type\LicenseTechnologyIdentifierType::class),
            new ClassMap('licenseGeneratorPKType', Type\LicenseGeneratorPKType::class),
            new ClassMap('licenseGeneratorIdentifierType', Type\LicenseGeneratorIdentifierType::class),
            new ClassMap('packagePropertiesDataType', Type\PackagePropertiesDataType::class),
            new ClassMap('featureBundleIdentifierWithCountDataType', Type\FeatureBundleIdentifierWithCountDataType::class),
            new ClassMap('featureBundlesListType', Type\FeatureBundlesListType::class),
            new ClassMap('licenseModelPKType', Type\LicenseModelPKType::class),
            new ClassMap('licenseModelIdentifierType', Type\LicenseModelIdentifierType::class),
            new ClassMap('licenseModelsListType', Type\LicenseModelsListType::class),
            new ClassMap('trustedKeyPKType', Type\TrustedKeyPKType::class),
            new ClassMap('trustedKeyIdentifierType', Type\TrustedKeyIdentifierType::class),
            new ClassMap('partNumberPKType', Type\PartNumberPKType::class),
            new ClassMap('partNumberIdentifierWithModelType', Type\PartNumberIdentifierWithModelType::class),
            new ClassMap('partNumbersListType', Type\PartNumbersListType::class),
            new ClassMap('hostTypePKType', Type\HostTypePKType::class),
            new ClassMap('hostTypeListType', Type\HostTypeListType::class),
            new ClassMap('attributeDescriptorType', Type\AttributeDescriptorType::class),
            new ClassMap('attributeDescriptorDataType', Type\AttributeDescriptorDataType::class),
            new ClassMap('createProductDataType', Type\CreateProductDataType::class),
            new ClassMap('createProductRequestType', Type\CreateProductRequestType::class),
            new ClassMap('failedProductDataType', Type\FailedProductDataType::class),
            new ClassMap('failedProductDataListType', Type\FailedProductDataListType::class),
            new ClassMap('createdProductDataType', Type\CreatedProductDataType::class),
            new ClassMap('createdProductDataListType', Type\CreatedProductDataListType::class),
            new ClassMap('createProductResponseType', Type\CreateProductResponseType::class),
            new ClassMap('productPKType', Type\ProductPKType::class),
            new ClassMap('productIdentifierType', Type\ProductIdentifierType::class),
            new ClassMap('updateFeatureBundlesListType', Type\UpdateFeatureBundlesListType::class),
            new ClassMap('updatePartNumbersListType', Type\UpdatePartNumbersListType::class),
            new ClassMap('updateLicenseModelsListType', Type\UpdateLicenseModelsListType::class),
            new ClassMap('updateHostTypeListType', Type\UpdateHostTypeListType::class),
            new ClassMap('updateProductDataType', Type\UpdateProductDataType::class),
            new ClassMap('updateProductRequestType', Type\UpdateProductRequestType::class),
            new ClassMap('failedUpdateProductDataType', Type\FailedUpdateProductDataType::class),
            new ClassMap('failedUpdateProductDataListType', Type\FailedUpdateProductDataListType::class),
            new ClassMap('updateProductResponseType', Type\UpdateProductResponseType::class),
            new ClassMap('deleteProductDataType', Type\DeleteProductDataType::class),
            new ClassMap('deleteProductRequestType', Type\DeleteProductRequestType::class),
            new ClassMap('failedDeleteProductDataType', Type\FailedDeleteProductDataType::class),
            new ClassMap('failedDeleteProductDataListType', Type\FailedDeleteProductDataListType::class),
            new ClassMap('deleteProductResponseType', Type\DeleteProductResponseType::class),
            new ClassMap('prodCustomAttributeQueryType', Type\ProdCustomAttributeQueryType::class),
            new ClassMap('prodCustomAttributesQueryListType', Type\ProdCustomAttributesQueryListType::class),
            new ClassMap('productQueryParametersType', Type\ProductQueryParametersType::class),
            new ClassMap('getProductCountRequestType', Type\GetProductCountRequestType::class),
            new ClassMap('getProductCountResponseType', Type\GetProductCountResponseType::class),
            new ClassMap('getProductsQueryRequestType', Type\GetProductsQueryRequestType::class),
            new ClassMap('productQueryDataType', Type\ProductQueryDataType::class),
            new ClassMap('getProductsQueryResponseDataType', Type\GetProductsQueryResponseDataType::class),
            new ClassMap('getProductsQueryResponseType', Type\GetProductsQueryResponseType::class),
            new ClassMap('createProductCategoryDataType', Type\CreateProductCategoryDataType::class),
            new ClassMap('createProductCategoryRequestType', Type\CreateProductCategoryRequestType::class),
            new ClassMap('failedProductCategoryDataType', Type\FailedProductCategoryDataType::class),
            new ClassMap('failedProductCategoryDataListType', Type\FailedProductCategoryDataListType::class),
            new ClassMap('createdProductCategoryDataType', Type\CreatedProductCategoryDataType::class),
            new ClassMap('createdProductCategoryDataListType', Type\CreatedProductCategoryDataListType::class),
            new ClassMap('createProductCategoryResponseType', Type\CreateProductCategoryResponseType::class),
            new ClassMap('getProductCategoriesRequestType', Type\GetProductCategoriesRequestType::class),
            new ClassMap('valueType', Type\ValueType::class),
            new ClassMap('categoryAttributeDataType', Type\CategoryAttributeDataType::class),
            new ClassMap('categoryAttributesDataType', Type\CategoryAttributesDataType::class),
            new ClassMap('productCategoryDataType', Type\ProductCategoryDataType::class),
            new ClassMap('getProductCategoriesResponseDataType', Type\GetProductCategoriesResponseDataType::class),
            new ClassMap('getProductCategoriesResponseType', Type\GetProductCategoriesResponseType::class),
            new ClassMap('userPKType', Type\UserPKType::class),
            new ClassMap('userIdentifierType', Type\UserIdentifierType::class),
            new ClassMap('handleProductCategoriesToUserRequestType', Type\HandleProductCategoriesToUserRequestType::class),
            new ClassMap('handleProductCategoriesToUserResponseType', Type\HandleProductCategoriesToUserResponseType::class),
            new ClassMap('getUsersForProductCategoryRequestType', Type\GetUsersForProductCategoryRequestType::class),
            new ClassMap('getUsersForProductCategoryResponseDataType', Type\GetUsersForProductCategoryResponseDataType::class),
            new ClassMap('getUsersForProductCategoryResponseType', Type\GetUsersForProductCategoryResponseType::class),
            new ClassMap('organizationPKType', Type\OrganizationPKType::class),
            new ClassMap('organizationIdentifierType', Type\OrganizationIdentifierType::class),
            new ClassMap('handleProductCategoryToOrgRequestType', Type\HandleProductCategoryToOrgRequestType::class),
            new ClassMap('handleProductCategoryToOrgResponseType', Type\HandleProductCategoryToOrgResponseType::class),
            new ClassMap('productStateDataType', Type\ProductStateDataType::class),
            new ClassMap('setProductStateRequestType', Type\SetProductStateRequestType::class),
            new ClassMap('failedProductStateDataType', Type\FailedProductStateDataType::class),
            new ClassMap('failedProductStateDataListType', Type\FailedProductStateDataListType::class),
            new ClassMap('setProductStateResponseType', Type\SetProductStateResponseType::class),
            new ClassMap('partNumberIdentifierType', Type\PartNumberIdentifierType::class),
            new ClassMap('partNumbersSimpleListType', Type\PartNumbersSimpleListType::class),
            new ClassMap('createMaintenanceDataType', Type\CreateMaintenanceDataType::class),
            new ClassMap('createMaintenanceRequestType', Type\CreateMaintenanceRequestType::class),
            new ClassMap('failedMaintenanceDataType', Type\FailedMaintenanceDataType::class),
            new ClassMap('failedMaintenanceDataListType', Type\FailedMaintenanceDataListType::class),
            new ClassMap('createdMaintenaceDataType', Type\CreatedMaintenaceDataType::class),
            new ClassMap('createdMaintenanceDataListType', Type\CreatedMaintenanceDataListType::class),
            new ClassMap('createMaintenanceResponseType', Type\CreateMaintenanceResponseType::class),
            new ClassMap('maintenancePKType', Type\MaintenancePKType::class),
            new ClassMap('maintenanceIdentifierType', Type\MaintenanceIdentifierType::class),
            new ClassMap('updatePartNumbersSimpleListType', Type\UpdatePartNumbersSimpleListType::class),
            new ClassMap('updateMaintenanceDataType', Type\UpdateMaintenanceDataType::class),
            new ClassMap('updateMaintenanceRequestType', Type\UpdateMaintenanceRequestType::class),
            new ClassMap('failedUpdateMaintenanceDataType', Type\FailedUpdateMaintenanceDataType::class),
            new ClassMap('failedUpdateMaintenanceDataListType', Type\FailedUpdateMaintenanceDataListType::class),
            new ClassMap('updateMaintenanceResponseType', Type\UpdateMaintenanceResponseType::class),
            new ClassMap('deleteMaintenanceDataType', Type\DeleteMaintenanceDataType::class),
            new ClassMap('deleteMaintenanceRequestType', Type\DeleteMaintenanceRequestType::class),
            new ClassMap('failedDeleteMaintenanceDataType', Type\FailedDeleteMaintenanceDataType::class),
            new ClassMap('failedDeleteMaintenanceDataListType', Type\FailedDeleteMaintenanceDataListType::class),
            new ClassMap('deleteMaintenanceResponseType', Type\DeleteMaintenanceResponseType::class),
            new ClassMap('maintenanceQueryParametersType', Type\MaintenanceQueryParametersType::class),
            new ClassMap('getMaintenanceCountRequestType', Type\GetMaintenanceCountRequestType::class),
            new ClassMap('getMaintenanceCountResponseType', Type\GetMaintenanceCountResponseType::class),
            new ClassMap('getMaintenanceQueryRequestType', Type\GetMaintenanceQueryRequestType::class),
            new ClassMap('maintenanceQueryDataType', Type\MaintenanceQueryDataType::class),
            new ClassMap('getMaintenanceQueryResponseDataType', Type\GetMaintenanceQueryResponseDataType::class),
            new ClassMap('getMaintenanceQueryResponseType', Type\GetMaintenanceQueryResponseType::class),
            new ClassMap('maintenanceStateDataType', Type\MaintenanceStateDataType::class),
            new ClassMap('setMaintenanceStateRequestType', Type\SetMaintenanceStateRequestType::class),
            new ClassMap('failedMaintenanceStateDataType', Type\FailedMaintenanceStateDataType::class),
            new ClassMap('failedMaintenanceStateDataListType', Type\FailedMaintenanceStateDataListType::class),
            new ClassMap('setMaintenanceStateResponseType', Type\SetMaintenanceStateResponseType::class),
            new ClassMap('productIdentifierWithCountDataType', Type\ProductIdentifierWithCountDataType::class),
            new ClassMap('productsListType', Type\ProductsListType::class),
            new ClassMap('createUniformSuiteDataType', Type\CreateUniformSuiteDataType::class),
            new ClassMap('createUniformSuiteRequestType', Type\CreateUniformSuiteRequestType::class),
            new ClassMap('failedUniformSuiteDataType', Type\FailedUniformSuiteDataType::class),
            new ClassMap('failedUniformSuiteDataListType', Type\FailedUniformSuiteDataListType::class),
            new ClassMap('createdUniformSuiteDataType', Type\CreatedUniformSuiteDataType::class),
            new ClassMap('createdUniformSuiteDataListType', Type\CreatedUniformSuiteDataListType::class),
            new ClassMap('createUniformSuiteResponseType', Type\CreateUniformSuiteResponseType::class),
            new ClassMap('suitePKType', Type\SuitePKType::class),
            new ClassMap('suiteIdentifierType', Type\SuiteIdentifierType::class),
            new ClassMap('updateProductsListType', Type\UpdateProductsListType::class),
            new ClassMap('updateUniformSuiteDataType', Type\UpdateUniformSuiteDataType::class),
            new ClassMap('updateUniformSuiteRequestType', Type\UpdateUniformSuiteRequestType::class),
            new ClassMap('failedUpdateUniformSuiteDataType', Type\FailedUpdateUniformSuiteDataType::class),
            new ClassMap('failedUpdateUniformSuiteDataListType', Type\FailedUpdateUniformSuiteDataListType::class),
            new ClassMap('updateUniformSuiteResponseType', Type\UpdateUniformSuiteResponseType::class),
            new ClassMap('deleteUniformSuiteDataType', Type\DeleteUniformSuiteDataType::class),
            new ClassMap('deleteUniformSuiteRequestType', Type\DeleteUniformSuiteRequestType::class),
            new ClassMap('failedDeleteUniformSuiteDataType', Type\FailedDeleteUniformSuiteDataType::class),
            new ClassMap('failedDeleteUniformSuiteDataListType', Type\FailedDeleteUniformSuiteDataListType::class),
            new ClassMap('deleteUniformSuiteResponseType', Type\DeleteUniformSuiteResponseType::class),
            new ClassMap('suiteCustomAttributeQueryType', Type\SuiteCustomAttributeQueryType::class),
            new ClassMap('suiteCustomAttributesQueryListType', Type\SuiteCustomAttributesQueryListType::class),
            new ClassMap('suiteQueryParametersType', Type\SuiteQueryParametersType::class),
            new ClassMap('getUniformSuiteCountRequestType', Type\GetUniformSuiteCountRequestType::class),
            new ClassMap('getUniformSuiteCountResponseType', Type\GetUniformSuiteCountResponseType::class),
            new ClassMap('getUniformSuitesQueryRequestType', Type\GetUniformSuitesQueryRequestType::class),
            new ClassMap('uniformSuiteQueryDataType', Type\UniformSuiteQueryDataType::class),
            new ClassMap('getUniformSuitesQueryResponseDataType', Type\GetUniformSuitesQueryResponseDataType::class),
            new ClassMap('getUniformSuitesQueryResponseType', Type\GetUniformSuitesQueryResponseType::class),
            new ClassMap('uniformSuiteStateDataType', Type\UniformSuiteStateDataType::class),
            new ClassMap('setUniformSuiteStateRequestType', Type\SetUniformSuiteStateRequestType::class),
            new ClassMap('failedUniformSuiteStateDataType', Type\FailedUniformSuiteStateDataType::class),
            new ClassMap('failedUniformSuiteStateDataListType', Type\FailedUniformSuiteStateDataListType::class),
            new ClassMap('setUniformSuiteStateResponseType', Type\SetUniformSuiteStateResponseType::class),
            new ClassMap('createPartNumberDataType', Type\CreatePartNumberDataType::class),
            new ClassMap('createPartNumberRequestType', Type\CreatePartNumberRequestType::class),
            new ClassMap('failedPartNumberDataType', Type\FailedPartNumberDataType::class),
            new ClassMap('failedPartNumberDataListType', Type\FailedPartNumberDataListType::class),
            new ClassMap('createdPartNumberDataType', Type\CreatedPartNumberDataType::class),
            new ClassMap('createdPartNumberDataListType', Type\CreatedPartNumberDataListType::class),
            new ClassMap('createPartNumberResponseType', Type\CreatePartNumberResponseType::class),
            new ClassMap('deletePartNumberDataType', Type\DeletePartNumberDataType::class),
            new ClassMap('deletePartNumberRequestType', Type\DeletePartNumberRequestType::class),
            new ClassMap('failedDeletePartNumberDataType', Type\FailedDeletePartNumberDataType::class),
            new ClassMap('failedDeletePartNumberDataListType', Type\FailedDeletePartNumberDataListType::class),
            new ClassMap('deletePartNumberResponseType', Type\DeletePartNumberResponseType::class),
            new ClassMap('partNumberQueryParametersType', Type\PartNumberQueryParametersType::class),
            new ClassMap('getPartNumberCountRequestType', Type\GetPartNumberCountRequestType::class),
            new ClassMap('partNumberCountDataType', Type\PartNumberCountDataType::class),
            new ClassMap('getPartNumberCountResponseType', Type\GetPartNumberCountResponseType::class),
            new ClassMap('getPartNumbersQueryRequestType', Type\GetPartNumbersQueryRequestType::class),
            new ClassMap('partNumberDataType', Type\PartNumberDataType::class),
            new ClassMap('partNumberDataListType', Type\PartNumberDataListType::class),
            new ClassMap('getPartNumbersQueryResponseType', Type\GetPartNumbersQueryResponseType::class),
            new ClassMap('productRelationshipDataType', Type\ProductRelationshipDataType::class),
            new ClassMap('updateProductRelationshipDataType', Type\UpdateProductRelationshipDataType::class),
            new ClassMap('createProductRelationshipRequestType', Type\CreateProductRelationshipRequestType::class),
            new ClassMap('failedProductRelationshipDataType', Type\FailedProductRelationshipDataType::class),
            new ClassMap('failedProductRelationshipDataListType', Type\FailedProductRelationshipDataListType::class),
            new ClassMap('createProductRelationshipResponseType', Type\CreateProductRelationshipResponseType::class),
            new ClassMap('updateProductRelationshipRequestType', Type\UpdateProductRelationshipRequestType::class),
            new ClassMap('failedUpdateProductRelationshipDataType', Type\FailedUpdateProductRelationshipDataType::class),
            new ClassMap('failedUpdateProductRelationshipDataListType', Type\FailedUpdateProductRelationshipDataListType::class),
            new ClassMap('updateProductRelationshipResponseType', Type\UpdateProductRelationshipResponseType::class),
            new ClassMap('deleteProductRelationshipRequestType', Type\DeleteProductRelationshipRequestType::class),
            new ClassMap('deleteProductRelationshipResponseType', Type\DeleteProductRelationshipResponseType::class),
            new ClassMap('getProductRelationshipsRequestType', Type\GetProductRelationshipsRequestType::class),
            new ClassMap('getProductRelationshipsResponseType', Type\GetProductRelationshipsResponseType::class),
            new ClassMap('identifierQueryParametersType', Type\IdentifierQueryParametersType::class),
            new ClassMap('getModelIdentifiersRequestType', Type\GetModelIdentifiersRequestType::class),
            new ClassMap('modelAttributesType', Type\ModelAttributesType::class),
            new ClassMap('licenseModelDetailsType', Type\LicenseModelDetailsType::class),
            new ClassMap('modelIdentifiersDataListType', Type\ModelIdentifiersDataListType::class),
            new ClassMap('getModelIdentifiersResponseType', Type\GetModelIdentifiersResponseType::class),
            new ClassMap('getTransactionKeyIdentifiersRequestType', Type\GetTransactionKeyIdentifiersRequestType::class),
            new ClassMap('transactionKeyIdentifiersDataListType', Type\TransactionKeyIdentifiersDataListType::class),
            new ClassMap('getTransactionKeyIdentifiersResponseType', Type\GetTransactionKeyIdentifiersResponseType::class),
            new ClassMap('organizationBasicDataType', Type\OrganizationBasicDataType::class),
            new ClassMap('createOrganizationRequestType', Type\CreateOrganizationRequestType::class),
            new ClassMap('createdOrgDataType', Type\CreatedOrgDataType::class),
            new ClassMap('createdOrgDataListType', Type\CreatedOrgDataListType::class),
            new ClassMap('failedOrgDataType', Type\FailedOrgDataType::class),
            new ClassMap('failedOrgDataListType', Type\FailedOrgDataListType::class),
            new ClassMap('createOrganizationResponseType', Type\CreateOrganizationResponseType::class),
            new ClassMap('licenseTechnologyQueryParametersType', Type\LicenseTechnologyQueryParametersType::class),
            new ClassMap('getLicenseTechnologyQueryRequestType', Type\GetLicenseTechnologyQueryRequestType::class),
            new ClassMap('licenseGeneratorsDetailsType', Type\LicenseGeneratorsDetailsType::class),
            new ClassMap('licenseTechnologyDetailsType', Type\LicenseTechnologyDetailsType::class),
            new ClassMap('licenseTechnologyDataListType', Type\LicenseTechnologyDataListType::class),
            new ClassMap('getLicenseTechnologyQueryResponseType', Type\GetLicenseTechnologyQueryResponseType::class),
        ]);
    }


}

