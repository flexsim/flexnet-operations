<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetAutoProvisionedServerRequest implements RequestInterface
{

    /**
     * @var string
     */
    private $orgName;

    /**
     * Constructor
     *
     * @var string $orgName
     */
    public function __construct(string $orgName)
    {
        $this->orgName = $orgName;
    }

    /**
     * create a new instance of this class
     *
     * @var string $orgName
     */
    public static function create(string $orgName)
    {
        return new self(...func_get_args());
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

