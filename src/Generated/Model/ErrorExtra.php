<?php

namespace Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model;

class ErrorExtra extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Ticket Id
     *
     * @var int
     */
    protected $ticketId;
    /**
     * Ticket Id
     *
     * @return int
     */
    public function getTicketId() : int
    {
        return $this->ticketId;
    }
    /**
     * Ticket Id
     *
     * @param int $ticketId
     *
     * @return self
     */
    public function setTicketId(int $ticketId) : self
    {
        $this->initialized['ticketId'] = true;
        $this->ticketId = $ticketId;
        return $this;
    }
}