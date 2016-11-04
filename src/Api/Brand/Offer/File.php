<?php

namespace BrianFaust\Grasp\HasOffers\Api\Brand\Offer;

use BrianFaust\HasOffers\Base;

class File extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'OfferFile';

    public function create($parameters = [])
    {
        return $this->get('create', $parameters);
    }

    public function delete($parameters = [])
    {
        return $this->get('delete', $parameters);
    }

    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }

    public function findAllByIds($parameters = [])
    {
        return $this->get('findAllByIds', $parameters);
    }

    public function findAllByName($parameters = [])
    {
        return $this->get('findAllByName', $parameters);
    }

    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }

    public function getCreativeCode($parameters = [])
    {
        return $this->get('getCreativeCode', $parameters);
    }

    public function update($parameters = [])
    {
        return $this->get('update', $parameters);
    }

    public function updateField($parameters = [])
    {
        return $this->get('updateField', $parameters);
    }
}
