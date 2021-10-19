<?php

namespace Flexsim\FlexnetOperations\Type;

class AcpiGenerationIdLicensePolicyDataType extends FlexnetType
{

    /**
     * @var bool
     */
    protected $useACPIGenerationId;

    /**
     * Constructor
     *
     * @param bool $useACPIGenerationId
     */
    public function __construct(bool $useACPIGenerationId)
    {
        $this->useACPIGenerationId = $useACPIGenerationId;
    }

    /**
     * create a new instance of this class
     *
     * @param bool $useACPIGenerationId
     */
    public static function create(bool $useACPIGenerationId)
    {
        return new self(...func_get_args());
    }

    /**
     * @return bool
     */
    public function getUseACPIGenerationId()
    {
        return $this->useACPIGenerationId;
    }

    /**
     * @param bool $useACPIGenerationId
     * @return $this
     */
    public function setUseACPIGenerationId($useACPIGenerationId)
    {
        $this->useACPIGenerationId = $useACPIGenerationId;
        return $this;
    }
}
