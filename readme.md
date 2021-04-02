# Flexnet Operations SDK

This package is in development please do not use without testing first

## Code Generation
You may run the following commands to generate classmaps and clients
```
find config -type f -name "*-config.php" -exec  ./vendor/bin/soap-client generate:classmap --config {} \;
find config -type f -name "*-config.php" -exec  ./vendor/bin/soap-client generate:client --config {} \;
```

Factory classes need some customization. Be sure to add in username and password as well as additional lines in the factory() method to ensure Authenitcation with the Flexnet server works properly
```
find config -type f -name "*-config.php" -exec  ./vendor/bin/soap-client generate:clientFactory --config {} \;
```

Type Generation requires frequent customization. Use the following command keeping the exceptions listed below in mind

```
./vendor/bin/soap-client generate:types -q -o --config config/soap-client/{SERVICE}/{SERVICE}-config\.php
```


### Type Class Generation

```
./vendor/bin/soap-client generate:types -q -o --config config/soap-client/ProductPackagingService/ProductPackagingService-config\.php
```
```
./vendor/bin/soap-client generate:types -q -o --config config/soap-client/EntitlementOrderService/EntitlementOrderService-config\.php
```
```
./vendor/bin/soap-client generate:types -q -o --config config/soap-client/LicenseService/LicenseService-config\.php
```

Change src/Type/DictionaryEntry.php to LicenseServiceDictionaryEntry.php and update all references to that class in the following Files (do not update the variable names just the class name):
- src/Services/LicenseService/LicenseServiceClassmap.php
- src/Type/DictionaryEntriesCollection.php

```
./vendor/bin/soap-client generate:types -q -o --config config/soap-client/FlexnetAuthentication/FlexnetAuthentication-config\.php
```
```
./vendor/bin/soap-client generate:types -q -o --config config/soap-client/UserOrgHierarchyService/UserOrgHierarchyService-config\.php
```
```
./vendor/bin/soap-client generate:types -q -o --config config/soap-client/ManageDeviceService/ManageDeviceService-config\.php
```

Change the newly Generated src/Type/DictionaryEntry.php to ManageDeviceServiceDictionaryEntry.php and update all references to that class in the following Files (do not update the variable names just the class name):
- src/Services/ManageDeviceService/ManageDeviceServiceClassmap.php
- src/Type/DictionaryType.php

in src/Type/SoldToType.php move the $displayName parameter to the end of the constructors (for future compatibility)

Accept the changes that were made to src/Type/ProductPKType.php

```
./vendor/bin/soap-client generate:types -q -o --config config/soap-client/UsageService/UsageService-config\.php
```
```
./vendor/bin/soap-client generate:types -q -o --config config/soap-client/ProductPackagingService/v1/ProductPackagingService-config\.php
```

Accept the changes to all files except for ProductPKType.php

```
./vendor/bin/soap-client generate:types -q -o --config config/soap-client/EntitlementOrderService/v1/EntitlementOrderService-config\.php
```

add all of the new type files
accept the changes to src/Type/CreateSimpleEntitlementRequestType.php
revert the changes to src/Type/ProductPKType.php and src/Type/UpdateBulkEntitlementDataType.php

```
./vendor/bin/soap-client generate:types -q -o --config config/soap-client/LicenseService/v1/LicenseService-config\.php
```

remove the newly added src/Type/DictionaryEntry.php
revert the changes to src/Type/DictionaryEntriesCollection.php and src/Type/ProductPKType.php

change src/Type/FullfillmentPropertiesType.php as follows:
 - line 64: change @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType to @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|\Flexsim\FlexnetOperations\Type\AccountIdentifierType
 - line 247: change @var \Flexsim\FlexnetOperations\Type\AccountIdentifierType $soldTo to @var \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $soldTo
 - line 282: remove the \Flexsim\FlexnetOperations\Type\AccountIdentifierType type cast from the $soldTo function parameter
 - line 345: same as line 247
 - line 380: same as line 282
 - line 584: change @return \Flexsim\FlexnetOperations\Type\AccountIdentifierType to @return \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|\Flexsim\FlexnetOperations\Type\AccountIdentifierType
 - line 592: change @param \Flexsim\FlexnetOperations\Type\AccountIdentifierType $soldTo to @param \Flexsim\FlexnetOperations\Type\OrganizationIdentifierType|\Flexsim\FlexnetOperations\Type\AccountIdentifierType $soldTo

```
./vendor/bin/soap-client generate:types -q -o --config config/soap-client/UserOrgHierarchyService/v1/UserOrgHierarchyService-config\.php
```

