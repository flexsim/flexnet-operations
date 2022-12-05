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
    public function __construct(ChannelPartnerDataType|array|null $channelPartner = null)
    {
        $this->channelPartner = $channelPartner;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\ChannelPartnerDataType|array<\Flexnet\EntitlementOrderService\Type\ChannelPartnerDataType>|null  $channelPartner
     */
    public static function create(ChannelPartnerDataType|array|null $channelPartner = null)
    {
        return new static(...\func_get_args());
    }

    public function getChannelPartner(): ChannelPartnerDataType|array|null
    {
        return $this->channelPartner;
    }

    public function withChannelPartner(ChannelPartnerDataType|array|null $channelPartner): ChannelPartnerDataListType
    {
        $new = clone $this;
        $new->channelPartner = $channelPartner;

        return $new;
    }
}
