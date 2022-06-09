<?php

use Flexsim\FlexnetOperations\Assembler\CustomConstructorAssembler;
use Flexsim\FlexnetOperations\Assembler\CustomConstructorAssemblerOptions;
use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules\RuleSet;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;

return Config::create()
    ->setEngine($engine = DefaultEngineFactory::create(
        ExtSoapOptions::defaults('wsdls/v1/LicenseService.wsdl', [])
            ->disableWsdlCache()
    ))
    ->setTypeDestination('src/Type/')
    ->setTypeNamespace('Flexsim\FlexnetOperations\Type')
    ->setClientDestination('src/Services/LicenseService/v1')
    ->setClientName('LicenseServiceClient')
    ->setClientNamespace('Flexsim\FlexnetOperations\Services\LicenseService\v1')
    ->setClassMapDestination('src/Services/LicenseService/v1')
    ->setClassMapName('LicenseServiceClassmap')
    ->setClassMapNamespace('Flexsim\FlexnetOperations\Services\LicenseService\v1')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler(
        new Assembler\ImmutableSetterAssemblerOptions()
    )))
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\FluentSetterAssembler()))
    ->addRule(new Rules\AssembleRule(new CustomConstructorAssembler((new CustomConstructorAssemblerOptions())->withTypeHints()->withCreateMethod()->withTypeMap(json_decode(file_get_contents(str_replace('-config.php', '-typeMap.json', __FILE__)), true)))))
    ->addRule(
        new Rules\IsRequestRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler()),
            ])
        )
    )
    ->addRule(
        new Rules\IsResultRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler()),
            ])
        )
    );