accept the changes

```
./vendor/bin/soap-client generate:types -q -o --config config/soap-client/ManageDeviceService/v1/ManageDeviceService-config\.php
```

remove the newly added src/Type/DictionaryEntry.php
revert the changes to src/Type/DictionaryType.php and src/Type/SoldToType.php
accept the changes to the other type files

```
./vendor/bin/soap-client generate:types -q -o --config config/soap-client/UsageService/v1/UsageService-config\.php
```

modify src/Type/GetUsageRequest.php to the following:
```
<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetUsageRequest implements RequestInterface
{

    /**
     * @var string
     */
    private $accountId;

    /**
     * @var string
     */
    private $orgName;

    /**
     * Constructor
     *
     * @var string $accountId this method is backwards compatible so you may also pass orgName
     */
    public function __construct(string $accountId)
    {
        $this->accountId = $accountId;
        $this->orgName = $accountId;
    }

    /**
     * create a new instance of this class
     *
     * @var string $accountId this method is backwards compatible so you may also pass orgName
     */
    public static function create(string $accountId)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrgName()
    {
        return $this->orgName;
    }

    /**
     * @param string $orgName
     * @return $this
     */
    public function setOrgName($orgName)
    {
        $this->orgName = $orgName;
        return $this;
    }
}
```

```
./vendor/bin/soap-client generate:types -q -o --config config/soap-client/ProductPackagingService/v2/ProductPackagingService-config\.php
```

add the new type files
revert the changes to ProductPKType.php

modify src/Type/AccountPKType.php to the following:
```
<?php

namespace Flexsim\FlexnetOperations\Type;

class AccountPKType
{

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * Constructor
     *
     * @var string $id this method is backwards compatible so you may also pass $name
     */
    public function __construct(string $id)
    {
        $this->id = $id;
        $this->name = $id;
    }

    /**
     * create a new instance of this class
     *
     * @var string $id this method is backwards compatible so you may also pass $name
     */
    public static function create(string $id)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
```

```
./vendor/bin/soap-client generate:types -q -o --config config/soap-client/EntitlementOrderService/v2/EntitlementOrderService-config\.php
```

add the new type files
revert the changes to src/Type/ProductPKType.php and src/Type/UpdateBulkEntitlementDataType.php
accept the changes to the other type files

```
./vendor/bin/soap-client generate:types -q -o --config config/soap-client/UserAcctHierarchyService/v2/UserAcctHierarchyService-config\.php
```

accept all new type files
revert the changes to src/Type/AccountPKType.php

update srcType/createUserDataType.php to

