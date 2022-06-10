<?php

namespace Flexsim\FlexnetOperations\Type;

class CustomAttributeDescriptorType extends FlexnetType
{
    /**
     * @var string
     */
    protected $attributeName;

    /**
     * Constructor
     *
     * @param string $attributeName
     */
    public function __construct(string $attributeName)
    {
        $this->attributeName = $attributeName;
    }

    /**
     * create a new instance of this class
     *
     * @param string $attributeName
     */
    public static function create(string $attributeName)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @param string $attributeName
     * @return $this
     */
    public function setAttributeName($attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }
}
