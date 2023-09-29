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
     */
    public function __construct(string $soldTo, ServerIDsType $serverIds = null, string $nodeId = null, string $customHostId = null, string $customHostType = null, string $customLicenseTechnology = null)
    {
        $this->soldTo = $soldTo;
        $this->serverIds = $serverIds;
        $this->nodeId = $nodeId;
        $this->customHostId = $customHostId;
        $this->customHostType = $customHostType;
        $this->customLicenseTechnology = $customLicenseTechnology;
    }

    public static function create(string $soldTo, ServerIDsType $serverIds = null, string $nodeId = null, string $customHostId = null, string $customHostType = null, string $customLicenseTechnology = null)
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

    public function getServerIds(): ?ServerIDsType
    {
        return $this->serverIds;
    }

    public function withServerIds(?ServerIDsType $serverIds): TransferHostIdDataType
    {
        $new = clone $this;
        $new->serverIds = $serverIds;

        return $new;
    }

    public function getNodeId(): ?string
    {
        return $this->nodeId;
    }

    public function withNodeId(?string $nodeId): TransferHostIdDataType
    {
        $new = clone $this;
        $new->nodeId = $nodeId;

        return $new;
    }

    public function getCustomHostId(): ?string
    {
        return $this->customHostId;
    }

    public function withCustomHostId(?string $customHostId): TransferHostIdDataType
    {
        $new = clone $this;
        $new->customHostId = $customHostId;

        return $new;
    }

    public function getCustomHostType(): ?string
    {
        return $this->customHostType;
    }

    public function withCustomHostType(?string $customHostType): TransferHostIdDataType
    {
        $new = clone $this;
        $new->customHostType = $customHostType;

        return $new;
    }

    public function getCustomLicenseTechnology(): ?string
    {
        return $this->customLicenseTechnology;
    }

    public function withCustomLicenseTechnology(?string $customLicenseTechnology): TransferHostIdDataType
    {
        $new = clone $this;
        $new->customLicenseTechnology = $customLicenseTechnology;

        return $new;
    }
}