```
<?php

namespace Flexsim\FlexnetOperations\Type;

class CreateUserDataType
{

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $displayName;

    /**
     * @var string
     */
    private $emailAddress;

    /**
     * @var bool
     */
    private $optIn;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $faxNumber;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $zipcode;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var bool
     */
    private $canLogin;

    /**
     * @var string
     */
    private $userName;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $timezone;

    /**
     * @var bool
     */
    private $shared;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateUserAccountsListType
     */
    private $acctRolesList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\CreateUserOrganizationsListType
     */
    private $orgRolesList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    private $customAttributes;

    /**
     * Constructor
     *
     * @var string $firstName
     * @var string $lastName
     * @var string $displayName
     * @var string $emailAddress
     * @var bool $optIn
     * @var string $phoneNumber
     * @var string $faxNumber
     * @var string $street
     * @var string $city
     * @var string $state
     * @var string $zipcode
     * @var string $country
     * @var string $locale
     * @var bool $canLogin
     * @var string $userName
     * @var string $status
     * @var string $timezone
     * @var bool $shared
     * @var \Flexsim\FlexnetOperations\Type\CreateUserAccountsListType|\Flexsim\FlexnetOperations\Type\CreateUserOrganizationsListType $acctRolesList this method is backwards compatible so you may also pass $orgRolesList
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     */
    public function __construct(string $firstName, string $lastName, string $displayName = null, string $emailAddress, bool $optIn = null, string $phoneNumber = null, string $faxNumber = null, string $street = null, string $city = null, string $state = null, string $zipcode = null, string $country = null, string $locale = null, bool $canLogin, string $userName = null, string $status = null, string $timezone = null, bool $shared = null, $acctRolesList, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->displayName = $displayName;
        $this->emailAddress = $emailAddress;
        $this->optIn = $optIn;
        $this->phoneNumber = $phoneNumber;
        $this->faxNumber = $faxNumber;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zipcode = $zipcode;
        $this->country = $country;
        $this->locale = $locale;
        $this->canLogin = $canLogin;
        $this->userName = $userName;
        $this->status = $status;
        $this->timezone = $timezone;
        $this->shared = $shared;
        $this->acctRolesList = $acctRolesList;
        $this->orgRolesList = $acctRolesList;
        $this->customAttributes = $customAttributes;
    }

    /**
     * create a new instance of this class
     *
     * @var string $firstName
     * @var string $lastName
     * @var string $displayName
     * @var string $emailAddress
     * @var bool $optIn
     * @var string $phoneNumber
     * @var string $faxNumber
     * @var string $street
     * @var string $city
     * @var string $state
     * @var string $zipcode
     * @var string $country
     * @var string $locale
     * @var bool $canLogin
     * @var string $userName
     * @var string $status
     * @var string $timezone
     * @var bool $shared
     * @var \Flexsim\FlexnetOperations\Type\CreateUserAccountsListType|\Flexsim\FlexnetOperations\Type\CreateUserOrganizationsListType $acctRolesList this method is backwards compatible so you may also pass $orgRolesList
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     */
    public static function create(string $firstName, string $lastName, string $displayName = null, string $emailAddress, bool $optIn = null, string $phoneNumber = null, string $faxNumber = null, string $street = null, string $city = null, string $state = null, string $zipcode = null, string $country = null, string $locale = null, bool $canLogin, string $userName = null, string $status = null, string $timezone = null, bool $shared = null, $acctRolesList, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOptIn()
    {
        return $this->optIn;
    }

    /**
     * @param bool $optIn
     * @return $this
     */
    public function setOptIn($optIn)
    {
        $this->optIn = $optIn;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * @param string $faxNumber
     * @return $this
     */
    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return $this
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
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

    /**
     * @return bool
     */
    public function getCanLogin()
    {
        return $this->canLogin;
    }

    /**
     * @param bool $canLogin
     * @return $this
     */
    public function setCanLogin($canLogin)
    {
        $this->canLogin = $canLogin;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @param string $timezone
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShared()
    {
        return $this->shared;
    }

    /**
     * @param bool $shared
     * @return $this
     */
    public function setShared($shared)
    {
        $this->shared = $shared;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateUserAccountsListType
     */
    public function getAcctRolesList()
    {
        return $this->acctRolesList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateUserAccountsListType $acctRolesList
     * @return $this
     */
    public function setAcctRolesList($acctRolesList)
    {
        $this->acctRolesList = $acctRolesList;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CreateUserOrganizationsListType
     */
    public function getOrgRolesList()
    {
        return $this->orgRolesList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CreateUserOrganizationsListType $orgRolesList
     * @return $this
     */
    public function setOrgRolesList($orgRolesList)
    {
        $this->orgRolesList = $orgRolesList;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }
}
```

update srcType/GetUserPermissionsResponseDataType.php to:
```
<?php

namespace Flexsim\FlexnetOperations\Type;

class GetUserPermissionsResponseDataType
{

    /**
     * @var string
     */
    private $userName;

    /**
     * @var string
     */
    private $accountType;

    /**
     * @var string
     */
    private $orgType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PermissionListType
     */
    private $permissions;

    /**
     * Constructor
     *
     * @var string $userName
     * @var string $accountType this method is backwards compatible so you may also pass $orgType
     * @var \Flexsim\FlexnetOperations\Type\PermissionListType $permissions
     */
    public function __construct(string $userName, string $accountType, \Flexsim\FlexnetOperations\Type\PermissionListType $permissions)
    {
        $this->userName = $userName;
        $this->accountType = $accountType;
        $this->orgType = $accountType;
        $this->permissions = $permissions;
    }

    /**
     * create a new instance of this class
     *
     * @var string $userName
     * @var string $accountType this method is backwards compatible so you may also pass $orgType
     * @var \Flexsim\FlexnetOperations\Type\PermissionListType $permissions
     */
    public static function create(string $userName, string $accountType, \Flexsim\FlexnetOperations\Type\PermissionListType $permissions)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     * @return $this
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrgType()
    {
        return $this->orgType;
    }

    /**
     * @param string $orgType
     * @return $this
     */
    public function setOrgType($orgType)
    {
        $this->orgType = $orgType;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PermissionListType
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PermissionListType $permissions
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
        return $this;
    }
}
```

