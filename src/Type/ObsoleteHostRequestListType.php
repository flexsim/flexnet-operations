<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ObsoleteHostRequestListType extends FlexnetType implements RequestInterface
{
    /**
     * @var \Flexsim\FlexnetOperations\Type\ObsoleteHostType|array
     */
    protected $host;

    /**
     * Constructor
     *
     * @param  \Flexsim\FlexnetOperations\Type\ObsoleteHostType|array  $host
     */
    public function __construct($host)
    {
        $this->host = $host;
    }

    /**
     * create a new instance of this class
     *
     * @param  \Flexsim\FlexnetOperations\Type\ObsoleteHostType|array  $host
     */
    public static function create($host)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ObsoleteHostType|array
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param  \Flexsim\FlexnetOperations\Type\ObsoleteHostType|array  $host
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }
}
