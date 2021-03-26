<?php

namespace Flexsim\FlexnetOperations\Type;

class DeletePartNumberDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType
     */
    private $partNumberIdentifier;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumberIdentifier
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumberIdentifier)
    {
        $this->partNumberIdentifier = $partNumberIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumberIdentifier
     */
    public static function create(\Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumberIdentifier)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType
     */
    public function getPartNumberIdentifier()
    {
        return $this->partNumberIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType $partNumberIdentifier
     * @return $this
     */
    public function setPartNumberIdentifier($partNumberIdentifier)
    {
        $this->partNumberIdentifier = $partNumberIdentifier;
        return $this;
    }


}

