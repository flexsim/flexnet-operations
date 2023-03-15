<?php

namespace Flexsim\FlexnetOperations\Assembler;

use Laminas\Code\Generator\MethodGenerator;
use Phpro\SoapClient\CodeGenerator\Assembler\AssemblerInterface;
use Phpro\SoapClient\CodeGenerator\Context\ContextInterface;
use Phpro\SoapClient\CodeGenerator\Context\PropertyContext;
use Phpro\SoapClient\CodeGenerator\LaminasCodeFactory\DocBlockGeneratorFactory;
use Phpro\SoapClient\CodeGenerator\Util\Normalizer;
use Phpro\SoapClient\Exception\AssemblerException;

/**
 * Class ImmutableSetterAssembler
 */
class ImmutableSetterAssembler implements AssemblerInterface
{
    /**
     * @var ImmutableSetterAssemblerOptions
     */
    private $options;

    /**
     * ImmutableSetterAssembler constructor.
     */
    public function __construct(ImmutableSetterAssemblerOptions $options)
    {
        $this->options = $options;
    }

    public function canAssemble(ContextInterface $context): bool
    {
        return $context instanceof PropertyContext;
    }

    /**
     * Assembles pieces of code.
     *
     * @param  ContextInterface|PropertyContext  $context
     *
     * @throws AssemblerException
     */
    public function assemble(ContextInterface $context)
    {
        $class = $context->getClass();
        $type = $context->getType();
        $property = $context->getProperty();
        try {
            $methodName = Normalizer::generatePropertyMethod('with', $property->getName());
            $class->removeMethod($methodName);
            $lines = [
                sprintf('$new = clone $this;'),
                sprintf('$new->%1$s = $%1$s;', $property->getName()),
                '',
                sprintf('return $new;'),
            ];
            $parameterOptions = ['name' => $property->getName()];

            [$propertyType, $docType] = $this->options->propertyType($property, $type);

            if ($this->options->useTypeHints()) {
                $parameterOptions['type'] = $propertyType;
            }

            $methodGenerator = new MethodGenerator($methodName);
            $methodGenerator->setParameters([$parameterOptions]);
            $methodGenerator->setBody(implode($class::LINE_FEED, $lines));
            if ($this->options->useReturnTypes()) {
                $methodGenerator->setReturnType($class->getNamespaceName().'\\'.$class->getName());
            }
            if ($this->options->useDocBlocks()) {
                $methodGenerator->setDocBlock(DocBlockGeneratorFactory::fromArray([
                    'tags' => [
                        [
                            'name' => 'param',
                            'description' => sprintf('%s $%s', $docType, $property->getName()),
                        ],
                        [
                            'name' => 'return',
                            'description' => $class->getName(),
                        ],
                    ],
                ]));
            }
            $class->addMethodFromGenerator($methodGenerator);
        } catch (\Exception $e) {
            throw AssemblerException::fromException($e);
        }
    }
}
