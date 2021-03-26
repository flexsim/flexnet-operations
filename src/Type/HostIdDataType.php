<?php

namespace Flexsim\FlexnetOperations\Type;

class HostIdDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ServerIDsType
     */
    private $serverIds;

    /**
     * @var \Flexsim\FlexnetOperations\Type\NodeIDsType
     */
    private $nodeIds;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CustomHostIDType
     */
    private $customHost;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds
     * @var \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds
     * @var \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds = null, \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds = null, \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost = null)
    {
        $this->serverIds = $serverIds;
        $this->nodeIds = $nodeIds;
        $this->customHost = $customHost;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds
     * @var \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds
     * @var \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds = null, \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds = null, \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ServerIDsType
     */
    public function getServerIds()
    {
        return $this->serverIds;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ServerIDsType $serverIds
     * @return $this
     */
    public function setServerIds($serverIds)
    {
        $this->serverIds = $serverIds;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\NodeIDsType
     */
    public function getNodeIds()
    {
        return $this->nodeIds;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\NodeIDsType $nodeIds
     * @return $this
     */
    public function setNodeIds($nodeIds)
    {
        $this->nodeIds = $nodeIds;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CustomHostIDType
     */
    public function getCustomHost()
    {
        return $this->customHost;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CustomHostIDType $customHost
     * @return $this
     */
    public function setCustomHost($customHost)
    {
        $this->customHost = $customHost;
        return $this;
    }


}

