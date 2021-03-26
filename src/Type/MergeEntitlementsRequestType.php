<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class MergeEntitlementsRequestType implements RequestInterface
{

    /**
     * @var string
     */
    private $organizationFrom;

    /**
     * @var string
     */
    private $organizationTo;

    /**
     * @var bool
     */
    private $mergeUsers;

    /**
     * @var bool
     */
    private $mergeEntitlements;

    /**
     * Constructor
     *
     * @var string $organizationFrom
     * @var string $organizationTo
     * @var bool $mergeUsers
     * @var bool $mergeEntitlements
     */
    public function __construct(string $organizationFrom, string $organizationTo, bool $mergeUsers = null, bool $mergeEntitlements = null)
    {
        $this->organizationFrom = $organizationFrom;
        $this->organizationTo = $organizationTo;
        $this->mergeUsers = $mergeUsers;
        $this->mergeEntitlements = $mergeEntitlements;
    }

    /**
     * create a new instance of this class
     *
     * @var string $organizationFrom
     * @var string $organizationTo
     * @var bool $mergeUsers
     * @var bool $mergeEntitlements
     */
    public static function create(string $organizationFrom, string $organizationTo, bool $mergeUsers = null, bool $mergeEntitlements = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getOrganizationFrom()
    {
        return $this->organizationFrom;
    }

    /**
     * @param string $organizationFrom
     * @return $this
     */
    public function setOrganizationFrom($organizationFrom)
    {
        $this->organizationFrom = $organizationFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrganizationTo()
    {
        return $this->organizationTo;
    }

    /**
     * @param string $organizationTo
     * @return $this
     */
    public function setOrganizationTo($organizationTo)
    {
        $this->organizationTo = $organizationTo;
        return $this;
    }

    /**
     * @return bool
     */
    public function getMergeUsers()
    {
        return $this->mergeUsers;
    }

    /**
     * @param bool $mergeUsers
     * @return $this
     */
    public function setMergeUsers($mergeUsers)
    {
        $this->mergeUsers = $mergeUsers;
        return $this;
    }

    /**
     * @return bool
     */
    public function getMergeEntitlements()
    {
        return $this->mergeEntitlements;
    }

    /**
     * @param bool $mergeEntitlements
     * @return $this
     */
    public function setMergeEntitlements($mergeEntitlements)
    {
        $this->mergeEntitlements = $mergeEntitlements;
        return $this;
    }


}

