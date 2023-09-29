<?php

namespace Flexnet\ProductPackagingService\Type;

class FeatureQueryParametersType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    private $featureName;

    /**
     * @var \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    private $version;

    /**
     * @var \Flexnet\ProductPackagingService\Type\VersionFormatQueryType|null
     */
    private $versionFormat;

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
    public function __construct(SimpleQueryType $featureName = null, SimpleQueryType $version = null, VersionFormatQueryType $versionFormat = null, SimpleQueryType $description = null, StateQueryType $state = null, DateQueryType $creationDate = null, DateQueryType $lastModifiedDate = null)
    {
        $this->featureName = $featureName;
        $this->version = $version;
        $this->versionFormat = $versionFormat;
        $this->description = $description;
        $this->state = $state;
        $this->creationDate = $creationDate;
        $this->lastModifiedDate = $lastModifiedDate;
    }

    public static function create(SimpleQueryType $featureName = null, SimpleQueryType $version = null, VersionFormatQueryType $versionFormat = null, SimpleQueryType $description = null, StateQueryType $state = null, DateQueryType $creationDate = null, DateQueryType $lastModifiedDate = null)
    {
        return new static(...\func_get_args());
    }

    public function getFeatureName(): ?SimpleQueryType
    {
        return $this->featureName;
    }

    public function withFeatureName(?SimpleQueryType $featureName): FeatureQueryParametersType
    {
        $new = clone $this;
        $new->featureName = $featureName;

        return $new;
    }

    public function getVersion(): ?SimpleQueryType
    {
        return $this->version;
    }

    public function withVersion(?SimpleQueryType $version): FeatureQueryParametersType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    public function getVersionFormat(): ?VersionFormatQueryType
    {
        return $this->versionFormat;
    }

    public function withVersionFormat(?VersionFormatQueryType $versionFormat): FeatureQueryParametersType
    {
        $new = clone $this;
        $new->versionFormat = $versionFormat;

        return $new;
    }

    public function getDescription(): ?SimpleQueryType
    {
        return $this->description;
    }

    public function withDescription(?SimpleQueryType $description): FeatureQueryParametersType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getState(): ?StateQueryType
    {
        return $this->state;
    }

    public function withState(?StateQueryType $state): FeatureQueryParametersType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    public function getCreationDate(): ?DateQueryType
    {
        return $this->creationDate;
    }

    public function withCreationDate(?DateQueryType $creationDate): FeatureQueryParametersType
    {
        $new = clone $this;
        $new->creationDate = $creationDate;

        return $new;
    }

    public function getLastModifiedDate(): ?DateQueryType
    {
        return $this->lastModifiedDate;
    }

    public function withLastModifiedDate(?DateQueryType $lastModifiedDate): FeatureQueryParametersType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }
}
