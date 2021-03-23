<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;

return Config::create()
    ->setEngine($engine = ExtSoapEngineFactory::fromOptions(
        ExtSoapOptions::defaults('wsdls/UsageService.wsdl', [])
            ->disableWsdlCache()
    ))
    ->setTypeDestination('src/Type/')
    ->setTypeNamespace('Flexsim\FlexnetOperations\Type')
    ->setClientDestination('src/Services/UsageService')
    ->setClientName('UsageServiceClient')
    ->setClientNamespace('Flexsim\FlexnetOperations\Services\UsageService')
    ->setClassMapDestination('src/Services/UsageService')
    ->setClassMapName('UsageServiceClassmap')
    ->setClassMapNamespace('Flexsim\FlexnetOperations\Services\UsageService')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler()))
    ->addRule(
        new Rules\IsRequestRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler()),
                new Rules\AssembleRule(new Assembler\ConstructorAssembler(new Assembler\ConstructorAssemblerOptions())),
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
