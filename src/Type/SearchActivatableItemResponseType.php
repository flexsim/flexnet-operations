<?php

namespace Flexsim\FlexnetOperations\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SearchActivatableItemResponseType implements ResultInterface
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    private $statusInfo;

    /**
     * @var \Flexsim\FlexnetOperations\Type\ActivatableItemDetailType
     */
    private $activatableItem;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\ActivatableItemDetailType|array $activatableItem
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, $activatableItem = null)
    {
        $this->statusInfo = $statusInfo;
        $this->activatableItem = $activatableItem;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @var \Flexsim\FlexnetOperations\Type\ActivatableItemDetailType|array $activatableItem
     */
    public static function create(\Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo, $activatableItem = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\StatusInfoType
     */
    public function getStatusInfo()
    {
        return $this->statusInfo;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\StatusInfoType $statusInfo
     * @return $this
     */
    public function setStatusInfo($statusInfo)
    {
        $this->statusInfo = $statusInfo;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\ActivatableItemDetailType
     */
    public function getActivatableItem()
    {
        return $this->activatableItem;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\ActivatableItemDetailType $activatableItem
     * @return $this
     */
    public function setActivatableItem($activatableItem)
    {
        $this->activatableItem = $activatableItem;
        return $this;
    }


}

