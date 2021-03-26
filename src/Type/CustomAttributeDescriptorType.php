<?php

namespace Flexsim\FlexnetOperations\Type;

class CustomAttributeDescriptorType
{

    /**
     * @var string
     */
    private $attributeName;

    /**
     * Constructor
     *
     * @var string $attributeName
     */
    public function __construct(string $attributeName)
    {
        $this->attributeName = $attributeName;
    }

    /**
     * create a new instance of this class
     *
     * @var string $attributeName
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

