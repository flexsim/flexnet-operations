<?php

namespace Flexsim\FlexnetOperations\Type;

class ProductCategoryDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $uniqueId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CategoryAttributesDataType
     */
    protected $categoryAttributes;

    /**
     * Constructor
     *
     * @param string $uniqueId
     * @param string $name
     * @param string $description
     * @param \Flexsim\FlexnetOperations\Type\CategoryAttributesDataType $categoryAttributes
     */
    public function __construct(string $uniqueId = null, string $name = null, string $description = null, \Flexsim\FlexnetOperations\Type\CategoryAttributesDataType $categoryAttributes = null)
    {
        $this->uniqueId = $uniqueId;
        $this->name = $name;
        $this->description = $description;
        $this->categoryAttributes = $categoryAttributes;
    }

    /**
     * create a new instance of this class
     *
     * @param string $uniqueId
     * @param string $name
     * @param string $description
     * @param \Flexsim\FlexnetOperations\Type\CategoryAttributesDataType $categoryAttributes
     */
    public static function create(string $uniqueId = null, string $name = null, string $description = null, \Flexsim\FlexnetOperations\Type\CategoryAttributesDataType $categoryAttributes = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * @param string $uniqueId
     * @return $this
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CategoryAttributesDataType
     */
    public function getCategoryAttributes()
    {
        return $this->categoryAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CategoryAttributesDataType $categoryAttributes
     * @return $this
     */
    public function setCategoryAttributes($categoryAttributes)
    {
        $this->categoryAttributes = $categoryAttributes;
        return $this;
    }
}
