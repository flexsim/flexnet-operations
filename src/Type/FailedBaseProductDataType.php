<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedBaseProductDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $uniqueId;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @var string $uniqueId
     * @var string $reason
     */
    public function __construct(string $uniqueId = null, string $reason = null)
    {
        $this->uniqueId = $uniqueId;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var string $uniqueId
     * @var string $reason
     */
    public static function create(string $uniqueId = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * @param string $uniqueId
     * @return $this
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;
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
