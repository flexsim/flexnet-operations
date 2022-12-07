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
    public function __construct(TransferEntitlementInfoType|array $entitlementInfo)
    {
        $this->entitlementInfo = $entitlementInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType|array<\Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType>  $entitlementInfo
     */
    public static function create(TransferEntitlementInfoType|array $entitlementInfo)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType|array<\Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType>
     */
    public function getEntitlementInfo(): TransferEntitlementInfoType|array
    {
        return $this->entitlementInfo;
    }

    /**
     * @param  \Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType|array<\Flexnet\EntitlementOrderService\Type\TransferEntitlementInfoType>  $entitlementInfo
     * @return TransferEntitlementsListType
     */
    public function withEntitlementInfo(TransferEntitlementInfoType|array $entitlementInfo): TransferEntitlementsListType
    {
        $new = clone $this;
        $new->entitlementInfo = $entitlementInfo;

        return $new;
    }
}
