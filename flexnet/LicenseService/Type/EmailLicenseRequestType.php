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
     */
    public function __construct(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, ?bool $ignoreExistingEmailList = null, ?bool $validateEmailAddresses = null, ?\Flexnet\LicenseService\Type\EmailContactListType $emailIdList = null, ?string $locale = null)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->ignoreExistingEmailList = $ignoreExistingEmailList;
        $this->validateEmailAddresses = $validateEmailAddresses;
        $this->emailIdList = $emailIdList;
        $this->locale = $locale;
    }

    public static function create(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier, ?bool $ignoreExistingEmailList = null, ?bool $validateEmailAddresses = null, ?\Flexnet\LicenseService\Type\EmailContactListType $emailIdList = null, ?string $locale = null)
    {
        return new static(...\func_get_args());
    }

    public function getFulfillmentIdentifier(): \Flexnet\LicenseService\Type\FulfillmentIdentifierType
    {
        return $this->fulfillmentIdentifier;
    }

    public function withFulfillmentIdentifier(\Flexnet\LicenseService\Type\FulfillmentIdentifierType $fulfillmentIdentifier): \Flexnet\LicenseService\Type\EmailLicenseRequestType
    {
        $new = clone $this;
        $new->fulfillmentIdentifier = $fulfillmentIdentifier;

        return $new;
    }

    public function getIgnoreExistingEmailList(): ?bool
    {
        return $this->ignoreExistingEmailList;
    }

    public function withIgnoreExistingEmailList(?bool $ignoreExistingEmailList): \Flexnet\LicenseService\Type\EmailLicenseRequestType
    {
        $new = clone $this;
        $new->ignoreExistingEmailList = $ignoreExistingEmailList;

        return $new;
    }

    public function getValidateEmailAddresses(): ?bool
    {
        return $this->validateEmailAddresses;
    }

    public function withValidateEmailAddresses(?bool $validateEmailAddresses): \Flexnet\LicenseService\Type\EmailLicenseRequestType
    {
        $new = clone $this;
        $new->validateEmailAddresses = $validateEmailAddresses;

        return $new;
    }

    public function getEmailIdList(): ?\Flexnet\LicenseService\Type\EmailContactListType
    {
        return $this->emailIdList;
    }

    public function withEmailIdList(?\Flexnet\LicenseService\Type\EmailContactListType $emailIdList): \Flexnet\LicenseService\Type\EmailLicenseRequestType
    {
        $new = clone $this;
        $new->emailIdList = $emailIdList;

        return $new;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function withLocale(?string $locale): \Flexnet\LicenseService\Type\EmailLicenseRequestType
    {
        $new = clone $this;
        $new->locale = $locale;

        return $new;
    }
}
