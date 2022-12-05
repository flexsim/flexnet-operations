<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class EmailActivatableItemRequestType implements RequestInterface
{
    /**
     * @var string
     */
    private $activationId;

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
     * @param  string  $activationId
     * @param  bool|null  $ignoreExistingEmailList
     * @param  bool|null  $validateEmailAddresses
     * @param  \Flexnet\EntitlementOrderService\Type\EmailContactListType|null  $emailIdList
     * @param  \Flexnet\EntitlementOrderService\Type\EmailContactListType|null  $ccEmailIdList
     * @param  \Flexnet\EntitlementOrderService\Type\EmailContactListType|null  $bccEmailIdList
     * @param  string|null  $locale
     */
    public static function create(string $activationId, bool|null $ignoreExistingEmailList = null, bool|null $validateEmailAddresses = null, EmailContactListType|null $emailIdList = null, EmailContactListType|null $ccEmailIdList = null, EmailContactListType|null $bccEmailIdList = null, string|null $locale = null)
    {
        return new static(...\func_get_args());
    }

    public function __construct(string $activationId, bool $ignoreExistingEmailList, bool $validateEmailAddresses, EmailContactListType $emailIdList, EmailContactListType $ccEmailIdList, EmailContactListType $bccEmailIdList, string $locale)
    {
        $this->activationId = $activationId;
        $this->ignoreExistingEmailList = $ignoreExistingEmailList;
        $this->validateEmailAddresses = $validateEmailAddresses;
        $this->emailIdList = $emailIdList;
        $this->ccEmailIdList = $ccEmailIdList;
        $this->bccEmailIdList = $bccEmailIdList;
        $this->locale = $locale;
    }

    public function getActivationId(): string
    {
        return $this->activationId;
    }

    public function withActivationId(string $activationId): EmailActivatableItemRequestType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getIgnoreExistingEmailList(): bool|null
    {
        return $this->ignoreExistingEmailList;
    }

    public function withIgnoreExistingEmailList(bool|null $ignoreExistingEmailList): EmailActivatableItemRequestType
    {
        $new = clone $this;
        $new->ignoreExistingEmailList = $ignoreExistingEmailList;

        return $new;
    }

    public function getValidateEmailAddresses(): bool|null
    {
        return $this->validateEmailAddresses;
    }

    public function withValidateEmailAddresses(bool|null $validateEmailAddresses): EmailActivatableItemRequestType
    {
        $new = clone $this;
        $new->validateEmailAddresses = $validateEmailAddresses;

        return $new;
    }

    public function getEmailIdList(): EmailContactListType|null
    {
        return $this->emailIdList;
    }

    public function withEmailIdList(EmailContactListType|null $emailIdList): EmailActivatableItemRequestType
    {
        $new = clone $this;
        $new->emailIdList = $emailIdList;

        return $new;
    }

    public function getCcEmailIdList(): EmailContactListType|null
    {
        return $this->ccEmailIdList;
    }

    public function withCcEmailIdList(EmailContactListType|null $ccEmailIdList): EmailActivatableItemRequestType
    {
        $new = clone $this;
        $new->ccEmailIdList = $ccEmailIdList;

        return $new;
    }

    public function getBccEmailIdList(): EmailContactListType|null
    {
        return $this->bccEmailIdList;
    }

    public function withBccEmailIdList(EmailContactListType|null $bccEmailIdList): EmailActivatableItemRequestType
    {
        $new = clone $this;
        $new->bccEmailIdList = $bccEmailIdList;

        return $new;
    }

    public function getLocale(): string|null
    {
        return $this->locale;
    }

    public function withLocale(string|null $locale): EmailActivatableItemRequestType
    {
        $new = clone $this;
        $new->locale = $locale;

        return $new;
    }
}
