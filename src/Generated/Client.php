<?php

namespace Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated;

class Client extends \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthRoleCollectionEndpointBadRequestException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthRoleCollectionEndpointUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthRoleCollectionEndpointForbiddenException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthRoleCollectionEndpointInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\AuthRoleResource[]|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthRoleCollectionEndpoint(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\GetAuthRoleCollectionEndpoint(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthRoleIdentityCollectionEndpointBadRequestException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthRoleIdentityCollectionEndpointUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthRoleIdentityCollectionEndpointForbiddenException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthRoleIdentityCollectionEndpointInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthRoleIdentityCollectionEndpoint(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\GetAuthRoleIdentityCollectionEndpoint(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthRoleIdentityCollectionEndpointBadRequestException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthRoleIdentityCollectionEndpointUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthRoleIdentityCollectionEndpointForbiddenException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthRoleIdentityCollectionEndpointNotFoundException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthRoleIdentityCollectionEndpointConflictException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthRoleIdentityCollectionEndpointUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthRoleIdentityCollectionEndpointInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postAuthRoleIdentityCollectionEndpoint(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\PostAuthRoleIdentityCollectionEndpoint(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetOpenApiInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApi(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\GetOpenApi(), $fetch);
    }
    /**
     * Get the openapi documentation in the specified format (yaml or json, fallback is json)
     *
     * @param string $format Openapi file format
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetOpenApiInFormatInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApiInFormat(string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\GetOpenApiInFormat($format), $fetch);
    }
    /**
     * Put Tickets
     *
     * @param \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\Ticket[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PutTicketCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PutTicketCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PutTicketCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PutTicketCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PutTicketCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\Ticket[]|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function putTicketCollection(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\PutTicketCollection($requestBody), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('/UNDEFINED');
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}