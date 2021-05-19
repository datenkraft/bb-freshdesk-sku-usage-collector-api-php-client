<?php

namespace Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Datenkraft\\Backbone\\Client\\FreshdeskSkuUsageCollectorApi\\Generated\\Model\\Ticket';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Datenkraft\\Backbone\\Client\\FreshdeskSkuUsageCollectorApi\\Generated\\Model\\Ticket';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Datenkraft\Backbone\Client\FreshdeskSkuUsageCollectorApi\Generated\Model\Ticket();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ticketId', $data)) {
            $object->setTicketId($data['ticketId']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('product', $data)) {
            $object->setProduct($data['product']);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
        }
        if (\array_key_exists('createdDate', $data)) {
            $object->setCreatedDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['createdDate']));
        }
        if (\array_key_exists('lastUpdatedDate', $data)) {
            $object->setLastUpdatedDate(\DateTime::createFromFormat('Y-m-d\\TH:i:sP', $data['lastUpdatedDate']));
        }
        if (\array_key_exists('agentReplyCount', $data)) {
            $object->setAgentReplyCount($data['agentReplyCount']);
        }
        if (\array_key_exists('timesReopened', $data)) {
            $object->setTimesReopened($data['timesReopened']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['ticketId'] = $object->getTicketId();
        $data['status'] = $object->getStatus();
        $data['product'] = $object->getProduct();
        $data['source'] = $object->getSource();
        $data['createdDate'] = $object->getCreatedDate()->format('Y-m-d\\TH:i:sP');
        $data['lastUpdatedDate'] = $object->getLastUpdatedDate()->format('Y-m-d\\TH:i:sP');
        $data['agentReplyCount'] = $object->getAgentReplyCount();
        $data['timesReopened'] = $object->getTimesReopened();
        return $data;
    }
}