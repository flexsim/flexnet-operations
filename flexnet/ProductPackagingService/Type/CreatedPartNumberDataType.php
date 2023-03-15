<?php

namespace Flexnet\ProductPackagingService\Type;

class CreatedPartNumberDataType
{
    /**
     * @var string
     */
    private $recordRefNo;

    /**
     * @var string
     */
    private $uniqueId;

    /**
     * Constructor
     */
    public function __construct(string $recordRefNo, string $uniqueId)
    {
        $this->recordRefNo = $recordRefNo;
        $this->uniqueId = $uniqueId;
    }

    public static function create(string $recordRefNo, string $uniqueId)
    {
        return new static(...\func_get_args());
    }

    public function getRecordRefNo(): string
    {
        return $this->recordRefNo;
    }

    public function withRecordRefNo(string $recordRefNo): CreatedPartNumberDataType
    {
        $new = clone $this;
        $new->recordRefNo = $recordRefNo;

        return $new;
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    public function withUniqueId(string $uniqueId): CreatedPartNumberDataType
    {
        $new = clone $this;
        $new->uniqueId = $uniqueId;

        return $new;
    }
}
