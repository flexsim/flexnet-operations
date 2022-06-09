<?php

namespace Flexsim\FlexnetOperations\Type;

class RepairShortCodeDataType extends FlexnetType
{
    /**
     * @var string
     */
    protected $shortCode;

    /**
     * @var string
     */
    protected $webRegKey;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PublisherAttributesListDataType
     */
    protected $publisherAttributes;

    /**
     * @var bool
     */
    protected $overridePolicy;

    /**
     * Constructor
     *
     * @param string $shortCode
     * @param string $webRegKey
     * @param \Flexsim\FlexnetOperations\Type\PublisherAttributesListDataType $publisherAttributes
     * @param bool $overridePolicy
     */
    public function __construct(string $shortCode, string $webRegKey, \Flexsim\FlexnetOperations\Type\PublisherAttributesListDataType $publisherAttributes = null, bool $overridePolicy = null)
    {
        $this->shortCode = $shortCode;
        $this->webRegKey = $webRegKey;
        $this->publisherAttributes = $publisherAttributes;
        $this->overridePolicy = $overridePolicy;
    }

    /**
     * create a new instance of this class
     *
     * @param string $shortCode
     * @param string $webRegKey
     * @param \Flexsim\FlexnetOperations\Type\PublisherAttributesListDataType $publisherAttributes
     * @param bool $overridePolicy
     */
    public static function create(string $shortCode, string $webRegKey, \Flexsim\FlexnetOperations\Type\PublisherAttributesListDataType $publisherAttributes = null, bool $overridePolicy = null)
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

    /**
     * @return string
     */
    public function getWebRegKey()
    {
        return $this->webRegKey;
    }

    /**
     * @param string $webRegKey
     * @return $this
     */
    public function setWebRegKey($webRegKey)
    {
        $this->webRegKey = $webRegKey;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PublisherAttributesListDataType
     */
    public function getPublisherAttributes()
    {
        return $this->publisherAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PublisherAttributesListDataType $publisherAttributes
     * @return $this
     */
    public function setPublisherAttributes($publisherAttributes)
    {
        $this->publisherAttributes = $publisherAttributes;

        return $this;
    }

    /**
     * @return bool
     */
    public function getOverridePolicy()
    {
        return $this->overridePolicy;
    }

    /**
     * @param bool $overridePolicy
     * @return $this
     */
    public function setOverridePolicy($overridePolicy)
    {
        $this->overridePolicy = $overridePolicy;

        return $this;
    }
}
