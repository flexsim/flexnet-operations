<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedLinkOrgDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\LinkOrganizationsDataType
     */
    protected $orgData;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\LinkOrganizationsDataType $orgData
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\LinkOrganizationsDataType $orgData = null, string $reason = null)
    {
        $this->orgData = $orgData;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\LinkOrganizationsDataType $orgData
     * @param string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\LinkOrganizationsDataType $orgData = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LinkOrganizationsDataType
     */
    public function getOrgData()
    {
        return $this->orgData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LinkOrganizationsDataType $orgData
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
