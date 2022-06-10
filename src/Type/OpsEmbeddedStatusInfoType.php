<?php

namespace Flexsim\FlexnetOperations\Type;

class OpsEmbeddedStatusInfoType extends FlexnetType
{
    /**
     * @var string
     */
    protected $status;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param string $status
     * @param string $reason
     */
    public function __construct(string $status, string $reason = null)
    {
        $this->status = $status;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param string $status
     * @param string $reason
     */
    public static function create(string $status, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

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
