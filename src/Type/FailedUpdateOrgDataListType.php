<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateOrgDataListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\FailedUpdateOrgDataType|array
     */
    protected $failedOrg;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedUpdateOrgDataType|array  $failedOrg
     */
    public function __construct($failedOrg = null)
    {
        $this->failedOrg = $failedOrg;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\FailedUpdateOrgDataType|array  $failedOrg
     */
    public static function create($failedOrg = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FailedUpdateOrgDataType|array
     */
    public function getFailedOrg()
    {
        return $this->failedOrg;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\FailedUpdateOrgDataType|array  $failedOrg
     * @return $this
     */
    public function setFailedOrg($failedOrg)
    {
        $this->failedOrg = $failedOrg;

        return $this;
    }
}
