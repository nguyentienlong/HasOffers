<?php

namespace Grasp\HasOffers\Api\Affiliate;

use Grasp\AbstractApi;

class Report extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'Report';

    public function getAffiliateCommissions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAffiliateCommissions');
    }

    public function getAffiliateReferrals($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getAffiliateReferrals');
    }

    public function getConversions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getConversions');
    }

    public function getStats($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getStats');
    }
}
