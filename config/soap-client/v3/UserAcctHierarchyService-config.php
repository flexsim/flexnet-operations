<?php

use Flexsim\FlexnetOperations\Assembler\CustomConstructorAssembler;
use Flexsim\FlexnetOperations\Assembler\CustomConstructorAssemblerOptions;
use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;

return Config::create()
    ->setEngine($engine = ExtSoapEngineFactory::fromOptions(
        ExtSoapOptions::defaults('wsdls/v3/UserAcctHierarchyService.wsdl', [])
            ->disableWsdlCache()
    ))
    ->setTypeDestination('src/Type/')
    ->setTypeNamespace('Flexsim\FlexnetOperations\Type')
    ->setClientDestination('src/Services/v3/UserAcctHierarchyService')
    ->setClientName('UserAcctHierarchyServiceClient')
    ->setClientNamespace('Flexsim\FlexnetOperations\Services\v3\UserAcctHierarchyService')
    ->setClassMapDestination('src/Services/v3/UserAcctHierarchyService')
    ->setClassMapName('UserAcctHierarchyServiceClassmap')
    ->setClassMapNamespace('Flexsim\FlexnetOperations\Services\v3\UserAcctHierarchyService')
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
