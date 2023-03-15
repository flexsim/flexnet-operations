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

    public static function create(string $typeMap): ConstructorAssemblerOptions
    {
        return new self($typeMap);
    }

    public function withTypeHints(bool $withTypeHints = true): ConstructorAssemblerOptions
    {
        $new = clone $this;
        $new->typeHints = $withTypeHints;

        return $new;
    }

    public function useTypeHints(): bool
    {
        return $this->typeHints;
    }

    public function withDocBlocks(bool $withDocBlocks = true): ConstructorAssemblerOptions
    {
        $new = clone $this;
        $new->docBlocks = $withDocBlocks;

        return $new;
    }

    public function useDocBlocks(): bool
    {
        return $this->docBlocks;
    }
}
