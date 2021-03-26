<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteBaseProductRequestType implements RequestInterface
{

    /**
     * @var string
     */
    private $uniqueId;

    /**
     * Constructor
     *
     * @var string $uniqueId
     */
    public function __construct(string $uniqueId)
    {
        $this->uniqueId = $uniqueId;
    }

    /**
     * create a new instance of this class
     *
     * @var string $uniqueId
     */
    public static function create(string $uniqueId)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * @param string $uniqueId
     * @return $this
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;
        return $this;
    }


}
