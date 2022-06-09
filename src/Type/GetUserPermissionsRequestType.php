<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetUserPermissionsRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var string
     */
    protected $userName;

    /**
     * @var string
     */
    protected $domainName;

    /**
     * Constructor
     *
     * @param string $userName
     * @param string $domainName
     */
    public function __construct(string $userName, string $domainName = null)
    {
        $this->userName = $userName;
        $this->domainName = $domainName;
    }

    /**
     * create a new instance of this class
     *
     * @param string $userName
     * @param string $domainName
     */
    public static function create(string $userName, string $domainName = null)
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
    public function getDomainName()
    {
        return $this->domainName;
    }

    /**
     * @param string $domainName
     * @return $this
     */
    public function setDomainName($domainName)
    {
        $this->domainName = $domainName;

        return $this;
    }
}
