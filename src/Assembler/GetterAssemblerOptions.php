<?php

declare(strict_types=1);

namespace Flexsim\FlexnetOperations\Assembler;

use Flexsim\FlexnetOperations\Assembler\Concerns\HasTypeMap;

/**
 * Class GetterAssemblerOptions
 */
class GetterAssemblerOptions
{
    use HasTypeMap;

    /**
     * @var bool
     */
    private $boolGetters = false;

    /**
     * @var bool
     */
    private $returnType = false;

    /**
     * @var bool
     */
    private $docBlocks = true;

    public function __construct(string $typeMap)
    {
        $this->typeMap = $typeMap;
    }

    public static function create(string $typeMap): GetterAssemblerOptions
    {
        return new self($typeMap);
    }

    public function withBoolGetters(bool $boolGetters = true): GetterAssemblerOptions
    {
        $new = clone $this;
        $new->boolGetters = $boolGetters;

        return $new;
    }

    public function withReturnType(bool $returnType = true): GetterAssemblerOptions
    {
        $new = clone $this;
        $new->returnType = $returnType;

        return $new;
    }

    public function useBoolGetters(): bool
    {
        return $this->boolGetters;
    }

    public function useReturnType(): bool
    {
        return $this->returnType;
    }

    public function withDocBlocks(bool $withDocBlocks = true): GetterAssemblerOptions
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
