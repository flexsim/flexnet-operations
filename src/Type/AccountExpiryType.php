<?php

namespace Flexsim\FlexnetOperations\Type;

class AccountExpiryType
{

    /**
     * @var string
     */
    private $accountID;

    /**
     * @var \DateTimeInterface
     */
    private $expiryDate;

    /**
     * Constructor
     *
     * @var string $accountID
     * @var \DateTimeInterface $expiryDate
     */
    public function __construct(string $accountID, \DateTimeInterface $expiryDate)
    {
        $this->accountID = $accountID;
        $this->expiryDate = $expiryDate;
    }

    /**
     * create a new instance of this class
     *
     * @var string $accountID
     * @var \DateTimeInterface $expiryDate
     */
    public static function create(string $accountID, \DateTimeInterface $expiryDate)
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
     * @return \DateTimeInterface
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * @param \DateTimeInterface $expiryDate
     * @return $this
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }


}

