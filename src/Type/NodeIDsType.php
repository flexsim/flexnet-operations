<?php

namespace Flexsim\FlexnetOperations\Type;

class NodeIDsType
{

    /**
     * @var string
     */
    private $nodeId;

    /**
     * Constructor
     *
     * @var string $nodeId
     */
    public function __construct(string $nodeId)
    {
        $this->nodeId = $nodeId;
    }

    /**
     * create a new instance of this class
     *
     * @var string $nodeId
     */
    public static function create(string $nodeId)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getNodeId()
    {
        return $this->nodeId;
    }

    /**
     * @param string $nodeId
     * @return $this
     */
    public function setNodeId($nodeId)
    {
        $this->nodeId = $nodeId;
        return $this;
    }


}

