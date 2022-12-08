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
     *
     * @param  \Flexnet\LicenseService\Type\ConsolidatedLicenseIdListType  $consolidatedLicenseIdList
     * @param  bool|null  $validateEmailAddresses
     * @param  \Flexnet\LicenseService\Type\EmailContactListType|null  $emailIdList
     * @param  string|null  $locale
     */
    public function __construct(ConsolidatedLicenseIdListType $consolidatedLicenseIdList, bool|null $validateEmailAddresses = null, EmailContactListType|null $emailIdList = null, string|null $locale = null)
    {
        $this->consolidatedLicenseIdList = $consolidatedLicenseIdList;
        $this->validateEmailAddresses = $validateEmailAddresses;
        $this->emailIdList = $emailIdList;
        $this->locale = $locale;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ConsolidatedLicenseIdListType  $consolidatedLicenseIdList
     * @param  bool|null  $validateEmailAddresses
     * @param  \Flexnet\LicenseService\Type\EmailContactListType|null  $emailIdList
     * @param  string|null  $locale
     */
    public static function create(ConsolidatedLicenseIdListType $consolidatedLicenseIdList, bool|null $validateEmailAddresses = null, EmailContactListType|null $emailIdList = null, string|null $locale = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\ConsolidatedLicenseIdListType
     */
    public function getConsolidatedLicenseIdList(): ConsolidatedLicenseIdListType
    {
        return $this->consolidatedLicenseIdList;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ConsolidatedLicenseIdListType  $consolidatedLicenseIdList
     * @return EmailConsolidatedLicensesRequestType
     */
    public function withConsolidatedLicenseIdList(ConsolidatedLicenseIdListType $consolidatedLicenseIdList): EmailConsolidatedLicensesRequestType
    {
        $new = clone $this;
        $new->consolidatedLicenseIdList = $consolidatedLicenseIdList;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getValidateEmailAddresses(): bool|null
    {
        return $this->validateEmailAddresses;
    }

    /**
     * @param  bool|null  $validateEmailAddresses
     * @return EmailConsolidatedLicensesRequestType
     */
    public function withValidateEmailAddresses(bool|null $validateEmailAddresses): EmailConsolidatedLicensesRequestType
    {
        $new = clone $this;
        $new->validateEmailAddresses = $validateEmailAddresses;

        return $new;
    }

    /**
     * @return \Flexnet\LicenseService\Type\EmailContactListType|null
     */
    public function getEmailIdList(): EmailContactListType|null
    {
        return $this->emailIdList;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\EmailContactListType|null  $emailIdList
     * @return EmailConsolidatedLicensesRequestType
     */
    public function withEmailIdList(EmailContactListType|null $emailIdList): EmailConsolidatedLicensesRequestType
    {
        $new = clone $this;
        $new->emailIdList = $emailIdList;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getLocale(): string|null
    {
        return $this->locale;
    }

    /**
     * @param  string|null  $locale
     * @return EmailConsolidatedLicensesRequestType
     */
    public function withLocale(string|null $locale): EmailConsolidatedLicensesRequestType
    {
        $new = clone $this;
        $new->locale = $locale;

        return $new;
    }
}
