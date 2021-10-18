<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetAutoProvisionedServerRequest extends FlexnetType implements RequestInterface
{

    /**
     * @var string
     */
    protected $acctName;

    /**
     * @var string
     */
    protected $orgName;

    /**
     * Constructor
     *
     * @var string $acctName this method is backwards compatible so you may also pass $orgName
     */
    public function __construct(string $acctName)
    {
        $this->acctName = $acctName;
        $this->orgName = $acctName;
    }

    /**
     * create a new instance of this class
     *
     * @var string $acctName this method is backwards compatible so you may also pass $orgName
     */
    public static function create(string $acctName)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getAcctName()
    {
        return $this->acctName;
    }

    /**
     * @param string $acctName
     * @return $this
     */
    public function setAcctName($acctName)
    {
        $this->acctName = $acctName;
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
