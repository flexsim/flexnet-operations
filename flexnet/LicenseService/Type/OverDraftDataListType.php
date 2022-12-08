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
     * @param \Flexnet\LicenseService\Type\ActivationIdOverDraftMapType|array<\Flexnet\LicenseService\Type\ActivationIdOverDraftMapType> $activationIdMap
     */
    public function __construct(\Flexnet\LicenseService\Type\ActivationIdOverDraftMapType|array $activationIdMap)
    {
        $this->activationIdMap = $activationIdMap;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ActivationIdOverDraftMapType|array<\Flexnet\LicenseService\Type\ActivationIdOverDraftMapType> $activationIdMap
     */
    public static function create(\Flexnet\LicenseService\Type\ActivationIdOverDraftMapType|array $activationIdMap)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\LicenseService\Type\ActivationIdOverDraftMapType|array<\Flexnet\LicenseService\Type\ActivationIdOverDraftMapType>
     */
    public function getActivationIdMap() : \Flexnet\LicenseService\Type\ActivationIdOverDraftMapType|array
    {
        return $this->activationIdMap;
    }

    /**
     * @param \Flexnet\LicenseService\Type\ActivationIdOverDraftMapType|array<\Flexnet\LicenseService\Type\ActivationIdOverDraftMapType> $activationIdMap
     * @return OverDraftDataListType
     */
    public function withActivationIdMap(\Flexnet\LicenseService\Type\ActivationIdOverDraftMapType|array $activationIdMap) : \Flexnet\LicenseService\Type\OverDraftDataListType
    {
        $new = clone $this;
        $new->activationIdMap = $activationIdMap;

        return $new;
    }
}

