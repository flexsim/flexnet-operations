<?php

namespace Flexsim\FlexnetOperations\Assembler\Concerns;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Phpro\SoapClient\CodeGenerator\Model\Property;
use Phpro\SoapClient\CodeGenerator\Model\Type;

trait HasTypeMap
{
    private false|string $typeMap = false;

    private Collection $complexTypes;

    /**
     * @param  bool  $withDocBlocks
     * @return ConstructorAssemblerOptions
     */
    public function withTypeMap(string $typeMap)
    {
        $new = clone $this;
        $new->typeMap = $typeMap;

        return $new;
    }

    /**
     * @return bool
     */
    public function useTypeMap(): bool
    {
        return (bool) $this->typeMap;
    }

    protected function complexTypes(): Collection
    {
        return $this->complexTypes ??= (new Collection(json_decode(file_get_contents($this->typeMap), associative: true)['definitions']['types']['schema']['complexType']))->keyBy('_name');
    }

    protected function typeElements(string $typeName): array
    {
        $typeDefinition = Arr::get($this->complexTypes(), lcfirst($typeName));

        $typeElements = Arr::get($typeDefinition, 'sequence.element', Arr::get($typeDefinition, 'complexContent.extension.sequence.element', []));

        $typeElements = Arr::isAssoc($typeElements) ? [$typeElements] : $typeElements;

        if (Arr::has($typeDefinition, 'complexContent.extension')) {
            $baseTypeElements = $this->typeElements(Str::after(Arr::get($typeDefinition, 'complexContent.extension._base'), 'impl:'));

            $typeElements = array_merge($baseTypeElements, $typeElements);
        }

        return Arr::keyBy($typeElements, '_name');
    }

    public function propertyType(Property $property, Type $type): array
    {
        $typeElements = $this->typeElements($type->getName());

        $fullType = $property->getType()
            .match (Arr::get($typeElements, $property->getName().'._maxOccurs')) {
                'unbounded' => '|array',
                default => '',
            }
            .match (Arr::get($typeElements, $property->getName().'._minOccurs')) {
                '0' => '|null',
                default => '',
            };

        $basePropertyType = $property->getType();
        $docType = str_replace('|array', "|array<$basePropertyType>", $fullType);

        return [$fullType, $docType];
    }
}
