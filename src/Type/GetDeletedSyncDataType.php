<?php

namespace Flexsim\FlexnetOperations\Type;

class GetDeletedSyncDataType extends FlexnetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\DeletedSyncDataType
     */
    protected $deletedSync;

    /**
     * Constructor
     *
     * @param \Flexsim\FlexnetOperations\Type\DeletedSyncDataType|array $deletedSync
     */
    public function __construct($deletedSync = null)
    {
        $this->deletedSync = $deletedSync;
    }

    /**
     * create a new instance of this class
     *
     * @param \Flexsim\FlexnetOperations\Type\DeletedSyncDataType|array $deletedSync
     */
    public static function create($deletedSync = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\DeletedSyncDataType
     */
    public function getDeletedSync()
    {
        return $this->deletedSync;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\DeletedSyncDataType $deletedSync
     * @return $this
     */
    public function setDeletedSync($deletedSync)
    {
        $this->deletedSync = $deletedSync;
        return $this;
    }
}
