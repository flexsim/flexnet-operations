<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;

return Config::create()
    ->setEngine($engine = ExtSoapEngineFactory::fromOptions(
        ExtSoapOptions::defaults('wsdls/UserAcctHierarchyService.wsdl', [])
            ->disableWsdlCache()
    ))
    ->setTypeDestination('src/Type/')
    ->setTypeNamespace('Flexsim\FlexnetOperations\Type')
    ->setClientDestination('src/Services/UserAcctHierarchyService')
    ->setClientName('UserAcctHierarchyServiceClient')
    ->setClientNamespace('Flexsim\FlexnetOperations\Services\UserAcctHierarchyService')
    ->setClassMapDestination('src/Services/UserAcctHierarchyService')
    ->setClassMapName('UserAcctHierarchyServiceClassmap')
    ->setClassMapNamespace('Flexsim\FlexnetOperations\Services\UserAcctHierarchyService')
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
