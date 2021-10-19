<?php

namespace Flexsim\FlexnetOperations\Type;

class CreatePartNumberDataType extends FlexnetType
{

    /**
     * @var string
     */
    protected $partId;

    /**
     * @var string
     */
    protected $description;

    /**
     * Constructor
     *
     * @param string $partId
     * @param string $description
     */
    public function __construct(string $partId, string $description = null)
    {
        $this->partId = $partId;
        $this->description = $description;
    }

    /**
     * create a new instance of this class
     *
     * @param string $partId
     * @param string $description
     */
    public static function create(string $partId, string $description = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getPartId()
    {
        return $this->partId;
    }

    /**
     * @param string $partId
     * @return $this
     */
    public function setPartId($partId)
    {
        $this->partId = $partId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
}
