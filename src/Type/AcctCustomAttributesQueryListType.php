<?php

namespace Flexsim\FlexnetOperations\Type;

class AcctCustomAttributesQueryListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\AcctCustomAttributeQueryType|array
     */
    protected $attribute;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\AcctCustomAttributeQueryType|array  $attribute
     */
    public function __construct($attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\AcctCustomAttributeQueryType|array  $attribute
     */
    public static function create($attribute = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AcctCustomAttributeQueryType|array
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\AcctCustomAttributeQueryType|array  $attribute
     * @return $this
     */
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }
}
