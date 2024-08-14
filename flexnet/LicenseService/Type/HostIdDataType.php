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
    public function __construct(?\Flexnet\LicenseService\Type\ServerIDsType $serverIds = null, ?\Flexnet\LicenseService\Type\NodeIDsType $nodeIds = null, ?\Flexnet\LicenseService\Type\CustomHostIDType $customHost = null)
    {
        $this->serverIds = $serverIds;
        $this->nodeIds = $nodeIds;
        $this->customHost = $customHost;
    }

    public static function create(?\Flexnet\LicenseService\Type\ServerIDsType $serverIds = null, ?\Flexnet\LicenseService\Type\NodeIDsType $nodeIds = null, ?\Flexnet\LicenseService\Type\CustomHostIDType $customHost = null)
    {
        return new static(...\func_get_args());
    }

    public function getServerIds(): ?\Flexnet\LicenseService\Type\ServerIDsType
    {
        return $this->serverIds;
    }

    public function withServerIds(?\Flexnet\LicenseService\Type\ServerIDsType $serverIds): \Flexnet\LicenseService\Type\HostIdDataType
    {
        $new = clone $this;
        $new->serverIds = $serverIds;

        return $new;
    }

    public function getNodeIds(): ?\Flexnet\LicenseService\Type\NodeIDsType
    {
        return $this->nodeIds;
    }

    public function withNodeIds(?\Flexnet\LicenseService\Type\NodeIDsType $nodeIds): \Flexnet\LicenseService\Type\HostIdDataType
    {
        $new = clone $this;
        $new->nodeIds = $nodeIds;

        return $new;
    }

    public function getCustomHost(): ?\Flexnet\LicenseService\Type\CustomHostIDType
    {
        return $this->customHost;
    }

    public function withCustomHost(?\Flexnet\LicenseService\Type\CustomHostIDType $customHost): \Flexnet\LicenseService\Type\HostIdDataType
    {
        $new = clone $this;
        $new->customHost = $customHost;

        return $new;
    }
}
