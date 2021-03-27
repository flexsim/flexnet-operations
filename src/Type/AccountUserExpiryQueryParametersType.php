<?php

namespace Flexsim\FlexnetOperations\Type;

class AccountUserExpiryQueryParametersType
{

    /**
     * @var string
     */
    private $accountID;

    /**
     * @var string
     */
    private $accountType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    private $expiryDate;

    /**
     * Constructor
     *
     * @var string $accountID
     * @var string $accountType
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $expiryDate
     */
    public function __construct(string $accountID, string $accountType = null, \Flexsim\FlexnetOperations\Type\DateQueryType $expiryDate = null)
    {
        $this->accountID = $accountID;
        $this->accountType = $accountType;
        $this->expiryDate = $expiryDate;
    }

    /**
     * create a new instance of this class
     *
     * @var string $accountID
     * @var string $accountType
     * @var \Flexsim\FlexnetOperations\Type\DateQueryType $expiryDate
     */
    public static function create(string $accountID, string $accountType = null, \Flexsim\FlexnetOperations\Type\DateQueryType $expiryDate = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getAccountID()
    {
        return $this->accountID;
    }

    /**
     * @param string $accountID
     * @return $this
     */
    public function setAccountID($accountID)
    {
        $this->accountID = $accountID;
        return $this;
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

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateQueryType
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateQueryType $expiryDate
     * @return $this
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }


}
