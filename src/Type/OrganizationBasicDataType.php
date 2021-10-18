<?php

namespace Flexsim\FlexnetOperations\Type;

class OrganizationBasicDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $orgUnitId;

    /**
     * @var string
     */
    protected $displayName;

    /**
     * Constructor
     *
     * @var string $orgUnitId
     * @var string $displayName
     */
    public function __construct(string $orgUnitId, string $displayName)
    {
        $this->orgUnitId = $orgUnitId;
        $this->displayName = $displayName;
    }

    /**
     * create a new instance of this class
     *
     * @var string $orgUnitId
     * @var string $displayName
     */
    public static function create(string $orgUnitId, string $displayName)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getOrgUnitId()
    {
        return $this->orgUnitId;
    }

    /**
     * @param string $orgUnitId
     * @return $this
     */
    public function setOrgUnitId($orgUnitId)
    {
        $this->orgUnitId = $orgUnitId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }
}
