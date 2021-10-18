<?php

namespace Flexsim\FlexnetOperations\Type;

class Usage extends FlexnetType
{

    /**
     * @var string
     */
    protected $productLine;

    /**
     * @var string
     */
    protected $meter;

    /**
     * @var string
     */
    protected $usageUnitName;

    /**
     * @var float
     */
    protected $usageSinceReset;

    /**
     * @var float
     */
    protected $entitled;

    /**
     * @var float
     */
    protected $overageSinceStatement;

    /**
     * @var float
     */
    protected $overageSinceReset;

    /**
     * @var float
     */
    protected $percentSinceReset;

    /**
     * @var string
     */
    protected $resetIntervalUnitName;

    /**
     * @var int
     */
    protected $resetInterval;

    /**
     * @var \Flexsim\FlexnetOperations\Type\Period
     */
    protected $period;

    /**
     * @var float
     */
    protected $entitledScaled;

    /**
     * @var string
     */
    protected $friendlyName;

    /**
     * @var int
     */
    protected $gracePeriod;

    /**
     * @var string
     */
    protected $gracePeriodUnitName;

    /**
     * @var float
     */
    protected $overageSinceResetScaled;

    /**
     * @var float
     */
    protected $overageSinceStatementScaled;

    /**
     * @var float
     */
    protected $percentSinceStatement;

    /**
     * @var string
     */
    protected $reconciliationTimeZone;

    /**
     * @var float
     */
    protected $scale;

    /**
     * @var int
     */
    protected $statementInterval;

    /**
     * @var string
     */
    protected $statementIntervalUnitName;

    /**
     * @var float
     */
    protected $usageSinceResetScaled;

    /**
     * @var float
     */
    protected $usageSinceStatement;

    /**
     * Constructor
     *
     * @var string $productLine
     * @var string $meter
     * @var string $usageUnitName
     * @var float $usageSinceReset
     * @var float $entitled
     * @var float $overageSinceStatement
     * @var float $overageSinceReset
     * @var float $percentSinceReset
     * @var string $resetIntervalUnitName
     * @var int $resetInterval
     * @var \Flexsim\FlexnetOperations\Type\Period $period
     * @var float $entitledScaled
     * @var string $friendlyName
     * @var int $gracePeriod
     * @var string $gracePeriodUnitName
     * @var float $overageSinceResetScaled
     * @var float $overageSinceStatementScaled
     * @var float $percentSinceStatement
     * @var string $reconciliationTimeZone
     * @var float $scale
     * @var int $statementInterval
     * @var string $statementIntervalUnitName
     * @var float $usageSinceResetScaled
     * @var float $usageSinceStatement
     */
    public function __construct(string $productLine, string $meter, string $usageUnitName, float $usageSinceReset, float $entitled, float $overageSinceStatement, float $overageSinceReset, float $percentSinceReset, string $resetIntervalUnitName, int $resetInterval, \Flexsim\FlexnetOperations\Type\Period $period, float $entitledScaled, string $friendlyName, int $gracePeriod, string $gracePeriodUnitName, float $overageSinceResetScaled, float $overageSinceStatementScaled, float $percentSinceStatement, string $reconciliationTimeZone, float $scale, int $statementInterval, string $statementIntervalUnitName, float $usageSinceResetScaled, float $usageSinceStatement)
    {
        $this->productLine = $productLine;
        $this->meter = $meter;
        $this->usageUnitName = $usageUnitName;
        $this->usageSinceReset = $usageSinceReset;
        $this->entitled = $entitled;
        $this->overageSinceStatement = $overageSinceStatement;
        $this->overageSinceReset = $overageSinceReset;
        $this->percentSinceReset = $percentSinceReset;
        $this->resetIntervalUnitName = $resetIntervalUnitName;
        $this->resetInterval = $resetInterval;
        $this->period = $period;
        $this->entitledScaled = $entitledScaled;
        $this->friendlyName = $friendlyName;
        $this->gracePeriod = $gracePeriod;
        $this->gracePeriodUnitName = $gracePeriodUnitName;
        $this->overageSinceResetScaled = $overageSinceResetScaled;
        $this->overageSinceStatementScaled = $overageSinceStatementScaled;
        $this->percentSinceStatement = $percentSinceStatement;
        $this->reconciliationTimeZone = $reconciliationTimeZone;
        $this->scale = $scale;
        $this->statementInterval = $statementInterval;
        $this->statementIntervalUnitName = $statementIntervalUnitName;
        $this->usageSinceResetScaled = $usageSinceResetScaled;
        $this->usageSinceStatement = $usageSinceStatement;
    }

