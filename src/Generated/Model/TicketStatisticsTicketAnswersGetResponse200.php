<?php

namespace Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model;

use Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\AdditionalPropertiesInterface;
class TicketStatisticsTicketAnswersGetResponse200 implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $sum;
    public function definedProperties(): array
    {
        return ['sum' => 'sum'];
    }
}