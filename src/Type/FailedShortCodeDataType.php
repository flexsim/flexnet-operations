<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedShortCodeDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateShortCodeDataType
     */
    private $shortCodeData;

    /**
     * @var string
     */
    private $reason;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DuplicateFulfillmentRecordListDataType
     */
    private $duplicateFulfillmentRecords;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateShortCodeDataType $shortCodeData
     * @var string $reason
     * @var \Flexsim\FlexnetOperations\Type\DuplicateFulfillmentRecordListDataType $duplicateFulfillmentRecords
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CreateShortCodeDataType $shortCodeData, string $reason, \Flexsim\FlexnetOperations\Type\DuplicateFulfillmentRecordListDataType $duplicateFulfillmentRecords = null)
    {
        $this->shortCodeData = $shortCodeData;
        $this->reason = $reason;
        $this->duplicateFulfillmentRecords = $duplicateFulfillmentRecords;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CreateShortCodeDataType $shortCodeData
     * @var string $reason
     * @var \Flexsim\FlexnetOperations\Type\DuplicateFulfillmentRecordListDataType $duplicateFulfillmentRecords
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CreateShortCodeDataType $shortCodeData, string $reason, \Flexsim\FlexnetOperations\Type\DuplicateFulfillmentRecordListDataType $duplicateFulfillmentRecords = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateShortCodeDataType
     */
    public function getShortCodeData()
    {
        return $this->shortCodeData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateShortCodeDataType $shortCodeData
     * @return $this
     */
    public function setShortCodeData($shortCodeData)
    {
        $this->shortCodeData = $shortCodeData;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DuplicateFulfillmentRecordListDataType
     */
    public function getDuplicateFulfillmentRecords()
    {
        return $this->duplicateFulfillmentRecords;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DuplicateFulfillmentRecordListDataType $duplicateFulfillmentRecords
     * @return $this
     */
    public function setDuplicateFulfillmentRecords($duplicateFulfillmentRecords)
    {
        $this->duplicateFulfillmentRecords = $duplicateFulfillmentRecords;
        return $this;
    }


}

