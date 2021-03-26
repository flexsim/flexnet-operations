<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class EmailActivatableItemRequestType implements RequestInterface
{

    /**
     * @var string
     */
    private $activationId;

    /**
     * @var bool
     */
    private $ignoreExistingEmailList;

    /**
     * @var bool
     */
    private $validateEmailAddresses;

    /**
     * @var \Flexsim\FlexnetOperations\Type\EmailContactListType
     */
    private $emailIdList;

    /**
     * @var string
     */
    private $locale;

    /**
     * Constructor
     *
     * @var string $activationId
     * @var bool $ignoreExistingEmailList
     * @var bool $validateEmailAddresses
     * @var \Flexsim\FlexnetOperations\Type\EmailContactListType $emailIdList
     * @var string $locale
     */
    public function __construct(string $activationId, bool $ignoreExistingEmailList = null, bool $validateEmailAddresses = null, \Flexsim\FlexnetOperations\Type\EmailContactListType $emailIdList = null, string $locale = null)
    {
        $this->activationId = $activationId;
        $this->ignoreExistingEmailList = $ignoreExistingEmailList;
        $this->validateEmailAddresses = $validateEmailAddresses;
        $this->emailIdList = $emailIdList;
        $this->locale = $locale;
    }

    /**
     * create a new instance of this class
     *
     * @var string $activationId
     * @var bool $ignoreExistingEmailList
     * @var bool $validateEmailAddresses
     * @var \Flexsim\FlexnetOperations\Type\EmailContactListType $emailIdList
     * @var string $locale
     */
    public static function create(string $activationId, bool $ignoreExistingEmailList = null, bool $validateEmailAddresses = null, \Flexsim\FlexnetOperations\Type\EmailContactListType $emailIdList = null, string $locale = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getActivationId()
    {
        return $this->activationId;
    }

    /**
     * @param string $activationId
     * @return $this
     */
    public function setActivationId($activationId)
    {
        $this->activationId = $activationId;
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

