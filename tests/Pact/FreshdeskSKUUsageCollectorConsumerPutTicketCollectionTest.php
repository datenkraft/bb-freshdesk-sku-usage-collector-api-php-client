<?php

namespace Pact;

use Datenkraft\Backbone\Client\BaseApi\ClientFactory;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\AuthException;
use Datenkraft\Backbone\Client\BaseApi\Exceptions\ConfigException;
use Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Client;
use Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\Ticket;
use DateTime;
use DateInterval;
use DateTimeInterface;
use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

/**
 * Class SKUUsageConsumerPutSKUUsageTest
 * @package Pact
 */
class FreshdeskSKUUsageCollectorConsumerPutTicketCollectionTest extends FreshdeskSKUUsageCollectorConsumerTest
{

    /**
     * @throws Exception
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->method = 'PUT';

        $this->requestHeaders = [
            'Authorization' => 'Bearer ' . $this->token,
            'Content-Type' => 'application/json'
        ];
        $this->responseHeaders = [
            'Content-Type' => 'application/json'
        ];

        $createdDate = (new DateTime());
        $updatedDate = $createdDate->add(new DateInterval('PT1H'));
        $this->requestData = [
            [
                'ticketId' => 123,
                'status' => 'testStatus',
                'product' => 'testProduct',
                'source' => 'testSource',
                'createdDate' => $createdDate->format(DateTimeInterface::ATOM),
                'lastUpdatedDate' => $updatedDate->format((DateTimeInterface::ATOM)),
                'agentReplyCount' => 5,
                'timesReopened' => 4,
            ]
        ];

        $this->responseData = $this->requestData;

        $this->path = '/ticket';

        $this->errorResponse['errors'][0]['extra'] = ['ticketId' => $this->requestData[0]['ticketId']];
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }

    public function testPutTicketCollectionSuccess(): void
    {
        $this->expectedStatusCode = '201';

        // Build and register the interaction
        $this->builder
            ->given('The request is valid, the token is valid and has a valid scope')
            ->uponReceiving('Successful PUT request to /ticket');

        $this->beginTest();
    }

    public function testPutTicketCollectionUnauthorized(): void
    {
        // Invalid token
        $this->token = 'invalid_token';
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 401, extra is not defined
        $this->expectedStatusCode = '401';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);
        unset($this->errorResponse['errors'][0]['extra']);

        $this->builder
            ->given('The token is invalid')
            ->uponReceiving('Unauthorized PUT request to /ticket');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPutTicketCollectionForbidden(): void
    {
        // Token with invalid scope
        $this->token = getenv('VALID_TOKEN_SKU_USAGE_POST');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 403, extra is not defined
        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);
        unset($this->errorResponse['errors'][0]['extra']);

        $this->builder
            ->given('The request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden POST request to /sku-usage');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPutTicketCollectionUnprocessableEntity(): void
    {
        // Error code in response is 422
        $this->expectedStatusCode = '422';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        // ticketId is not unique in the request body
        $this->requestData[1] = $this->requestData[0];

        $this->builder
            ->given('The ticketId is not unique inside in the request body')
            ->uponReceiving('UnprocessableEntity PUT request to /ticket');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    /**
     * @throws GuzzleException
     */
    public function testPatchTicketCollectionBadRequest(): void
    {
        // status is int
        $this->requestData[0]['status'] = 123;

        // Error code in response is 400
        $this->expectedStatusCode = '400';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        $this->builder
            ->given('The request body is invalid or missing')
            ->uponReceiving('Bad PATCH request to /ticket');

        $this->responseData = $this->errorResponse;

        // Use guzzle because our client throws an exception if you set 'status' to a non string value
        $this->prepareTest();

        $options = [
            'headers' => $this->requestHeaders,
            'http_errors' => false,
            'body' => json_encode($this->requestData),
        ];
        $response = $this->guzzleClient->put($this->path, $options);

        $this->assertEquals($this->expectedStatusCode, $response->getStatusCode());
        $this->assertJson($response->getBody());
    }

    /**
     * @throws GuzzleException
     */
    public function testPatchTicketCollectionMultipleErrors(): void
    {
        // ticketId is not unique in the request body
        $this->requestData[1] = $this->requestData[0];

        // status is int
        $this->requestData[0]['status'] = 123;

        // Error code in response is 400
        $this->expectedStatusCode = '400';

        // Error code of first error is 422
        $this->errorResponse['errors'][0]['code'] = '422';

        // Error code of second error is 400
        $this->errorResponse['errors'][1] = $this->errorResponse['errors'][0];
        $this->errorResponse['errors'][1]['code'] = '400';

        $this->builder
            ->given('The request body is invalid or missing and the ticketId is not unique inside in the request body')
            ->uponReceiving('Multiple Errors PATCH request to /ticket');

        $this->responseData = $this->errorResponse;

        // Use guzzle because our client throws an exception if you set 'status' to a non string value
        $this->prepareTest();

        $options = [
            'headers' => $this->requestHeaders,
            'http_errors' => false,
            'body' => json_encode($this->requestData),
        ];
        $response = $this->guzzleClient->put($this->path, $options);

        $this->assertEquals($this->expectedStatusCode, $response->getStatusCode());
        $this->assertJson($response->getBody());
    }

    /**
     * @return ResponseInterface
     * @throws ConfigException
     * @throws AuthException
     * @throws Exception
     */
    protected function doClientRequest(): ResponseInterface
    {
        $factory = new ClientFactory(
            ['clientId' => 'test', 'clientSecret' => 'test', 'oAuthTokenUrl' => 'test', 'oAuthScopes' => ['test']]
        );
        $factory->setToken($this->token);
        $client = Client::createWithFactory($factory, $this->config->getBaseUri());

        $tickets = [];
        foreach ($this->requestData as $requestData) {
            $tickets[] = (new Ticket())
                ->setStatus($requestData['status'])
                ->setProduct($requestData['product'])
                ->setLastUpdatedDate(new DateTime($requestData['lastUpdatedDate']))
                ->setTimesReopened($requestData['timesReopened'])
                ->setAgentReplyCount($requestData['agentReplyCount'])
                ->setCreatedDate(new DateTime($requestData['createdDate']))
                ->setSource($requestData['source'])
                ->setTicketId($requestData['ticketId']);
        }

        return $client->putTicketCollection($tickets, Client::FETCH_RESPONSE);
    }
}
