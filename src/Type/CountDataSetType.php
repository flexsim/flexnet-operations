<?php

namespace Flexsim\FlexnetOperations\Type;

class CountDataSetType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\CountDataType
     */
    private $countData;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\CountDataType $countData
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\CountDataType $countData)
    {
        $this->countData = $countData;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\CountDataType $countData
     */
    public static function create(\Flexsim\FlexnetOperations\Type\CountDataType $countData)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\CountDataType
     */
    public function getCountData()
    {
        return $this->countData;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\CountDataType $countData
     * @return $this
     */
    public function setCountData($countData)
    {
        $this->countData = $countData;
        return $this;
    }


}
