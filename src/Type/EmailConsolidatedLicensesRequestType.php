<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class EmailConsolidatedLicensesRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ConsolidatedLicenseIdListType
     */
    protected $consolidatedLicenseIdList;

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
     * @param \Flexsim\FlexnetOperations\Type\ConsolidatedLicenseIdListType $consolidatedLicenseIdList
     * @param bool $validateEmailAddresses
     * @param \Flexsim\FlexnetOperations\Type\EmailContactListType $emailIdList
     * @param string $locale
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ConsolidatedLicenseIdListType $consolidatedLicenseIdList, bool $validateEmailAddresses = null, \Flexsim\FlexnetOperations\Type\EmailContactListType $emailIdList = null, string $locale = null)
    {
        $this->consolidatedLicenseIdList = $consolidatedLicenseIdList;
        $this->validateEmailAddresses = $validateEmailAddresses;
        $this->emailIdList = $emailIdList;
        $this->locale = $locale;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\ConsolidatedLicenseIdListType $consolidatedLicenseIdList
     * @param bool $validateEmailAddresses
     * @param \Flexsim\FlexnetOperations\Type\EmailContactListType $emailIdList
     * @param string $locale
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ConsolidatedLicenseIdListType $consolidatedLicenseIdList, bool $validateEmailAddresses = null, \Flexsim\FlexnetOperations\Type\EmailContactListType $emailIdList = null, string $locale = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ConsolidatedLicenseIdListType
     */
    public function getConsolidatedLicenseIdList()
    {
        return $this->consolidatedLicenseIdList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ConsolidatedLicenseIdListType $consolidatedLicenseIdList
     * @return $this
     */
    public function setConsolidatedLicenseIdList($consolidatedLicenseIdList)
    {
        $this->consolidatedLicenseIdList = $consolidatedLicenseIdList;
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
