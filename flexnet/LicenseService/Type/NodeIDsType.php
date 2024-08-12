<?php

namespace Flexnet\LicenseService\Type;

class NodeIDsType
{
    /**
     * @var string|array<string>
     */
    private $nodeId;

    /**
     * Constructor
     *
     * @param  string|array<string>  $nodeId
     */
    public function __construct(string|array $nodeId)
    {
        $this->nodeId = $nodeId;
    }

    /**
     * @param  string|array<string>  $nodeId
     */
    public static function create(string|array $nodeId)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string|array<string>
     */
    public function getNodeId(): string|array
    {
        return $this->nodeId;
    }

    /**
     * @param  string|array<string>  $nodeId
     */
    public function withNodeId(string|array $nodeId): \Flexnet\LicenseService\Type\NodeIDsType
    {
        $new = clone $this;
        $new->nodeId = $nodeId;

        return $new;
    }
}
