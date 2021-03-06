<?php

namespace Hydrators;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Doctrine\ODM\MongoDB\Hydrator\HydratorInterface;
use Doctrine\ODM\MongoDB\UnitOfWork;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class AdventureCampDomainSubscriptionHydrator implements HydratorInterface
{
    private $dm;
    private $unitOfWork;
    private $class;

    public function __construct(DocumentManager $dm, UnitOfWork $uow, ClassMetadata $class)
    {
        $this->dm = $dm;
        $this->unitOfWork = $uow;
        $this->class = $class;
    }

    public function hydrate($document, $data, array $hints = array())
    {
        $hydratedData = array();

        /** @Field(type="id") */
        if (isset($data['_id'])) {
            $value = $data['_id'];
            $return = $value instanceof \MongoId ? (string) $value : $value;
            $this->class->reflFields['id']->setValue($document, $return);
            $hydratedData['id'] = $return;
        }

        /** @Field(type="object_id") */
        if (isset($data['eventId'])) {
            $value = $data['eventId'];
            $return = (string) $value;
            $this->class->reflFields['eventId']->setValue($document, $return);
            $hydratedData['eventId'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['name'])) {
            $value = $data['name'];
            $return = (string) $value;
            $this->class->reflFields['name']->setValue($document, $return);
            $hydratedData['name'] = $return;
        }

        /** @Field(type="date") */
        if (isset($data['birthday'])) {
            $value = $data['birthday'];
            if ($value instanceof \MongoDate) { $return = new \DateTime(); $return->setTimestamp($value->sec); } elseif (is_numeric($value)) { $return = new \DateTime(); $return->setTimestamp($value); } elseif ($value instanceof \DateTime) { $return = $value; } else { $return = new \DateTime($value); }
            $this->class->reflFields['birthday']->setValue($document, clone $return);
            $hydratedData['birthday'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['email'])) {
            $value = $data['email'];
            $return = (string) $value;
            $this->class->reflFields['email']->setValue($document, $return);
            $hydratedData['email'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['bi'])) {
            $value = $data['bi'];
            $return = (string) $value;
            $this->class->reflFields['bi']->setValue($document, $return);
            $hydratedData['bi'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['address'])) {
            $value = $data['address'];
            $return = (string) $value;
            $this->class->reflFields['address']->setValue($document, $return);
            $hydratedData['address'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['cep'])) {
            $value = $data['cep'];
            $return = (string) $value;
            $this->class->reflFields['cep']->setValue($document, $return);
            $hydratedData['cep'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['observations'])) {
            $value = $data['observations'];
            $return = (string) $value;
            $this->class->reflFields['observations']->setValue($document, $return);
            $hydratedData['observations'] = $return;
        }

        /** @Field(type="int") */
        if (isset($data['state'])) {
            $value = $data['state'];
            $return = (int) $value;
            $this->class->reflFields['state']->setValue($document, $return);
            $hydratedData['state'] = $return;
        }
        return $hydratedData;
    }
}