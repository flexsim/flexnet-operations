<?php

namespace Flexsim\FlexnetOperations\Type;

class EntitlementLineItemDataType extends FlexnetType
{

    /**
     * @var int
     */
    protected $numberOfRemainingCopies;

    /**
     * @var int
     */
    protected $availableExtraActivations;

    /**
     * @var bool
     */
    protected $isTrustedType;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType
     */
    protected $licenseTechnology;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    protected $parentLineItem;

    /**
     * @var \DateTimeInterface
     */
    protected $createdOnDateTime;

    /**
     * @var \DateTimeInterface
     */
    protected $lastModifiedDateTime;

    /**
     * @var int
     */
    protected $overdraftMax;

    /**
     * @var int
     */
    protected $remainingOverdraftCount;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ProductCategoryDataType
     */
    protected $productLine;

    /**
     * @var int
     */
    protected $fulfilledCount;

    /**
     * Constructor
     *
     * @param int $numberOfRemainingCopies
     * @param int $availableExtraActivations
     * @param bool $isTrustedType
     * @param string $state
     * @param \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItem
     * @param \DateTimeInterface $createdOnDateTime
     * @param \DateTimeInterface $lastModifiedDateTime
     * @param int $overdraftMax
     * @param int $remainingOverdraftCount
     * @param \Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productLine
     * @param int $fulfilledCount
     */
    public function __construct(int $numberOfRemainingCopies = null, int $availableExtraActivations = null, bool $isTrustedType = null, string $state = null, \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology = null, \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItem = null, \DateTimeInterface $createdOnDateTime = null, \DateTimeInterface $lastModifiedDateTime = null, int $overdraftMax = null, int $remainingOverdraftCount = null, \Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productLine = null, int $fulfilledCount = null)
    {
        $this->numberOfRemainingCopies = $numberOfRemainingCopies;
        $this->availableExtraActivations = $availableExtraActivations;
        $this->isTrustedType = $isTrustedType;
        $this->state = $state;
        $this->licenseTechnology = $licenseTechnology;
        $this->parentLineItem = $parentLineItem;
        $this->createdOnDateTime = $createdOnDateTime;
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        $this->overdraftMax = $overdraftMax;
        $this->remainingOverdraftCount = $remainingOverdraftCount;
        $this->productLine = $productLine;
        $this->fulfilledCount = $fulfilledCount;
    }

    /**
     * create a new instance of this class
     *
     * @param int $numberOfRemainingCopies
     * @param int $availableExtraActivations
     * @param bool $isTrustedType
     * @param string $state
     * @param \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItem
     * @param \DateTimeInterface $createdOnDateTime
     * @param \DateTimeInterface $lastModifiedDateTime
     * @param int $overdraftMax
     * @param int $remainingOverdraftCount
     * @param \Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productLine
     * @param int $fulfilledCount
     */
    public static function create(int $numberOfRemainingCopies = null, int $availableExtraActivations = null, bool $isTrustedType = null, string $state = null, \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology = null, \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItem = null, \DateTimeInterface $createdOnDateTime = null, \DateTimeInterface $lastModifiedDateTime = null, int $overdraftMax = null, int $remainingOverdraftCount = null, \Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productLine = null, int $fulfilledCount = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return int
     */
    public function getNumberOfRemainingCopies()
    {
        return $this->numberOfRemainingCopies;
    }

    /**
     * @param int $numberOfRemainingCopies
     * @return $this
     */
    public function setNumberOfRemainingCopies($numberOfRemainingCopies)
    {
        $this->numberOfRemainingCopies = $numberOfRemainingCopies;
        return $this;
    }

    /**
     * @return int
     */
    public function getAvailableExtraActivations()
    {
        return $this->availableExtraActivations;
    }

    /**
     * @param int $availableExtraActivations
     * @return $this
     */
    public function setAvailableExtraActivations($availableExtraActivations)
    {
        $this->availableExtraActivations = $availableExtraActivations;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsTrustedType()
    {
        return $this->isTrustedType;
    }

    /**
     * @param bool $isTrustedType
     * @return $this
     */
    public function setIsTrustedType($isTrustedType)
    {
        $this->isTrustedType = $isTrustedType;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType
     */
    public function getLicenseTechnology()
    {
        return $this->licenseTechnology;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseTechnologyIdentifierType $licenseTechnology
     * @return $this
     */
    public function setLicenseTechnology($licenseTechnology)
    {
        $this->licenseTechnology = $licenseTechnology;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType
     */
    public function getParentLineItem()
    {
        return $this->parentLineItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\EntitlementLineItemIdentifierType $parentLineItem
     * @return $this
     */
    public function setParentLineItem($parentLineItem)
    {
        $this->parentLineItem = $parentLineItem;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedOnDateTime()
    {
        return $this->createdOnDateTime;
    }

    /**
     * @param \DateTimeInterface $createdOnDateTime
     * @return $this
     */
    public function setCreatedOnDateTime($createdOnDateTime)
    {
        $this->createdOnDateTime = $createdOnDateTime;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastModifiedDateTime()
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param \DateTimeInterface $lastModifiedDateTime
     * @return $this
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getOverdraftMax()
    {
        return $this->overdraftMax;
    }

    /**
     * @param int $overdraftMax
     * @return $this
     */
    public function setOverdraftMax($overdraftMax)
    {
        $this->overdraftMax = $overdraftMax;
        return $this;
    }

    /**
     * @return int
     */
    public function getRemainingOverdraftCount()
    {
        return $this->remainingOverdraftCount;
    }

    /**
     * @param int $remainingOverdraftCount
     * @return $this
     */
    public function setRemainingOverdraftCount($remainingOverdraftCount)
    {
        $this->remainingOverdraftCount = $remainingOverdraftCount;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ProductCategoryDataType
     */
    public function getProductLine()
    {
        return $this->productLine;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ProductCategoryDataType $productLine
     * @return $this
     */
    public function setProductLine($productLine)
    {
        $this->productLine = $productLine;
        return $this;
    }

    /**
     * @return int
     */
    public function getFulfilledCount()
    {
        return $this->fulfilledCount;
    }

    /**
     * @param int $fulfilledCount
     * @return $this
     */
    public function setFulfilledCount($fulfilledCount)
    {
        $this->fulfilledCount = $fulfilledCount;
        return $this;
    }
}
