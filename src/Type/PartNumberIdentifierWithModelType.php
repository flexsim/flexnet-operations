<?php

namespace Flexsim\FlexnetOperations\Type;

class PartNumberIdentifierWithModelType extends FlexnetType
{

    /**
     * @var string
     */
    protected $uniqueId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\PartNumberPKType
     */
    protected $primaryKeys;

    /**
     * @var \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    protected $licenseModel;

    /**
     * Constructor
     *
     * @param string $uniqueId
     * @param \Flexsim\FlexnetOperations\Type\PartNumberPKType $primaryKeys
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel
     */
    public function __construct(string $uniqueId = null, \Flexsim\FlexnetOperations\Type\PartNumberPKType $primaryKeys = null, \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel = null)
    {
        $this->uniqueId = $uniqueId;
        $this->primaryKeys = $primaryKeys;
        $this->licenseModel = $licenseModel;
    }

    /**
     * create a new instance of this class
     *
     * @param string $uniqueId
     * @param \Flexsim\FlexnetOperations\Type\PartNumberPKType $primaryKeys
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel
     */
    public static function create(string $uniqueId = null, \Flexsim\FlexnetOperations\Type\PartNumberPKType $primaryKeys = null, \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * @param string $uniqueId
     * @return $this
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\PartNumberPKType
     */
    public function getPrimaryKeys()
    {
        return $this->primaryKeys;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\PartNumberPKType $primaryKeys
     * @return $this
     */
    public function setPrimaryKeys($primaryKeys)
    {
        $this->primaryKeys = $primaryKeys;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType
     */
    public function getLicenseModel()
    {
        return $this->licenseModel;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\LicenseModelIdentifierType $licenseModel
     * @return $this
     */
    public function setLicenseModel($licenseModel)
    {
        $this->licenseModel = $licenseModel;
        return $this;
    }
}
