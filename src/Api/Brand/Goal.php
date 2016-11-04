<?php

namespace BrianFaust\Grasp\HasOffers\Api\Brand;

use BrianFaust\HasOffers\Base;

class Goal extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'Goal';

    public function create($parameters = [])
    {
        return $this->get('create', $parameters);
    }

    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }

    public function findAllByIds($parameters = [])
    {
        return $this->get('findAllByIds', $parameters);
    }

    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }

    public function generateTracking($parameters = [])
    {
        return $this->get('generateTracking', $parameters);
    }

    public function getPayouts($parameters = [])
    {
        return $this->get('getPayouts', $parameters);
    }

    public function getRevenues($parameters = [])
    {
        return $this->get('getRevenues', $parameters);
    }

    public function getTierPayouts($parameters = [])
    {
        return $this->get('getTierPayouts', $parameters);
    }

    public function getTierRevenues($parameters = [])
    {
        return $this->get('getTierRevenues', $parameters);
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
