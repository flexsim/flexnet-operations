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
        ExtSoapOptions::defaults(__DIR__ . '/licenseService.wsdl', [])
            ->disableWsdlCache()
    ))
    ->setTypeDestination('flexnet/LicenseService/Type')
    ->setTypeNamespace('Flexnet/LicenseService\Type')
    ->setClientDestination('flexnet/LicenseService')
    ->setClientName('LicenseServiceClient')
    ->setClientNamespace('Flexnet\\LicenseService')
    ->setClassMapDestination('flexnet/LicenseService')
    ->setClassMapName('LicenseServiceClassmap')
    ->setClassMapNamespace('Flexnet\\LicenseService')
    ->setRuleSet(new RuleSet([
        new Rules\AssembleRule(new Assembler\ClassMapAssembler()),
        new Rules\AssembleRule(new Assembler\ClientConstructorAssembler()),
        new Rules\AssembleRule(new Assembler\ClientMethodAssembler()),
    ]))
    ->addRule(new Rules\AssembleRule(new FlexnetAssembler\PropertyAssembler(__DIR__ . '/licenseService.json')))
    ->addRule(new Rules\AssembleRule(new FlexnetAssembler\ConstructorAssembler(
        (new FlexnetAssembler\ConstructorAssemblerOptions(__DIR__ . '/licenseService.json'))->withTypeHints()
    )))
    ->addRule(new Rules\AssembleRule(new FlexnetAssembler\GetterAssembler(
        (new FlexnetAssembler\GetterAssemblerOptions(__DIR__ . '/licenseService.json'))->withReturnType()
    )))
    ->addRule(new Rules\AssembleRule(new FlexnetAssembler\ImmutableSetterAssembler(
        (new FlexnetAssembler\ImmutableSetterAssemblerOptions(__DIR__ . '/licenseService.json'))->withTypeHints()->withReturnTypes()
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
