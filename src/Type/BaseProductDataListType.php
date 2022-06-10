<?php

namespace Flexsim\FlexnetOperations\Type;

class BaseProductDataListType extends FlexnetType
{
    /**
     * @var string|array
     */
    protected $uniqueId;

    /**
     * Constructor
     *
     * @param string|array $uniqueId
     */
    public function __construct($uniqueId = null)
    {
        $this->uniqueId = $uniqueId;
    }

    /**
     * create a new instance of this class
     *
     * @param string|array $uniqueId
     */
    public static function create($uniqueId = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string|array
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * @param string|array $uniqueId
     * @return $this
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;

        return $this;
    }
}
