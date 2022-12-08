<?php

namespace Flexnet\LicenseService\Type;

class ActivationIdsListType
{
    /**
     * @var string|array<string>
     */
    private $activationId;

    /**
     * Constructor
     *
     * @param  string|array<string>  $activationId
     */
    public function __construct(string|array $activationId)
    {
        $this->activationId = $activationId;
    }

    /**
     * @param  string|array<string>  $activationId
     */
    public static function create(string|array $activationId)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return string|array<string>
     */
    public function getActivationId(): string|array
    {
        return $this->activationId;
    }

    /**
     * @param  string|array<string>  $activationId
     * @return ActivationIdsListType
     */
    public function withActivationId(string|array $activationId): ActivationIdsListType
    {
        $new = clone $this;
        $new->activationId = $activationId;

        return $new;
    }
}
