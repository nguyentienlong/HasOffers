<?php

namespace BrianFaust\Grasp\HasOffers\Api\Brand;

use BrianFaust\HasOffers\Base;

class Report extends Base
{
    protected $endpointType = 'Brand';

    protected $endpointName = 'Report';

    public function getActiveCurrencies($parameters = [])
    {
        return $this->get('getActiveCurrencies', $parameters);
    }

    public function getAffiliateCommissions($parameters = [])
    {
        return $this->get('getAffiliateCommissions', $parameters);
    }

    public function getConversions($parameters = [])
    {
        return $this->get('getConversions', $parameters);
    }

    public function getManagerCommissions($parameters = [])
    {
        return $this->get('getManagerCommissions', $parameters);
    }

    public function getModSummaryLogs($parameters = [])
    {
        return $this->get('getModSummaryLogs', $parameters);
    }

    public function getReferrals($parameters = [])
    {
        return $this->get('getReferrals', $parameters);
    }

    public function getStats($parameters = [])
    {
        return $this->get('getStats', $parameters);
    }

    public function getSubscriptions($parameters = [])
    {
        return $this->get('getSubscriptions', $parameters);
    }
}
