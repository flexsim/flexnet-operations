<?php

namespace Flexsim\FlexnetOperations\Type;

class ChannelPartnerDataListType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\ChannelPartnerDataType
     */
    private $channelPartner;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\ChannelPartnerDataType|array $channelPartner
     */
    public function __construct($channelPartner = null)
    {
        $this->channelPartner = $channelPartner;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\ChannelPartnerDataType|array $channelPartner
     */
    public static function create($channelPartner = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ChannelPartnerDataType
     */
    public function getChannelPartner()
    {
        return $this->channelPartner;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ChannelPartnerDataType $channelPartner
     * @return $this
     */
    public function setChannelPartner($channelPartner)
    {
        $this->channelPartner = $channelPartner;
        return $this;
    }


}

