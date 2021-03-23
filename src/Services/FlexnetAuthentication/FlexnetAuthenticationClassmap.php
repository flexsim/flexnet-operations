<?php

namespace Flexsim\FlexnetOperations\Services\FlexnetAuthentication;

use Flexsim\FlexnetOperations\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class FlexnetAuthenticationClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('UserTokenReturnType', Type\UserTokenReturnType::class),
            new ClassMap('IdentityType', Type\IdentityType::class),
            new ClassMap('TokenResponseType', Type\TokenResponseType::class),
            new ClassMap('AuthenticateUserInputType', Type\AuthenticateUserInputType::class),
            new ClassMap('AuthenticateUserReturnType', Type\AuthenticateUserReturnType::class),
            new ClassMap('TokenType', Type\TokenType::class),
            new ClassMap('StatusResponse', Type\StatusResponse::class),
        ]);
    }


}

