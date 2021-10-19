<?php

namespace Flexsim\FlexnetOperations\Type;

class FeatureIds extends FlexnetType
{

    /**
     * @var string
     */
    protected $featureId;

    /**
     * @var string
     */
    protected $featureName;

    /**
     * @var int
     */
    protected $count;

    /**
     * Constructor
     *
     * @param string $featureId
     * @param string $featureName
     * @param int $count
     */
    public function __construct(string $featureId, string $featureName, int $count)
    {
        $this->featureId = $featureId;
        $this->featureName = $featureName;
        $this->count = $count;
    }

    /**
     * create a new instance of this class
     *
     * @param string $featureId
     * @param string $featureName
     * @param int $count
     */
    public static function create(string $featureId, string $featureName, int $count)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getFeatureId()
    {
        return $this->featureId;
    }

    /**
     * @param string $featureId
     * @return $this
     */
    public function setFeatureId($featureId)
    {
        $this->featureId = $featureId;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeatureName()
    {
        return $this->featureName;
    }

    /**
     * @param string $featureName
     * @return $this
     */
    public function setFeatureName($featureName)
    {
        $this->featureName = $featureName;
        return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }
}
