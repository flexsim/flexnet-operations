<?php

namespace Flexnet\EntitlementOrderService\Type;

class IdType
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var bool|null
     */
    private $autoGenerate;

    /**
     * Constructor
     */
    public function __construct(string $id = null, bool $autoGenerate = null)
    {
        $this->id = $id;
        $this->autoGenerate = $autoGenerate;
    }

    public static function create(string $id = null, bool $autoGenerate = null)
    {
        return new static(...\func_get_args());
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function withId(?string $id): IdType
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    public function getAutoGenerate(): ?bool
    {
        return $this->autoGenerate;
    }

    public function withAutoGenerate(?bool $autoGenerate): IdType
    {
        $new = clone $this;
        $new->autoGenerate = $autoGenerate;

        return $new;
    }
}
