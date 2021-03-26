<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ReturnShortCodeRequestType implements RequestInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ReturnShortCodeDataType
     */
    private $shortCodeData;

    /**
     * @var string
     */
    private $returnReason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ReturnShortCodeDataType $shortCodeData
     * @var string $returnReason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\ReturnShortCodeDataType $shortCodeData = null, string $returnReason = null)
    {
        $this->shortCodeData = $shortCodeData;
        $this->returnReason = $returnReason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ReturnShortCodeDataType $shortCodeData
     * @var string $returnReason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\ReturnShortCodeDataType $shortCodeData = null, string $returnReason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ReturnShortCodeDataType
     */
    public function getShortCodeData()
    {
        return $this->shortCodeData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ReturnShortCodeDataType $shortCodeData
     * @return $this
     */
    public function setShortCodeData($shortCodeData)
    {
        $this->shortCodeData = $shortCodeData;
        return $this;
    }

    /**
     * @return string
     */
    public function getReturnReason()
    {
        return $this->returnReason;
    }

    /**
     * @param string $returnReason
     * @return $this
     */
    public function setReturnReason($returnReason)
    {
        $this->returnReason = $returnReason;
        return $this;
    }


}
