<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedDeleteWebRegKeyDataType
{

    /**
     * @var string
     */
    private $webRegKey;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var string $webRegKey
     * @var string $reason
     */
    public function __construct(string $webRegKey, string $reason = null)
    {
        $this->webRegKey = $webRegKey;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var string $webRegKey
     * @var string $reason
     */
    public static function create(string $webRegKey, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getWebRegKey()
    {
        return $this->webRegKey;
    }

    /**
     * @param string $webRegKey
     * @return $this
     */
    public function setWebRegKey($webRegKey)
    {
        $this->webRegKey = $webRegKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }


}

