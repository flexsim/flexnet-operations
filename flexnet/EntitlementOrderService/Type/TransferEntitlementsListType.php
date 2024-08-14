<?php

namespace Flexnet\EntitlementOrderService\Type;

class TransferEntitlementsListType
{
    /**
     * @var \Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType|array<\Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType>
     */
    private $entitlementInfo;

    /**
     * Constructor
     *
     * @param  \Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType|array<\Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType>  $entitlementInfo
     */
    public function __construct(\Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType|array $entitlementInfo)
    {
        $this->entitlementInfo = $entitlementInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType|array<\Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType>  $entitlementInfo
     */
    public static function create(\Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType|array $entitlementInfo)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType|array<\Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType>
     */
    public function getEntitlementInfo(): \Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType|array
    {
        return $this->entitlementInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType|array<\Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType>  $entitlementInfo
     */
    public function withEntitlementInfo(\Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType|array $entitlementInfo): \Flexnet\EntitlementOrderService\Type\TransferEntitlementsListType
    {
        $new = clone $this;
        $new->entitlementInfo = $entitlementInfo;

        return $new;
    }
}
