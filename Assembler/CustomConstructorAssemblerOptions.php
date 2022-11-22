<?php

declare(strict_types=1);

namespace Flexsim\FlexnetOperations\Assembler;

use Phpro\SoapClient\CodeGenerator\Assembler\ConstructorAssemblerOptions;

/**
 * Class ConstructorAssemblerOptions
 */
class CustomConstructorAssemblerOptions extends ConstructorAssemblerOptions
{
    /**
     * @var bool
     */
    private $typeHints = false;

    /**
     * @var bool
     */
    private $docBlocks = true;

    /**
     * @var bool
     */
    private $createMethod = false;

    /**
     * @var array
     */
    private $typeMap = [];

    /**
     * @return CustomConstructorAssemblerOptions
     */
    public static function create(): CustomConstructorAssemblerOptions
    {
        return new self();
    }

    /**
     * @param  bool  $withTypeHints
     * @return CustomConstructorAssemblerOptions
     */
    public function withTypeHints(bool $withTypeHints = true): CustomConstructorAssemblerOptions
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
     * @return CustomConstructorAssemblerOptions
     */
    public function withDocBlocks(bool $withDocBlocks = true): CustomConstructorAssemblerOptions
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

    /**
     * @param  bool  $withDocBlocks
     * @return CustomConstructorAssemblerOptions
     */
    public function withCreateMethod(bool $withCreateMethod = true): CustomConstructorAssemblerOptions
    {
        $new = clone $this;
        $new->createMethod = $withCreateMethod;

        return $new;
    }

    /**
     * @return bool
     */
    public function useCreateMethod(): bool
    {
        return $this->createMethod;
    }

    /**
     * @param  array  $typeMap
     * @return CustomConstructorAssemblerOptions
     */
    public function withTypeMap(array $withTypemap): CustomConstructorAssemblerOptions
    {
        $new = clone $this;
        $new->typeMap = $withTypemap;

        return $new;
    }

    /**
     * @return bool
     */
    public function getTypeMap(): array
    {
        return $this->typeMap;
    }
}
