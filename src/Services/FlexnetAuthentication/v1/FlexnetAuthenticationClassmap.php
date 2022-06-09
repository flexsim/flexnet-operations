<?php

namespace Flexsim\FlexnetOperations\Services\FlexnetAuthentication\v1;

use Flexsim\FlexnetOperations\Type;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;

class FlexnetAuthenticationClassmap
{
    public static function getCollection() : \Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('IdentityType', Type\IdentityType::class),
            new ClassMap('TokenResponseType', Type\TokenResponseType::class),
            new ClassMap('AuthenticateUserInputType', Type\AuthenticateUserInputType::class),
            new ClassMap('AuthenticateUserReturnType', Type\AuthenticateUserReturnType::class),
            new ClassMap('TokenType', Type\TokenType::class),
            new ClassMap('StatusResponse', Type\StatusResponse::class),
        );
    }
}

