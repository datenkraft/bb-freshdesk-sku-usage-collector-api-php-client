<?php

namespace Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model;

class TicketStatisticsProcessingStatusGetResponse200 extends \ArrayObject
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
     * @var bool
     */
    protected $processing;
    /**
     * 
     *
     * @return bool
     */
    public function getProcessing(): bool
    {
        return $this->processing;
    }
    /**
     * 
     *
     * @param bool $processing
     *
     * @return self
     */
    public function setProcessing(bool $processing): self
    {
        $this->initialized['processing'] = true;
        $this->processing = $processing;
        return $this;
    }
}