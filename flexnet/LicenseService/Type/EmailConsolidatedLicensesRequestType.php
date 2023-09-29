<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class EmailConsolidatedLicensesRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\ConsolidatedLicenseIdListType
     */
    private $consolidatedLicenseIdList;

    /**
     * @var bool|null
     */
    private $validateEmailAddresses;

    /**
     * @var \Flexnet\LicenseService\Type\EmailContactListType|null
     */
    private $emailIdList;

    /**
     * @var string|null
     */
    private $locale;

    /**
     * Constructor
     */
    public function __construct(ConsolidatedLicenseIdListType $consolidatedLicenseIdList, bool $validateEmailAddresses = null, EmailContactListType $emailIdList = null, string $locale = null)
    {
        $this->consolidatedLicenseIdList = $consolidatedLicenseIdList;
        $this->validateEmailAddresses = $validateEmailAddresses;
        $this->emailIdList = $emailIdList;
        $this->locale = $locale;
    }

    public static function create(ConsolidatedLicenseIdListType $consolidatedLicenseIdList, bool $validateEmailAddresses = null, EmailContactListType $emailIdList = null, string $locale = null)
    {
        return new static(...\func_get_args());
    }

    public function getConsolidatedLicenseIdList(): ConsolidatedLicenseIdListType
    {
        return $this->consolidatedLicenseIdList;
    }

    public function withConsolidatedLicenseIdList(ConsolidatedLicenseIdListType $consolidatedLicenseIdList): EmailConsolidatedLicensesRequestType
    {
        $new = clone $this;
        $new->consolidatedLicenseIdList = $consolidatedLicenseIdList;

        return $new;
    }

    public function getValidateEmailAddresses(): ?bool
    {
        return $this->validateEmailAddresses;
    }

    public function withValidateEmailAddresses(?bool $validateEmailAddresses): EmailConsolidatedLicensesRequestType
    {
        $new = clone $this;
        $new->validateEmailAddresses = $validateEmailAddresses;

        return $new;
    }

    public function getEmailIdList(): ?EmailContactListType
    {
        return $this->emailIdList;
    }

    public function withEmailIdList(?EmailContactListType $emailIdList): EmailConsolidatedLicensesRequestType
    {
        $new = clone $this;
        $new->emailIdList = $emailIdList;

        return $new;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function withLocale(?string $locale): EmailConsolidatedLicensesRequestType
    {
        $new = clone $this;
        $new->locale = $locale;

        return $new;
    }
}
