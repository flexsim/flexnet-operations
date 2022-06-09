<?php

namespace Flexsim\FlexnetOperations\Type;

class OrgCustomAttributesQueryListType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\OrgCustomAttributeQueryType|array
     */
    protected $attribute;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\OrgCustomAttributeQueryType|array $attribute
     */
    public function __construct($attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\OrgCustomAttributeQueryType|array $attribute
     */
    public static function create($attribute = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\OrgCustomAttributeQueryType|array
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\OrgCustomAttributeQueryType|array $attribute
     * @return $this
     */
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }
}
