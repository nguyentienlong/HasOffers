<?php

namespace BrianFaust\Grasp\HasOffers\Api\Brand;

use BrianFaust\HasOffers\Base;

class SavedReports extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'SavedReports';

    public function create($parameters = [])
    {
        return $this->get('create', $parameters);
    }

    public function delete($parameters = [])
    {
        return $this->get('delete', $parameters);
    }

    public function findByHash($parameters = [])
    {
        return $this->get('findByHash', $parameters);
    }

    public function findById($parameters = [])
    {
        return $this->get('findById', $parameters);
    }

    public function update($parameters = [])
    {
        return $this->get('update', $parameters);
    }
}