    /**
     * create a new instance of this class
     *
     * @var string $productLine
     * @var string $meter
     * @var string $usageUnitName
     * @var float $usageSinceReset
     * @var float $entitled
     * @var float $overageSinceStatement
     * @var float $overageSinceReset
     * @var float $percentSinceReset
     * @var string $resetIntervalUnitName
     * @var int $resetInterval
     * @var \Flexsim\FlexnetOperations\Type\Period $period
     * @var float $entitledScaled
     * @var string $friendlyName
     * @var int $gracePeriod
     * @var string $gracePeriodUnitName
     * @var float $overageSinceResetScaled
     * @var float $overageSinceStatementScaled
     * @var float $percentSinceStatement
     * @var string $reconciliationTimeZone
     * @var float $scale
     * @var int $statementInterval
     * @var string $statementIntervalUnitName
     * @var float $usageSinceResetScaled
     * @var float $usageSinceStatement
     */
    public static function create(string $productLine, string $meter, string $usageUnitName, float $usageSinceReset, float $entitled, float $overageSinceStatement, float $overageSinceReset, float $percentSinceReset, string $resetIntervalUnitName, int $resetInterval, \Flexsim\FlexnetOperations\Type\Period $period, float $entitledScaled, string $friendlyName, int $gracePeriod, string $gracePeriodUnitName, float $overageSinceResetScaled, float $overageSinceStatementScaled, float $percentSinceStatement, string $reconciliationTimeZone, float $scale, int $statementInterval, string $statementIntervalUnitName, float $usageSinceResetScaled, float $usageSinceStatement)
    {
        return new self(...func_get_args());
    }

    /**
     * @return string
     */
    public function getProductLine()
    {
        return $this->productLine;
    }

    /**
     * @param string $productLine
     * @return $this
     */
    public function setProductLine($productLine)
    {
        $this->productLine = $productLine;
        return $this;
    }

    /**
     * @return string
     */
    public function getMeter()
    {
        return $this->meter;
    }

    /**
     * @param string $meter
     * @return $this
     */
    public function setMeter($meter)
    {
        $this->meter = $meter;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsageUnitName()
    {
        return $this->usageUnitName;
    }

    /**
     * @param string $usageUnitName
     * @return $this
     */
    public function setUsageUnitName($usageUnitName)
    {
        $this->usageUnitName = $usageUnitName;
        return $this;
    }

    /**
     * @return float
     */
    public function getUsageSinceReset()
    {
        return $this->usageSinceReset;
    }

    /**
     * @param float $usageSinceReset
     * @return $this
     */
    public function setUsageSinceReset($usageSinceReset)
    {
        $this->usageSinceReset = $usageSinceReset;
        return $this;
    }

    /**
     * @return float
     */
    public function getEntitled()
    {
        return $this->entitled;
    }

    /**
     * @param float $entitled
     * @return $this
     */
    public function setEntitled($entitled)
    {
        $this->entitled = $entitled;
        return $this;
    }

    /**
     * @return float
     */
    public function getOverageSinceStatement()
    {
        return $this->overageSinceStatement;
    }

    /**
     * @param float $overageSinceStatement
     * @return $this
     */
    public function setOverageSinceStatement($overageSinceStatement)
    {
        $this->overageSinceStatement = $overageSinceStatement;
        return $this;
    }

    /**
     * @return float
     */
    public function getOverageSinceReset()
    {
        return $this->overageSinceReset;
    }

    /**
     * @param float $overageSinceReset
     * @return $this
     */
    public function setOverageSinceReset($overageSinceReset)
    {
        $this->overageSinceReset = $overageSinceReset;
        return $this;
    }

    /**
     * @return float
     */
    public function getPercentSinceReset()
    {
        return $this->percentSinceReset;
    }

    /**
     * @param float $percentSinceReset
     * @return $this
     */
    public function setPercentSinceReset($percentSinceReset)
    {
        $this->percentSinceReset = $percentSinceReset;
        return $this;
    }

    /**
     * @return string
     */
    public function getResetIntervalUnitName()
    {
        return $this->resetIntervalUnitName;
    }

    /**
     * @param string $resetIntervalUnitName
     * @return $this
     */
    public function setResetIntervalUnitName($resetIntervalUnitName)
    {
        $this->resetIntervalUnitName = $resetIntervalUnitName;
        return $this;
    }

    /**
     * @return int
     */
    public function getResetInterval()
    {
        return $this->resetInterval;
    }

    /**
     * @param int $resetInterval
     * @return $this
     */
    public function setResetInterval($resetInterval)
    {
        $this->resetInterval = $resetInterval;
        return $this;
    }

    /**
     * @return \Flexsim\FlexnetOperations\Type\Period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param \Flexsim\FlexnetOperations\Type\Period $period
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * @return float
     */
    public function getEntitledScaled()
    {
        return $this->entitledScaled;
    }

    /**
     * @param float $entitledScaled
     * @return $this
     */
    public function setEntitledScaled($entitledScaled)
    {
        $this->entitledScaled = $entitledScaled;
        return $this;
    }

    /**
     * @return string
     */
    public function getFriendlyName()
    {
        return $this->friendlyName;
    }

    /**
     * @param string $friendlyName
     * @return $this
     */
    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;
        return $this;
    }

