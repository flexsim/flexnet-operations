<?php

namespace Flexsim\FlexnetOperations\Type;

class RepairedShortCodeDataType extends FlexnetType
{
    /**
     * @var string
     */
    protected $shortCode;

    /**
     * Constructor
     *
     * @param string $shortCode
     */
    public function __construct(string $shortCode)
    {
        $this->shortCode = $shortCode;
    }

    /**
     * create a new instance of this class
     *
     * @param string $shortCode
     */
    public static function create(string $shortCode)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getShortCode()
    {
        return $this->shortCode;
    }

    /**
     * @param string $shortCode
     * @return $this
     */
    public function setShortCode($shortCode)
    {
        $this->shortCode = $shortCode;

        return $this;
    }
}
