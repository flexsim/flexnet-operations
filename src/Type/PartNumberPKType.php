<?php

namespace Flexsim\FlexnetOperations\Type;

class PartNumberPKType
{

    /**
     * @var string
     */
    private $partId;

    /**
     * Constructor
     *
     * @var string $partId
     */
    public function __construct(string $partId)
    {
        $this->partId = $partId;
    }

    /**
     * create a new instance of this class
     *
     * @var string $partId
     */
    public static function create(string $partId)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getPartId()
    {
        return $this->partId;
    }

    /**
     * @param string $partId
     * @return $this
     */
    public function setPartId($partId)
    {
        $this->partId = $partId;
        return $this;
    }


}

