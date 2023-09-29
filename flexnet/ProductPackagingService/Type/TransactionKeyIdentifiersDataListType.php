<?php

namespace Flexnet\ProductPackagingService\Type;

class TransactionKeyIdentifiersDataListType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|array<\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType>|null
     */
    private $transactionKeyIdentifier;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|array<\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType>|null  $transactionKeyIdentifier
     */
    public function __construct(TrustedKeyIdentifierType|array $transactionKeyIdentifier = null)
    {
        $this->transactionKeyIdentifier = $transactionKeyIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|array<\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType>|null  $transactionKeyIdentifier
     */
    public static function create(TrustedKeyIdentifierType|array $transactionKeyIdentifier = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|array<\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType>|null
     */
    public function getTransactionKeyIdentifier(): TrustedKeyIdentifierType|array|null
    {
        return $this->transactionKeyIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|array<\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType>|null  $transactionKeyIdentifier
     */
    public function withTransactionKeyIdentifier(TrustedKeyIdentifierType|array|null $transactionKeyIdentifier): TransactionKeyIdentifiersDataListType
    {
        $new = clone $this;
        $new->transactionKeyIdentifier = $transactionKeyIdentifier;

        return $new;
    }
}