update srcType/UpdateUserDataType.php to:
```
<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateUserDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    private $user;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $displayName;

    /**
     * @var string
     */
    private $emailAddress;

    /**
     * @var bool
     */
    private $optIn;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $faxNumber;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $zipcode;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var string
     */
    private $timezone;

    /**
     * @var bool
     */
    private $shared;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserAccountsListType
     */
    private $acctRolesList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserOrganizationsListType
     */
    private $orgRolesList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    private $customAttributes;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType $user
     * @var string $firstName
     * @var string $lastName
     * @var string $displayName
     * @var string $emailAddress
     * @var bool $optIn
     * @var string $phoneNumber
     * @var string $faxNumber
     * @var string $street
     * @var string $city
     * @var string $state
     * @var string $zipcode
     * @var string $country
     * @var string $status
     * @var string $locale
     * @var string $timezone
     * @var bool $shared
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserAccountsListType|\Flexsim\FlexnetOperations\Type\UpdateUserOrganizationsListType $acctRolesList this method is backwards compatible so you can also pass $orgRolesList
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UserIdentifierType $user, string $firstName = null, string $lastName = null, string $displayName = null, string $emailAddress = null, bool $optIn = null, string $phoneNumber = null, string $faxNumber = null, string $street = null, string $city = null, string $state = null, string $zipcode = null, string $country = null, string $status = null, string $locale = null, string $timezone = null, bool $shared = null, $acctRolesList = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null)
    {
        $this->user = $user;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->displayName = $displayName;
        $this->emailAddress = $emailAddress;
        $this->optIn = $optIn;
        $this->phoneNumber = $phoneNumber;
        $this->faxNumber = $faxNumber;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zipcode = $zipcode;
        $this->country = $country;
        $this->status = $status;
        $this->locale = $locale;
        $this->timezone = $timezone;
        $this->shared = $shared;
        $this->acctRolesList = $acctRolesList;
        $this->orgRolesList = $acctRolesList;
        $this->customAttributes = $customAttributes;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType $user
     * @var string $firstName
     * @var string $lastName
     * @var string $displayName
     * @var string $emailAddress
     * @var bool $optIn
     * @var string $phoneNumber
     * @var string $faxNumber
     * @var string $street
     * @var string $city
     * @var string $state
     * @var string $zipcode
     * @var string $country
     * @var string $status
     * @var string $locale
     * @var string $timezone
     * @var bool $shared
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserAccountsListType|\Flexsim\FlexnetOperations\Type\UpdateUserOrganizationsListType $acctRolesList this method is backwards compatible so you can also pass $orgRolesList
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UserIdentifierType $user, string $firstName = null, string $lastName = null, string $displayName = null, string $emailAddress = null, bool $optIn = null, string $phoneNumber = null, string $faxNumber = null, string $street = null, string $city = null, string $state = null, string $zipcode = null, string $country = null, string $status = null, string $locale = null, string $timezone = null, bool $shared = null, $acctRolesList = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserIdentifierType $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOptIn()
    {
        return $this->optIn;
    }

    /**
     * @param bool $optIn
     * @return $this
     */
    public function setOptIn($optIn)
    {
        $this->optIn = $optIn;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * @param string $faxNumber
     * @return $this
     */
    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return $this
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
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

    /**
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @param string $timezone
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShared()
    {
        return $this->shared;
    }

    /**
     * @param bool $shared
     * @return $this
     */
    public function setShared($shared)
    {
        $this->shared = $shared;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateUserAccountsListType
     */
    public function getAcctRolesList()
    {
        return $this->acctRolesList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateUserAccountsListType $acctRolesList
     * @return $this
     */
    public function setAcctRolesList($acctRolesList)
    {
        $this->acctRolesList = $acctRolesList;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateUserOrganizationsListType
     */
    public function getOrgRolesList()
    {
        return $this->orgRolesList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateUserOrganizationsListType $orgRolesList
     * @return $this
     */
    public function setOrgRolesList($orgRolesList)
    {
        $this->orgRolesList = $orgRolesList;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }


}
```

