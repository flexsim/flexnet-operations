<?php

namespace Flexsim\FlexnetOperations\Services\v1\UsageService;

use Flexsim\FlexnetOperations\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class UsageServiceClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('GetUsageRequest', Type\GetUsageRequest::class),
            new ClassMap('StatusInfoType', Type\StatusInfoType::class),
            new ClassMap('Period', Type\Period::class),
            new ClassMap('Usage', Type\Usage::class),
            new ClassMap('GetUsageResponse', Type\GetUsageResponse::class),
        ]);
    }


}

