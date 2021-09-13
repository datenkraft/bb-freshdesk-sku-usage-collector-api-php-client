<?php

namespace Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Exception;

class PostAuthRoleIdentityCollectionEndpointUnprocessableEntityException extends UnprocessableEntityException
{
    private $errorResponse;
    public function __construct(\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\ErrorResponse $errorResponse)
    {
        parent::__construct('Unprocessable Entity', 422);
        $this->errorResponse = $errorResponse;
    }
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}