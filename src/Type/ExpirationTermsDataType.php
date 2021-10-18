<?php

namespace Flexsim\FlexnetOperations\Type;

class ExpirationTermsDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DurationType
     */
    protected $term;

    /**
     * @var \DateTimeInterface
     */
    protected $expirationDate;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\DurationType $term
     * @var \DateTimeInterface $expirationDate
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\DurationType $term = null, \DateTimeInterface $expirationDate = null)
    {
        $this->term = $term;
        $this->expirationDate = $expirationDate;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\DurationType $term
     * @var \DateTimeInterface $expirationDate
     */
    public static function create(\Flexsim\FlexnetOperations\Type\DurationType $term = null, \DateTimeInterface $expirationDate = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DurationType
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DurationType $term
     * @return $this
     */
    public function setTerm($term)
    {
        $this->term = $term;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param \DateTimeInterface $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }
}
