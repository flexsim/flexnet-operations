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
     */
    public function __construct(string $activationId, bool $overDraftAllowed)
    {
        $this->activationId = $activationId;
        $this->overDraftAllowed = $overDraftAllowed;
    }

    public static function create(string $activationId, bool $overDraftAllowed)
    {
        return new static(...\func_get_args());
    }

    public function getActivationId(): string
    {
        return $this->activationId;
    }

    public function withActivationId(string $activationId): ActivationIdOverDraftMapType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }

    public function getOverDraftAllowed(): bool
    {
        return $this->overDraftAllowed;
    }

    public function withOverDraftAllowed(bool $overDraftAllowed): ActivationIdOverDraftMapType
    {
        $new = clone $this;
        $new->overDraftAllowed = $overDraftAllowed;

        return $new;
    }
}
