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
    public function __construct(\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|array|null $transactionKeyIdentifier = null)
    {
        $this->transactionKeyIdentifier = $transactionKeyIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|array<\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType>|null  $transactionKeyIdentifier
     */
    public static function create(\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|array|null $transactionKeyIdentifier = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|array<\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType>|null
     */
    public function getTransactionKeyIdentifier(): \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|array|null
    {
        return $this->transactionKeyIdentifier;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|array<\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType>|null  $transactionKeyIdentifier
     */
    public function withTransactionKeyIdentifier(\Flexnet\ProductPackagingService\Type\TrustedKeyIdentifierType|array|null $transactionKeyIdentifier): \Flexnet\ProductPackagingService\Type\TransactionKeyIdentifiersDataListType
    {
        $new = clone $this;
        $new->transactionKeyIdentifier = $transactionKeyIdentifier;

        return $new;
    }
}
