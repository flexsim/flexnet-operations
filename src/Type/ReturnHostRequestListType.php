<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ReturnHostRequestListType extends FlexnetType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ReturnHostType|array 
     */
    protected $returnHosts;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ReturnHostType|array $returnHosts
     */
    public function __construct($returnHosts)
    {
        $this->returnHosts = $returnHosts;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ReturnHostType|array $returnHosts
     */
    public static function create($returnHosts)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ReturnHostType|array 
     */
    public function getReturnHosts()
    {
        return $this->returnHosts;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ReturnHostType|array $returnHosts
     * @return $this
     */
    public function setReturnHosts($returnHosts)
    {
        $this->returnHosts = $returnHosts;
        return $this;
    }
}
