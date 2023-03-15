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
     *
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $featureName
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $version
     * @param  \Flexnet\ProductPackagingService\Type\VersionFormatQueryType|null  $versionFormat
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\StateQueryType|null  $state
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $creationDate
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $lastModifiedDate
     */
    public function __construct(SimpleQueryType|null $featureName = null, SimpleQueryType|null $version = null, VersionFormatQueryType|null $versionFormat = null, SimpleQueryType|null $description = null, StateQueryType|null $state = null, DateQueryType|null $creationDate = null, DateQueryType|null $lastModifiedDate = null)
    {
        $this->featureName = $featureName;
        $this->version = $version;
        $this->versionFormat = $versionFormat;
        $this->description = $description;
        $this->state = $state;
        $this->creationDate = $creationDate;
        $this->lastModifiedDate = $lastModifiedDate;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $featureName
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $version
     * @param  \Flexnet\ProductPackagingService\Type\VersionFormatQueryType|null  $versionFormat
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $description
     * @param  \Flexnet\ProductPackagingService\Type\StateQueryType|null  $state
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $creationDate
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $lastModifiedDate
     */
    public static function create(SimpleQueryType|null $featureName = null, SimpleQueryType|null $version = null, VersionFormatQueryType|null $versionFormat = null, SimpleQueryType|null $description = null, StateQueryType|null $state = null, DateQueryType|null $creationDate = null, DateQueryType|null $lastModifiedDate = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    public function getFeatureName(): SimpleQueryType|null
    {
        return $this->featureName;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $featureName
     */
    public function withFeatureName(SimpleQueryType|null $featureName): FeatureQueryParametersType
    {
        $new = clone $this;
        $new->featureName = $featureName;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    public function getVersion(): SimpleQueryType|null
    {
        return $this->version;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $version
     */
    public function withVersion(SimpleQueryType|null $version): FeatureQueryParametersType
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\VersionFormatQueryType|null
     */
    public function getVersionFormat(): VersionFormatQueryType|null
    {
        return $this->versionFormat;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\VersionFormatQueryType|null  $versionFormat
     */
    public function withVersionFormat(VersionFormatQueryType|null $versionFormat): FeatureQueryParametersType
    {
        $new = clone $this;
        $new->versionFormat = $versionFormat;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\SimpleQueryType|null
     */
    public function getDescription(): SimpleQueryType|null
    {
        return $this->description;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\SimpleQueryType|null  $description
     */
    public function withDescription(SimpleQueryType|null $description): FeatureQueryParametersType
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\StateQueryType|null
     */
    public function getState(): StateQueryType|null
    {
        return $this->state;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\StateQueryType|null  $state
     */
    public function withState(StateQueryType|null $state): FeatureQueryParametersType
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\DateQueryType|null
     */
    public function getCreationDate(): DateQueryType|null
    {
        return $this->creationDate;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $creationDate
     */
    public function withCreationDate(DateQueryType|null $creationDate): FeatureQueryParametersType
    {
        $new = clone $this;
        $new->creationDate = $creationDate;

        return $new;
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\DateQueryType|null
     */
    public function getLastModifiedDate(): DateQueryType|null
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\DateQueryType|null  $lastModifiedDate
     */
    public function withLastModifiedDate(DateQueryType|null $lastModifiedDate): FeatureQueryParametersType
    {
        $new = clone $this;
        $new->lastModifiedDate = $lastModifiedDate;

        return $new;
    }
}
