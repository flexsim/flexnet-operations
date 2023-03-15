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
     *
     * @param  string|null  $description
     */
    public function __construct(string $partId, string|null $description = null)
    {
        $this->partId = $partId;
        $this->description = $description;
    }

    /**
     * @param  string|null  $description
     */
    public static function create(string $partId, string|null $description = null)
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

    public function getDescription(): string|null
    {
        return $this->description;
    }

    public function withDescription(string|null $description): CreatePartNumberDataType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }
}
