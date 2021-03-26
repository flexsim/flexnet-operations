<?php

namespace Flexsim\FlexnetOperations\Type;

class BaseProductDataListType
{

    /**
     * @var string
     */
    private $uniqueId;

    /**
     * Constructor
     *
     * @var string|array $uniqueId
     */
    public function __construct($uniqueId = null)
    {
        $this->uniqueId = $uniqueId;
    }

    /**
     * create a new instance of this class
     *
     * @var string|array $uniqueId
     */
    public static function create($uniqueId = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * @param string $uniqueId
     * @return $this
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;
        return $this;
    }


}

