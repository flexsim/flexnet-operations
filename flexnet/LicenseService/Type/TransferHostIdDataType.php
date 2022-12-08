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
     * @param  string  $soldTo
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
     * @param  string  $soldTo
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

    /**
     * @return string
     */
    public function getSoldTo(): string
    {
        return $this->soldTo;
    }

    /**
     * @param  string  $soldTo
     * @return TransferHostIdDataType
     */
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
     * @return TransferHostIdDataType
     */
    public function withServerIds(ServerIDsType|null $serverIds): TransferHostIdDataType
    {
        $new = clone $this;
        $new->serverIds = $serverIds;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getNodeId(): string|null
    {
        return $this->nodeId;
    }

    /**
     * @param  string|null  $nodeId
     * @return TransferHostIdDataType
     */
    public function withNodeId(string|null $nodeId): TransferHostIdDataType
    {
        $new = clone $this;
        $new->nodeId = $nodeId;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getCustomHostId(): string|null
    {
        return $this->customHostId;
    }

    /**
     * @param  string|null  $customHostId
     * @return TransferHostIdDataType
     */
    public function withCustomHostId(string|null $customHostId): TransferHostIdDataType
    {
        $new = clone $this;
        $new->customHostId = $customHostId;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getCustomHostType(): string|null
    {
        return $this->customHostType;
    }

    /**
     * @param  string|null  $customHostType
     * @return TransferHostIdDataType
     */
    public function withCustomHostType(string|null $customHostType): TransferHostIdDataType
    {
        $new = clone $this;
        $new->customHostType = $customHostType;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getCustomLicenseTechnology(): string|null
    {
        return $this->customLicenseTechnology;
    }

    /**
     * @param  string|null  $customLicenseTechnology
     * @return TransferHostIdDataType
     */
    public function withCustomLicenseTechnology(string|null $customLicenseTechnology): TransferHostIdDataType
    {
        $new = clone $this;
        $new->customLicenseTechnology = $customLicenseTechnology;

        return $new;
    }
}
