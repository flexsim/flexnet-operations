<?php

namespace Flexsim\FlexnetOperations\Assembler;

use Flexsim\FlexnetOperations\Assembler\Concerns\HasTypeMap;
use Laminas\Code\Generator\PropertyGenerator;
use Phpro\SoapClient\CodeGenerator\Assembler\AssemblerInterface;
use Phpro\SoapClient\CodeGenerator\Context\ContextInterface;
use Phpro\SoapClient\CodeGenerator\Context\PropertyContext;
use Phpro\SoapClient\CodeGenerator\LaminasCodeFactory\DocBlockGeneratorFactory;
use Phpro\SoapClient\Exception\AssemblerException;

/**
 * Class PropertyAssembler
 */
class PropertyAssembler implements AssemblerInterface
{
    use HasTypeMap;

    /**
     * @var string
     */
    private $visibility;

    /**
     * PropertyAssembler constructor.
     *
     * @param  string  $visibility
     */
    public function __construct(string $typeMap, string $visibility = PropertyGenerator::VISIBILITY_PRIVATE)
    {
        $this->typeMap = $typeMap;
        $this->visibility = $visibility;
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
            // It's not possible to overwrite a property in laminas-code yet!
            if ($class->hasProperty($property->getName())) {
                return;
            }

            [$propertyType, $docType] = $this->propertyType($property, $type);

            $class->addPropertyFromGenerator(
                PropertyGenerator::fromArray([
                    'name' => $property->getName(),
                    'visibility' => $this->visibility,
                    'omitdefaultvalue' => true,
                    'docblock' => DocBlockGeneratorFactory::fromArray([
                        'tags' => [
                            [
                                'name' => 'var',
                                'description' => $docType,
                            ],
                        ],
                    ]),
                ])
            );
        } catch (\Exception $e) {
            throw AssemblerException::fromException($e);
        }
    }
}
