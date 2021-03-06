<?php

namespace Flexsim\FlexnetOperations\Type;

class AccountTypeList extends FlexnetType
{
    /**
     * @var string
     */
    protected $accountType;

    /**
     * Constructor
     *
     * @param string $accountType
     */
    public function __construct(string $accountType)
    {
        $this->accountType = $accountType;
    }

    /**
     * create a new instance of this class
     *
     * @param string $accountType
     */
    public static function create(string $accountType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     * @return $this
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;

        return $this;
    }
}
