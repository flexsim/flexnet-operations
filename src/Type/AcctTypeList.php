<?php

namespace Flexsim\FlexnetOperations\Type;

class AcctTypeList extends FlexnetType
{
    /**
     * @var string
     */
    protected $acctType;

    /**
     * Constructor
     *
     * @param string $acctType
     */
    public function __construct(string $acctType)
    {
        $this->acctType = $acctType;
    }

    /**
     * create a new instance of this class
     *
     * @param string $acctType
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
