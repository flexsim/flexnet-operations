<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AuthenticateUserInputType extends FlexnetType implements RequestInterface
{

    /**
     * @var string
     */
    protected $userName;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $domainName;

    /**
     * Constructor
     *
     * @var string $userName
     * @var string $password
     * @var string $domainName
     */
    public function __construct(string $userName, string $password, string $domainName)
    {
        $this->userName = $userName;
        $this->password = $password;
        $this->domainName = $domainName;
    }

    /**
     * create a new instance of this class
     *
     * @var string $userName
     * @var string $password
     * @var string $domainName
     */
    public static function create(string $userName, string $password, string $domainName)
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
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
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
