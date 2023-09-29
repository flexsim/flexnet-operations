<?php

namespace Flexnet\ProductPackagingService\Type;

class CreatePartNumberDataType
{
    /**
     * @var string
     */
    private $partId;

    /**
     * @var string|null
     */
    private $description;

    /**
     * Constructor
     */
    public function __construct(string $partId, string $description = null)
    {
        $this->partId = $partId;
        $this->description = $description;
    }

    public static function create(string $partId, string $description = null)
    {
        return new static(...\func_get_args());
    }

    public function getPartId(): string
    {
        return $this->partId;
    }

    public function withPartId(string $partId): CreatePartNumberDataType
    {
        $new = clone $this;
        $new->partId = $partId;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): CreatePartNumberDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }
}