    /**
     * @return int
     */
    public function getGracePeriod()
    {
        return $this->gracePeriod;
    }

    /**
     * @param int $gracePeriod
     * @return $this
     */
    public function setGracePeriod($gracePeriod)
    {
        $this->gracePeriod = $gracePeriod;
        return $this;
    }

    /**
     * @return string
     */
    public function getGracePeriodUnitName()
    {
        return $this->gracePeriodUnitName;
    }

    /**
     * @param string $gracePeriodUnitName
     * @return $this
     */
    public function setGracePeriodUnitName($gracePeriodUnitName)
    {
        $this->gracePeriodUnitName = $gracePeriodUnitName;
        return $this;
    }

    /**
     * @return float
     */
    public function getOverageSinceResetScaled()
    {
        return $this->overageSinceResetScaled;
    }

    /**
     * @param float $overageSinceResetScaled
     * @return $this
     */
    public function setOverageSinceResetScaled($overageSinceResetScaled)
    {
        $this->overageSinceResetScaled = $overageSinceResetScaled;
        return $this;
    }

    /**
     * @return float
     */
    public function getOverageSinceStatementScaled()
    {
        return $this->overageSinceStatementScaled;
    }

    /**
     * @param float $overageSinceStatementScaled
     * @return $this
     */
    public function setOverageSinceStatementScaled($overageSinceStatementScaled)
    {
        $this->overageSinceStatementScaled = $overageSinceStatementScaled;
        return $this;
    }

    /**
     * @return float
     */
    public function getPercentSinceStatement()
    {
        return $this->percentSinceStatement;
    }

    /**
     * @param float $percentSinceStatement
     * @return $this
     */
    public function setPercentSinceStatement($percentSinceStatement)
    {
        $this->percentSinceStatement = $percentSinceStatement;
        return $this;
    }

    /**
     * @return string
     */
    public function getReconciliationTimeZone()
    {
        return $this->reconciliationTimeZone;
    }

    /**
     * @param string $reconciliationTimeZone
     * @return $this
     */
    public function setReconciliationTimeZone($reconciliationTimeZone)
    {
        $this->reconciliationTimeZone = $reconciliationTimeZone;
        return $this;
    }

    /**
     * @return float
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * @param float $scale
     * @return $this
     */
    public function setScale($scale)
    {
        $this->scale = $scale;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatementInterval()
    {
        return $this->statementInterval;
    }

    /**
     * @param int $statementInterval
     * @return $this
     */
    public function setStatementInterval($statementInterval)
    {
        $this->statementInterval = $statementInterval;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatementIntervalUnitName()
    {
        return $this->statementIntervalUnitName;
    }

    /**
     * @param string $statementIntervalUnitName
     * @return $this
     */
    public function setStatementIntervalUnitName($statementIntervalUnitName)
    {
        $this->statementIntervalUnitName = $statementIntervalUnitName;
        return $this;
    }

    /**
     * @return float
     */
    public function getUsageSinceResetScaled()
    {
        return $this->usageSinceResetScaled;
    }

    /**
     * @param float $usageSinceResetScaled
     * @return $this
     */
    public function setUsageSinceResetScaled($usageSinceResetScaled)
    {
        $this->usageSinceResetScaled = $usageSinceResetScaled;
        return $this;
    }

    /**
     * @return float
     */
    public function getUsageSinceStatement()
    {
        return $this->usageSinceStatement;
    }

    /**
     * @param float $usageSinceStatement
     * @return $this
     */
    public function setUsageSinceStatement($usageSinceStatement)
    {
        $this->usageSinceStatement = $usageSinceStatement;
        return $this;
    }
}
