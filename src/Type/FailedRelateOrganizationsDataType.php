<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedRelateOrganizationsDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\RelateOrganizationsDataType
     */
    protected $orgData;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\RelateOrganizationsDataType  $orgData
     * @param  string  $reason
     */
    public function __construct(RelateOrganizationsDataType $orgData = null, string $reason = null)
    {
        $this->orgData = $orgData;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\RelateOrganizationsDataType  $orgData
     * @param  string  $reason
     */
    public static function create(RelateOrganizationsDataType $orgData = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\RelateOrganizationsDataType
     */
    public function getOrgData()
    {
        return $this->orgData;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\RelateOrganizationsDataType  $orgData
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
     * @param  string  $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }
}
