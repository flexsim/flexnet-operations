<?php

use Flexsim\FlexnetOperations\Assembler\CustomConstructorAssembler;
use Flexsim\FlexnetOperations\Assembler\CustomConstructorAssemblerOptions;
use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules\RuleSet;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;

return Config::create()
    ->setEngine($engine = ExtSoapEngineFactory::fromOptions(
        ExtSoapOptions::defaults('wsdls/FlexnetAuthentication.wsdl', [])
            ->disableWsdlCache()
    ))
    ->setTypeDestination('src/Type/')
    ->setTypeNamespace('Flexsim\FlexnetOperations\Type')
    ->setClientDestination('src/Services/FlexnetAuthentication')
    ->setClientName('FlexnetAuthenticationClient')
    ->setClientNamespace('Flexsim\FlexnetOperations\Services\FlexnetAuthentication')
    ->setClassMapDestination('src/Services/FlexnetAuthentication')
    ->setClassMapName('FlexnetAuthenticationClassmap')
    ->setClassMapNamespace('Flexsim\FlexnetOperations\Services\FlexnetAuthentication')
    ->setRuleSet(new RuleSet([
        new Rules\AssembleRule(new Assembler\PropertyAssembler(\Laminas\Code\Generator\PropertyGenerator::VISIBILITY_PROTECTED)),
        new Rules\AssembleRule(new Assembler\ClassMapAssembler()),
        new Rules\AssembleRule(new Assembler\ClientMethodAssembler())
    ]))
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
