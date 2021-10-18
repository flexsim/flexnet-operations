<?php

namespace Flexsim\FlexnetOperations\Type;

class WebRegKeyCountDataType extends FlexnetType
{

    /**
     * @var int
     */
    protected $totalCount;

    /**
     * @var int
     */
    protected $redeemedCount;

    /**
     * Constructor
     *
     * @var int $totalCount
     * @var int $redeemedCount
     */
    public function __construct(int $totalCount, int $redeemedCount)
    {
        $this->totalCount = $totalCount;
        $this->redeemedCount = $redeemedCount;
    }

    /**
     * create a new instance of this class
     *
     * @var int $totalCount
     * @var int $redeemedCount
     */
    public static function create(int $totalCount, int $redeemedCount)
    {
        return new self(...func_get_args());
    }

    /**
     * @return int
     */
    public function getTotalCount()
    {
        return $this->totalCount;
    }

    /**
     * @param int $totalCount
     * @return $this
     */
    public function setTotalCount($totalCount)
    {
        $this->totalCount = $totalCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getRedeemedCount()
    {
        return $this->redeemedCount;
    }

    /**
     * @param int $redeemedCount
     * @return $this
     */
    public function setRedeemedCount($redeemedCount)
    {
        $this->redeemedCount = $redeemedCount;
        return $this;
    }
}
