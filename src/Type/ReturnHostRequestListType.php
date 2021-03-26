<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ReturnHostRequestListType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ReturnHostType
     */
    private $returnHosts;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ReturnHostType $returnHosts
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ReturnHostType $returnHosts)
    {
        $this->returnHosts = $returnHosts;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ReturnHostType $returnHosts
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ReturnHostType $returnHosts)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ReturnHostType
     */
    public function getReturnHosts()
    {
        return $this->returnHosts;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ReturnHostType $returnHosts
     * @return $this
     */
    public function setReturnHosts($returnHosts)
    {
        $this->returnHosts = $returnHosts;
        return $this;
    }


}

