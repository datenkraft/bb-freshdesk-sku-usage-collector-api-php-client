<?php

declare(strict_types=1);

namespace Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi;

use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;

/**
 * Class Client
 * @package Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi
 */
class Client extends Generated\Client
{
    /**
     * @param ClientFactory $clientFactory
     * @param string|null $endpointUrl
     * @return static
     * @throws AuthException
     */
    public static function createWithFactory(ClientFactory $clientFactory, string $endpointUrl = null): self
    {
        $endpointUrl = $endpointUrl ?? getenv('X_DATENKRAFT_FRESHDESK_SKU_USAGE_COLLECTOR_API_URL') ?: null;
        return $clientFactory->createClient(static::class, $endpointUrl);
    }
}
