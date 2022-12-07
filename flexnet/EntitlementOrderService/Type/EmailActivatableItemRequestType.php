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

    /**
     * @return string
     */
    public function getActivationId(): string
    {
        return $this->activationId;
    }

    /**
     * @param  string  $activationId
     * @return EmailActivatableItemRequestType
     */
    public function withActivationId(string $activationId): EmailActivatableItemRequestType
    {
        $new = clone $this;
        $new->activationId = $activationId;

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
     * @return EmailActivatableItemRequestType
     */
    public function withIgnoreExistingEmailList(bool|null $ignoreExistingEmailList): EmailActivatableItemRequestType
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
     * @return EmailActivatableItemRequestType
     */
    public function withValidateEmailAddresses(bool|null $validateEmailAddresses): EmailActivatableItemRequestType
    {
        $new = clone $this;
        $new->validateEmailAddresses = $validateEmailAddresses;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EmailContactListType|null
     */
    public function getEmailIdList(): EmailContactListType|null
    {
        return $this->emailIdList;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EmailContactListType|null  $emailIdList
     * @return EmailActivatableItemRequestType
     */
    public function withEmailIdList(EmailContactListType|null $emailIdList): EmailActivatableItemRequestType
    {
        $new = clone $this;
        $new->emailIdList = $emailIdList;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EmailContactListType|null
     */
    public function getCcEmailIdList(): EmailContactListType|null
    {
        return $this->ccEmailIdList;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EmailContactListType|null  $ccEmailIdList
     * @return EmailActivatableItemRequestType
     */
    public function withCcEmailIdList(EmailContactListType|null $ccEmailIdList): EmailActivatableItemRequestType
    {
        $new = clone $this;
        $new->ccEmailIdList = $ccEmailIdList;

        return $new;
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\EmailContactListType|null
     */
    public function getBccEmailIdList(): EmailContactListType|null
    {
        return $this->bccEmailIdList;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\EmailContactListType|null  $bccEmailIdList
     * @return EmailActivatableItemRequestType
     */
    public function withBccEmailIdList(EmailContactListType|null $bccEmailIdList): EmailActivatableItemRequestType
    {
        $new = clone $this;
        $new->bccEmailIdList = $bccEmailIdList;

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
     * @return EmailActivatableItemRequestType
     */
    public function withLocale(string|null $locale): EmailActivatableItemRequestType
    {
        $new = clone $this;
        $new->locale = $locale;

        return $new;
    }
}
