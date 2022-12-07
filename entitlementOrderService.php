<?php

use Flexsim\FlexnetOperations\Assembler as FlexnetAssembler;
use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Rules\RuleSet;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;

return Config::create()
    ->setEngine($engine = DefaultEngineFactory::create(
        ExtSoapOptions::defaults(__DIR__.'/entitlementOrderService.wsdl', [])
            ->disableWsdlCache()
    ))
    ->setTypeDestination('flexnet/EntitlementOrderService/Type')
    ->setTypeNamespace('Flexnet/EntitlementOrderService\Type')
    ->setClientDestination('flexnet/EntitlementOrderService')
    ->setClientName('EntitlementOrderServiceClient')
    ->setClientNamespace('Flexnet\\EntitlementOrderService')
    ->setClassMapDestination('flexnet/EntitlementOrderService')
    ->setClassMapName('EntitlementOrderServiceClassmap')
    ->setClassMapNamespace('Flexnet\\EntitlementOrderService')
    ->setRuleSet(new RuleSet([
        new Rules\AssembleRule(new Assembler\ClassMapAssembler()),
        new Rules\AssembleRule(new Assembler\ClientConstructorAssembler()),
        new Rules\AssembleRule(new Assembler\ClientMethodAssembler()),
    ]))
    ->addRule(new Rules\AssembleRule(new FlexnetAssembler\PropertyAssembler(__DIR__.'/entitlementOrderService.json')))
    ->addRule(new Rules\AssembleRule(new FlexnetAssembler\ConstructorAssembler(
        (new FlexnetAssembler\ConstructorAssemblerOptions(__DIR__.'/entitlementOrderService.json'))->withTypeHints()
    )))
    ->addRule(new Rules\AssembleRule(new FlexnetAssembler\GetterAssembler(
        (new FlexnetAssembler\GetterAssemblerOptions(__DIR__.'/entitlementOrderService.json'))->withReturnType()
    )))
    ->addRule(new Rules\AssembleRule(new FlexnetAssembler\ImmutableSetterAssembler(
        (new FlexnetAssembler\ImmutableSetterAssemblerOptions(__DIR__.'/entitlementOrderService.json'))->withTypeHints()->withReturnTypes()
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
                new Rules\AssembleRule(new Assembler\ResultAssembler()),
            ])
        )
    );
