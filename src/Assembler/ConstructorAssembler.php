<?php

namespace Flexsim\FlexnetOperations\Assembler;

use Illuminate\Support\Str;
use Laminas\Code\Generator\MethodGenerator;
use Phpro\SoapClient\CodeGenerator\Assembler\AssemblerInterface;
use Phpro\SoapClient\CodeGenerator\Context\ContextInterface;
use Phpro\SoapClient\CodeGenerator\Context\TypeContext;
use Phpro\SoapClient\CodeGenerator\LaminasCodeFactory\DocBlockGeneratorFactory;
use Phpro\SoapClient\CodeGenerator\Model\Type;
use Phpro\SoapClient\Exception\AssemblerException;

class ConstructorAssembler implements AssemblerInterface
{
    /**
     * @var ConstructorAssemblerOptions
     */
    private $options;

    /**
     * ConstructorAssembler constructor.
     */
    public function __construct(ConstructorAssemblerOptions $options)
    {
        $this->options = $options;
    }

    public function canAssemble(ContextInterface $context): bool
    {
        return $context instanceof TypeContext;
    }

    /**
     * @param  ContextInterface|TypeContext  $context
     */
    public function assemble(ContextInterface $context)
    {
        $class = $context->getClass();
        $type = $context->getType();

        try {
            $class->removeMethod('__construct');
            [$constructor, $staticConstructor] = $this->assembleConstructor($type);
            $class->addMethodFromGenerator($constructor);
            $class->addMethodFromGenerator($staticConstructor);
        } catch (\Exception $e) {
            throw AssemblerException::fromException($e);
        }
    }

    /**
     * @return MethodGenerator
     *
     * @throws \Laminas\Code\Generator\Exception\InvalidArgumentException
     */
    private function assembleConstructor(Type $type): array
    {
        $body = [];
        $constructor = MethodGenerator::fromArray([
            'name' => '__construct',
            'visibility' => MethodGenerator::VISIBILITY_PUBLIC,
        ]);
        $staticConstructor = MethodGenerator::fromArray([
            'name' => 'create',
            'static' => true,
            'visibility' => MethodGenerator::VISIBILITY_PUBLIC,
        ]);
        $docblock = DocBlockGeneratorFactory::fromArray([
            'shortdescription' => 'Constructor',
        ]);

        $properties = $type->getProperties();

        usort($properties, function ($a, $b) use ($type) {
            [$aPropertyType, $docType] = $this->options->propertyType($a, $type);
            [$bPropertyType, $docType] = $this->options->propertyType($b, $type);

            $aNullable = str($aPropertyType)->contains('|null');
            $bNullable = str($bPropertyType)->contains('|null');

            if ($aNullable && ! $bNullable) {
                return 1;
            }

            if ($bNullable && ! $aNullable) {
                return -1;
            }

            return 0;
        });

        foreach ($properties as $property) {
            [$propertyType, $docType] = $this->options->propertyType($property, $type);

            $body[] = sprintf('$this->%1$s = $%1$s;', $property->getName());
            $withTypeHints = $this->options->useTypeHints() ? [
                'type' => $propertyType,

            ] : [];

            $withDefault = Str::contains($propertyType, '|null') ? [
                'defaultValue' => null,
            ] : [];

            $parameter = array_merge([
                'name' => $property->getName(),
            ], $withTypeHints, $withDefault);

            $constructor->setParameter($parameter);

            $staticConstructor->setParameter($parameter);

            if ($this->options->useDocBlocks()) {
                $docblock->setTag([
                    'name' => 'param',
                    'description' => sprintf('%s $%s', $docType, $property->getName()),
                ]);
            }
        }

        if ($this->options->useDocBlocks()) {
            $constructor->setDocBlock($docblock);
            $staticConstructorDocBlock = clone $docblock;

            $staticConstructorDocBlock->setShortDescription('');
            $staticConstructor->setDocBlock($staticConstructorDocBlock);
        }

        $constructor->setBody(implode($constructor::LINE_FEED, $body));
        $staticConstructor->setBody('return new static(...\func_get_args());');

        return [$constructor, $staticConstructor];
    }
}
