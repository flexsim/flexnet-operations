<?php

namespace Flexsim\FlexnetOperations\Type;

class UpdateChannelPartnerDataListType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType|array
     */
    protected $channelPartners;

    /**
     * @var string
     */
    protected $opType;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType|array $channelPartners
     * @param string $opType
     */
    public function __construct($channelPartners, string $opType)
    {
        $this->channelPartners = $channelPartners;
        $this->opType = $opType;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType|array $channelPartners
     * @param string $opType
     */
    public static function create($channelPartners, string $opType)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType|array
     */
    public function getChannelPartners()
    {
        return $this->channelPartners;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ChannelPartnerDataListType|array $channelPartners
     * @return $this
     */
    public function setChannelPartners($channelPartners)
    {
        $this->channelPartners = $channelPartners;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpType()
    {
        return $this->opType;
    }

    /**
     * @param string $opType
     * @return $this
     */
    public function setOpType($opType)
    {
        $this->opType = $opType;
        return $this;
    }
}
