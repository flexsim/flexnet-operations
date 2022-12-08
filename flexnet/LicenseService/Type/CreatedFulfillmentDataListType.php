<?php

namespace Flexnet\LicenseService\Type;

class CreatedFulfillmentDataListType
{
    /**
     * @var \Flexnet\LicenseService\Type\CreatedFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreatedFulfillmentDataType>|null
     */
    private $createdFulfillment;

    /**
     * @var \Flexnet\LicenseService\Type\VerifiedFulfillmentDataType|array<\Flexnet\LicenseService\Type\VerifiedFulfillmentDataType>|null
     */
    private $verifiedFulfillment;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\CreatedFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreatedFulfillmentDataType>|null  $createdFulfillment
     * @param  \Flexnet\LicenseService\Type\VerifiedFulfillmentDataType|array<\Flexnet\LicenseService\Type\VerifiedFulfillmentDataType>|null  $verifiedFulfillment
     */
    public function __construct(CreatedFulfillmentDataType|array|null $createdFulfillment = null, VerifiedFulfillmentDataType|array|null $verifiedFulfillment = null)
    {
        $this->createdFulfillment = $createdFulfillment;
        $this->verifiedFulfillment = $verifiedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CreatedFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreatedFulfillmentDataType>|null  $createdFulfillment
     * @param  \Flexnet\LicenseService\Type\VerifiedFulfillmentDataType|array<\Flexnet\LicenseService\Type\VerifiedFulfillmentDataType>|null  $verifiedFulfillment
     */
    public static function create(CreatedFulfillmentDataType|array|null $createdFulfillment = null, VerifiedFulfillmentDataType|array|null $verifiedFulfillment = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\CreatedFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreatedFulfillmentDataType>|null
     */
    public function getCreatedFulfillment(): CreatedFulfillmentDataType|array|null
    {
        return $this->createdFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\CreatedFulfillmentDataType|array<\Flexnet\LicenseService\Type\CreatedFulfillmentDataType>|null  $createdFulfillment
     * @return CreatedFulfillmentDataListType
     */
    public function withCreatedFulfillment(CreatedFulfillmentDataType|array|null $createdFulfillment): CreatedFulfillmentDataListType
    {
        $new = clone $this;
        $new->createdFulfillment = $createdFulfillment;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\VerifiedFulfillmentDataType|array<\Flexnet\LicenseService\Type\VerifiedFulfillmentDataType>|null
     */
    public function getVerifiedFulfillment(): VerifiedFulfillmentDataType|array|null
    {
        return $this->verifiedFulfillment;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\VerifiedFulfillmentDataType|array<\Flexnet\LicenseService\Type\VerifiedFulfillmentDataType>|null  $verifiedFulfillment
     * @return CreatedFulfillmentDataListType
     */
    public function withVerifiedFulfillment(VerifiedFulfillmentDataType|array|null $verifiedFulfillment): CreatedFulfillmentDataListType
    {
        $new = clone $this;
        $new->verifiedFulfillment = $verifiedFulfillment;

        return $new;
    }
}
