<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateUserAccountsListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserAccountType|array
     */
    private $acctRoles;

    /**
     * @var string
     */
    private $opType;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserAccountType|array $acctRoles
     * @var string $opType
     */
    public function __construct($acctRoles, string $opType)
    {
        $this->acctRoles = $acctRoles;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserAccountType|array $acctRoles
     * @var string $opType
     */
    public static function create($acctRoles, string $opType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateUserAccountType|array
     */
    public function getAcctRoles()
    {
        return $this->acctRoles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateUserAccountType|array $acctRoles
     * @return $this
     */
    public function setAcctRoles($acctRoles)
    {
        $this->acctRoles = $acctRoles;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpType()
    {
        return $this->opType;
    }

    /**
     * @param string $opType
     * @return $this
     */
    public function setOpType($opType)
    {
        $this->opType = $opType;
        return $this;
    }
}
