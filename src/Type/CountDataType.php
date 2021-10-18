<?php

namespace Flexsim\FlexnetOperations\Type;

class CountDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $activationId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CountForHostsType
     */
    protected $countForHosts;

    /**
     * Constructor
     *
     * @var string $activationId
     * @var \Flexsim\FlexnetOperations\Type\CountForHostsType $countForHosts
     */
    public function __construct(string $activationId, \Flexsim\FlexnetOperations\Type\CountForHostsType $countForHosts)
    {
        $this->activationId = $activationId;
        $this->countForHosts = $countForHosts;
    }

    /**
     * create a new instance of this class
     *
     * @var string $activationId
     * @var \Flexsim\FlexnetOperations\Type\CountForHostsType $countForHosts
     */
    public static function create(string $activationId, \Flexsim\FlexnetOperations\Type\CountForHostsType $countForHosts)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getActivationId()
    {
        return $this->activationId;
    }

    /**
     * @param string $activationId
     * @return $this
     */
    public function setActivationId($activationId)
    {
        $this->activationId = $activationId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CountForHostsType
     */
    public function getCountForHosts()
    {
        return $this->countForHosts;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CountForHostsType $countForHosts
     * @return $this
     */
    public function setCountForHosts($countForHosts)
    {
        $this->countForHosts = $countForHosts;
        return $this;
    }
}
