<?php

namespace Flexnet\LicenseService\Type;

class HostIdDataType
{
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
     * Constructor
     */
    public function __construct(ServerIDsType $serverIds = null, NodeIDsType $nodeIds = null, CustomHostIDType $customHost = null)
    {
        $this->serverIds = $serverIds;
        $this->nodeIds = $nodeIds;
        $this->customHost = $customHost;
    }

    public static function create(ServerIDsType $serverIds = null, NodeIDsType $nodeIds = null, CustomHostIDType $customHost = null)
    {
        return new static(...\func_get_args());
    }

    public function getServerIds(): ?ServerIDsType
    {
        return $this->serverIds;
    }

    public function withServerIds(?ServerIDsType $serverIds): HostIdDataType
    {
        $new = clone $this;
        $new->serverIds = $serverIds;

        return $new;
    }

    public function getNodeIds(): ?NodeIDsType
    {
        return $this->nodeIds;
    }

    public function withNodeIds(?NodeIDsType $nodeIds): HostIdDataType
    {
        $new = clone $this;
        $new->nodeIds = $nodeIds;

        return $new;
    }

    public function getCustomHost(): ?CustomHostIDType
    {
        return $this->customHost;
    }

    public function withCustomHost(?CustomHostIDType $customHost): HostIdDataType
    {
        $new = clone $this;
        $new->customHost = $customHost;

        return $new;
    }
}