update srcType/UpdateUserRolesDataType.php to:
```
<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateUserRolesDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    private $user;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserAccountRolesDataType
     */
    private $accountRoles;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserRolesOrganizationDataType
     */
    private $orgRoles;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType $user
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserAccountRolesDataType|\Flexsim\FlexnetOperations\Type\UpdateUserRolesOrganizationDataType $accountRoles this method is backwards compatible so you may also pass $orgRoles
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UserIdentifierType $user, $accountRoles)
    {
        $this->user = $user;
        $this->accountRoles = $accountRoles;
        $this->orgRoles = $accountRoles;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType $user
     * @var \Flexsim\FlexnetOperations\Type\UpdateUserAccountRolesDataType|\Flexsim\FlexnetOperations\Type\UpdateUserRolesOrganizationDataType $accountRoles this method is backwards compatible so you may also pass $orgRoles
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UserIdentifierType $user, $accountRoles)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserIdentifierType $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateUserAccountRolesDataType
     */
    public function getAccountRoles()
    {
        return $this->accountRoles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateUserAccountRolesDataType $accountRoles
     * @return $this
     */
    public function setAccountRoles($accountRoles)
    {
        $this->accountRoles = $accountRoles;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateUserRolesOrganizationDataType
     */
    public function getOrgRoles()
    {
        return $this->orgRoles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateUserRolesOrganizationDataType $orgRoles
     * @return $this
     */
    public function setOrgRoles($orgRoles)
    {
        $this->orgRoles = $orgRoles;
        return $this;
    }
}
```

update srcType/UserDetailDataType.php to:
```
<?php

namespace Flexsim\FlexnetOperations\Type;

class UserDetailDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    private $userIdentifier;

    /**
     * @var string
     */
    private $displayName;

    /**
     * @var bool
     */
    private $optIn;

    /**
     * @var string
     */
    private $faxNumber;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $zipcode;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var string
     */
    private $timezone;

    /**
     * @var bool
     */
    private $shared;

    /**
     * @var string
     */
    private $domain;

    /**
     * @var \DateTimeInterface
     */
    private $dateCreated;

    /**
     * @var \DateTimeInterface
     */
    private $dateLastModified;

    /**
     * @var \DateTimeInterface
     */
    private $dateLastLogin;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserAccountsListType
     */
    private $accountRolesList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserOrganizationsListType
     */
    private $orgRolesList;

    /**
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    private $customAttributes;

    /**
     * @var \DateTimeInterface
     */
    private $expiryDate;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType $userIdentifier
     * @var string $displayName
     * @var bool $optIn
     * @var string $faxNumber
     * @var string $street
     * @var string $city
     * @var string $state
     * @var string $zipcode
     * @var string $country
     * @var string $status
     * @var string $locale
     * @var string $timezone
     * @var bool $shared
     * @var string $domain
     * @var \DateTimeInterface $dateCreated
     * @var \DateTimeInterface $dateLastModified
     * @var \DateTimeInterface $dateLastLogin
     * @var \Flexsim\FlexnetOperations\Type\UserAccountsListType|\Flexsim\FlexnetOperations\Type\UserOrganizationsListType $orgRolesList $accountRolesList this method is backwards compatible so you may also pass $orgRolesList
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @var \DateTimeInterface $expiryDate
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UserIdentifierType $userIdentifier, string $displayName = null, bool $optIn = null, string $faxNumber = null, string $street = null, string $city = null, string $state = null, string $zipcode = null, string $country = null, string $status = null, string $locale = null, string $timezone = null, bool $shared = null, string $domain = null, \DateTimeInterface $dateCreated = null, \DateTimeInterface $dateLastModified = null, \DateTimeInterface $dateLastLogin = null, $accountRolesList = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null, \DateTimeInterface $expiryDate = null)
    {
        $this->userIdentifier = $userIdentifier;
        $this->displayName = $displayName;
        $this->optIn = $optIn;
        $this->faxNumber = $faxNumber;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zipcode = $zipcode;
        $this->country = $country;
        $this->status = $status;
        $this->locale = $locale;
        $this->timezone = $timezone;
        $this->shared = $shared;
        $this->domain = $domain;
        $this->dateCreated = $dateCreated;
        $this->dateLastModified = $dateLastModified;
        $this->dateLastLogin = $dateLastLogin;
        $this->accountRolesList = $accountRolesList;
        $this->orgRolesList = $accountRolesList;
        $this->customAttributes = $customAttributes;
        $this->expiryDate = $expiryDate;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UserIdentifierType $userIdentifier
     * @var string $displayName
     * @var bool $optIn
     * @var string $faxNumber
     * @var string $street
     * @var string $city
     * @var string $state
     * @var string $zipcode
     * @var string $country
     * @var string $status
     * @var string $locale
     * @var string $timezone
     * @var bool $shared
     * @var string $domain
     * @var \DateTimeInterface $dateCreated
     * @var \DateTimeInterface $dateLastModified
     * @var \DateTimeInterface $dateLastLogin
     * @var \Flexsim\FlexnetOperations\Type\UserAccountsListType|\Flexsim\FlexnetOperations\Type\UserOrganizationsListType $orgRolesList $accountRolesList this method is backwards compatible so you may also pass $orgRolesList
     * @var \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @var \DateTimeInterface $expiryDate
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UserIdentifierType $userIdentifier, string $displayName = null, bool $optIn = null, string $faxNumber = null, string $street = null, string $city = null, string $state = null, string $zipcode = null, string $country = null, string $status = null, string $locale = null, string $timezone = null, bool $shared = null, string $domain = null, \DateTimeInterface $dateCreated = null, \DateTimeInterface $dateLastModified = null, \DateTimeInterface $dateLastLogin = null, $accountRolesList = null, \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes = null, \DateTimeInterface $expiryDate = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserIdentifierType
     */
    public function getUserIdentifier()
    {
        return $this->userIdentifier;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserIdentifierType $userIdentifier
     * @return $this
     */
    public function setUserIdentifier($userIdentifier)
    {
        $this->userIdentifier = $userIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return bool
     */
    public function getOptIn()
    {
        return $this->optIn;
    }

    /**
     * @param bool $optIn
     * @return $this
     */
    public function setOptIn($optIn)
    {
        $this->optIn = $optIn;
        return $this;
    }

    /**
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * @param string $faxNumber
     * @return $this
     */
    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return $this
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
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

    /**
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @param string $timezone
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShared()
    {
        return $this->shared;
    }

    /**
     * @param bool $shared
     * @return $this
     */
    public function setShared($shared)
    {
        $this->shared = $shared;
        return $this;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * @param \DateTimeInterface $dateCreated
     * @return $this
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateLastModified()
    {
        return $this->dateLastModified;
    }

    /**
     * @param \DateTimeInterface $dateLastModified
     * @return $this
     */
    public function setDateLastModified($dateLastModified)
    {
        $this->dateLastModified = $dateLastModified;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateLastLogin()
    {
        return $this->dateLastLogin;
    }

    /**
     * @param \DateTimeInterface $dateLastLogin
     * @return $this
     */
    public function setDateLastLogin($dateLastLogin)
    {
        $this->dateLastLogin = $dateLastLogin;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserAccountsListType
     */
    public function getAccountRolesList()
    {
        return $this->accountRolesList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserAccountsListType $accountRolesList
     * @return $this
     */
    public function setAccountRolesList($accountRolesList)
    {
        $this->accountRolesList = $accountRolesList;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserOrganizationsListType
     */
    public function getOrgRolesList()
    {
        return $this->orgRolesList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserOrganizationsListType $orgRolesList
     * @return $this
     */
    public function setOrgRolesList($orgRolesList)
    {
        $this->orgRolesList = $orgRolesList;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AttributeDescriptorDataType $customAttributes
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * @param \DateTimeInterface $expiryDate
     * @return $this
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }
}
```

