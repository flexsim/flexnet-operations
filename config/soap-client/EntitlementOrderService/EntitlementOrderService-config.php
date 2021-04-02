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
        ExtSoapOptions::defaults('wsdls/EntitlementOrderService.wsdl', [])
            ->disableWsdlCache()
    ))
    ->setTypeDestination('src/Type/')
    ->setTypeNamespace('Flexsim\FlexnetOperations\Type')
    ->setClientDestination('src/Services/EntitlementOrderService')
    ->setClientName('EntitlementOrderServiceClient')
    ->setClientNamespace('Flexsim\FlexnetOperations\Services\EntitlementOrderService')
    ->setClassMapDestination('src/Services/EntitlementOrderService')
    ->setClassMapName('EntitlementOrderServiceClassmap')
    ->setClassMapNamespace('Flexsim\FlexnetOperations\Services\EntitlementOrderService')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\FluentSetterAssembler()))
    ->addRule(new Rules\AssembleRule(new CustomConstructorAssembler((new CustomConstructorAssemblerOptions())->withTypeHints()->withCreateMethod()->withTypeMap(json_decode(file_get_contents(str_replace('-config.php', '-typeMap.json', __FILE__)), true)))))
    ->addRule(
        new Rules\IsRequestRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler())
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
