<?php

namespace Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model;

class TicketStatisticsTicketAnswersGetResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var int
     */
    protected $sum;
    /**
     * 
     *
     * @return int
     */
    public function getSum(): int
    {
        return $this->sum;
    }
    /**
     * 
     *
     * @param int $sum
     *
     * @return self
     */
    public function setSum(int $sum): self
    {
        $this->initialized['sum'] = true;
        $this->sum = $sum;
        return $this;
    }
}