<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteUsageHistoryRequestType extends FlexnetType implements RequestInterface
{
    /**
     * @var \DateTimeInterface
     */
    protected $beforeUpdateTime;

    /**
     * Constructor
     *
     * @param \DateTimeInterface $beforeUpdateTime
     */
    public function __construct(\DateTimeInterface $beforeUpdateTime)
    {
        $this->beforeUpdateTime = $beforeUpdateTime;
    }

    /**
     * create a new instance of this class
     *
     * @param \DateTimeInterface $beforeUpdateTime
     */
    public static function create(\DateTimeInterface $beforeUpdateTime)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \DateTimeInterface
     */
    public function getBeforeUpdateTime()
    {
        return $this->beforeUpdateTime;
    }

    /**
     * @param \DateTimeInterface $beforeUpdateTime
     * @return $this
     */
    public function setBeforeUpdateTime($beforeUpdateTime)
    {
        $this->beforeUpdateTime = $beforeUpdateTime;

        return $this;
    }
}
