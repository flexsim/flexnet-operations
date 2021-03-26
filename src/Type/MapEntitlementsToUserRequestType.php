<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class MapEntitlementsToUserRequestType implements RequestInterface
{

    /**
     * @var string
     */
    private $userId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\IdListType
     */
    private $idList;

    /**
     * @var string
     */
    private $userOrg;

    /**
     * Constructor
     *
     * @var string $userId
     * @var \Flexsim\FlexnetOperations\Type\IdListType $idList
     * @var string $userOrg
     */
    public function __construct(string $userId, \Flexsim\FlexnetOperations\Type\IdListType $idList, string $userOrg = null)
    {
        $this->userId = $userId;
        $this->idList = $idList;
        $this->userOrg = $userOrg;
    }

    /**
     * create a new instance of this class
     *
     * @var string $userId
     * @var \Flexsim\FlexnetOperations\Type\IdListType $idList
     * @var string $userOrg
     */
    public static function create(string $userId, \Flexsim\FlexnetOperations\Type\IdListType $idList, string $userOrg = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\IdListType
     */
    public function getIdList()
    {
        return $this->idList;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\IdListType $idList
     * @return $this
     */
    public function setIdList($idList)
    {
        $this->idList = $idList;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserOrg()
    {
        return $this->userOrg;
    }

    /**
     * @param string $userOrg
     * @return $this
     */
    public function setUserOrg($userOrg)
    {
        $this->userOrg = $userOrg;
        return $this;
    }


}

