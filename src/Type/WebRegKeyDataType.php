<?php

namespace Flexsim\FlexnetOperations\Type;

class WebRegKeyDataType
{

    /**
     * @var string
     */
    private $webRegKey;

    /**
     * @var bool
     */
    private $autoGenerate;

    /**
     * @var int
     */
    private $numAutoGenerate;

    /**
     * Constructor
     *
     * @var string|array $webRegKey
     * @var bool $autoGenerate
     * @var int $numAutoGenerate
     */
    public function __construct($webRegKey = null, bool $autoGenerate = null, int $numAutoGenerate = null)
    {
        $this->webRegKey = $webRegKey;
        $this->autoGenerate = $autoGenerate;
        $this->numAutoGenerate = $numAutoGenerate;
    }

    /**
     * create a new instance of this class
     *
     * @var string|array $webRegKey
     * @var bool $autoGenerate
     * @var int $numAutoGenerate
     */
    public static function create($webRegKey = null, bool $autoGenerate = null, int $numAutoGenerate = null)
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
     * @return bool
     */
    public function getAutoGenerate()
    {
        return $this->autoGenerate;
    }

    /**
     * @param bool $autoGenerate
     * @return $this
     */
    public function setAutoGenerate($autoGenerate)
    {
        $this->autoGenerate = $autoGenerate;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumAutoGenerate()
    {
        return $this->numAutoGenerate;
    }

    /**
     * @param int $numAutoGenerate
     * @return $this
     */
    public function setNumAutoGenerate($numAutoGenerate)
    {
        $this->numAutoGenerate = $numAutoGenerate;
        return $this;
    }


}

