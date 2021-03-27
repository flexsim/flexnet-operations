<?php

namespace Flexsim\FlexnetOperations\Type;

class AcctCustomAttributesQueryListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AcctCustomAttributeQueryType
     */
    private $attribute;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\AcctCustomAttributeQueryType|array $attribute
     */
    public function __construct($attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\AcctCustomAttributeQueryType|array $attribute
     */
    public static function create($attribute = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AcctCustomAttributeQueryType
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AcctCustomAttributeQueryType $attribute
     * @return $this
     */
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;
        return $this;
    }


}

