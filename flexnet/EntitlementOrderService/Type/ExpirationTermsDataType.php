<?php

namespace Flexnet\EntitlementOrderService\Type;

class ExpirationTermsDataType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\DurationType|null
     */
    private $term;

    /**
     * @var \DateTimeInterface|null
     */
    private $expirationDate;

    /**
     * Constructor
     */
    public function __construct(?\Flexnet\EntitlementOrderService\Type\DurationType $term = null, ?\DateTimeInterface $expirationDate = null)
    {
        $this->term = $term;
        $this->expirationDate = $expirationDate;
    }

    public static function create(?\Flexnet\EntitlementOrderService\Type\DurationType $term = null, ?\DateTimeInterface $expirationDate = null)
    {
        return new static(...\func_get_args());
    }

    public function getTerm(): ?\Flexnet\EntitlementOrderService\Type\DurationType
    {
        return $this->term;
    }

    public function withTerm(?\Flexnet\EntitlementOrderService\Type\DurationType $term): \Flexnet\EntitlementOrderService\Type\ExpirationTermsDataType
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?\DateTimeInterface $expirationDate): \Flexnet\EntitlementOrderService\Type\ExpirationTermsDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }
}
