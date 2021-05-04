<?php

namespace Flexsim\FlexnetOperations\Type;

class TransactionKeyIdentifiersDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType|array 
     */
    private $transactionKeyIdentifier;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType|array $transactionKeyIdentifier
     */
    public function __construct($transactionKeyIdentifier = null)
    {
        $this->transactionKeyIdentifier = $transactionKeyIdentifier;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType|array $transactionKeyIdentifier
     */
    public static function create($transactionKeyIdentifier = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType|array 
     */
    public function getTransactionKeyIdentifier()
    {
        return $this->transactionKeyIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\TrustedKeyIdentifierType|array $transactionKeyIdentifier
     * @return $this
     */
    public function setTransactionKeyIdentifier($transactionKeyIdentifier)
    {
        $this->transactionKeyIdentifier = $transactionKeyIdentifier;
        return $this;
    }
}
