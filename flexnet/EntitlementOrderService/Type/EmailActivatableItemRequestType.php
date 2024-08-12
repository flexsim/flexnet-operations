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
     * Constructor
     */
    public function __construct(string $activationId, ?bool $ignoreExistingEmailList = null, ?bool $validateEmailAddresses = null, ?\Flexnet\EntitlementOrderService\Type\EmailContactListType $emailIdList = null, ?\Flexnet\EntitlementOrderService\Type\EmailContactListType $ccEmailIdList = null, ?\Flexnet\EntitlementOrderService\Type\EmailContactListType $bccEmailIdList = null, ?string $locale = null)
    {
        $this->activationId = $activationId;
        $this->ignoreExistingEmailList = $ignoreExistingEmailList;
        $this->validateEmailAddresses = $validateEmailAddresses;
        $this->emailIdList = $emailIdList;
        $this->ccEmailIdList = $ccEmailIdList;
        $this->bccEmailIdList = $bccEmailIdList;
        $this->locale = $locale;
    }

    public static function create(string $activationId, ?bool $ignoreExistingEmailList = null, ?bool $validateEmailAddresses = null, ?\Flexnet\EntitlementOrderService\Type\EmailContactListType $emailIdList = null, ?\Flexnet\EntitlementOrderService\Type\EmailContactListType $ccEmailIdList = null, ?\Flexnet\EntitlementOrderService\Type\EmailContactListType $bccEmailIdList = null, ?string $locale = null)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): string
    {
        return $this->activationId;
    }

    public function withActivationId(string $activationId): \Flexnet\EntitlementOrderService\Type\EmailActivatableItemRequestType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getIgnoreExistingEmailList(): ?bool
    {
        return $this->ignoreExistingEmailList;
    }

    public function withIgnoreExistingEmailList(?bool $ignoreExistingEmailList): \Flexnet\EntitlementOrderService\Type\EmailActivatableItemRequestType
    {
        $new = clone $this;
        $new->ignoreExistingEmailList = $ignoreExistingEmailList;

        return $new;
    }

    public function getValidateEmailAddresses(): ?bool
    {
        return $this->validateEmailAddresses;
    }

    public function withValidateEmailAddresses(?bool $validateEmailAddresses): \Flexnet\EntitlementOrderService\Type\EmailActivatableItemRequestType
    {
        $new = clone $this;
        $new->validateEmailAddresses = $validateEmailAddresses;

        return $new;
    }

    public function getEmailIdList(): ?\Flexnet\EntitlementOrderService\Type\EmailContactListType
    {
        return $this->emailIdList;
    }

    public function withEmailIdList(?\Flexnet\EntitlementOrderService\Type\EmailContactListType $emailIdList): \Flexnet\EntitlementOrderService\Type\EmailActivatableItemRequestType
    {
        $new = clone $this;
        $new->emailIdList = $emailIdList;

        return $new;
    }

    public function getCcEmailIdList(): ?\Flexnet\EntitlementOrderService\Type\EmailContactListType
    {
        return $this->ccEmailIdList;
    }

    public function withCcEmailIdList(?\Flexnet\EntitlementOrderService\Type\EmailContactListType $ccEmailIdList): \Flexnet\EntitlementOrderService\Type\EmailActivatableItemRequestType
    {
        $new = clone $this;
        $new->ccEmailIdList = $ccEmailIdList;

        return $new;
    }

    public function getBccEmailIdList(): ?\Flexnet\EntitlementOrderService\Type\EmailContactListType
    {
        return $this->bccEmailIdList;
    }

    public function withBccEmailIdList(?\Flexnet\EntitlementOrderService\Type\EmailContactListType $bccEmailIdList): \Flexnet\EntitlementOrderService\Type\EmailActivatableItemRequestType
    {
        $new = clone $this;
        $new->bccEmailIdList = $bccEmailIdList;

        return $new;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function withLocale(?string $locale): \Flexnet\EntitlementOrderService\Type\EmailActivatableItemRequestType
    {
        $new = clone $this;
        $new->locale = $locale;

        return $new;
    }
}
