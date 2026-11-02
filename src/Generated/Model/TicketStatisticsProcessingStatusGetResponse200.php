<?php

namespace Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model;

use Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\AdditionalPropertiesInterface;
class TicketStatisticsProcessingStatusGetResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var bool
     */
    public bool $processing;
    public function definedProperties(): array
    {
        return ['processing' => 'processing'];
    }
}