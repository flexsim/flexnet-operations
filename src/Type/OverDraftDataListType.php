<?php

namespace Flexsim\FlexnetOperations\Type;

class OverDraftDataListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ActivationIdOverDraftMapType|array 
     */
    protected $activationIdMap;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\ActivationIdOverDraftMapType|array $activationIdMap
     */
    public function __construct($activationIdMap)
    {
        $this->activationIdMap = $activationIdMap;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\ActivationIdOverDraftMapType|array $activationIdMap
     */
    public static function create($activationIdMap)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ActivationIdOverDraftMapType|array 
     */
    public function getActivationIdMap()
    {
        return $this->activationIdMap;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ActivationIdOverDraftMapType|array $activationIdMap
     * @return $this
     */
    public function setActivationIdMap($activationIdMap)
    {
        $this->activationIdMap = $activationIdMap;
        return $this;
    }
}
