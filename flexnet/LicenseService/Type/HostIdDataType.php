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
     *
     * @param \Flexnet\LicenseService\Type\ServerIDsType|null $serverIds
     * @param \Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds
     * @param \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost
     */
    public function __construct(\Flexnet\LicenseService\Type\ServerIDsType|null $serverIds = null, \Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds = null, \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost = null)
    {
        $this->serverIds = $serverIds;
        $this->nodeIds = $nodeIds;
        $this->customHost = $customHost;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ServerIDsType|null $serverIds
     * @param \Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds
     * @param \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost
     */
    public static function create(\Flexnet\LicenseService\Type\ServerIDsType|null $serverIds = null, \Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds = null, \Flexnet\LicenseService\Type\CustomHostIDType|null $customHost = null)
    {
        return new static(...\func_get_args());
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
     * @return HostIdDataType
     */
    public function withServerIds(\Flexnet\LicenseService\Type\ServerIDsType|null $serverIds) : \Flexnet\LicenseService\Type\HostIdDataType
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
     * @return HostIdDataType
     */
    public function withNodeIds(\Flexnet\LicenseService\Type\NodeIDsType|null $nodeIds) : \Flexnet\LicenseService\Type\HostIdDataType
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
     * @return HostIdDataType
     */
    public function withCustomHost(\Flexnet\LicenseService\Type\CustomHostIDType|null $customHost) : \Flexnet\LicenseService\Type\HostIdDataType
    {
        $new = clone $this;
        $new->customHost = $customHost;

        return $new;
    }
}

