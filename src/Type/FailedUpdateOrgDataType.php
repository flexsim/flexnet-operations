<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateOrgDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateOrgDataType
     */
    protected $orgData;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\UpdateOrgDataType $orgData
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateOrgDataType $orgData = null, string $reason = null)
    {
        $this->orgData = $orgData;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\UpdateOrgDataType $orgData
     * @param string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateOrgDataType $orgData = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateOrgDataType
     */
    public function getOrgData()
    {
        return $this->orgData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateOrgDataType $orgData
     * @return $this
     */
    public function setOrgData($orgData)
    {
        $this->orgData = $orgData;

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
