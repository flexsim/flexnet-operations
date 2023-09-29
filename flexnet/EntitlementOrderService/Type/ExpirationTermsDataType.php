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
    public function __construct(DurationType $term = null, \DateTimeInterface $expirationDate = null)
    {
        $this->term = $term;
        $this->expirationDate = $expirationDate;
    }

    public static function create(DurationType $term = null, \DateTimeInterface $expirationDate = null)
    {
        return new static(...\func_get_args());
    }

    public function getTerm(): ?DurationType
    {
        return $this->term;
    }

    public function withTerm(?DurationType $term): ExpirationTermsDataType
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function withExpirationDate(?\DateTimeInterface $expirationDate): ExpirationTermsDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }
}
