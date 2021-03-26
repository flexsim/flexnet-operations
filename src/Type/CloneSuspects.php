<?php

namespace Flexsim\FlexnetOperations\Type;

class CloneSuspects
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CloneSuspect
     */
    private $cloneSuspect;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CloneSuspect $cloneSuspect
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CloneSuspect $cloneSuspect)
    {
        $this->cloneSuspect = $cloneSuspect;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CloneSuspect $cloneSuspect
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CloneSuspect $cloneSuspect)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CloneSuspect
     */
    public function getCloneSuspect()
    {
        return $this->cloneSuspect;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CloneSuspect $cloneSuspect
     * @return $this
     */
    public function setCloneSuspect($cloneSuspect)
    {
        $this->cloneSuspect = $cloneSuspect;
        return $this;
    }


}

