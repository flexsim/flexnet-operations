<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedDeleteUniformSuiteDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SuiteIdentifierType
     */
    private $suiteIdentifier;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SuiteIdentifierType $suiteIdentifier
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SuiteIdentifierType $suiteIdentifier, string $reason = null)
    {
        $this->suiteIdentifier = $suiteIdentifier;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SuiteIdentifierType $suiteIdentifier
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SuiteIdentifierType $suiteIdentifier, string $reason = null)
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
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }


}

