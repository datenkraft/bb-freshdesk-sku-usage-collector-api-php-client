<?php

namespace Pact;

use DateTime;
use DateInterval;
use DateTimeInterface;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

/**
 * Class SKUUsageConsumerAddSKUUsageTest
 * @package Pact
 */
class SKUUsageConsumerPutFreshdeskSKUUsageCollectorTest extends FreshdeskSKUUsageCollectorConsumerTest
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

        /** @var DateTime $createdDate */
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
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }

    public function testPutFreshdeskSKUUsageSuccess()
    {
        $this->expectedStatusCode = '201';

        // Build and register the interaction
        $this->builder
            ->given(
                'A Freshdesl SKU with ticketId exists (update) or does not exist (create), ' .
                'the request is valid, the token is valid and has a valid scope'
            )
            ->uponReceiving('Successful PUT request to /ticket');

        $this->beginTest();
    }

    public function testPutFreshdeskSKUUsageUnauthorized()
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

    public function testPutFreshdeskSKUUsageForbidden()
    {
        // Token with invalid scope
        $this->token = getenv('VALID_TOKEN_SKU_USAGE_POST');
        $this->requestHeaders['Authorization'] = 'Bearer ' . $this->token;

        // Error code in response is 403, extra is not defined
        $this->expectedStatusCode = '403';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);
        unset($this->errorResponse['errors'][0]['extra']);

        $this->builder
            ->given('A Freshdesk SKU, the request is valid, the token is valid with an invalid scope')
            ->uponReceiving('Forbidden POST request to /sku-usage');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    public function testPutFreshdeskSKUUsageBadRequest()
    {
        // Error code in response is 400
        $this->expectedStatusCode = '400';
        $this->errorResponse['errors'][0]['code'] = strval($this->expectedStatusCode);

        // ticketId is string
        $this->requestData[0]['ticketId'] = 'someString';

        $this->builder
            ->given('The ticketId in the request is a string')
            ->uponReceiving('Bad PUT request to /ticket');

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    /**
     * @throws Exception
     */
    public function testPutFreshdeskSKUUsageMultipleErrors()
    {
        // status is int
        $this->requestData[0]['status'] = 123456;
        // product is int
        $this->requestData[0]['product'] = 123456;

        // Status code of the response is 400
        $this->expectedStatusCode = '400';

        // Error code of first error is 400
        $this->errorResponse['errors'][0] = [
            'code' => '400',
            'message' => $this->matcher->like('Example error message'),
            'extra' => [
                'ticketId' => 123
            ],
        ];

        // Error code of second error is 400
        $this->errorResponse['errors'][1] = [
            'code' => '400',
            'message' => $this->matcher->like('Example error message'),
            'extra' => [
                'ticketId' => 123
            ],
        ];

        $this->builder
            ->given('product is a int, status is a int')
            ->uponReceiving(
                'PUT request to /ticket with product int and status int'
            );

        $this->responseData = $this->errorResponse;
        $this->beginTest();
    }

    /**
     * @return ResponseInterface
     * @throws GuzzleException
     */
    protected function doClientRequest(): ResponseInterface
    {
        $client = new Client(['base_uri' => $this->config->getBaseUri()]);
        $options = [
            'body' => json_encode($this->requestData),
            'headers' => $this->requestHeaders,
            'http_errors' => false,
        ];

        return $client->put($this->path, $options);
    }
}
