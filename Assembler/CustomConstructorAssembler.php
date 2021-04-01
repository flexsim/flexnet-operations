<?php

namespace Flexsim\FlexnetOperations\Assembler;

use Phpro\SoapClient\CodeGenerator\Context\ContextInterface;
use Phpro\SoapClient\CodeGenerator\Context\TypeContext;
use Phpro\SoapClient\CodeGenerator\Model\Type;
use Phpro\SoapClient\CodeGenerator\LaminasCodeFactory\DocBlockGeneratorFactory;
use Phpro\SoapClient\Exception\AssemblerException;
use Laminas\Code\Generator\MethodGenerator;
use Phpro\SoapClient\CodeGenerator\Assembler\AssemblerInterface;

use function PHPUnit\Framework\isNull;

/**
 * Class CustomConstructorAssembler
 *
 */
class CustomConstructorAssembler implements AssemblerInterface
{
    /**
     * @var CustomConstructorAssemblerOptions
     */
    private $options;

    /**
     * ConstructorAssembler constructor.
     *
     * @param CustomConstructorAssemblerOptions|null $options
     */
    public function __construct(CustomConstructorAssemblerOptions $options = null)
    {
        $this->options = $options ?? new CustomConstructorAssemblerOptions();
    }

    /**
     * @param ContextInterface $context
     *
     * @return bool
     */
    public function canAssemble(ContextInterface $context): bool
    {
        return $context instanceof TypeContext;
    }

    /**
     * @param ContextInterface|TypeContext $context
     */
    public function assemble(ContextInterface $context)
    {
        $class = $context->getClass();
        $type = $context->getType();

        try {
            $class->removeMethod('__construct');
            $constructor = $this->assembleConstructor($type);
            $class->addMethodFromGenerator($constructor);
            if ($this->options->useCreateMethod()) {
                $createMethod = $this->assemblecreateMethod($type);
                $class->addMethodFromGenerator($createMethod);
            }
        } catch (\Exception $e) {
            throw AssemblerException::fromException($e);
        }
    }

    /**
     * @param Type $type
     *
     * @return MethodGenerator
     * @throws \Laminas\Code\Generator\Exception\InvalidArgumentException
     */
    private function assembleConstructor(Type $type): MethodGenerator
    {
        $typeOptions = array_key_exists($complexType = lcfirst($type->getName()), $typeMap = $this->options->getTypeMap()) ? $typeMap[$complexType] : null;

        $body = [];
        $constructor = MethodGenerator::fromArray([
            'name' => '__construct',
            'visibility' => MethodGenerator::VISIBILITY_PUBLIC,
        ]);
        $docblock = DocBlockGeneratorFactory::fromArray([
            'shortdescription' => 'Constructor'
        ]);

        foreach ($type->getProperties() as $property) {
            $propertyName = $property->getName();

            if ($propertyName == 'queryParams') {
                $body[] = '$queryParams = $queryParams ?? [];';
            }

            $body[] = sprintf('$this->%1$s = $%1$s;', $propertyName);
            $withTypeHints = $this->options->useTypeHints() ? ['type' => $property->getType()] : [];

            $propertyOptions = [];

            $extraTypeDescriptorDocBlocks = '';

            if (array_key_exists('MINOCCURS', $typeOptions[$propertyName]['attributes'])) {
                if ($typeOptions[$propertyName]['attributes']['MINOCCURS'] === '0') $propertyOptions = ['defaultValue' => null];

                if ($typeOptions[$propertyName]['attributes']['MAXOCCURS'] === 'unbounded') {
                    $withTypeHints = [];
                    $extraTypeDescriptorDocBlocks = '|array';
                }
            }

            $constructor->setParameter(array_merge([
                'name' => $propertyName,
            ], $withTypeHints, $propertyOptions));

            if ($this->options->useDocBlocks()) {
                $docblock->setTag([
                    'name' => 'var',
                    'description' => sprintf('%s $%s', $property->getType() . $extraTypeDescriptorDocBlocks, $propertyName)
                ]);
            }
        }

        if ($this->options->useDocBlocks()) {
            $constructor->setDocBlock($docblock);
        }

        $constructor->setBody(implode($constructor::LINE_FEED, $body));

        return $constructor;
    }

    /**
     * @param Type $type
     *
     * @return MethodGenerator
     * @throws \Laminas\Code\Generator\Exception\InvalidArgumentException
     */
    private function assembleCreateMethod(Type $type): MethodGenerator
    {
        $typeOptions = array_key_exists($complexType = lcfirst($type->getName()), $typeMap = $this->options->getTypeMap()) ? $typeMap[$complexType] : null;

        $body = [
            'return new self(...func_get_args());'
        ];
        $createMethod = MethodGenerator::fromArray([
            'name' => 'create',
            'visibility' => MethodGenerator::VISIBILITY_PUBLIC,
            'static' => true
        ]);
        $docblock = DocBlockGeneratorFactory::fromArray([
            'shortdescription' => 'create a new instance of this class'
        ]);

        foreach ($type->getProperties() as $property) {
            $propertyName = $property->getName();

            $withTypeHints = $this->options->useTypeHints() ? ['type' => $property->getType()] : [];

            $propertyOptions = [];

            $extraTypeDescriptorDocBlocks = '';

            if (array_key_exists('MINOCCURS', $typeOptions[$propertyName]['attributes'])) {
                if ($typeOptions[$propertyName]['attributes']['MINOCCURS'] === '0') $propertyOptions = ['defaultValue' => null];

                if ($typeOptions[$propertyName]['attributes']['MAXOCCURS'] === 'unbounded') {
                    $withTypeHints = [];
                    $extraTypeDescriptorDocBlocks = '|array';
                }
            }

            $createMethod->setParameter(array_merge([
                'name' => $propertyName,
            ], $withTypeHints, $propertyOptions));

            if ($this->options->useDocBlocks()) {
                $docblock->setTag([
                    'name' => 'var',
                    'description' => sprintf('%s $%s', $property->getType() . $extraTypeDescriptorDocBlocks, $propertyName)
                ]);
            }
        }

        if ($this->options->useDocBlocks()) {
            $createMethod->setDocBlock($docblock);
        }

        $createMethod->setBody(implode($createMethod::LINE_FEED, $body));

        return $createMethod;
    }
}
