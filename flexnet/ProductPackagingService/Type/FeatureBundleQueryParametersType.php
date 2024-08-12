<?php

namespace Flexnet\ProductPackagingService\Type;

class FeatureBundleQueryParametersType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    private $name;

    /**
     * @var \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    private $description;

    /**
     * @var \Flexnet\ProductPackagingService\Type\StateQueryType|null
     */
    private $state;

    /**
     * @var \Flexnet\ProductPackagingService\Type\DateQueryType|null
     */
    private $creationDate;

    /**
     * @var \Flexnet\ProductPackagingService\Type\DateQueryType|null
     */
    private $lastModifiedDate;

    /**
     * Constructor
     */
    public function __construct(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $name = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $description = null, ?\Flexnet\ProductPackagingService\Type\StateQueryType $state = null, ?\Flexnet\ProductPackagingService\Type\DateQueryType $creationDate = null, ?\Flexnet\ProductPackagingService\Type\DateQueryType $lastModifiedDate = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->state = $state;
        $this->creationDate = $creationDate;
        $this->lastModifiedDate = $lastModifiedDate;
    }

    public static function create(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $name = null, ?\Flexnet\ProductPackagingService\Type\SimpleQueryType $description = null, ?\Flexnet\ProductPackagingService\Type\StateQueryType $state = null, ?\Flexnet\ProductPackagingService\Type\DateQueryType $creationDate = null, ?\Flexnet\ProductPackagingService\Type\DateQueryType $lastModifiedDate = null)
    {
        return new static(...\func_get_args());
    }

    public function getName(): ?\Flexnet\ProductPackagingService\Type\SimpleQueryType
    {
        return $this->name;
    }

    public function withName(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $name): \Flexnet\ProductPackagingService\Type\FeatureBundleQueryParametersType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getDescription(): ?\Flexnet\ProductPackagingService\Type\SimpleQueryType
    {
        return $this->description;
    }

    public function withDescription(?\Flexnet\ProductPackagingService\Type\SimpleQueryType $description): \Flexnet\ProductPackagingService\Type\FeatureBundleQueryParametersType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getState(): ?\Flexnet\ProductPackagingService\Type\StateQueryType
    {
        return $this->state;
    }

    public function withState(?\Flexnet\ProductPackagingService\Type\StateQueryType $state): \Flexnet\ProductPackagingService\Type\FeatureBundleQueryParametersType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getCreationDate(): ?\Flexnet\ProductPackagingService\Type\DateQueryType
    {
        return $this->creationDate;
    }

    public function withCreationDate(?\Flexnet\ProductPackagingService\Type\DateQueryType $creationDate): \Flexnet\ProductPackagingService\Type\FeatureBundleQueryParametersType
    {
        $new = clone $this;
        $new->creationDate = $creationDate;

        return $new;
    }

    public function getLastModifiedDate(): ?\Flexnet\ProductPackagingService\Type\DateQueryType
    {
        return $this->lastModifiedDate;
    }

    public function withLastModifiedDate(?\Flexnet\ProductPackagingService\Type\DateQueryType $lastModifiedDate): \Flexnet\ProductPackagingService\Type\FeatureBundleQueryParametersType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }
}
