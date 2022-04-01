<?php

namespace Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model;

class Ticket
{
    /**
     * Ticket Id
     *
     * @var int
     */
    protected $ticketId;
    /**
     * Current Status of the Ticket (e.g. Open)
     *
     * @var string
     */
    protected $status;
    /**
     * Associated Product (Shop)
     *
     * @var string|null
     */
    protected $product;
    /**
     * Source of the Ticket (e.g. Email)
     *
     * @var string
     */
    protected $source;
    /**
     * Date when the Ticket was created
     *
     * @var \DateTime
     */
    protected $createdDate;
    /**
     * Date when the Ticket was last updated
     *
     * @var \DateTime
     */
    protected $lastUpdatedDate;
    /**
     * Date when the Ticket was resolved
     *
     * @var \DateTime
     */
    protected $resolvedDate;
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
    /**
     * Current Status of the Ticket (e.g. Open)
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * Current Status of the Ticket (e.g. Open)
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Associated Product (Shop)
     *
     * @return string|null
     */
    public function getProduct() : ?string
    {
        return $this->product;
    }
    /**
     * Associated Product (Shop)
     *
     * @param string|null $product
     *
     * @return self
     */
    public function setProduct(?string $product) : self
    {
        $this->product = $product;
        return $this;
    }
    /**
     * Source of the Ticket (e.g. Email)
     *
     * @return string
     */
    public function getSource() : string
    {
        return $this->source;
    }
    /**
     * Source of the Ticket (e.g. Email)
     *
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source) : self
    {
        $this->source = $source;
        return $this;
    }
    /**
     * Date when the Ticket was created
     *
     * @return \DateTime
     */
    public function getCreatedDate() : \DateTime
    {
        return $this->createdDate;
    }
    /**
     * Date when the Ticket was created
     *
     * @param \DateTime $createdDate
     *
     * @return self
     */
    public function setCreatedDate(\DateTime $createdDate) : self
    {
        $this->createdDate = $createdDate;
        return $this;
    }
    /**
     * Date when the Ticket was last updated
     *
     * @return \DateTime
     */
    public function getLastUpdatedDate() : \DateTime
    {
        return $this->lastUpdatedDate;
    }
    /**
     * Date when the Ticket was last updated
     *
     * @param \DateTime $lastUpdatedDate
     *
     * @return self
     */
    public function setLastUpdatedDate(\DateTime $lastUpdatedDate) : self
    {
        $this->lastUpdatedDate = $lastUpdatedDate;
        return $this;
    }
    /**
     * Date when the Ticket was resolved
     *
     * @return \DateTime
     */
    public function getResolvedDate() : \DateTime
    {
        return $this->resolvedDate;
    }
    /**
     * Date when the Ticket was resolved
     *
     * @param \DateTime $resolvedDate
     *
     * @return self
     */
    public function setResolvedDate(\DateTime $resolvedDate) : self
    {
        $this->resolvedDate = $resolvedDate;
        return $this;
    }
}