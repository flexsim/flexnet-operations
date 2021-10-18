<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class EmailLicenseRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    protected $fulfillmentIdentifier;

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
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @var bool $ignoreExistingEmailList
     * @var bool $validateEmailAddresses
     * @var \Flexsim\FlexnetOperations\Type\EmailContactListType $emailIdList
     * @var string $locale
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier, bool $ignoreExistingEmailList = null, bool $validateEmailAddresses = null, \Flexsim\FlexnetOperations\Type\EmailContactListType $emailIdList = null, string $locale = null)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
        $this->ignoreExistingEmailList = $ignoreExistingEmailList;
        $this->validateEmailAddresses = $validateEmailAddresses;
        $this->emailIdList = $emailIdList;
        $this->locale = $locale;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @var bool $ignoreExistingEmailList
     * @var bool $validateEmailAddresses
     * @var \Flexsim\FlexnetOperations\Type\EmailContactListType $emailIdList
     * @var string $locale
     */
    public static function create(\Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier, bool $ignoreExistingEmailList = null, bool $validateEmailAddresses = null, \Flexsim\FlexnetOperations\Type\EmailContactListType $emailIdList = null, string $locale = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType
     */
    public function getFulfillmentIdentifier()
    {
        return $this->fulfillmentIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\FulfillmentIdentifierType $fulfillmentIdentifier
     * @return $this
     */
    public function setFulfillmentIdentifier($fulfillmentIdentifier)
    {
        $this->fulfillmentIdentifier = $fulfillmentIdentifier;
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
     * @param bool $ignoreExistingEmailList
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
     * @param bool $validateEmailAddresses
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
     * @param \Flexsim\FlexnetOperations\Type\EmailContactListType $emailIdList
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
     * @param string $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }
}
