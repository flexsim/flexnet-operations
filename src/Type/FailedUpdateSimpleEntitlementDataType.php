<?php

namespace Flexsim\FlexnetOperations\Type;

class FailedUpdateSimpleEntitlementDataType
{

    /**
     * @var \Flexsim\FlexnetOperations\Type\UpdateSimpleEntitlementDataType
     */
    private $simpleEntitlement;

    /**
     * @var string
     */
    private $reason;

    /**
     * Constructor
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateSimpleEntitlementDataType $simpleEntitlement
     * @var string $reason
     */
    public function __construct(\Flexsim\FlexnetOperations\Type\UpdateSimpleEntitlementDataType $simpleEntitlement = null, string $reason = null)
    {
        $this->simpleEntitlement = $simpleEntitlement;
        $this->reason = $reason;
    }

    /**
     * create a new instance of this class
     *
     * @var \Flexsim\FlexnetOperations\Type\UpdateSimpleEntitlementDataType $simpleEntitlement
     * @var string $reason
     */
    public static function create(\Flexsim\FlexnetOperations\Type\UpdateSimpleEntitlementDataType $simpleEntitlement = null, string $reason = null)
    {
        return new self(...func_get_args());
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\UpdateSimpleEntitlementDataType
     */
    public function getSimpleEntitlement()
    {
        return $this->simpleEntitlement;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\UpdateSimpleEntitlementDataType $simpleEntitlement
     * @return $this
     */
    public function setSimpleEntitlement($simpleEntitlement)
    {
        $this->simpleEntitlement = $simpleEntitlement;
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

