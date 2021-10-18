<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\RequestInterface;

class MapEntitlementsToUserRequestType extends FlexnetType implements RequestInterface
{

    /**
     * @var string
     */
    protected $userId;

    /**
     * @var \Flexsim\FlexnetOperations\Type\IdListType
     */
    protected $idList;

    /**
     * @var string
     */
    protected $userAcct;

    /**
     * @var string
     */
    protected $userOrg;

    /**
     * Constructor
     *
     * @var string $userId
     * @var \Flexsim\FlexnetOperations\Type\IdListType $idList
     * @var string $userAcct this method is backwards compatible so you may also pass $userOrg
     */
    public function __construct(string $userId, \Flexsim\FlexnetOperations\Type\IdListType $idList, string $userAcct = null)
    {
        $this->userId = $userId;
        $this->idList = $idList;
        $this->userAcct = $userAcct;
        $this->userOrg = $userAcct;
    }

    /**
     * create a new instance of this class
     *
     * @var string $userId
     * @var \Flexsim\FlexnetOperations\Type\IdListType $idList
     * @var string $userAcct this method is backwards compatible so you may also pass $userOrg
     */
    public static function create(string $userId, \Flexsim\FlexnetOperations\Type\IdListType $idList, string $userAcct = null)
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
    public function getUserAcct()
    {
        return $this->userAcct;
    }

    /**
     * @param string $userAcct
     * @return $this
     */
    public function setUserAcct($userAcct)
    {
        $this->userAcct = $userAcct;
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
