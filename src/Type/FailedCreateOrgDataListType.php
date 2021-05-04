<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedCreateOrgDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedCreateOrgDataType|array 
     */
    private $failedOrg;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedCreateOrgDataType|array $failedOrg
     */
    public function __construct($failedOrg = null)
    {
        $this->failedOrg = $failedOrg;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedCreateOrgDataType|array $failedOrg
     */
    public static function create($failedOrg = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedCreateOrgDataType|array 
     */
    public function getFailedOrg()
    {
        return $this->failedOrg;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedCreateOrgDataType|array $failedOrg
     * @return $this
     */
    public function setFailedOrg($failedOrg)
    {
        $this->failedOrg = $failedOrg;
        return $this;
    }
}
