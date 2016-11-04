<?php

namespace BrianFaust\Grasp\HasOffers\Api\Affiliate\Offer;

use BrianFaust\HasOffers\Base;

class Pixel extends Base
{
    protected $endpointType = 'Affiliate';

    protected $endpointName = 'OfferPixel';

    public function create($parameters = [])
    {
        return $this->get('create', $parameters);
    }

    public function findAll($parameters = [])
    {
        return $this->get('findAll', $parameters);
    }

    public function getAllowedTypes($parameters = [])
    {
        return $this->get('getAllowedTypes', $parameters);
    }

    public function updateField($parameters = [])
    {
        return $this->get('updateField', $parameters);
    }
}