update srcType/UserQueryParametersType.php to:
```
<?php

namespace Flexsim\FlexnetOperations\Type;

class UserQueryParametersType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $userName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $firstName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $lastName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $displayName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $emailAddress;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $phoneNumber;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $faxNumber;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $street;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $city;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $state;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $zipcode;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $country;

    /**
     * @var bool
     */
    private $isActive;

    /**
     * @var bool
     */
    private $canLogIn;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $accountID;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $accountName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $orgName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    private $orgDisplayName;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserCustomAttributesQueryListType
     */
    private $customAttributes;

    /**
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    private $lastModifiedDateTime;

    /**
     * @var string
     */
    private $accountType;

    /**
     * @var string
     */
    private $orgType;

    /**
     * @var \Flexsim\FlexnetOperations\Type\UserAccountRolesListType
     */
    private $roles;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $userName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $firstName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $lastName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $displayName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $emailAddress
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $phoneNumber
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $faxNumber
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $street
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $city
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $state
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $zipcode
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $country
     * @var bool $isActive
     * @var bool $canLogIn
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountID this method is backwards compatible so you may also pass $orgName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountName this method is backwards compatible so you may also pass $orgDisplayName
     * @var \Flexsim\FlexnetOperations\Type\UserCustomAttributesQueryListType $customAttributes
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType $lastModifiedDateTime
     * @var string $accountType this method is backwards compatible so you may also pass $orgType
     * @var \Flexsim\FlexnetOperations\Type\UserAccountRolesListType $roles
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\SimpleQueryType $userName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $firstName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $lastName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $displayName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $emailAddress = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $phoneNumber = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $faxNumber = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $street = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $city = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $state = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $zipcode = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $country = null, bool $isActive = null, bool $canLogIn = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountID = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountName = null, \Flexsim\FlexnetOperations\Type\UserCustomAttributesQueryListType $customAttributes = null, \Flexsim\FlexnetOperations\Type\DateTimeQueryType $lastModifiedDateTime = null, string $accountType = null, \Flexsim\FlexnetOperations\Type\UserAccountRolesListType $roles = null)
    {
        $this->userName = $userName;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->displayName = $displayName;
        $this->emailAddress = $emailAddress;
        $this->phoneNumber = $phoneNumber;
        $this->faxNumber = $faxNumber;
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zipcode = $zipcode;
        $this->country = $country;
        $this->isActive = $isActive;
        $this->canLogIn = $canLogIn;
        $this->accountID = $accountID;
        $this->orgName = $accountID;
        $this->accountName = $accountName;
        $this->orgDisplayName = $accountName;
        $this->customAttributes = $customAttributes;
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        $this->accountType = $accountType;
        $this->orgType = $accountType;
        $this->roles = $roles;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $userName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $firstName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $lastName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $displayName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $emailAddress
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $phoneNumber
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $faxNumber
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $street
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $city
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $state
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $zipcode
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $country
     * @var bool $isActive
     * @var bool $canLogIn
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountID this method is backwards compatible so you may also pass $orgName
     * @var \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountName this method is backwards compatible so you may also pass $orgDisplayName
     * @var \Flexsim\FlexnetOperations\Type\UserCustomAttributesQueryListType $customAttributes
     * @var \Flexsim\FlexnetOperations\Type\DateTimeQueryType $lastModifiedDateTime
     * @var string $accountType this method is backwards compatible so you may also pass $orgType
     * @var \Flexsim\FlexnetOperations\Type\UserAccountRolesListType $roles
     */
    public static function create(\Flexsim\FlexnetOperations\Type\SimpleQueryType $userName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $firstName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $lastName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $displayName = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $emailAddress = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $phoneNumber = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $faxNumber = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $street = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $city = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $state = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $zipcode = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $country = null, bool $isActive = null, bool $canLogIn = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountID = null, \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountName = null, \Flexsim\FlexnetOperations\Type\UserCustomAttributesQueryListType $customAttributes = null, \Flexsim\FlexnetOperations\Type\DateTimeQueryType $lastModifiedDateTime = null, string $accountType = null, \Flexsim\FlexnetOperations\Type\UserAccountRolesListType $roles = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $userName
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $displayName
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $emailAddress
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $faxNumber
     * @return $this
     */
    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $street
     * @return $this
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $zipcode
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCanLogIn()
    {
        return $this->canLogIn;
    }

    /**
     * @param bool $canLogIn
     * @return $this
     */
    public function setCanLogIn($canLogIn)
    {
        $this->canLogIn = $canLogIn;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getAccountID()
    {
        return $this->accountID;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountID
     * @return $this
     */
    public function setAccountID($accountID)
    {
        $this->accountID = $accountID;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getOrgName()
    {
        return $this->orgName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $orgName
     * @return $this
     */
    public function setOrgName($orgName)
    {
        $this->orgName = $orgName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $accountName
     * @return $this
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\SimpleQueryType
     */
    public function getOrgDisplayName()
    {
        return $this->orgDisplayName;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\SimpleQueryType $orgDisplayName
     * @return $this
     */
    public function setOrgDisplayName($orgDisplayName)
    {
        $this->orgDisplayName = $orgDisplayName;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserCustomAttributesQueryListType
     */
    public function getCustomAttributes()
    {
        return $this->customAttributes;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserCustomAttributesQueryListType $customAttributes
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->customAttributes = $customAttributes;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DateTimeQueryType
     */
    public function getLastModifiedDateTime()
    {
        return $this->lastModifiedDateTime;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DateTimeQueryType $lastModifiedDateTime
     * @return $this
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     * @return $this
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrgType()
    {
        return $this->orgType;
    }

    /**
     * @param string $orgType
     * @return $this
     */
    public function setOrgType($orgType)
    {
        $this->orgType = $orgType;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UserAccountRolesListType
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UserAccountRolesListType $roles
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
        return $this;
    }
}
```

