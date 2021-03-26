<?php

namespace Flexsim\FlexnetOperations\Type;

class OrgTypeList
{

    /**
     * @var string
     */
    private $orgType;

    /**
     * Constructor
     *
     * @var string $orgType
     */
    public function __construct(string $orgType)
    {
        $this->orgType = $orgType;
    }

    /**
     * create a new instance of this class
     *
     * @var string $orgType
     */
    public static function create(string $orgType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getOrgType()
    {
        return $this->orgType;
    }

    /**
     * @param string $orgType
     * @return $this
     */
    public function setOrgType($orgType)
    {
        $this->orgType = $orgType;
        return $this;
    }


}

