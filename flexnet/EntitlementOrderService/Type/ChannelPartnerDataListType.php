<?php

namespace Flexnet\EntitlementOrderService\Type;

class ChannelPartnerDataListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataType|array<\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataType>|null
     */
    private $channelPartner;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataType|array<\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataType>|null  $channelPartner
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataType|array|null $channelPartner = null)
    {
        $this->channelPartner = $channelPartner;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataType|array<\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataType>|null  $channelPartner
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataType|array|null $channelPartner = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataType|array<\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataType>|null
     */
    public function getChannelPartner(): \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataType|array|null
    {
        return $this->channelPartner;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataType|array<\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataType>|null  $channelPartner
     */
    public function withChannelPartner(\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataType|array|null $channelPartner): \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataListType
    {
        $new = clone $this;
        $new->channelPartner = $channelPartner;

        return $new;
    }
}
