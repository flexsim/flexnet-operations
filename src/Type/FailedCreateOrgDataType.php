<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedCreateOrgDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\OrganizationDataType
     */
    protected $organization;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\OrganizationDataType $organization
     * @param string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\OrganizationDataType $organization = null, string $reason = null)
    {
        $this->organization = $organization;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\OrganizationDataType $organization
     * @param string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\OrganizationDataType $organization = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrganizationDataType
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OrganizationDataType $organization
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;

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
