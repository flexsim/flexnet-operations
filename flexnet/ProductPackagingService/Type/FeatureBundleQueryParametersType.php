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
    public function __construct(SimpleQueryType $name = null, SimpleQueryType $description = null, StateQueryType $state = null, DateQueryType $creationDate = null, DateQueryType $lastModifiedDate = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->state = $state;
        $this->creationDate = $creationDate;
        $this->lastModifiedDate = $lastModifiedDate;
    }

    public static function create(SimpleQueryType $name = null, SimpleQueryType $description = null, StateQueryType $state = null, DateQueryType $creationDate = null, DateQueryType $lastModifiedDate = null)
    {
        return new static(...\func_get_args());
    }

    public function getName(): ?SimpleQueryType
    {
        return $this->name;
    }

    public function withName(?SimpleQueryType $name): FeatureBundleQueryParametersType
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getDescription(): ?SimpleQueryType
    {
        return $this->description;
    }

    public function withDescription(?SimpleQueryType $description): FeatureBundleQueryParametersType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getState(): ?StateQueryType
    {
        return $this->state;
    }

    public function withState(?StateQueryType $state): FeatureBundleQueryParametersType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getCreationDate(): ?DateQueryType
    {
        return $this->creationDate;
    }

    public function withCreationDate(?DateQueryType $creationDate): FeatureBundleQueryParametersType
    {
        $new = clone $this;
        $new->creationDate = $creationDate;

        return $new;
    }

    public function getLastModifiedDate(): ?DateQueryType
    {
        return $this->lastModifiedDate;
    }

    public function withLastModifiedDate(?DateQueryType $lastModifiedDate): FeatureBundleQueryParametersType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }
}
