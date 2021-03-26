<?php

namespace Flexsim\FlexnetOperations\Type;

class CountForHostsType
{

    /**
     * @var string
     */
    private $hostDataRefId;

    /**
     * @var int
     */
    private $fulfillCount;

    /**
     * @var int
     */
    private $overDraftCount;

    /**
     * Constructor
     *
     * @var string $hostDataRefId
     * @var int $fulfillCount
     * @var int $overDraftCount
     */
    public function __construct(string $hostDataRefId, int $fulfillCount, int $overDraftCount = null)
    {
        $this->hostDataRefId = $hostDataRefId;
        $this->fulfillCount = $fulfillCount;
        $this->overDraftCount = $overDraftCount;
    }

    /**
     * create a new instance of this class
     *
     * @var string $hostDataRefId
     * @var int $fulfillCount
     * @var int $overDraftCount
     */
    public static function create(string $hostDataRefId, int $fulfillCount, int $overDraftCount = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getHostDataRefId()
    {
        return $this->hostDataRefId;
    }

    /**
     * @param string $hostDataRefId
     * @return $this
     */
    public function setHostDataRefId($hostDataRefId)
    {
        $this->hostDataRefId = $hostDataRefId;
        return $this;
    }

    /**
     * @return int
     */
    public function getFulfillCount()
    {
        return $this->fulfillCount;
    }

    /**
     * @param int $fulfillCount
     * @return $this
     */
    public function setFulfillCount($fulfillCount)
    {
        $this->fulfillCount = $fulfillCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getOverDraftCount()
    {
        return $this->overDraftCount;
    }

    /**
     * @param int $overDraftCount
     * @return $this
     */
    public function setOverDraftCount($overDraftCount)
    {
        $this->overDraftCount = $overDraftCount;
        return $this;
    }


}

