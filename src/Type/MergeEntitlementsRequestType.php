<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class MergeEntitlementsRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var string
     */
    protected $accountFrom;

    /**
     * @var string
     */
    protected $organizationFrom;

    /**
     * @var string
     */
    protected $accountTo;

    /**
     * @var string
     */
    protected $organizationTo;

    /**
     * @var bool
     */
    protected $mergeUsers;

    /**
     * @var bool
     */
    protected $mergeEntitlements;

    /**
     * Constructor
     *
     * @var string $accountFrom this method is backwards compatible so you may also pass $organizationFrom
     * @var string $accountTo this method is backwards compatible so you may also pass $organizationTo
     * @var bool $mergeUsers
     * @var bool $mergeEntitlements
     */
    public function __construct(
        string $accountFrom,
        string $accountTo,
        bool $mergeUsers = null,
        bool $mergeEntitlements = null
    ) {
        $this->accountFrom = $accountFrom;
        $this->organizationFrom = $accountFrom;
        $this->accountTo = $accountTo;
        $this->organizationTo = $accountTo;
        $this->mergeUsers = $mergeUsers;
        $this->mergeEntitlements = $mergeEntitlements;
    }

    /**
     * create a new instance of this class
     *
     * @var string $accountFrom this method is backwards compatible so you may also pass $organizationFrom
     * @var string $accountTo this method is backwards compatible so you may also pass $organizationTo
     * @var bool $mergeUsers
     * @var bool $mergeEntitlements
     */
    public static function create(
        string $accountFrom,
        string $accountTo,
        bool $mergeUsers = null,
        bool $mergeEntitlements = null
    ) {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getAccountFrom()
    {
        return $this->accountFrom;
    }

    /**
     * @param string $accountFrom
     * @return $this
     */
    public function setAccountFrom($accountFrom)
    {
        $this->accountFrom = $accountFrom;
        return $this;
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
    public function getAccountTo()
    {
        return $this->accountTo;
    }

    /**
     * @param string $accountTo
     * @return $this
     */
    public function setAccountTo($accountTo)
    {
        $this->accountTo = $accountTo;
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
