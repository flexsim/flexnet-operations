<?php

namespace Flexnet\LicenseService\Type;

class TransferHostIdDataType
{
    /**
     * @var string
     */
    private $soldTo;

    /**
     * @var \Flexnet\LicenseService\Type\ServerIDsType|null
     */
    private $serverIds;

    /**
     * @var string|null
     */
    private $nodeId;

    /**
     * @var string|null
     */
    private $customHostId;

    /**
     * @var string|null
     */
    private $customHostType;

    /**
     * @var string|null
     */
    private $customLicenseTechnology;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\ServerIDsType|null  $serverIds
     * @param  string|null  $nodeId
     * @param  string|null  $customHostId
     * @param  string|null  $customHostType
     * @param  string|null  $customLicenseTechnology
     */
    public function __construct(string $soldTo, ServerIDsType|null $serverIds = null, string|null $nodeId = null, string|null $customHostId = null, string|null $customHostType = null, string|null $customLicenseTechnology = null)
    {
        $this->soldTo = $soldTo;
        $this->serverIds = $serverIds;
        $this->nodeId = $nodeId;
        $this->customHostId = $customHostId;
        $this->customHostType = $customHostType;
        $this->customLicenseTechnology = $customLicenseTechnology;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ServerIDsType|null  $serverIds
     * @param  string|null  $nodeId
     * @param  string|null  $customHostId
     * @param  string|null  $customHostType
     * @param  string|null  $customLicenseTechnology
     */
    public static function create(string $soldTo, ServerIDsType|null $serverIds = null, string|null $nodeId = null, string|null $customHostId = null, string|null $customHostType = null, string|null $customLicenseTechnology = null)
    {
        return new static(...\func_get_args());
    }

    public function getSoldTo(): string
    {
        return $this->soldTo;
    }

    public function withSoldTo(string $soldTo): TransferHostIdDataType
    {
        $new = clone $this;
        $new->soldTo = $soldTo;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\ServerIDsType|null
     */
    public function getServerIds(): ServerIDsType|null
    {
        return $this->serverIds;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ServerIDsType|null  $serverIds
     */
    public function withServerIds(ServerIDsType|null $serverIds): TransferHostIdDataType
    {
        $new = clone $this;
        $new->serverIds = $serverIds;

        return $new;
    }

    public function getNodeId(): string|null
    {
        return $this->nodeId;
    }

    public function withNodeId(string|null $nodeId): TransferHostIdDataType
    {
        $new = clone $this;
        $new->nodeId = $nodeId;

        return $new;
    }

    public function getCustomHostId(): string|null
    {
        return $this->customHostId;
    }

    public function withCustomHostId(string|null $customHostId): TransferHostIdDataType
    {
        $new = clone $this;
        $new->customHostId = $customHostId;

        return $new;
    }

    public function getCustomHostType(): string|null
    {
        return $this->customHostType;
    }

    public function withCustomHostType(string|null $customHostType): TransferHostIdDataType
    {
        $new = clone $this;
        $new->customHostType = $customHostType;

        return $new;
    }

    public function getCustomLicenseTechnology(): string|null
    {
        return $this->customLicenseTechnology;
    }

    public function withCustomLicenseTechnology(string|null $customLicenseTechnology): TransferHostIdDataType
    {
        $new = clone $this;
        $new->customLicenseTechnology = $customLicenseTechnology;

        return $new;
    }
}
