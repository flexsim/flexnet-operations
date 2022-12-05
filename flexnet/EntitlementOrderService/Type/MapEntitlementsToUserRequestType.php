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
     * @param  string  $userId
     * @param  \Flexnet\EntitlementOrderService\Type\IdListType  $idList
     * @param  string|null  $userAcct
     */
    public static function create(string $userId, IdListType $idList, string|null $userAcct = null)
    {
        return new static(...\func_get_args());
    }

    public function __construct(string $userId, IdListType $idList, string $userAcct)
    {
        $this->userId = $userId;
        $this->idList = $idList;
        $this->userAcct = $userAcct;
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

    public function getUserAcct(): string|null
    {
        return $this->userAcct;
    }

    public function withUserAcct(string|null $userAcct): MapEntitlementsToUserRequestType
    {
        $new = clone $this;
        $new->userAcct = $userAcct;

        return $new;
    }
}
