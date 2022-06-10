<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AuthenticateUserReturnType extends FlexnetType implements ResultInterface
{
    /**
     * @var bool
     */
    protected $Success;

    /**
     * Constructor
     *
     * @param bool $Success
     */
    public function __construct(bool $Success)
    {
        $this->Success = $Success;
    }

    /**
     * create a new instance of this class
     *
     * @param bool $Success
     */
    public static function create(bool $Success)
    {
        return new self(...func_get_args());
    }

    /**
     * @return bool
     */
    public function getSuccess()
    {
        return $this->Success;
    }

    /**
     * @param bool $Success
     * @return $this
     */
    public function setSuccess($Success)
    {
        $this->Success = $Success;

        return $this;
    }
}
