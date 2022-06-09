<?php

namespace Flexsim\FlexnetOperations\Services\UsageService\v1;

use Flexsim\FlexnetOperations\Type;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;

class UsageServiceClassmap
{
    public static function getCollection() : \Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('GetUsageRequest', Type\GetUsageRequest::class),
            new ClassMap('StatusInfoType', Type\StatusInfoType::class),
            new ClassMap('Period', Type\Period::class),
            new ClassMap('Usage', Type\Usage::class),
            new ClassMap('GetUsageResponse', Type\GetUsageResponse::class),
        );
    }
}

