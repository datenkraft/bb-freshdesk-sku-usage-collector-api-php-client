<?php

namespace Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint;

class PutTickets extends \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\Client\Endpoint
{
    /**
     * Put Tickets
     *
     * @param \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\Ticket[] $requestBody 
     */
    public function __construct(array $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return '/ticket';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if (is_array($this->body) and isset($this->body[0]) and $this->body[0] instanceof \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\Ticket) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PutTicketsUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PutTicketsForbiddenException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PutTicketsUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PutTicketsBadRequestException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PutTicketsInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\Ticket[]|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FreshdeskSkuUsageCollectorApi\\Generated\\Model\\Ticket[]', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PutTicketsUnauthorizedException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FreshdeskSkuUsageCollectorApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PutTicketsForbiddenException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FreshdeskSkuUsageCollectorApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PutTicketsUnprocessableEntityException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FreshdeskSkuUsageCollectorApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PutTicketsBadRequestException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FreshdeskSkuUsageCollectorApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (is_null($contentType) === false && (500 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PutTicketsInternalServerErrorException($serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FreshdeskSkuUsageCollectorApi\\Generated\\Model\\ErrorResponse', 'json'));
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Datenkraft\\Backbone\\Client\\FreshdeskSkuUsageCollectorApi\\Generated\\Model\\ErrorResponse', 'json');
        }
        throw new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\UnexpectedStatusCodeException($status, $body);
    }
    public function getAuthenticationScopes() : array
    {
        return array('oAuthAuthorization');
    }
}