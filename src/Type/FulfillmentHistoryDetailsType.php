<?php

namespace Flexsim\FlexnetOperations\Type;

class FulfillmentHistoryDetailsType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentHistoryRecordType|array<\Flexsim\FlexnetOperations\Type\FulfillmentHistoryRecordType>
     */
    protected $record;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentHistoryRecordType|array<\Flexsim\FlexnetOperations\Type\FulfillmentHistoryRecordType>  $record
     */
    public function __construct(FulfillmentHistoryRecordType|array $record)
    {
        $this->record = $record;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentHistoryRecordType|array<\Flexsim\FlexnetOperations\Type\FulfillmentHistoryRecordType>  $record
     */
    public static function create(FulfillmentHistoryRecordType|array $record)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FulfillmentHistoryRecordType|array<\Flexsim\FlexnetOperations\Type\FulfillmentHistoryRecordType>
     */
    public function getRecord()
    {
        return $this->record;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FulfillmentHistoryRecordType|array<\Flexsim\FlexnetOperations\Type\FulfillmentHistoryRecordType>  $record
     * @return $this
     */
    public function setRecord($record)
    {
        $this->record = $record;

        return $this;
    }
}
