<?php

namespace Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint;

class GetTicketAnswerSum extends \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\Client\BaseEndpoint implements \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\Client\Endpoint
{
    /**
     * Get the sum of ticket answers for given domains and date range.
     * @param array{
     *    "domains": array, //Array of email domains to filter by, sent as `domains[0]=a&domains[1]=b`
     *    "dateFrom": string, //Start date (ISO 8601)
     *    "dateTo": string, //End date (ISO 8601)
     * } $queryParameters
     */
    public function __construct(array $queryParameters)
    {
        $this->queryParameters = $queryParameters;
    }
    use \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/ticket-statistics/ticket-answers';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['domains', 'dateFrom', 'dateTo']);
        $optionsResolver->setRequired(['domains', 'dateFrom', 'dateTo']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('domains', ['array']);
        $optionsResolver->addAllowedTypes('dateFrom', ['string']);
        $optionsResolver->addAllowedTypes('dateTo', ['string']);
        return $optionsResolver;
    }
    protected function getQueryStyles(): array
    {
        return ['domains' => ['style' => 'deepObject', 'explode' => true]];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetTicketAnswerSumBadRequestException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetTicketAnswerSumUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetTicketAnswerSumForbiddenException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetTicketAnswerSumConflictException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\TicketStatisticsTicketAnswersGetResponse200
     */
    protected function transformResponseBody(\Symfony\Contracts\HttpClient\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = $response->getContent(false);
        if ($contentType !== null && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\TicketStatisticsTicketAnswersGetResponse200', 'json');
        }
        if ($contentType !== null && (400 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetTicketAnswerSumBadRequestException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetTicketAnswerSumUnauthorizedException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetTicketAnswerSumForbiddenException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        if ($contentType !== null && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetTicketAnswerSumConflictException($serializer->deserialize($body, 'Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse', 'json'), $response);
        }
        throw new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\BadResponseException($status, $body, $response);
    }
    public function getAuthenticationScopes(): array
    {
        return ['oAuthAuthorization', 'bearerAuth'];
    }
    public function getFetchMode(): string
    {
        return \Jane\Component\OpenApiRuntime\Client\FetchMode::Eager->value;
    }
    public function getTargetClass(): ?string
    {
        return \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\TicketStatisticsTicketAnswersGetResponse200::class;
    }
}