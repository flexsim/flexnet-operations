<?php

namespace Flexsim\FlexnetOperations\Assembler;

use Flexsim\FlexnetOperations\Assembler\Concerns\HasTypeMap;

/**
 * Class ImmutableSetterAssemblerOptions
 */
class ImmutableSetterAssemblerOptions
{
    use HasTypeMap;

    /**
     * @var bool
     */
    private $typeHints = false;

    /**
     * @var bool
     */
    private $returnTypes = false;

    /**
     * @var bool
     */
    private $docBlocks = true;

    /**
     * @return ImmutableSetterAssemblerOptions
     */
    public function withTypeHints(): ImmutableSetterAssemblerOptions
    {
        $new = clone $this;
        $new->typeHints = true;

        return $new;
    }

    /**
     * @return ImmutableSetterAssemblerOptions
     */
    public function withReturnTypes(): ImmutableSetterAssemblerOptions
    {
        $new = clone $this;
        $new->returnTypes = true;

        return $new;
    }

    /**
     * @return bool
     */
    public function useTypeHints(): bool
    {
        return $this->typeHints;
    }

    /**
     * @return bool
     */
    public function useReturnTypes(): bool
    {
        return $this->returnTypes;
    }

    public function __construct(string $typeMap)
    {
        $this->typeMap = $typeMap;
    }

    /**
     * @return ImmutableSetterAssemblerOptions
     */
    public static function create(string $typeMap): ImmutableSetterAssemblerOptions
    {
        return new self($typeMap);
    }

    /**
     * @param  bool  $withDocBlocks
     * @return ImmutableSetterAssemblerOptions
     */
    public function withDocBlocks(bool $withDocBlocks = true): ImmutableSetterAssemblerOptions
    {
        $new = clone $this;
        $new->docBlocks = $withDocBlocks;

        return $new;
    }

    /**
     * @return bool
     */
    public function useDocBlocks(): bool
    {
        return $this->docBlocks;
    }
}
