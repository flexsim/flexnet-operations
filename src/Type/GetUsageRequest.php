<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetUsageRequest extends FlexnetType implements RequestInterface
{
    /**
     * @var string
     */
    protected $accountId;

    /**
     * @var string
     */
    protected $orgName;

    /**
     * Constructor
     *
     * @param  string  $accountId this method is backwards compatible so you may also pass orgName
     */
    public function __construct(string $accountId)
    {
        $this->accountId = $accountId;
        $this->orgName = $accountId;
    }

    /**
     * create a new instance of this class
     *
     * @param  string  $accountId this method is backwards compatible so you may also pass orgName
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
     * @param  string  $accountId
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
     * @param  string  $orgName
     * @return $this
     */
    public function setOrgName($orgName)
    {
        $this->orgName = $orgName;

        return $this;
    }
}
