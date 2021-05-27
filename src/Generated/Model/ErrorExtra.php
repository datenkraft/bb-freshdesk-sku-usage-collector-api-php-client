<?php

namespace Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model;

class ErrorExtra
{
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
        $this->ticketId = $ticketId;
        return $this;
    }
}