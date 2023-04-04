<?php

use Flexnet\ProductPackagingService\Result;
use Flexsim\FlexnetOperations\Assembler as FlexnetAssembler;
use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Rules\RuleSet;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;

return Config::create()
    ->setEngine($engine = DefaultEngineFactory::create(
        ExtSoapOptions::defaults(__DIR__.'/productPackagingService.wsdl', [])
            ->disableWsdlCache()
    ))
    ->setTypeDestination('flexnet/ProductPackagingService/Type')
    ->setTypeNamespace('Flexnet/ProductPackagingService\Type')
    ->setClientDestination('flexnet/ProductPackagingService')
    ->setClientName('ProductPackagingServiceClient')
    ->setClientNamespace('Flexnet\\ProductPackagingService')
    ->setClassMapDestination('flexnet/ProductPackagingService')
    ->setClassMapName('ProductPackagingServiceClassmap')
    ->setClassMapNamespace('Flexnet\\ProductPackagingService')
    ->setRuleSet(new RuleSet([
        new Rules\AssembleRule(new Assembler\ClassMapAssembler()),
        new Rules\AssembleRule(new Assembler\ClientConstructorAssembler()),
        new Rules\AssembleRule(new Assembler\ClientMethodAssembler()),
    ]))
    ->addRule(new Rules\AssembleRule(new FlexnetAssembler\PropertyAssembler(__DIR__.'/productPackagingService.json')))
    ->addRule(new Rules\AssembleRule(new FlexnetAssembler\ConstructorAssembler(
        (new FlexnetAssembler\ConstructorAssemblerOptions(__DIR__.'/productPackagingService.json'))->withTypeHints()
    )))
    ->addRule(new Rules\AssembleRule(new FlexnetAssembler\GetterAssembler(
        (new FlexnetAssembler\GetterAssemblerOptions(__DIR__.'/productPackagingService.json'))->withReturnType()
    )))
    ->addRule(new Rules\AssembleRule(new FlexnetAssembler\ImmutableSetterAssembler(
        (new FlexnetAssembler\ImmutableSetterAssemblerOptions(__DIR__.'/productPackagingService.json'))->withTypeHints()->withReturnTypes()
    )))
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
                new Rules\AssembleRule(new FlexnetAssembler\ResultAssembler(Result::class)),
            ])
        )
    );
