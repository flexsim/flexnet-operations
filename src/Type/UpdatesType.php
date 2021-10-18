<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdatesType extends FlexnetType
{

    /**
     * @var string
     */
    protected $updateId;

    /**
     * @var string
     */
    protected $downloadPackageId;

    /**
     * @var string
     */
    protected $platform;

    /**
     * @var string
     */
    protected $language;

    /**
     * @var int
     */
    protected $status;

    /**
     * @var string
     */
    protected $statusReason;

    /**
     * Constructor
     *
     * @var string $updateId
     * @var string $downloadPackageId
     * @var string $platform
     * @var string $language
     * @var int $status
     * @var string $statusReason
     */
    public function __construct(string $updateId = null, string $downloadPackageId = null, string $platform = null, string $language = null, int $status = null, string $statusReason = null)
    {
        $this->updateId = $updateId;
        $this->downloadPackageId = $downloadPackageId;
        $this->platform = $platform;
        $this->language = $language;
        $this->status = $status;
        $this->statusReason = $statusReason;
    }

    /**
     * create a new instance of this class
     *
     * @var string $updateId
     * @var string $downloadPackageId
     * @var string $platform
     * @var string $language
     * @var int $status
     * @var string $statusReason
     */
    public static function create(string $updateId = null, string $downloadPackageId = null, string $platform = null, string $language = null, int $status = null, string $statusReason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getUpdateId()
    {
        return $this->updateId;
    }

    /**
     * @param string $updateId
     * @return $this
     */
    public function setUpdateId($updateId)
    {
        $this->updateId = $updateId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDownloadPackageId()
    {
        return $this->downloadPackageId;
    }

    /**
     * @param string $downloadPackageId
     * @return $this
     */
    public function setDownloadPackageId($downloadPackageId)
    {
        $this->downloadPackageId = $downloadPackageId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @param string $platform
     * @return $this
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
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
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * @param string $statusReason
     * @return $this
     */
    public function setStatusReason($statusReason)
    {
        $this->statusReason = $statusReason;
        return $this;
    }
}
