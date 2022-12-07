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
     *
     * @param  string|null  $id
     * @param  bool|null  $autoGenerate
     */
    public function __construct(string|null $id = null, bool|null $autoGenerate = null)
    {
        $this->id = $id;
        $this->autoGenerate = $autoGenerate;
    }

    /**
     * @param  string|null  $id
     * @param  bool|null  $autoGenerate
     */
    public static function create(string|null $id = null, bool|null $autoGenerate = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string|null
     */
    public function getId(): string|null
    {
        return $this->id;
    }

    /**
     * @param  string|null  $id
     * @return IdType
     */
    public function withId(string|null $id): IdType
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getAutoGenerate(): bool|null
    {
        return $this->autoGenerate;
    }

    /**
     * @param  bool|null  $autoGenerate
     * @return IdType
     */
    public function withAutoGenerate(bool|null $autoGenerate): IdType
    {
        $new = clone $this;
        $new->autoGenerate = $autoGenerate;

        return $new;
    }
}