```
./vendor/bin/soap-client generate:types -q -o --config config/soap-client/ManageDeviceService/v2/ManageDeviceService-config\.php
```
remove the newly added src/Type/DictionaryEntry.php
revert the changes to src/Type/DictionaryType.php and src/Type/SoldToType.php
add the new type files

modify the changed src/Type/DeviceQueryDataType.php to have the new $soldToOrgName variable moved to the end of the function parameters

copy the changed src/Type/DeviceResponseConfigRequestType.php to src/Type/v2DeviceResponseConfigRequestType.php. Modify the class name accordingly and update the references to the class in the following files:
- src/Services/v2/ManageDeviceService/ManageDeviceServiceClassmap.php

Update the type casts of \Flexsim\FlexnetOperations\Type\DeviceResponseConfigRequestType to \Flexsim\FlexnetOperations\Type\DeviceResponseConfigRequestType|\Flexsim\FlexnetOperations\Type\v2DeviceResponseConfigRequestType in the following files (set the variable type casts to null)
- src/Type/getDevicesRequestType.php

revert the changes to src/Type/DeviceResponseConfigRequestType.php

do the same thing as DeviceResponseConfigRequestType to the changed src/Type/GetDevicesParametersType.php
update references in:
- src/Services/v2/ManageDeviceService/ManageDeviceServiceClassmap.php

