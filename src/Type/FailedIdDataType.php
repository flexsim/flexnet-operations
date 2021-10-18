<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedIdDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $reason;

    /**
     * Constructor
     *
     * @var string $id
     * @var string $reason
     */
    public function __construct(string $id, string $reason)
    {
        $this->id = $id;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var string $id
     * @var string $reason
     */
    public static function create(string $id, string $reason)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }
}
