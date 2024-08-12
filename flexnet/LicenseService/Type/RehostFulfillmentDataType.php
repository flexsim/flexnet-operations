<?php

namespace Flexnet\LicenseService\Type;

class RehostFulfillmentDataType
{
    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentIdentifierType
     */
    private $fulfillmentIdentifier;

    /**
     * @var \Flexnet\LicenseService\Type\ServerIDsType|null
     */
    private $serverIds;

    /**
     * @var \Flexnet\LicenseService\Type\NodeIDsType|null
     */
    private $nodeIds;

    /**
     * @var \Flexnet\LicenseService\Type\CustomHostIDType|null
     */
    private $customHost;

    /**
     * @var int|null
     */
    private $partialCount;

    /**
     * @var int|null
     */
    private $overDraftCount;

    /**
     * @var bool|null
     */
    private $overridePolicy;

    /**
     * Constructor
     */
    public function __construct(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, ?\Flexnet\LicenseService\Type\ServerIDsType $serverIds = null, ?\Flexnet\LicenseService\Type\NodeIDsType $nodeIds = null, ?\Flexnet\LicenseService\Type\CustomHostIDType $customHost = null, ?int $partialCount = null, ?int $overDraftCount = null, ?bool $overridePolicy = null)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->serverIds = $serverIds;
        $this->nodeIds = $nodeIds;
        $this->customHost = $customHost;
        $this->partialCount = $partialCount;
        $this->overDraftCount = $overDraftCount;
        $this->overridePolicy = $overridePolicy;
    }

    public static function create(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, ?\Flexnet\LicenseService\Type\ServerIDsType $serverIds = null, ?\Flexnet\LicenseService\Type\NodeIDsType $nodeIds = null, ?\Flexnet\LicenseService\Type\CustomHostIDType $customHost = null, ?int $partialCount = null, ?int $overDraftCount = null, ?bool $overridePolicy = null)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillmentIdentifier(): \Flexnet\LicenseService\Type\FulfillmentIdentifierType
    {
        return $this->fulfillmentIdentifier;
    }

    public function withFulfillmentIdentifier(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier): \Flexnet\LicenseService\Type\RehostFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $new;
    }

    public function getServerIds(): ?\Flexnet\LicenseService\Type\ServerIDsType
    {
        return $this->serverIds;
    }

    public function withServerIds(?\Flexnet\LicenseService\Type\ServerIDsType $serverIds): \Flexnet\LicenseService\Type\RehostFulfillmentDataType
    {
        $new = clone $this;
        $new->serverIds = $serverIds;

        return $new;
    }

    public function getNodeIds(): ?\Flexnet\LicenseService\Type\NodeIDsType
    {
        return $this->nodeIds;
    }

    public function withNodeIds(?\Flexnet\LicenseService\Type\NodeIDsType $nodeIds): \Flexnet\LicenseService\Type\RehostFulfillmentDataType
    {
        $new = clone $this;
        $new->nodeIds = $nodeIds;

        return $new;
    }

    public function getCustomHost(): ?\Flexnet\LicenseService\Type\CustomHostIDType
    {
        return $this->customHost;
    }

    public function withCustomHost(?\Flexnet\LicenseService\Type\CustomHostIDType $customHost): \Flexnet\LicenseService\Type\RehostFulfillmentDataType
    {
        $new = clone $this;
        $new->customHost = $customHost;

        return $new;
    }

    public function getPartialCount(): ?int
    {
        return $this->partialCount;
    }

    public function withPartialCount(?int $partialCount): \Flexnet\LicenseService\Type\RehostFulfillmentDataType
    {
        $new = clone $this;
        $new->partialCount = $partialCount;

        return $new;
    }

    public function getOverDraftCount(): ?int
    {
        return $this->overDraftCount;
    }

    public function withOverDraftCount(?int $overDraftCount): \Flexnet\LicenseService\Type\RehostFulfillmentDataType
    {
        $new = clone $this;
        $new->overDraftCount = $overDraftCount;

        return $new;
    }

    public function getOverridePolicy(): ?bool
    {
        return $this->overridePolicy;
    }

    public function withOverridePolicy(?bool $overridePolicy): \Flexnet\LicenseService\Type\RehostFulfillmentDataType
    {
        $new = clone $this;
        $new->overridePolicy = $overridePolicy;

        return $new;
    }
}
