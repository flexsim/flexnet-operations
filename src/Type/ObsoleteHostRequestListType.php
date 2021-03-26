<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ObsoleteHostRequestListType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ObsoleteHostType
     */
    private $host;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ObsoleteHostType $host
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ObsoleteHostType $host)
    {
        $this->host = $host;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ObsoleteHostType $host
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ObsoleteHostType $host)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ObsoleteHostType
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ObsoleteHostType $host
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }


}

