<?php

namespace Flexsim\FlexnetOperations\Type;

class DeleteUniformSuiteDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\SuiteIdentifierType
     */
    protected $suiteIdentifier;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\SuiteIdentifierType $suiteIdentifier
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SuiteIdentifierType $suiteIdentifier)
    {
        $this->suiteIdentifier = $suiteIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\SuiteIdentifierType $suiteIdentifier
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SuiteIdentifierType $suiteIdentifier)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SuiteIdentifierType
     */
    public function getSuiteIdentifier()
    {
        return $this->suiteIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SuiteIdentifierType $suiteIdentifier
     * @return $this
     */
    public function setSuiteIdentifier($suiteIdentifier)
    {
        $this->suiteIdentifier = $suiteIdentifier;

        return $this;
    }
}
