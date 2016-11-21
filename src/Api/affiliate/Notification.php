<?php

namespace Grasp\HasOffers\Api\Affiliate;

use Grasp\AbstractApi;

class Notification extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'Notification';

    public function clearUserSubscriptions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('clearUserSubscriptions');
    }

    public function getUserSubscriptions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getUserSubscriptions');
    }

    public function replaceUserSubscriptions($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('replaceUserSubscriptions');
    }
}
