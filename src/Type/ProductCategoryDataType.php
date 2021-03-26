<?php

namespace Flexsim\FlexnetOperations\Type;

class ProductCategoryDataType
{

    /**
     * @var string
     */
    private $uniqueId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CategoryAttributesDataType
     */
    private $categoryAttributes;

    /**
     * Constructor
     *
     * @var string $uniqueId
     * @var string $name
     * @var string $description
     * @var \Flexsim\FlexnetOperations\Type\CategoryAttributesDataType $categoryAttributes
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
     * @var string $uniqueId
     * @var string $name
     * @var string $description
     * @var \Flexsim\FlexnetOperations\Type\CategoryAttributesDataType $categoryAttributes
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

