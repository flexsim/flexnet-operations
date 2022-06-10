<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedReturnShortCodeDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\ReturnShortCodeDataType
     */
    protected $shortCodeData;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\ReturnShortCodeDataType $shortCodeData
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ReturnShortCodeDataType $shortCodeData, string $reason)
    {
        $this->shortCodeData = $shortCodeData;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\ReturnShortCodeDataType $shortCodeData
     * @param string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ReturnShortCodeDataType $shortCodeData, string $reason)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ReturnShortCodeDataType
     */
    public function getShortCodeData()
    {
        return $this->shortCodeData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ReturnShortCodeDataType $shortCodeData
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
}
