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

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param  RequestInterface & Type\CreateFeatureRequestType  $createFeatureRequest
     * @return ResultInterface & Type\CreateFeatureResponseType
     *
     * @throws SoapException
     */
    public function createFeature(\Flexnet\ProductPackagingService\Type\CreateFeatureRequestType $createFeatureRequest): \Flexnet\ProductPackagingService\Type\CreateFeatureResponseType
    {
        $response = ($this->caller)('createFeature', $createFeatureRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\CreateFeatureResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\UpdateFeatureRequestType  $updateFeatureRequest
     * @return ResultInterface & Type\UpdateFeatureResponseType
     *
     * @throws SoapException
     */
    public function updateFeature(\Flexnet\ProductPackagingService\Type\UpdateFeatureRequestType $updateFeatureRequest): \Flexnet\ProductPackagingService\Type\UpdateFeatureResponseType
    {
        $response = ($this->caller)('updateFeature', $updateFeatureRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\UpdateFeatureResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\DeleteFeatureRequestType  $deleteFeatureRequest
     * @return ResultInterface & Type\DeleteFeatureResponseType
     *
     * @throws SoapException
     */
    public function deleteFeature(\Flexnet\ProductPackagingService\Type\DeleteFeatureRequestType $deleteFeatureRequest): \Flexnet\ProductPackagingService\Type\DeleteFeatureResponseType
    {
        $response = ($this->caller)('deleteFeature', $deleteFeatureRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\DeleteFeatureResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetFeatureCountRequestType  $getFeatureCountRequest
     * @return ResultInterface & Type\GetFeatureCountResponseType
     *
     * @throws SoapException
     */
    public function getFeatureCount(\Flexnet\ProductPackagingService\Type\GetFeatureCountRequestType $getFeatureCountRequest): \Flexnet\ProductPackagingService\Type\GetFeatureCountResponseType
    {
        $response = ($this->caller)('getFeatureCount', $getFeatureCountRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\GetFeatureCountResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetFeaturesQueryRequestType  $getFeaturesQueryRequest
     * @return ResultInterface & Type\GetFeaturesQueryResponseType
     *
     * @throws SoapException
     */
    public function getFeaturesQuery(\Flexnet\ProductPackagingService\Type\GetFeaturesQueryRequestType $getFeaturesQueryRequest): \Flexnet\ProductPackagingService\Type\GetFeaturesQueryResponseType
    {
        $response = ($this->caller)('getFeaturesQuery', $getFeaturesQueryRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\GetFeaturesQueryResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\SetFeatureStateRequestType  $setFeatureStateRequest
     * @return ResultInterface & Type\SetFeatureStateResponseType
     *
     * @throws SoapException
     */
    public function setFeatureState(\Flexnet\ProductPackagingService\Type\SetFeatureStateRequestType $setFeatureStateRequest): \Flexnet\ProductPackagingService\Type\SetFeatureStateResponseType
    {
        $response = ($this->caller)('setFeatureState', $setFeatureStateRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\SetFeatureStateResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\CreateFeatureBundleRequestType  $createFeatureBundleRequest
     * @return ResultInterface & Type\CreateFeatureBundleResponseType
     *
     * @throws SoapException
     */
    public function createFeatureBundle(\Flexnet\ProductPackagingService\Type\CreateFeatureBundleRequestType $createFeatureBundleRequest): \Flexnet\ProductPackagingService\Type\CreateFeatureBundleResponseType
    {
        $response = ($this->caller)('createFeatureBundle', $createFeatureBundleRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\CreateFeatureBundleResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\UpdateFeatureBundleRequestType  $updateFeatureBundleRequest
     * @return ResultInterface & Type\UpdateFeatureBundleResponseType
     *
     * @throws SoapException
     */
    public function updateFeatureBundle(\Flexnet\ProductPackagingService\Type\UpdateFeatureBundleRequestType $updateFeatureBundleRequest): \Flexnet\ProductPackagingService\Type\UpdateFeatureBundleResponseType
    {
        $response = ($this->caller)('updateFeatureBundle', $updateFeatureBundleRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\UpdateFeatureBundleResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\DeleteFeatureBundleRequestType  $deleteFeatureBundleRequest
     * @return ResultInterface & Type\DeleteFeatureBundleResponseType
     *
     * @throws SoapException
     */
    public function deleteFeatureBundle(\Flexnet\ProductPackagingService\Type\DeleteFeatureBundleRequestType $deleteFeatureBundleRequest): \Flexnet\ProductPackagingService\Type\DeleteFeatureBundleResponseType
    {
        $response = ($this->caller)('deleteFeatureBundle', $deleteFeatureBundleRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\DeleteFeatureBundleResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetFeatureBundleCountRequestType  $getFeatureBundleCountRequest
     * @return ResultInterface & Type\GetFeatureBundleCountResponseType
     *
     * @throws SoapException
     */
    public function getFeatureBundleCount(\Flexnet\ProductPackagingService\Type\GetFeatureBundleCountRequestType $getFeatureBundleCountRequest): \Flexnet\ProductPackagingService\Type\GetFeatureBundleCountResponseType
    {
        $response = ($this->caller)('getFeatureBundleCount', $getFeatureBundleCountRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\GetFeatureBundleCountResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetFeatureBundlesQueryRequestType  $getFeatureBundlesQueryRequest
     * @return ResultInterface & Type\GetFeatureBundlesQueryResponseType
     *
     * @throws SoapException
     */
    public function getFeatureBundlesQuery(\Flexnet\ProductPackagingService\Type\GetFeatureBundlesQueryRequestType $getFeatureBundlesQueryRequest): \Flexnet\ProductPackagingService\Type\GetFeatureBundlesQueryResponseType
    {
        $response = ($this->caller)('getFeatureBundlesQuery', $getFeatureBundlesQueryRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\GetFeatureBundlesQueryResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\SetFeatureBundleStateRequestType  $setFeatureBundleStateRequest
     * @return ResultInterface & Type\SetFeatureBundleStateResponseType
     *
     * @throws SoapException
     */
    public function setFeatureBundleState(\Flexnet\ProductPackagingService\Type\SetFeatureBundleStateRequestType $setFeatureBundleStateRequest): \Flexnet\ProductPackagingService\Type\SetFeatureBundleStateResponseType
    {
        $response = ($this->caller)('setFeatureBundleState', $setFeatureBundleStateRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\SetFeatureBundleStateResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\CreateProductRequestType  $createProductRequest
     * @return ResultInterface & Type\CreateProductResponseType
     *
     * @throws SoapException
     */
    public function createProduct(\Flexnet\ProductPackagingService\Type\CreateProductRequestType $createProductRequest): \Flexnet\ProductPackagingService\Type\CreateProductResponseType
    {
        $response = ($this->caller)('createProduct', $createProductRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\CreateProductResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\UpdateProductRequestType  $updateProductRequest
     * @return ResultInterface & Type\UpdateProductResponseType
     *
     * @throws SoapException
     */
    public function updateProduct(\Flexnet\ProductPackagingService\Type\UpdateProductRequestType $updateProductRequest): \Flexnet\ProductPackagingService\Type\UpdateProductResponseType
    {
        $response = ($this->caller)('updateProduct', $updateProductRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\UpdateProductResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\DeleteProductRequestType  $deleteProductRequest
     * @return ResultInterface & Type\DeleteProductResponseType
     *
     * @throws SoapException
     */
    public function deleteProduct(\Flexnet\ProductPackagingService\Type\DeleteProductRequestType $deleteProductRequest): \Flexnet\ProductPackagingService\Type\DeleteProductResponseType
    {
        $response = ($this->caller)('deleteProduct', $deleteProductRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\DeleteProductResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetProductCountRequestType  $getProductCountRequest
     * @return ResultInterface & Type\GetProductCountResponseType
     *
     * @throws SoapException
     */
    public function getProductCount(\Flexnet\ProductPackagingService\Type\GetProductCountRequestType $getProductCountRequest): \Flexnet\ProductPackagingService\Type\GetProductCountResponseType
    {
        $response = ($this->caller)('getProductCount', $getProductCountRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\GetProductCountResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetProductsQueryRequestType  $getProductsQueryRequest
     * @return ResultInterface & Type\GetProductsQueryResponseType
     *
     * @throws SoapException
     */
    public function getProductsQuery(\Flexnet\ProductPackagingService\Type\GetProductsQueryRequestType $getProductsQueryRequest): \Flexnet\ProductPackagingService\Type\GetProductsQueryResponseType
    {
        $response = ($this->caller)('getProductsQuery', $getProductsQueryRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\GetProductsQueryResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\CreateProductCategoryRequestType  $createProductCategoryRequest
     * @return ResultInterface & Type\CreateProductCategoryResponseType
     *
     * @throws SoapException
     */
    public function createProductCategory(\Flexnet\ProductPackagingService\Type\CreateProductCategoryRequestType $createProductCategoryRequest): \Flexnet\ProductPackagingService\Type\CreateProductCategoryResponseType
    {
        $response = ($this->caller)('createProductCategory', $createProductCategoryRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\CreateProductCategoryResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetProductCategoriesRequestType  $getProductCategoriesRequest
     * @return ResultInterface & Type\GetProductCategoriesResponseType
     *
     * @throws SoapException
     */
    public function getProductCategories(\Flexnet\ProductPackagingService\Type\GetProductCategoriesRequestType $getProductCategoriesRequest): \Flexnet\ProductPackagingService\Type\GetProductCategoriesResponseType
    {
        $response = ($this->caller)('getProductCategories', $getProductCategoriesRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\GetProductCategoriesResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\HandleProductCategoriesToUserRequestType  $assignProductCategoriesToUserRequest
     * @return ResultInterface & Type\HandleProductCategoriesToUserResponseType
     *
     * @throws SoapException
     */
    public function assignProductCategoriesToUser(\Flexnet\ProductPackagingService\Type\HandleProductCategoriesToUserRequestType $assignProductCategoriesToUserRequest): \Flexnet\ProductPackagingService\Type\HandleProductCategoriesToUserResponseType
    {
        $response = ($this->caller)('assignProductCategoriesToUser', $assignProductCategoriesToUserRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\HandleProductCategoriesToUserResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\HandleProductCategoriesToUserRequestType  $removeProductCategoriesFromUserRequest
     * @return ResultInterface & Type\HandleProductCategoriesToUserResponseType
     *
     * @throws SoapException
     */
    public function removeProductCategoriesFromUser(\Flexnet\ProductPackagingService\Type\HandleProductCategoriesToUserRequestType $removeProductCategoriesFromUserRequest): \Flexnet\ProductPackagingService\Type\HandleProductCategoriesToUserResponseType
    {
        $response = ($this->caller)('removeProductCategoriesFromUser', $removeProductCategoriesFromUserRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\HandleProductCategoriesToUserResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetUsersForProductCategoryRequestType  $getUsersForProductCategoryRequest
     * @return ResultInterface & Type\GetUsersForProductCategoryResponseType
     *
     * @throws SoapException
     */
    public function getUsersForProductCategory(\Flexnet\ProductPackagingService\Type\GetUsersForProductCategoryRequestType $getUsersForProductCategoryRequest): \Flexnet\ProductPackagingService\Type\GetUsersForProductCategoryResponseType
    {
        $response = ($this->caller)('getUsersForProductCategory', $getUsersForProductCategoryRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\GetUsersForProductCategoryResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\HandleProductCategoryToAcctRequestType  $assignProductCategoriesToAcctRequest
     * @return ResultInterface & Type\HandleProductCategoryToAcctResponseType
     *
     * @throws SoapException
     */
    public function assignProductCategoriesToAcct(\Flexnet\ProductPackagingService\Type\HandleProductCategoryToAcctRequestType $assignProductCategoriesToAcctRequest): \Flexnet\ProductPackagingService\Type\HandleProductCategoryToAcctResponseType
    {
        $response = ($this->caller)('assignProductCategoriesToAcct', $assignProductCategoriesToAcctRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\HandleProductCategoryToAcctResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\HandleProductCategoryToAcctRequestType  $removeProductCategoriesFromAcctRequest
     * @return ResultInterface & Type\HandleProductCategoryToAcctResponseType
     *
     * @throws SoapException
     */
    public function removeProductCategoriesFromAcct(\Flexnet\ProductPackagingService\Type\HandleProductCategoryToAcctRequestType $removeProductCategoriesFromAcctRequest): \Flexnet\ProductPackagingService\Type\HandleProductCategoryToAcctResponseType
    {
        $response = ($this->caller)('removeProductCategoriesFromAcct', $removeProductCategoriesFromAcctRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\HandleProductCategoryToAcctResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\SetProductStateRequestType  $setProductStateRequest
     * @return ResultInterface & Type\SetProductStateResponseType
     *
     * @throws SoapException
     */
    public function setProductState(\Flexnet\ProductPackagingService\Type\SetProductStateRequestType $setProductStateRequest): \Flexnet\ProductPackagingService\Type\SetProductStateResponseType
    {
        $response = ($this->caller)('setProductState', $setProductStateRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\SetProductStateResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\CreateMaintenanceRequestType  $createMaintenanceRequest
     * @return ResultInterface & Type\CreateMaintenanceResponseType
     *
     * @throws SoapException
     */
    public function createMaintenance(\Flexnet\ProductPackagingService\Type\CreateMaintenanceRequestType $createMaintenanceRequest): \Flexnet\ProductPackagingService\Type\CreateMaintenanceResponseType
    {
        $response = ($this->caller)('createMaintenance', $createMaintenanceRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\CreateMaintenanceResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\UpdateMaintenanceRequestType  $updateMaintenanceRequest
     * @return ResultInterface & Type\UpdateMaintenanceResponseType
     *
     * @throws SoapException
     */
    public function updateMaintenance(\Flexnet\ProductPackagingService\Type\UpdateMaintenanceRequestType $updateMaintenanceRequest): \Flexnet\ProductPackagingService\Type\UpdateMaintenanceResponseType
    {
        $response = ($this->caller)('updateMaintenance', $updateMaintenanceRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\UpdateMaintenanceResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\DeleteMaintenanceRequestType  $deleteMaintenanceRequest
     * @return ResultInterface & Type\DeleteMaintenanceResponseType
     *
     * @throws SoapException
     */
    public function deleteMaintenance(\Flexnet\ProductPackagingService\Type\DeleteMaintenanceRequestType $deleteMaintenanceRequest): \Flexnet\ProductPackagingService\Type\DeleteMaintenanceResponseType
    {
        $response = ($this->caller)('deleteMaintenance', $deleteMaintenanceRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\DeleteMaintenanceResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetMaintenanceCountRequestType  $getMaintenanceCountRequest
     * @return ResultInterface & Type\GetMaintenanceCountResponseType
     *
     * @throws SoapException
     */
    public function getMaintenanceCount(\Flexnet\ProductPackagingService\Type\GetMaintenanceCountRequestType $getMaintenanceCountRequest): \Flexnet\ProductPackagingService\Type\GetMaintenanceCountResponseType
    {
        $response = ($this->caller)('getMaintenanceCount', $getMaintenanceCountRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\GetMaintenanceCountResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetMaintenanceQueryRequestType  $getMaintenanceQueryRequest
     * @return ResultInterface & Type\GetMaintenanceQueryResponseType
     *
     * @throws SoapException
     */
    public function getMaintenanceQuery(\Flexnet\ProductPackagingService\Type\GetMaintenanceQueryRequestType $getMaintenanceQueryRequest): \Flexnet\ProductPackagingService\Type\GetMaintenanceQueryResponseType
    {
        $response = ($this->caller)('getMaintenanceQuery', $getMaintenanceQueryRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\GetMaintenanceQueryResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\SetMaintenanceStateRequestType  $setMaintenanceStateRequest
     * @return ResultInterface & Type\SetMaintenanceStateResponseType
     *
     * @throws SoapException
     */
    public function setMaintenanceState(\Flexnet\ProductPackagingService\Type\SetMaintenanceStateRequestType $setMaintenanceStateRequest): \Flexnet\ProductPackagingService\Type\SetMaintenanceStateResponseType
    {
        $response = ($this->caller)('setMaintenanceState', $setMaintenanceStateRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\SetMaintenanceStateResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\CreateUniformSuiteRequestType  $createUniformSuiteRequest
     * @return ResultInterface & Type\CreateUniformSuiteResponseType
     *
     * @throws SoapException
     */
    public function createUniformSuite(\Flexnet\ProductPackagingService\Type\CreateUniformSuiteRequestType $createUniformSuiteRequest): \Flexnet\ProductPackagingService\Type\CreateUniformSuiteResponseType
    {
        $response = ($this->caller)('createUniformSuite', $createUniformSuiteRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\CreateUniformSuiteResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\UpdateUniformSuiteRequestType  $updateUniformSuiteRequest
     * @return ResultInterface & Type\UpdateUniformSuiteResponseType
     *
     * @throws SoapException
     */
    public function updateUniformSuite(\Flexnet\ProductPackagingService\Type\UpdateUniformSuiteRequestType $updateUniformSuiteRequest): \Flexnet\ProductPackagingService\Type\UpdateUniformSuiteResponseType
    {
        $response = ($this->caller)('updateUniformSuite', $updateUniformSuiteRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\UpdateUniformSuiteResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\DeleteUniformSuiteRequestType  $deleteUniformSuiteRequest
     * @return ResultInterface & Type\DeleteUniformSuiteResponseType
     *
     * @throws SoapException
     */
    public function deleteUniformSuite(\Flexnet\ProductPackagingService\Type\DeleteUniformSuiteRequestType $deleteUniformSuiteRequest): \Flexnet\ProductPackagingService\Type\DeleteUniformSuiteResponseType
    {
        $response = ($this->caller)('deleteUniformSuite', $deleteUniformSuiteRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\DeleteUniformSuiteResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetUniformSuiteCountRequestType  $getUniformSuiteCountRequest
     * @return ResultInterface & Type\GetUniformSuiteCountResponseType
     *
     * @throws SoapException
     */
    public function getUniformSuiteCount(\Flexnet\ProductPackagingService\Type\GetUniformSuiteCountRequestType $getUniformSuiteCountRequest): \Flexnet\ProductPackagingService\Type\GetUniformSuiteCountResponseType
    {
        $response = ($this->caller)('getUniformSuiteCount', $getUniformSuiteCountRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\GetUniformSuiteCountResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetUniformSuitesQueryRequestType  $getUniformSuitesQueryRequest
     * @return ResultInterface & Type\GetUniformSuitesQueryResponseType
     *
     * @throws SoapException
     */
    public function getUniformSuiteQuery(\Flexnet\ProductPackagingService\Type\GetUniformSuitesQueryRequestType $getUniformSuitesQueryRequest): \Flexnet\ProductPackagingService\Type\GetUniformSuitesQueryResponseType
    {
        $response = ($this->caller)('getUniformSuiteQuery', $getUniformSuitesQueryRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\GetUniformSuitesQueryResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\SetUniformSuiteStateRequestType  $setUniformSuiteStateRequest
     * @return ResultInterface & Type\SetUniformSuiteStateResponseType
     *
     * @throws SoapException
     */
    public function setUniformSuiteState(\Flexnet\ProductPackagingService\Type\SetUniformSuiteStateRequestType $setUniformSuiteStateRequest): \Flexnet\ProductPackagingService\Type\SetUniformSuiteStateResponseType
    {
        $response = ($this->caller)('setUniformSuiteState', $setUniformSuiteStateRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\SetUniformSuiteStateResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\CreatePartNumberRequestType  $createPartNumberRequest
     * @return ResultInterface & Type\CreatePartNumberResponseType
     *
     * @throws SoapException
     */
    public function createPartNumber(\Flexnet\ProductPackagingService\Type\CreatePartNumberRequestType $createPartNumberRequest): \Flexnet\ProductPackagingService\Type\CreatePartNumberResponseType
    {
        $response = ($this->caller)('createPartNumber', $createPartNumberRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\CreatePartNumberResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\DeletePartNumberRequestType  $deletePartNumberRequest
     * @return ResultInterface & Type\DeletePartNumberResponseType
     *
     * @throws SoapException
     */
    public function deletePartNumber(\Flexnet\ProductPackagingService\Type\DeletePartNumberRequestType $deletePartNumberRequest): \Flexnet\ProductPackagingService\Type\DeletePartNumberResponseType
    {
        $response = ($this->caller)('deletePartNumber', $deletePartNumberRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\DeletePartNumberResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetPartNumberCountRequestType  $getPartNumberCountRequest
     * @return ResultInterface & Type\GetPartNumberCountResponseType
     *
     * @throws SoapException
     */
    public function getPartNumberCount(\Flexnet\ProductPackagingService\Type\GetPartNumberCountRequestType $getPartNumberCountRequest): \Flexnet\ProductPackagingService\Type\GetPartNumberCountResponseType
    {
        $response = ($this->caller)('getPartNumberCount', $getPartNumberCountRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\GetPartNumberCountResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetPartNumbersQueryRequestType  $getPartNumbersQueryRequest
     * @return ResultInterface & Type\GetPartNumbersQueryResponseType
     *
     * @throws SoapException
     */
    public function getPartNumbersQuery(\Flexnet\ProductPackagingService\Type\GetPartNumbersQueryRequestType $getPartNumbersQueryRequest): \Flexnet\ProductPackagingService\Type\GetPartNumbersQueryResponseType
    {
        $response = ($this->caller)('getPartNumbersQuery', $getPartNumbersQueryRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\GetPartNumbersQueryResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\CreateProductRelationshipRequestType  $createProductRelationshipRequest
     * @return ResultInterface & Type\CreateProductRelationshipResponseType
     *
     * @throws SoapException
     */
    public function createProductRelationship(\Flexnet\ProductPackagingService\Type\CreateProductRelationshipRequestType $createProductRelationshipRequest): \Flexnet\ProductPackagingService\Type\CreateProductRelationshipResponseType
    {
        $response = ($this->caller)('createProductRelationship', $createProductRelationshipRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\CreateProductRelationshipResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\UpdateProductRelationshipRequestType  $updateProductRelationshipRequest
     * @return ResultInterface & Type\UpdateProductRelationshipResponseType
     *
     * @throws SoapException
     */
    public function updateProductRelationship(\Flexnet\ProductPackagingService\Type\UpdateProductRelationshipRequestType $updateProductRelationshipRequest): \Flexnet\ProductPackagingService\Type\UpdateProductRelationshipResponseType
    {
        $response = ($this->caller)('updateProductRelationship', $updateProductRelationshipRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\UpdateProductRelationshipResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\DeleteProductRelationshipRequestType  $deleteProductRelationshipRequest
     * @return ResultInterface & Type\DeleteProductRelationshipResponseType
     *
     * @throws SoapException
     */
    public function deleteProductRelationship(\Flexnet\ProductPackagingService\Type\DeleteProductRelationshipRequestType $deleteProductRelationshipRequest): \Flexnet\ProductPackagingService\Type\DeleteProductRelationshipResponseType
    {
        $response = ($this->caller)('deleteProductRelationship', $deleteProductRelationshipRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\DeleteProductRelationshipResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetProductRelationshipsRequestType  $getProductRelationshipsRequest
     * @return ResultInterface & Type\GetProductRelationshipsResponseType
     *
     * @throws SoapException
     */
    public function getProductRelationships(\Flexnet\ProductPackagingService\Type\GetProductRelationshipsRequestType $getProductRelationshipsRequest): \Flexnet\ProductPackagingService\Type\GetProductRelationshipsResponseType
    {
        $response = ($this->caller)('getProductRelationships', $getProductRelationshipsRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\GetProductRelationshipsResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetModelIdentifiersRequestType  $getModelIdentifiersRequest
     * @return ResultInterface & Type\GetModelIdentifiersResponseType
     *
     * @throws SoapException
     */
    public function getLicenseModelIdentifiers(\Flexnet\ProductPackagingService\Type\GetModelIdentifiersRequestType $getModelIdentifiersRequest): \Flexnet\ProductPackagingService\Type\GetModelIdentifiersResponseType
    {
        $response = ($this->caller)('getLicenseModelIdentifiers', $getModelIdentifiersRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\GetModelIdentifiersResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetTransactionKeyIdentifiersRequestType  $getTransactionKeyIdentifiersRequest
     * @return ResultInterface & Type\GetTransactionKeyIdentifiersResponseType
     *
     * @throws SoapException
     */
    public function getTransactionKeyIdentifiers(\Flexnet\ProductPackagingService\Type\GetTransactionKeyIdentifiersRequestType $getTransactionKeyIdentifiersRequest): \Flexnet\ProductPackagingService\Type\GetTransactionKeyIdentifiersResponseType
    {
        $response = ($this->caller)('getTransactionKeyIdentifiers', $getTransactionKeyIdentifiersRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\GetTransactionKeyIdentifiersResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param  RequestInterface & Type\GetLicenseTechnologyQueryRequestType  $getLicenseTechnologyQueryRequest
     * @return ResultInterface & Type\GetLicenseTechnologyQueryResponseType
     *
     * @throws SoapException
     */
    public function getLicenseTechnologiesQuery(\Flexnet\ProductPackagingService\Type\GetLicenseTechnologyQueryRequestType $getLicenseTechnologyQueryRequest): \Flexnet\ProductPackagingService\Type\GetLicenseTechnologyQueryResponseType
    {
        $response = ($this->caller)('getLicenseTechnologiesQuery', $getLicenseTechnologyQueryRequest);

        \Psl\Type\instance_of(\Flexnet\ProductPackagingService\Type\GetLicenseTechnologyQueryResponseType::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}
