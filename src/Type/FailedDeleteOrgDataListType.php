<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedDeleteOrgDataListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteOrgDataType|array 
     */
    protected $failedOrg;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteOrgDataType|array $failedOrg
     */
    public function __construct($failedOrg = null)
    {
        $this->failedOrg = $failedOrg;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FailedDeleteOrgDataType|array $failedOrg
     */
    public static function create($failedOrg = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedDeleteOrgDataType|array 
     */
    public function getFailedOrg()
    {
        return $this->failedOrg;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FailedDeleteOrgDataType|array $failedOrg
     * @return $this
     */
    public function setFailedOrg($failedOrg)
    {
        $this->failedOrg = $failedOrg;
        return $this;
    }
}
