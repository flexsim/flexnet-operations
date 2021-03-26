<?php

namespace Flexsim\FlexnetOperations\Type;

class FulfillmentHistoryDetailsType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentHistoryRecordType
     */
    private $record;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentHistoryRecordType $record
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FulfillmentHistoryRecordType $record)
    {
        $this->record = $record;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentHistoryRecordType $record
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FulfillmentHistoryRecordType $record)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FulfillmentHistoryRecordType
     */
    public function getRecord()
    {
        return $this->record;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentHistoryRecordType $record
     * @return $this
     */
    public function setRecord($record)
    {
        $this->record = $record;
        return $this;
    }


}

