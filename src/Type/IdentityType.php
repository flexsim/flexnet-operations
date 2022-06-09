<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class IdentityType extends FlexnetType implements RequestInterface
{
    /**
     * @var string
     */
    protected $userId;

    /**
     * Constructor
     *
     * @param string $userId
     */
    public function __construct(string $userId)
    {
        $this->userId = $userId;
    }

    /**
     * create a new instance of this class
     *
     * @param string $userId
     */
    public static function create(string $userId)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }
}
