<?php

namespace Flexnet\EntitlementOrderService\Type;

use Phpro\SoapClient\Type\RequestInterface;

class MapEntitlementsToUserRequestType implements RequestInterface
{
    /**
     * @var string
     */
    private $userId;

    /**
     * @var \Flexnet\EntitlementOrderService\Type\IdListType
     */
    private $idList;

    /**
     * @var string|null
     */
    private $userAcct;

    /**
     * Constructor
     */
    public function __construct(string $userId, IdListType $idList, string $userAcct = null)
    {
        $this->userId = $userId;
        $this->idList = $idList;
        $this->userAcct = $userAcct;
    }

    public static function create(string $userId, IdListType $idList, string $userAcct = null)
    {
        return new static(...\func_get_args());
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function withUserId(string $userId): MapEntitlementsToUserRequestType
    {
        $new = clone $this;
        $new->userId = $userId;

        return $new;
    }

    public function getIdList(): IdListType
    {
        return $this->idList;
    }

    public function withIdList(IdListType $idList): MapEntitlementsToUserRequestType
    {
        $new = clone $this;
        $new->idList = $idList;

        return $new;
    }

    public function getUserAcct(): ?string
    {
        return $this->userAcct;
    }

    public function withUserAcct(?string $userAcct): MapEntitlementsToUserRequestType
    {
        $new = clone $this;
        $new->userAcct = $userAcct;

        return $new;
    }
}
