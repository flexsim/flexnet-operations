<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedSearchDevicesData
{

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var string $reason
     */
    public function __construct(string $reason = null)
    {
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var string $reason
     */
    public static function create(string $reason = null)
    {
        return new self(...func_get_args());
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
