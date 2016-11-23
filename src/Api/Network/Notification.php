<?php

/*
 * This file is part of Grasp HasOffers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Grasp\HasOffers\Api\Network;

use Grasp\AbstractApi;

class Notification extends AbstractApi
{
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
