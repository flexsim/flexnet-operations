<?php

namespace Flexsim\FlexnetOperations\Assembler;

use Laminas\Code\Generator\MethodGenerator;
use Phpro\SoapClient\CodeGenerator\Assembler\AssemblerInterface;
use Phpro\SoapClient\CodeGenerator\Context\ContextInterface;
use Phpro\SoapClient\CodeGenerator\Context\PropertyContext;
use Phpro\SoapClient\CodeGenerator\LaminasCodeFactory\DocBlockGeneratorFactory;
use Phpro\SoapClient\CodeGenerator\Model\Property;
use Phpro\SoapClient\CodeGenerator\Util\Normalizer;
use Phpro\SoapClient\Exception\AssemblerException;

/**
 * Class GetterAssembler
 */
class GetterAssembler implements AssemblerInterface
{
    /**
     * @var GetterAssemblerOptions
     */
    private $options;

    /**
     * GetterAssembler constructor.
     *
     * @param  GetterAssemblerOptions  $options
     */
    public function __construct(GetterAssemblerOptions $options)
    {
        $this->options = $options;
    }

    /**
     * {@inheritdoc}
     */
    public function canAssemble(ContextInterface $context): bool
    {
        return $context instanceof PropertyContext;
    }

    /**
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
            $prefix = $this->getPrefix($property);
            $methodName = Normalizer::generatePropertyMethod($prefix, $property->getName());
            $class->removeMethod($methodName);

            $methodGenerator = new MethodGenerator($methodName);
            $methodGenerator->setVisibility(MethodGenerator::VISIBILITY_PUBLIC);
            $methodGenerator->setBody(sprintf('return $this->%s;', $property->getName()));

            [$propertyType, $docType] = $this->options->propertyType($property, $type);
            if ($this->options->useReturnType()) {
                $methodGenerator->setReturnType($propertyType);
            }

            if ($this->options->useDocBlocks()) {
                $methodGenerator->setDocBlock(DocBlockGeneratorFactory::fromArray([
                    'tags' => [
                        [
                            'name' => 'return',
                            'description' => $docType,
                        ],
                    ],
                ]));
            }

            $class->addMethodFromGenerator($methodGenerator);
        } catch (\Exception $e) {
            throw AssemblerException::fromException($e);
        }
    }

    /**
     * @param  Property  $property
     * @return string
     */
    public function getPrefix(Property $property): string
    {
        if (! $this->options->useBoolGetters()) {
            return 'get';
        }

        return $property->getType() === 'bool' ? 'is' : 'get';
    }
}
