<?php

namespace Flexsim\FlexnetOperations\Type;

class UniformSuiteStateDataType extends FlexnetType
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\SuiteIdentifierType
     */
    protected $suiteIdentifier;

    /**
     * @var string
     */
    protected $stateToSet;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\SuiteIdentifierType $suiteIdentifier
     * @param string $stateToSet
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SuiteIdentifierType $suiteIdentifier, string $stateToSet)
    {
        $this->suiteIdentifier = $suiteIdentifier;
        $this->stateToSet = $stateToSet;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\SuiteIdentifierType $suiteIdentifier
     * @param string $stateToSet
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SuiteIdentifierType $suiteIdentifier, string $stateToSet)
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

    /**
     * @return string
     */
    public function getStateToSet()
    {
        return $this->stateToSet;
    }

    /**
     * @param string $stateToSet
     * @return $this
     */
    public function setStateToSet($stateToSet)
    {
        $this->stateToSet = $stateToSet;

        return $this;
    }
}
