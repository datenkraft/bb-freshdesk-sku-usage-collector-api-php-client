<?php

namespace Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\Normalizer\CheckArray;
use Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TicketNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\Ticket::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\Ticket::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\Ticket();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('ticketId', $data)) {
            $object->ticketId = $data['ticketId'];
            unset($data['ticketId']);
        }
        if (\array_key_exists('status', $data)) {
            $object->status = $data['status'];
            unset($data['status']);
        }
        if (\array_key_exists('product', $data) && $data['product'] !== null) {
            $object->product = $data['product'];
            unset($data['product']);
        }
        elseif (\array_key_exists('product', $data)) {
            $object->product = null;
            unset($data['product']);
        }
        if (\array_key_exists('source', $data)) {
            $object->source = $data['source'];
            unset($data['source']);
        }
        if (\array_key_exists('createdDate', $data)) {
            $date = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['createdDate']);
            if (false === $date) {
                if (is_string($data['createdDate']) and 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['createdDate'])) {
                    try {
                        $date = new \DateTime($data['createdDate']);
                    } catch (\Exception) {
                        throw new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\Normalizer\InvalidDateException($data['createdDate'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\Normalizer\InvalidDateException($data['createdDate'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->createdDate = $date;
            unset($data['createdDate']);
        }
        if (\array_key_exists('lastUpdatedDate', $data)) {
            $date_1 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['lastUpdatedDate']);
            if (false === $date_1) {
                if (is_string($data['lastUpdatedDate']) and 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['lastUpdatedDate'])) {
                    try {
                        $date_1 = new \DateTime($data['lastUpdatedDate']);
                    } catch (\Exception) {
                        throw new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\Normalizer\InvalidDateException($data['lastUpdatedDate'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\Normalizer\InvalidDateException($data['lastUpdatedDate'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->lastUpdatedDate = $date_1;
            unset($data['lastUpdatedDate']);
        }
        if (\array_key_exists('resolvedDate', $data)) {
            $date_2 = \DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['resolvedDate']);
            if (false === $date_2) {
                if (is_string($data['resolvedDate']) and 1 === preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:\d{2})$/', $data['resolvedDate'])) {
                    try {
                        $date_2 = new \DateTime($data['resolvedDate']);
                    } catch (\Exception) {
                        throw new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\Normalizer\InvalidDateException($data['resolvedDate'], 'Y-m-d\TH:i:sP');
                    }
                } else {
                    throw new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\Normalizer\InvalidDateException($data['resolvedDate'], 'Y-m-d\TH:i:sP');
                }
            }
            $object->resolvedDate = $date_2;
            unset($data['resolvedDate']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['ticketId'] = $data->ticketId;
        $dataArray['status'] = $data->status;
        if (array_key_exists('product', get_object_vars($data)) && null !== ($data->product ?? null)) {
            $dataArray['product'] = $data->product;
        }
        $dataArray['source'] = $data->source;
        $dataArray['createdDate'] = $data->createdDate->format('Y-m-d\TH:i:sP');
        $dataArray['lastUpdatedDate'] = $data->lastUpdatedDate->format('Y-m-d\TH:i:sP');
        $dataArray['resolvedDate'] = $data->resolvedDate->format('Y-m-d\TH:i:sP');
        foreach ($data->additionalPropertyEntries() as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\Ticket::class => false];
    }
}