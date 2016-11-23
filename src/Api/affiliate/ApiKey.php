<?php

/*
 * This file is part of Grasp HasOffers.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Grasp\HasOffers\Api\Affiliate;

use Grasp\AbstractApi;

class ApiKey extends AbstractApi
{
    public $type = 'Affiliate';

    public $target = 'ApiKey';

    public function generateApiKey($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('generateApiKey');
    }

    public function getUserApiKey($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('getUserApiKey');
    }

    public function regenerateApiKey($parameters = [])
    {
        $this->setQuery($parameters);

        return $this->get('regenerateApiKey');
    }
}
