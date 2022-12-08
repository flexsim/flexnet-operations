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
     *
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @param \Flexnet\LicenseService\Type\ServerIDsType|null $serverIds
     * @param \Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds
     * @param \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost
     * @param int|null $partialCount
     * @param int|null $overDraftCount
     * @param bool|null $overridePolicy
     */
    public function __construct(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, \Flexnet\LicenseService\Type\ServerIDsType|null $serverIds = null, \Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds = null, \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost = null, int|null $partialCount = null, int|null $overDraftCount = null, bool|null $overridePolicy = null)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->serverIds = $serverIds;
        $this->nodeIds = $nodeIds;
        $this->customHost = $customHost;
        $this->partialCount = $partialCount;
        $this->overDraftCount = $overDraftCount;
        $this->overridePolicy = $overridePolicy;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @param \Flexnet\LicenseService\Type\ServerIDsType|null $serverIds
     * @param \Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds
     * @param \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost
     * @param int|null $partialCount
     * @param int|null $overDraftCount
     * @param bool|null $overridePolicy
     */
    public static function create(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, \Flexnet\LicenseService\Type\ServerIDsType|null $serverIds = null, \Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds = null, \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost = null, int|null $partialCount = null, int|null $overDraftCount = null, bool|null $overridePolicy = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdentifierType
     */
    public function getFulfillmentIdentifier() : \Flexnet\LicenseService\Type\FulfillmentIdentifierType
    {
        return $this->fulfillmentIdentifier;
    }

    /**
     * @param \Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @return RehostFulfillmentDataType
     */
    public function withFulfillmentIdentifier(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier) : \Flexnet\LicenseService\Type\RehostFulfillmentDataType
    {
        $new = clone $this;
        $new->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\ServerIDsType|null
     */
    public function getServerIds() : \Flexnet\LicenseService\Type\ServerIDsType|null
    {
        return $this->serverIds;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ServerIDsType|null $serverIds
     * @return RehostFulfillmentDataType
     */
    public function withServerIds(\Flexnet\LicenseService\Type\ServerIDsType|null $serverIds) : \Flexnet\LicenseService\Type\RehostFulfillmentDataType
    {
        $new = clone $this;
        $new->serverIds = $serverIds;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\NodeIDsType|null
     */
    public function getNodeIds() : \Flexnet\LicenseService\Type\NodeIDsType|null
    {
        return $this->nodeIds;
    }

    /**
     * @param \Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds
     * @return RehostFulfillmentDataType
     */
    public function withNodeIds(\Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds) : \Flexnet\LicenseService\Type\RehostFulfillmentDataType
    {
        $new = clone $this;
        $new->nodeIds = $nodeIds;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\CustomHostIDType|null
     */
    public function getCustomHost() : \Flexnet\LicenseService\Type\CustomHostIDType|null
    {
        return $this->customHost;
    }

    /**
     * @param \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost
     * @return RehostFulfillmentDataType
     */
    public function withCustomHost(\Flexnet\LicenseService\Type\CustomHostIDType|null $customHost) : \Flexnet\LicenseService\Type\RehostFulfillmentDataType
    {
        $new = clone $this;
        $new->customHost = $customHost;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getPartialCount() : int|null
    {
        return $this->partialCount;
    }

    /**
     * @param int|null $partialCount
     * @return RehostFulfillmentDataType
     */
    public function withPartialCount(int|null $partialCount) : \Flexnet\LicenseService\Type\RehostFulfillmentDataType
    {
        $new = clone $this;
        $new->partialCount = $partialCount;

        return $new;
    }

    /**
     * @return int|null
     */
    public function getOverDraftCount() : int|null
    {
        return $this->overDraftCount;
    }

    /**
     * @param int|null $overDraftCount
     * @return RehostFulfillmentDataType
     */
    public function withOverDraftCount(int|null $overDraftCount) : \Flexnet\LicenseService\Type\RehostFulfillmentDataType
    {
        $new = clone $this;
        $new->overDraftCount = $overDraftCount;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getOverridePolicy() : bool|null
    {
        return $this->overridePolicy;
    }

    /**
     * @param bool|null $overridePolicy
     * @return RehostFulfillmentDataType
     */
    public function withOverridePolicy(bool|null $overridePolicy) : \Flexnet\LicenseService\Type\RehostFulfillmentDataType
    {
        $new = clone $this;
        $new->overridePolicy = $overridePolicy;

        return $new;
    }
}

