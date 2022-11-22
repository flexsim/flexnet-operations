<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class EmailEntitlementRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    protected $entitlementIdentifier;

    /**
     * @var bool
     */
    protected $ignoreExistingEmailList;

    /**
     * @var bool
     */
    protected $validateEmailAddresses;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EmailContactListType
     */
    protected $emailIdList;

    /**
     * @var string
     */
    protected $locale;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @param  bool  $ignoreExistingEmailList
     * @param  bool  $validateEmailAddresses
     * @param  \Flexsim\FlexnetOperations\Type\EmailContactListType  $emailIdList
     * @param  string  $locale
     */
    public function __construct(EntitlementIdentifierType $entitlementIdentifier, bool $ignoreExistingEmailList = null, bool $validateEmailAddresses = null, EmailContactListType $emailIdList = null, string $locale = null)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;
        $this->ignoreExistingEmailList = $ignoreExistingEmailList;
        $this->validateEmailAddresses = $validateEmailAddresses;
        $this->emailIdList = $emailIdList;
        $this->locale = $locale;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @param  bool  $ignoreExistingEmailList
     * @param  bool  $validateEmailAddresses
     * @param  \Flexsim\FlexnetOperations\Type\EmailContactListType  $emailIdList
     * @param  string  $locale
     */
    public static function create(EntitlementIdentifierType $entitlementIdentifier, bool $ignoreExistingEmailList = null, bool $validateEmailAddresses = null, EmailContactListType $emailIdList = null, string $locale = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType
     */
    public function getEntitlementIdentifier()
    {
        return $this->entitlementIdentifier;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\EntitlementIdentifierType  $entitlementIdentifier
     * @return $this
     */
    public function setEntitlementIdentifier($entitlementIdentifier)
    {
        $this->entitlementIdentifier = $entitlementIdentifier;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIgnoreExistingEmailList()
    {
        return $this->ignoreExistingEmailList;
    }

    /**
     * @param  bool  $ignoreExistingEmailList
     * @return $this
     */
    public function setIgnoreExistingEmailList($ignoreExistingEmailList)
    {
        $this->ignoreExistingEmailList = $ignoreExistingEmailList;

        return $this;
    }

    /**
     * @return bool
     */
    public function getValidateEmailAddresses()
    {
        return $this->validateEmailAddresses;
    }

    /**
     * @param  bool  $validateEmailAddresses
     * @return $this
     */
    public function setValidateEmailAddresses($validateEmailAddresses)
    {
        $this->validateEmailAddresses = $validateEmailAddresses;

        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\EmailContactListType
     */
    public function getEmailIdList()
    {
        return $this->emailIdList;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\EmailContactListType  $emailIdList
     * @return $this
     */
    public function setEmailIdList($emailIdList)
    {
        $this->emailIdList = $emailIdList;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param  string  $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }
}
