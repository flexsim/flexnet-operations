<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateOrgDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateOrgDataType
     */
    private $failedOrg;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateOrgDataType|array $failedOrg
     */
    public function __construct($failedOrg = null)
    {
        $this->failedOrg = $failedOrg;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateOrgDataType|array $failedOrg
     */
    public static function create($failedOrg = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedUpdateOrgDataType
     */
    public function getFailedOrg()
    {
        return $this->failedOrg;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedUpdateOrgDataType $failedOrg
     * @return $this
     */
    public function setFailedOrg($failedOrg)
    {
        $this->failedOrg = $failedOrg;
        return $this;
    }


}

