<?php

namespace Flexsim\FlexnetOperations\Type;

class OverDraftDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ActivationIdOverDraftMapType
     */
    private $activationIdMap;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ActivationIdOverDraftMapType $activationIdMap
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ActivationIdOverDraftMapType $activationIdMap)
    {
        $this->activationIdMap = $activationIdMap;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ActivationIdOverDraftMapType $activationIdMap
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ActivationIdOverDraftMapType $activationIdMap)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ActivationIdOverDraftMapType
     */
    public function getActivationIdMap()
    {
        return $this->activationIdMap;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ActivationIdOverDraftMapType $activationIdMap
     * @return $this
     */
    public function setActivationIdMap($activationIdMap)
    {
        $this->activationIdMap = $activationIdMap;
        return $this;
    }


}

