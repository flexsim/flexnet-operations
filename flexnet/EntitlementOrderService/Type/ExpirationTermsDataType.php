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
     *
     * @param  \Flexnet\EntitlementOrderService\Type\DurationType|null  $term
     * @param  \DateTimeInterface|null  $expirationDate
     */
    public function __construct(DurationType|null $term = null, \DateTimeInterface|null $expirationDate = null)
    {
        $this->term = $term;
        $this->expirationDate = $expirationDate;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DurationType|null  $term
     * @param  \DateTimeInterface|null  $expirationDate
     */
    public static function create(DurationType|null $term = null, \DateTimeInterface|null $expirationDate = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\DurationType|null
     */
    public function getTerm(): DurationType|null
    {
        return $this->term;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\DurationType|null  $term
     * @return ExpirationTermsDataType
     */
    public function withTerm(DurationType|null $term): ExpirationTermsDataType
    {
        $new = clone $this;
        $new->term = $term;

        return $new;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getExpirationDate(): \DateTimeInterface|null
    {
        return $this->expirationDate;
    }

    /**
     * @param  \DateTimeInterface|null  $expirationDate
     * @return ExpirationTermsDataType
     */
    public function withExpirationDate(\DateTimeInterface|null $expirationDate): ExpirationTermsDataType
    {
        $new = clone $this;
        $new->expirationDate = $expirationDate;

        return $new;
    }
}
