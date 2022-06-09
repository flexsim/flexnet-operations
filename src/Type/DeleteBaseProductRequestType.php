<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteBaseProductRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var string
     */
    protected $uniqueId;

    /**
     * Constructor
     *
     * @param string $uniqueId
     */
    public function __construct(string $uniqueId)
    {
        $this->uniqueId = $uniqueId;
    }

    /**
     * create a new instance of this class
     *
     * @param string $uniqueId
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
