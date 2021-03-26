<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedAddWebRegKeyDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\AddWebRegKeyDataType
     */
    private $webRegKeyData;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\AddWebRegKeyDataType $webRegKeyData
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\AddWebRegKeyDataType $webRegKeyData = null, string $reason = null)
    {
        $this->webRegKeyData = $webRegKeyData;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\AddWebRegKeyDataType $webRegKeyData
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\AddWebRegKeyDataType $webRegKeyData = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\AddWebRegKeyDataType
     */
    public function getWebRegKeyData()
    {
        return $this->webRegKeyData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\AddWebRegKeyDataType $webRegKeyData
     * @return $this
     */
    public function setWebRegKeyData($webRegKeyData)
    {
        $this->webRegKeyData = $webRegKeyData;
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

