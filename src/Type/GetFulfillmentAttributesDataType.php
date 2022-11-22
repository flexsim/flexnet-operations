<?php

namespace Flexsim\FlexnetOperations\Type;

class GetFulfillmentAttributesDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType
     */
    protected $fulfillmentAttributes;

    /**
     * @var bool
     */
    protected $needTimeZone;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType  $fulfillmentAttributes
     * @param  bool  $needTimeZone
     */
    public function __construct(AttributeMetaDescriptorDataType $fulfillmentAttributes = null, bool $needTimeZone = null)
    {
        $this->fulfillmentAttributes = $fulfillmentAttributes;
        $this->needTimeZone = $needTimeZone;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType  $fulfillmentAttributes
     * @param  bool  $needTimeZone
     */
    public static function create(AttributeMetaDescriptorDataType $fulfillmentAttributes = null, bool $needTimeZone = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType
     */
    public function getFulfillmentAttributes()
    {
        return $this->fulfillmentAttributes;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\AttributeMetaDescriptorDataType  $fulfillmentAttributes
     * @return $this
     */
    public function setFulfillmentAttributes($fulfillmentAttributes)
    {
        $this->fulfillmentAttributes = $fulfillmentAttributes;

        return $this;
    }

    /**
     * @return bool
     */
    public function getNeedTimeZone()
    {
        return $this->needTimeZone;
    }

    /**
     * @param  bool  $needTimeZone
     * @return $this
     */
    public function setNeedTimeZone($needTimeZone)
    {
        $this->needTimeZone = $needTimeZone;

        return $this;
    }
}
