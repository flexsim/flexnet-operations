<?php

namespace Flexsim\FlexnetOperations\Type;

class EnterpriseIds extends FlexnetType
{
    /**
     * @var string
     */
    protected $enterpriseId;

    /**
     * Constructor
     *
     * @param string $enterpriseId
     */
    public function __construct(string $enterpriseId)
    {
        $this->enterpriseId = $enterpriseId;
    }

    /**
     * create a new instance of this class
     *
     * @param string $enterpriseId
     */
    public static function create(string $enterpriseId)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getEnterpriseId()
    {
        return $this->enterpriseId;
    }

    /**
     * @param string $enterpriseId
     * @return $this
     */
    public function setEnterpriseId($enterpriseId)
    {
        $this->enterpriseId = $enterpriseId;

        return $this;
    }
}
