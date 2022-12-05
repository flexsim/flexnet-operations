<?php

declare(strict_types=1);

namespace Flexsim\FlexnetOperations\Assembler;

use Flexsim\FlexnetOperations\Assembler\Concerns\HasTypeMap;

class ConstructorAssemblerOptions
{
    use HasTypeMap;

    /**
     * @var bool
     */
    private $typeHints = false;

    /**
     * @var bool
     */
    private $docBlocks = true;

    public function __construct(string $typeMap)
    {
        $this->typeMap = $typeMap;
    }

    /**
     * @return ConstructorAssemblerOptions
     */
    public static function create(string $typeMap): ConstructorAssemblerOptions
    {
        return new self($typeMap);
    }

    /**
     * @param  bool  $withTypeHints
     * @return ConstructorAssemblerOptions
     */
    public function withTypeHints(bool $withTypeHints = true): ConstructorAssemblerOptions
    {
        $new = clone $this;
        $new->typeHints = $withTypeHints;

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
     * @param  bool  $withDocBlocks
     * @return ConstructorAssemblerOptions
     */
    public function withDocBlocks(bool $withDocBlocks = true): ConstructorAssemblerOptions
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
