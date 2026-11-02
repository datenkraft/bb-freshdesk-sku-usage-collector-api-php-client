<?php

namespace Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model;

use Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\AdditionalAndPatternProperties;
use Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\AdditionalPropertiesInterface;
class AuthRoleIdentityResource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Role Code
     *
     * @var string
     */
    public string $roleCode;
    /**
     * Identity ID
     *
     * @var string
     */
    public string $identityId;
    public function definedProperties(): array
    {
        return ['roleCode' => 'roleCode', 'identityId' => 'identityId'];
    }
}