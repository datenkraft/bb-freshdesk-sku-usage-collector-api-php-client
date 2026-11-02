<?php

namespace Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated;

class Client extends \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\Client\Client
{
    /**
     * Get the audit log.
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     *    "filter[endpoint]"?: string, //A filter for restricting the audit log to a endpoint.
     *    "filter[version]"?: string, //A filter for restricting the audit log to a endpoint version.
     *    "filter[identifier]"?: mixed, //A filter for querying actions for a identifier.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuditLogCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuditLogCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuditLogCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuditLogCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\AuditLogCollection|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse
     */
    public function getAuditLogCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\GetAuditLogCollection($queryParameters));
    }
    /**
     * Delete one or more role to permission assignments in this resource server
     * @param null|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\AuthPermissionRoleResource[] $requestBody
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\DeleteAuthPermissionRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\DeleteAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\DeleteAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\DeleteAuthPermissionRoleCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\DeleteAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\BadResponseException
     *
     * @return null|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse
     */
    public function deleteAuthPermissionRoleCollection(?array $requestBody = null)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\DeleteAuthPermissionRoleCollection($requestBody));
    }
    /**
     * Get all role to permission assignments from this resource server
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\AuthPermissionRolePaginatedCollection|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse
     */
    public function getAuthPermissionRoleCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\GetAuthPermissionRoleCollection($queryParameters));
    }
    /**
     * Create one or more role to permission assignments in this resource server
     * @param \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\AuthPermissionRoleResource[] $requestBody
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthPermissionRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthPermissionRoleCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthPermissionRoleCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\AuthPermissionRoleResource[]|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse
     */
    public function postAuthPermissionRoleCollection(array $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\PostAuthPermissionRoleCollection($requestBody));
    }
    /**
     * Get all permissions from this resource server
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthPermissionCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthPermissionCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthPermissionCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\GetAuthPermissionCollectionResponse|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse
     */
    public function getAuthPermissionCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\GetAuthPermissionCollection($queryParameters));
    }
    /**
     * Delete one or more role to identity assignments in this resource server
     * @param null|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\AuthRoleIdentityResource[] $requestBody
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\DeleteAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\DeleteAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\DeleteAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\DeleteAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\DeleteAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\BadResponseException
     *
     * @return null|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse
     */
    public function deleteAuthRoleIdentityCollection(?array $requestBody = null)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\DeleteAuthRoleIdentityCollection($requestBody));
    }
    /**
     * Get all role to identity assignments from this resource server
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\AuthRoleIdentityPaginatedCollection|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse
     */
    public function getAuthRoleIdentityCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\GetAuthRoleIdentityCollection($queryParameters));
    }
    /**
     * Create one or more role to identity assignments in this resource server
     * @param \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\AuthRoleIdentityResource[] $requestBody
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthRoleIdentityCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse
     */
    public function postAuthRoleIdentityCollection(array $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\PostAuthRoleIdentityCollection($requestBody));
    }
    /**
     * Get all available roles from this resource server
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\AuthRoleCollection|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse
     */
    public function getAuthRoleCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\GetAuthRoleCollection($queryParameters));
    }
    /**
     * Delete a role for this resource server
     * @param string $roleCode Identifier for the role
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\DeleteAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\DeleteAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\DeleteAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\DeleteAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\BadResponseException
     *
     * @return null|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse
     */
    public function deleteAuthRole(string $roleCode)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\DeleteAuthRole($roleCode));
    }
    /**
     * Get a role from this resource server by its roleCode
     * @param string $roleCode Identifier for the role
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse
     */
    public function getAuthRole(string $roleCode)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\GetAuthRole($roleCode));
    }
    /**
     * Patch a role for this resource server
     * @param string $roleCode Identifier for the role
     * @param \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\NewAuthRoleResource $requestBody
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PatchAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PatchAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PatchAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PatchAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PatchAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse
     */
    public function patchAuthRole(string $roleCode, \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\NewAuthRoleResource $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\PatchAuthRole($roleCode, $requestBody));
    }
    /**
     * Post a role for this resource server
     * @param string $roleCode Identifier for the role
     * @param \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\NewAuthRoleResource $requestBody
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthRoleConflictException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\PostAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse
     */
    public function postAuthRole(string $roleCode, \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\NewAuthRoleResource $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\PostAuthRole($roleCode, $requestBody));
    }
    /**
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\BadResponseException
     *
     * @return null
     */
    public function getOpenApi()
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\GetOpenApi());
    }
    /**
     * Get the changelog in the specified format
     * @param string $format Changelog file format
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetChangelogInFormatNotFoundException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetChangelogInFormatBadRequestException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\BadResponseException
     *
     * @return null
     */
    public function getChangelogInFormat(string $format)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\GetChangelogInFormat($format));
    }
    /**
     * Get the openapi documentation in the specified format
     * @param string $format Openapi file format
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetOpenApiInFormatBadRequestException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\BadResponseException
     *
     * @return null
     */
    public function getOpenApiInFormat(string $format)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\GetOpenApiInFormat($format));
    }
    /**
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetProcessingStatusUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetProcessingStatusForbiddenException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\TicketStatisticsProcessingStatusGetResponse200
     */
    public function getProcessingStatus()
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\GetProcessingStatus());
    }
    /**
     * Get the count of resolved tickets for given domains and date range.
     * @param array{
     *    "domains[]": array, //Array of email domains to filter by
     *    "dateFrom": string, //Start date (ISO 8601)
     *    "dateTo": string, //End date (ISO 8601)
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetResolvedTicketCountBadRequestException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetResolvedTicketCountUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetResolvedTicketCountForbiddenException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetResolvedTicketCountConflictException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\TicketStatisticsResolvedTicketsGetResponse200
     */
    public function getResolvedTicketCount(array $queryParameters)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\GetResolvedTicketCount($queryParameters));
    }
    /**
     * Get the sum of ticket answers for given domains and date range.
     * @param array{
     *    "domains[]": array, //Array of email domains to filter by
     *    "dateFrom": string, //Start date (ISO 8601)
     *    "dateTo": string, //End date (ISO 8601)
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetTicketAnswerSumBadRequestException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetTicketAnswerSumUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetTicketAnswerSumForbiddenException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\GetTicketAnswerSumConflictException
     * @throws \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\TicketStatisticsTicketAnswersGetResponse200
     */
    public function getTicketAnswerSum(array $queryParameters)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Endpoint\GetTicketAnswerSum($queryParameters));
    }
    /**
     * @param list<callable(\Symfony\Contracts\HttpClient\HttpClientInterface): \Symfony\Contracts\HttpClient\HttpClientInterface> $additionalPlugins HttpClientInterface decorator factories, applied left-to-right after the server URL decorator
     * @param list<\Symfony\Component\Serializer\Normalizer\NormalizerInterface|\Symfony\Component\Serializer\Normalizer\DenormalizerInterface> $additionalNormalizers
     */
    public static function create(?\Symfony\Contracts\HttpClient\HttpClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Symfony\Component\HttpClient\HttpClient::create();
        }
        if ($applyServerPlugins) {
            $plugins[] = new \Jane\Component\OpenApiRuntime\Client\Plugin\ServerUrlHttpClient('https://freshdesk-sku-usage-collector-api.steve.niceshops.com/v1');
        }
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        foreach ($plugins as $plugin) {
            $httpClient = $plugin($httpClient);
        }
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}