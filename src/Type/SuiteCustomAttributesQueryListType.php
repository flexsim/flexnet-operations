<?php

namespace Flexsim\FlexnetOperations\Type;

class SuiteCustomAttributesQueryListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SuiteCustomAttributeQueryType
     */
    private $attribute;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SuiteCustomAttributeQueryType|array $attribute
     */
    public function __construct($attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SuiteCustomAttributeQueryType|array $attribute
     */
    public static function create($attribute = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SuiteCustomAttributeQueryType
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SuiteCustomAttributeQueryType $attribute
     * @return $this
     */
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;
        return $this;
    }


}

