<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class EmailEntitlementRequestType implements RequestInterface
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\EntitlementIdentifierType
     */
    private $entitlementIdentifier;

    /**
     * @var bool|null
     */
    private $ignoreExistingEmailList;

    /**
     * @var bool|null
     */
    private $validateEmailAddresses;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EmailContactListType|null
     */
    private $emailIdList;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EmailContactListType|null
     */
    private $ccEmailIdList;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\EmailContactListType|null
     */
    private $bccEmailIdList;

    /**
     * @var string|null
     */
    private $locale;

    /**
     * Constructor
     */
    public function __construct(EntitlementIdentifierType $entitlementIdentifier, bool $ignoreExistingEmailList = null, bool $validateEmailAddresses = null, EmailContactListType $emailIdList = null, EmailContactListType $ccEmailIdList = null, EmailContactListType $bccEmailIdList = null, string $locale = null)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->ignoreExistingEmailList = $ignoreExistingEmailList;
        $this->validateEmailAddresses = $validateEmailAddresses;
        $this->emailIdList = $emailIdList;
        $this->ccEmailIdList = $ccEmailIdList;
        $this->bccEmailIdList = $bccEmailIdList;
        $this->locale = $locale;
    }

    public static function create(EntitlementIdentifierType $entitlementIdentifier, bool $ignoreExistingEmailList = null, bool $validateEmailAddresses = null, EmailContactListType $emailIdList = null, EmailContactListType $ccEmailIdList = null, EmailContactListType $bccEmailIdList = null, string $locale = null)
    {
        return new static(...\func_get_args());
    }

    public function getEntitlementIdentifier(): EntitlementIdentifierType
    {
        return $this->entitlementIdentifier;
    }

    public function withEntitlementIdentifier(EntitlementIdentifierType $entitlementIdentifier): EmailEntitlementRequestType
    {
        $new = clone $this;
        $new->entitlementIdentifier = $entitlementIdentifier;

        return $new;
    }

    public function getIgnoreExistingEmailList(): ?bool
    {
        return $this->ignoreExistingEmailList;
    }

    public function withIgnoreExistingEmailList(?bool $ignoreExistingEmailList): EmailEntitlementRequestType
    {
        $new = clone $this;
        $new->ignoreExistingEmailList = $ignoreExistingEmailList;

        return $new;
    }

    public function getValidateEmailAddresses(): ?bool
    {
        return $this->validateEmailAddresses;
    }

    public function withValidateEmailAddresses(?bool $validateEmailAddresses): EmailEntitlementRequestType
    {
        $new = clone $this;
        $new->validateEmailAddresses = $validateEmailAddresses;

        return $new;
    }

    public function getEmailIdList(): ?EmailContactListType
    {
        return $this->emailIdList;
    }

    public function withEmailIdList(?EmailContactListType $emailIdList): EmailEntitlementRequestType
    {
        $new = clone $this;
        $new->emailIdList = $emailIdList;

        return $new;
    }

    public function getCcEmailIdList(): ?EmailContactListType
    {
        return $this->ccEmailIdList;
    }

    public function withCcEmailIdList(?EmailContactListType $ccEmailIdList): EmailEntitlementRequestType
    {
        $new = clone $this;
        $new->ccEmailIdList = $ccEmailIdList;

        return $new;
    }

    public function getBccEmailIdList(): ?EmailContactListType
    {
        return $this->bccEmailIdList;
    }

    public function withBccEmailIdList(?EmailContactListType $bccEmailIdList): EmailEntitlementRequestType
    {
        $new = clone $this;
        $new->bccEmailIdList = $bccEmailIdList;

        return $new;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function withLocale(?string $locale): EmailEntitlementRequestType
    {
        $new = clone $this;
        $new->locale = $locale;

        return $new;
    }
}
