<?php

namespace Flexnet\LicenseService\Type;

class OverDraftDataListType
{
    /**
     * @var \Flexnet\LicenseService\Type\ActivationIdOverDraftMapType|array<\Flexnet\LicenseService\Type\ActivationIdOverDraftMapType>
     */
    private $activationIdMap;

    /**
     * Constructor
     *
     * @param  \Flexnet\LicenseService\Type\ActivationIdOverDraftMapType|array<\Flexnet\LicenseService\Type\ActivationIdOverDraftMapType>  $activationIdMap
     */
    public function __construct(ActivationIdOverDraftMapType|array $activationIdMap)
    {
        $this->activationIdMap = $activationIdMap;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ActivationIdOverDraftMapType|array<\Flexnet\LicenseService\Type\ActivationIdOverDraftMapType>  $activationIdMap
     */
    public static function create(ActivationIdOverDraftMapType|array $activationIdMap)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\ActivationIdOverDraftMapType|array<\Flexnet\LicenseService\Type\ActivationIdOverDraftMapType>
     */
    public function getActivationIdMap(): ActivationIdOverDraftMapType|array
    {
        return $this->activationIdMap;
    }

    /**
     * @param  \Flexnet\LicenseService\Type\ActivationIdOverDraftMapType|array<\Flexnet\LicenseService\Type\ActivationIdOverDraftMapType>  $activationIdMap
     */
    public function withActivationIdMap(ActivationIdOverDraftMapType|array $activationIdMap): OverDraftDataListType
    {
        $new = clone $this;
        $new->activationIdMap = $activationIdMap;

        return $new;
    }
}