update type casts in:
- src/Type/GetDevicesCountRequestType.php
- src/Type/getDevicesRequestType.php

accept the changes to the other files


```
./vendor/bin/soap-client generate:types -q -o --config config/soap-client/EntitlementOrderService/v3/EntitlementOrderService-config\.php
```
add the new files
revert the changes to the following:
- src/Type/AccountPKType.php
- src/Type/ProductCategoryDataType.php
- src/Type/ProductPKType.php
- src/Type/UpdateBulkEntitlementDataType.php

move the new parameters to the end of the constructors in the following:
- src/Type/CreateSimpleEntitlementDataType.php
- src/Type/EntitlementLineItemDataType.php
- src/Type/SearchActivateableItemDataType.php
- src/Type/SearchEntitlementDataType.php
- src/Type/SimpleEntitlementDataType.php
- src/Type/UpdateSimpleEntitlementDataType.php

update the following with the org - account compatibility that we have done previously:
- src/Type/BulkEntitlementPropertiesType.php
- srcTypeChannelPartnerDataType.php
- src/Type/EntitlementLineItemPropertiesType.php
- src/Type/GetMatchingBulkEntInfoType.php
- src/Type/GetMatchingLineItemInfoType.php
- src/Type/MapEntitlementsToUserRequestType.php
- src/Type/MergeEntitlementsRequestType.php
- src/Type/SearchActivateableItemDataType.php
- src/Type/SearchBulkEntitlementDataType.php
- src/Type/SearchEntitlementDataType.php
- src/Type/SplitBulkEntitlementInfoType.php
- src/Type/SplitLineItemInfoType.php
- src/Type/TransferEntitlementInfoType.php

```
./vendor/bin/soap-client generate:types -q -o --config config/soap-client/UserAcctHierarchyService/v3/UserAcctHierarchyService-config\.php
```
add the new types
revert the changes to the following:
- src/Type/CreateUserDataType.php
- src/Type/GetUserPermissionsResposeDataType.php
- src/Type/UpdateUserDataType.php
- src/Type/UpdateUserRolesDataType.php
- src/Type/UserQueryParametersType.php

keep the additional variables $createdBy and $lastModified by in src/Tpye/UserDetailDataType.php but revert the other changes

keep additions and add type compatibility to the rest of the files

```
./vendor/bin/soap-client generate:types -q -o --config config/soap-client/ManageDeviceService/v3/ManageDeviceService-config\.php
```
remove the newly added src/Type/DictionaryEntry.php
revert the changes to the following:
- src/Type/DictionaryType.php
- src/Type/AccountPKType.php
- src/Type/ChannelPartnerDataType.php
- src/Type/GetDevicesRequestType.php
- src/Type/GetDevicesCountRequestType.php
- src/Type/ProductIdentifierType.php

add the new types

update src/Type/SoldToType.php with the displayName parameter having a default null value but revert the other changes

copy the changes of src/Type/DeviceResponseConfigRequestType.php into src/Type/v2DeviceResponseConfigRequestType.php and revert the changes to the original file. Update the classmap and references to that class accordingly

copy the changes of src/Type/GetDevicesParametersType.php into src/Type/v2GetDevicesParametersType.php and revert the changes to the original file. Update the classmap and references to that class accordingly

follow similar steps as previous services to make the other changed files compatible