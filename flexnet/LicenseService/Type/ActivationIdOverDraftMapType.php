<?php

namespace Flexnet\LicenseService\Type;

class ActivationIdOverDraftMapType
{
    /**
     * @var string
     */
    private $activationId;

    /**
     * @var bool
     */
    private $overDraftAllowed;

    /**
     * Constructor
     *
     * @param string $activationId
     * @param bool $overDraftAllowed
     */
    public function __construct(string $activationId, bool $overDraftAllowed)
    {
        $this->activationId = $activationId;
        $this->overDraftAllowed = $overDraftAllowed;
    }

    /**
     * @param string $activationId
     * @param bool $overDraftAllowed
     */
    public static function create(string $activationId, bool $overDraftAllowed)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string
     */
    public function getActivationId() : string
    {
        return $this->activationId;
    }

    /**
     * @param string $activationId
     * @return ActivationIdOverDraftMapType
     */
    public function withActivationId(string $activationId) : \Flexnet\LicenseService\Type\ActivationIdOverDraftMapType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOverDraftAllowed() : bool
    {
        return $this->overDraftAllowed;
    }

    /**
     * @param bool $overDraftAllowed
     * @return ActivationIdOverDraftMapType
     */
    public function withOverDraftAllowed(bool $overDraftAllowed) : \Flexnet\LicenseService\Type\ActivationIdOverDraftMapType
    {
        $new = clone $this;
        $new->overDraftAllowed = $overDraftAllowed;

        return $new;
    }
}

