<?php

namespace Flexsim\FlexnetOperations\Type;

class DeletePartNumberDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType
     */
    protected $partNumberIdentifier;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType  $partNumberIdentifier
     */
    public function __construct(PartNumberIdentifierType $partNumberIdentifier)
    {
        $this->partNumberIdentifier = $partNumberIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType  $partNumberIdentifier
     */
    public static function create(PartNumberIdentifierType $partNumberIdentifier)
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
     * @param  \Flexsim\FlexnetOperations\Type\PartNumberIdentifierType  $partNumberIdentifier
     * @return $this
     */
    public function setPartNumberIdentifier($partNumberIdentifier)
    {
        $this->partNumberIdentifier = $partNumberIdentifier;

        return $this;
    }
}
