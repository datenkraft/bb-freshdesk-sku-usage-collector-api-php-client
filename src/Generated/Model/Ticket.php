<?php

namespace Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model;

use Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\AdditionalPropertiesInterface;
class Ticket implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Ticket Id
     *
     * @var int
     */
    public int $ticketId;
    /**
     * Current Status of the Ticket (e.g. Open)
     *
     * @var string
     */
    public string $status;
    /**
     * Associated Product (Shop)
     *
     * @var string|null
     */
    public ?string $product;
    /**
     * Source of the Ticket (e.g. Email)
     *
     * @var string
     */
    public string $source;
    /**
     * Date when the Ticket was created
     *
     * @var \DateTime
     */
    public \DateTime $createdDate;
    /**
     * Date when the Ticket was last updated
     *
     * @var \DateTime
     */
    public \DateTime $lastUpdatedDate;
    /**
     * Date when the Ticket was resolved
     *
     * @var \DateTime
     */
    public \DateTime $resolvedDate;
    public function definedProperties(): array
    {
        return ['ticketId' => 'ticketId', 'status' => 'status', 'product' => 'product', 'source' => 'source', 'createdDate' => 'createdDate', 'lastUpdatedDate' => 'lastUpdatedDate', 'resolvedDate' => 'resolvedDate'];
    }
}