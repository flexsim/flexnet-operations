<?php

namespace Flexsim\FlexnetOperations\Type;

class EmailContactListType
{

    /**
     * @var string|array
     */
    private $emailId;

    /**
     * Constructor
     *
     * @var string|array $emailId
     */
    public function __construct($emailId = null)
    {
        $this->emailId = $emailId;
    }

    /**
     * create a new instance of this class
     *
     * @var string|array $emailId
     */
    public static function create($emailId = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string|array
     */
    public function getEmailId()
    {
        return $this->emailId;
    }

    /**
     * @param string|array $emailId
     * @return $this
     */
    public function setEmailId($emailId)
    {
        $this->emailId = $emailId;
        return $this;
    }


}

