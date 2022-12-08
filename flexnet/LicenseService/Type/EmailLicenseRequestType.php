<?php

namespace Flexnet\LicenseService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class EmailLicenseRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\LicenseService\Type\FulfillmentIdentifierType
     */
    private $fulfillmentIdentifier;

    /**
     * @var bool|null
     */
    private $ignoreExistingEmailList;

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
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     * @param  bool|null  $ignoreExistingEmailList
     * @param  bool|null  $validateEmailAddresses
     * @param  \Flexnet\LicenseService\Type\EmailContactListType|null  $emailIdList
     * @param  string|null  $locale
     */
    public function __construct(FulfillmentIdentifierType $fulfillmentIdentifier, bool|null $ignoreExistingEmailList = null, bool|null $validateEmailAddresses = null, EmailContactListType|null $emailIdList = null, string|null $locale = null)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->ignoreExistingEmailList = $ignoreExistingEmailList;
        $this->validateEmailAddresses = $validateEmailAddresses;
        $this->emailIdList = $emailIdList;
        $this->locale = $locale;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     * @param  bool|null  $ignoreExistingEmailList
     * @param  bool|null  $validateEmailAddresses
     * @param  \Flexnet\LicenseService\Type\EmailContactListType|null  $emailIdList
     * @param  string|null  $locale
     */
    public static function create(FulfillmentIdentifierType $fulfillmentIdentifier, bool|null $ignoreExistingEmailList = null, bool|null $validateEmailAddresses = null, EmailContactListType|null $emailIdList = null, string|null $locale = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\FulfillmentIdentifierType
     */
    public function getFulfillmentIdentifier(): FulfillmentIdentifierType
    {
        return $this->fulfillmentIdentifier;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\FulfillmentIdentifierType  $fulfillmentIdentifier
     * @return EmailLicenseRequestType
     */
    public function withFulfillmentIdentifier(FulfillmentIdentifierType $fulfillmentIdentifier): EmailLicenseRequestType
    {
        $new = clone $this;
        $new->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $new;
    }

    /**
     * @return bool|null
     */
    public function getIgnoreExistingEmailList(): bool|null
    {
        return $this->ignoreExistingEmailList;
    }

    /**
     * @param  bool|null  $ignoreExistingEmailList
     * @return EmailLicenseRequestType
     */
    public function withIgnoreExistingEmailList(bool|null $ignoreExistingEmailList): EmailLicenseRequestType
    {
        $new = clone $this;
        $new->ignoreExistingEmailList = $ignoreExistingEmailList;

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
     * @return EmailLicenseRequestType
     */
    public function withValidateEmailAddresses(bool|null $validateEmailAddresses): EmailLicenseRequestType
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
     * @return EmailLicenseRequestType
     */
    public function withEmailIdList(EmailContactListType|null $emailIdList): EmailLicenseRequestType
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
     * @return EmailLicenseRequestType
     */
    public function withLocale(string|null $locale): EmailLicenseRequestType
    {
        $new = clone $this;
        $new->locale = $locale;

        return $new;
    }
}