<?php

namespace Flexsim\FlexnetOperations\Type;

class EmailContactListType extends FlexnetType
{

    /**
     * @var string|array
     */
    protected $emailId;

    /**
     * Constructor
     *
     * @param string|array $emailId
     */
    public function __construct($emailId = null)
    {
        $this->emailId = $emailId;
    }

    /**
     * create a new instance of this class
     *
     * @param string|array $emailId
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
