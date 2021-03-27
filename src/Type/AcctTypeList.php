<?php

namespace Flexsim\FlexnetOperations\Type;

class AcctTypeList
{

    /**
     * @var string
     */
    private $acctType;

    /**
     * Constructor
     *
     * @var string $acctType
     */
    public function __construct(string $acctType)
    {
        $this->acctType = $acctType;
    }

    /**
     * create a new instance of this class
     *
     * @var string $acctType
     */
    public static function create(string $acctType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getAcctType()
    {
        return $this->acctType;
    }

    /**
     * @param string $acctType
     * @return $this
     */
    public function setAcctType($acctType)
    {
        $this->acctType = $acctType;
        return $this;
    }


}

